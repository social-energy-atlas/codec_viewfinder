(function ($) {

  'use strict';

  Drupal.FieldGroup = Drupal.FieldGroup || {};
  Drupal.FieldGroup.Effects = Drupal.FieldGroup.Effects || {};

  /**
   * This script transforms a set of fieldsets into a stack of horizontal
   * tabs. Another tab pane can be selected by clicking on the respective
   * tab.
   *
   * Each tab may have a summary which can be updated by another
   * script. For that to work, each fieldset has an associated
   * 'horizontalTabCallback' (with jQuery.data() attached to the fieldset),
   * which is called every time the user performs an update to a form
   * element inside the tab pane.
   */
  Drupal.behaviors.horizontalTabs = {
    attach: function (context) {

      var width = drupalSettings.widthBreakpoint || 640;
      var mq = '(max-width: ' + width + 'px)';

      if (window.matchMedia(mq).matches) {
        return;
      }

      $(context).find('[data-horizontal-tabs-panes]').once('horizontal-tabs').each(function () {

        var $this = $(this).addClass('horizontal-tabs-panes');
        var focusID = $(':hidden.horizontal-tabs-active-tab', this).val();
        var tab_focus;

        // Check if there are some details that can be converted to horizontal-tabs
        var $details = $this.find('> details');
        if ($details.length === 0) {
          return;
        }

        // If collapse.js did not do his work yet, call it directly.
        if (!$($details[0]).hasClass('.collapse-processed')) {
          Drupal.behaviors.collapse.attach(context);
        }

        // Create the tab column.
        var tab_list = $('<ul class="horizontal-tabs-list"></ul>');
        $(this).wrap('<div class="horizontal-tabs clearfix"></div>').before(tab_list);

        // Transform each details into a tab.
        $details.each(function (i) {
          var $this = $(this);
          var summaryElement = $this.find('> summary .details-title');

          if (!summaryElement.length) {
            summaryElement = $this.find('> summary');
          }

          var summary = summaryElement.clone().children().remove().end().text();
          var horizontal_tab = new Drupal.horizontalTab({
            title: $.trim(summary),
            details: $this
          });
          horizontal_tab.item.addClass('horizontal-tab-button-' + i);
          tab_list.append(horizontal_tab.item);
          $this
            .removeClass('collapsed')
            // prop() can't be used on browsers not supporting details element,
            // the style won't apply to them if prop() is used.
            .attr('open', true)
            .addClass('horizontal-tabs-pane')
            .data('horizontalTab', horizontal_tab);
          if (this.id === focusID) {
            tab_focus = $this;
          }
        });

        $(tab_list).find('> li:first').addClass('first');
        $(tab_list).find('> li:last').addClass('last');

        if (!tab_focus) {
          // If the current URL has a fragment and one of the tabs contains an
          // element that matches the URL fragment, activate that tab.
          var hash = window.location.hash.replace(/[=%;,\/]/g, '');
          if (hash !== '#' && $(hash, this).length) {
            tab_focus = $(window.location.hash, this).closest('.horizontal-tabs-pane');
          }
          else {
            tab_focus = $this.find('> .horizontal-tabs-pane:first');
          }
        }
        if (tab_focus.length) {
          tab_focus.data('horizontalTab').focus();
        }
      });
    }
  };

  /**
   * The horizontal tab object represents a single tab within a tab group.
   *
   * @param {object} settings
   *   An object with the following keys:
   *   - title: The name of the tab.
   *   - details: The jQuery object of the details element that is the tab pane.
   */
  Drupal.horizontalTab = function (settings) {
    var self = this;
    $.extend(this, settings, Drupal.theme('horizontalTab', settings));

    this.link.attr('href', '#' + settings.details.attr('id'));

    this.link.on('click', function (e) {
      e.preventDefault();
      self.focus();
    });

    // Keyboard events added:
    // Pressing the Enter key will open the tab pane.
    this.link.on('keydown', function (event) {
      event.preventDefault();
      if (event.keyCode === 13) {
        self.focus();
        // Set focus on the first input field of the visible details/tab pane.
        $('.horizontal-tabs-pane :input:visible:enabled:first').trigger('focus');
      }
    });

    // Only bind update summary on forms.
    if (this.details.drupalGetSummary) {
      this.details
        .on('summaryUpdated', function () {
          self.updateSummary();
        })
        .trigger('summaryUpdated');
    }

  };

  Drupal.horizontalTab.prototype = {

    /**
     * Displays the tab's content pane.
     */
    focus: function () {
      this.details
        .removeClass('horizontal-tab-hidden')
        .siblings('.horizontal-tabs-pane')
        .each(function () {
          var tab = $(this).data('horizontalTab');
          tab.details.addClass('horizontal-tab-hidden');
          tab.item.removeClass('selected');
        })
        .end()
        .siblings(':hidden.horizontal-tabs-active-tab')
        .val(this.details.attr('id'));
      this.item.addClass('selected');
      // Mark the active tab for screen readers.
      $('#active-horizontal-tab').remove();
      this.link.append('<span id="active-horizontal-tab" class="visually-hidden">' + Drupal.t('(active tab)') + '</span>');
    },

    /**
     * Updates the tab's summary.
     */
    updateSummary: function () {
      this.summary.html(this.details.drupalGetSummary());
    },

    /**
     * Shows a horizontal tab pane.
     *
     * @return {Drupal.horizontalTab} The current horizontal tab.
     */
    tabShow: function () {
      // Display the tab.
      this.item.removeClass('horizontal-tab-hidden');
      // Update .first marker for items. We need recurse from parent to retain the
      // actual DOM element order as jQuery implements sortOrder, but not as public
      // method.
      this.item.parent().children('.horizontal-tab-button').removeClass('first')
        .filter(':visible:first').addClass('first');
      // Display the details element.
      this.details.removeClass('horizontal-tab-hidden');
      // Focus this tab.
      this.focus();
      return this;
    },

    /**
     * Hides a horizontal tab pane.
     *
     * @return {Drupal.horizontalTab} The current horizontal tab.
     */
    tabHide: function () {
      // Hide this tab.
      this.item.addClass('horizontal-tab-hidden');
      // Update .first marker for items. We need recurse from parent to retain the
      // actual DOM element order as jQuery implements sortOrder, but not as public
      // method.
      this.item.parent().children('.horizontal-tab-button').removeClass('first')
        .filter(':visible:first').addClass('first');
      // Hide the details element.
      this.details.addClass('horizontal-tab-hidden');
      // Focus the first visible tab (if there is one).
      var $firstTab = this.details.siblings('.horizontal-tabs-pane:not(.horizontal-tab-hidden):first');
      if ($firstTab.length) {
        $firstTab.data('horizontalTab').focus();
      }
      else {
        // Hide the vertical tabs (if no tabs remain).
        this.item.closest('.form-type-horizontal-tabs').hide();
      }
      return this;
    }
  };

  /**
   * Theme function for a horizontal tab.
   *
   * @param {object} settings
   *   An object with the following keys:
   *   - title: The name of the tab.
   * @return {object}
   *   This function has to return an object with at least these keys:
   *   - item: The root tab jQuery element
   *   - link: The anchor tag that acts as the clickable area of the tab
   *       (jQuery version)
   *   - summary: The jQuery element that contains the tab summary
   */
  Drupal.theme.horizontalTab = function (settings) {
    var tab = {};
    var idAttr = settings.details.attr('id');

    tab.item = $('<li class="horizontal-tab-button" tabindex="-1"></li>')
      .append(tab.link = $('<a href="#' + idAttr + '"></a>')
        .append(tab.title = $('<strong></strong>').text(settings.title))
      );

    // No need to add summary on frontend.
    if (settings.details.drupalGetSummary) {
      tab.link.append(tab.summary = $('<span class="summary"></span>'));
    }

    return tab;
  };

})(jQuery, Modernizr);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('.vertical-tabs__pane').each(function (index, pane) {
      $(pane).data('verticalTab').focus();
    });
  };

  Drupal.behaviors.verticalTabs = {
    attach: function attach(context) {
      var width = drupalSettings.widthBreakpoint || 640;
      var mq = '(max-width: ' + width + 'px)';

      if (window.matchMedia(mq).matches) {
        return;
      }

      $('body').once('vertical-tabs-fragments').on('formFragmentLinkClickOrHashChange.verticalTabs', handleFragmentLinkClickOrHashChange);

      $(context).find('[data-vertical-tabs-panes]').once('vertical-tabs').each(function () {
        var $this = $(this).addClass('vertical-tabs__panes');
        var focusID = $this.find(':hidden.vertical-tabs__active-tab').val();
        var tabFocus = void 0;

        var $details = $this.find('> details');
        if ($details.length === 0) {
          return;
        }

        var tabList = $('<ul class="vertical-tabs__menu"></ul>');
        $this.wrap('<div class="vertical-tabs clearfix"></div>').before(tabList);

        $details.each(function () {
          var $that = $(this);
          var verticalTab = new Drupal.verticalTab({
            title: $that.find('> summary').text(),
            details: $that
          });
          tabList.append(verticalTab.item);
          $that.removeClass('collapsed').attr('open', true).addClass('vertical-tabs__pane').data('verticalTab', verticalTab);
          if (this.id === focusID) {
            tabFocus = $that;
          }
        });

        $(tabList).find('> li').eq(0).addClass('first');
        $(tabList).find('> li').eq(-1).addClass('last');

        if (!tabFocus) {
          var $locationHash = $this.find(window.location.hash);
          if (window.location.hash && $locationHash.length) {
            tabFocus = $locationHash.closest('.vertical-tabs__pane');
          } else {
            tabFocus = $this.find('> .vertical-tabs__pane').eq(0);
          }
        }
        if (tabFocus.length) {
          tabFocus.data('verticalTab').focus();
        }
      });
    }
  };

  Drupal.verticalTab = function (settings) {
    var self = this;
    $.extend(this, settings, Drupal.theme('verticalTab', settings));

    this.link.attr('href', '#' + settings.details.attr('id'));

    this.link.on('click', function (e) {
      e.preventDefault();
      self.focus();
    });

    this.link.on('keydown', function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        self.focus();

        $('.vertical-tabs__pane :input:visible:enabled').eq(0).trigger('focus');
      }
    });

    this.details.on('summaryUpdated', function () {
      self.updateSummary();
    }).trigger('summaryUpdated');
  };

  Drupal.verticalTab.prototype = {
    focus: function focus() {
      this.details.siblings('.vertical-tabs__pane').each(function () {
        var tab = $(this).data('verticalTab');
        tab.details.hide();
        tab.item.removeClass('is-selected');
      }).end().show().siblings(':hidden.vertical-tabs__active-tab').val(this.details.attr('id'));
      this.item.addClass('is-selected');

      $('#active-vertical-tab').remove();
      this.link.append('<span id="active-vertical-tab" class="visually-hidden">' + Drupal.t('(active tab)') + '</span>');
    },
    updateSummary: function updateSummary() {
      this.summary.html(this.details.drupalGetSummary());
    },
    tabShow: function tabShow() {
      this.item.show();

      this.item.closest('.js-form-type-vertical-tabs').show();

      this.item.parent().children('.vertical-tabs__menu-item').removeClass('first').filter(':visible').eq(0).addClass('first');

      this.details.removeClass('vertical-tab--hidden').show();

      this.focus();
      return this;
    },
    tabHide: function tabHide() {
      this.item.hide();

      this.item.parent().children('.vertical-tabs__menu-item').removeClass('first').filter(':visible').eq(0).addClass('first');

      this.details.addClass('vertical-tab--hidden').hide();

      var $firstTab = this.details.siblings('.vertical-tabs__pane:not(.vertical-tab--hidden)').eq(0);
      if ($firstTab.length) {
        $firstTab.data('verticalTab').focus();
      } else {
          this.item.closest('.js-form-type-vertical-tabs').hide();
        }
      return this;
    }
  };

  Drupal.theme.verticalTab = function (settings) {
    var tab = {};
    tab.item = $('<li class="vertical-tabs__menu-item" tabindex="-1"></li>').append(tab.link = $('<a href="#"></a>').append(tab.title = $('<strong class="vertical-tabs__menu-item-title"></strong>').text(settings.title)).append(tab.summary = $('<span class="vertical-tabs__menu-item-summary"></span>')));
    return tab;
  };
})(jQuery, Drupal, drupalSettings);;
(function ($, Drupal, drupalSettings) {

  Drupal.behaviors.leaflet = {
    attach: function (context, settings) {

      // Once the Leaflet Map is loaded with its features.
      $(document).on('leaflet.map', function (e, settings, lMap, mapid) {
        // Set the start center and the start zoom, and initialize the reset_map control.
        if(!Drupal.Leaflet[mapid].start_center && !Drupal.Leaflet[mapid].start_zoom ) {
          Drupal.Leaflet[mapid].start_center = lMap.getCenter();
          Drupal.Leaflet[mapid].start_zoom = lMap.getZoom();
          if (settings.settings.reset_map && settings.settings.reset_map.control) {
            // Create the DIV to hold the control and call the mapResetControl()
            // constructor passing in this DIV.
            var mapResetControlDiv = document.createElement('div');
            Drupal.Leaflet.prototype.map_reset_control(mapResetControlDiv, mapid, settings.settings.reset_map.position).addTo(lMap);
          }
        }

        // Attach leaflet ajax popup listeners.
        lMap.on('popupopen', function (e) {
          var content = $('[data-leaflet-ajax-popup]', e.popup._contentNode);
          if (content.length) {
            var url = content.data('leaflet-ajax-popup');
            $.get(url, function (response) {
              if (response) {
                e.popup.setContent(response)
              }
            });
          }
        });
      });

      $.each(settings.leaflet, function (m, data) {
        $('#' + data.mapid, context).each(function () {
          var $container = $(this);
          var mapid = data.mapid;

          // If the attached context contains any leaflet maps, make sure we have a Drupal.leaflet_widget object.
          if ($container.data('leaflet') === undefined) {

            $container.data('leaflet', new Drupal.Leaflet(L.DomUtil.get(mapid), mapid, data.map));
          if (data.features.length > 0) {

            // Initialize the Drupal.Leaflet.[data.mapid] object,
            // for possible external interaction.
            Drupal.Leaflet[mapid].markers = {}

            // Define the Drupal.Leaflet.path object.
            Drupal.Leaflet[mapid].path = data.map.settings.path && data.map.settings.path.length > 0 ? JSON.parse(data.map.settings.path) : {};

            // Add Leaflet Map Features.
            $container.data('leaflet').add_features(mapid, data.features, true);
          }

          // Set map position features.
          $container.data('leaflet').fitbounds();

          // Add the leaflet map to our settings object to make it accessible
          data.lMap = $container.data('leaflet').lMap;
          }

          else {
            // If we already had a map instance, add new features.
            // @todo Does this work? Needs testing.
            if (data.features !== undefined) {
              $container.data('leaflet').add_features(mapid, data.features);
            }
          }

          // After having initialized the Leaflet Map and added features,
          // allow other modules to get access to it via trigger.
          $(document).trigger('leaflet.map', [data.map, data.lMap, mapid]);

        });
      });
    }
  };

  Drupal.Leaflet = function (container, mapid, map_definition) {
    this.container = container;
    this.mapid = mapid;
    this.map_definition = map_definition;
    this.settings = this.map_definition.settings;
    this.bounds = [];
    this.base_layers = {};
    this.overlays = {};
    this.lMap = null;
    this.start_center = null;
    this.start_zoom = null;
    this.layer_control = null;
    this.markers = {};
    this.path = {};

    this.initialise(mapid);
  };

  Drupal.Leaflet.prototype.initialise = function (mapid) {
    var self = this;
    // Instantiate a new Leaflet map.
    self.lMap = new L.Map(self.mapid, self.settings);

    // Set the public map object, to make it accessible from outside.
    Drupal.Leaflet[mapid] = {
      'lMap': self.lMap,
    };

    // add map layers (base and overlay layers)
    var layers = {}, overlays = {};
    var i = 0;
    for (var key in self.map_definition.layers) {
      var layer = self.map_definition.layers[key];
      // Distinguish between "base" and "overlay" layers.
      // Default to "base" in case "layer_type" has not been defined in hook_leaflet_map_info().
      layer.layer_type = (typeof layer.layer_type === 'undefined') ? 'base' : layer.layer_type;

      switch (layer.layer_type) {
        case 'overlay':
          var overlay_layer = self.create_layer(layer, key);
          var layer_hidden = (typeof layer.layer_hidden === "undefined") ? false : layer.layer_hidden ;
          self.add_overlay(key, overlay_layer, layer_hidden);
          break;
        default:
          self.add_base_layer(key, layer, i);
          if (i === 0) {    //  Only the first base layer needs to be added to the map - all the others are accessed via the layer switcher
            i++;
          }
          break;
      }
      i++;
    }

    // Set initial view, fallback to displaying the whole world.
    if (self.settings.center && self.settings.zoom) {
      self.lMap.setView(new L.LatLng(self.settings.center.lat, self.settings.center.lon), self.settings.zoom);
    }
    else {
      self.lMap.fitWorld();
    }

    // Add attribution
    if (self.settings.attributionControl && self.map_definition.attribution) {
      self.lMap.attributionControl.setPrefix(self.map_definition.attribution.prefix);
      self.attributionControl.addAttribution(self.map_definition.attribution.text);
    }

    // Add Fullscreen Control, if requested.
    if (self.settings.fullscreen_control) {
      self.lMap.addControl(new L.Control.Fullscreen());
    }
  };

  Drupal.Leaflet.prototype.initialise_layer_control = function () {
    var self = this;
    var count_layers = function (obj) {
      // Browser compatibility: Chrome, IE 9+, FF 4+, or Safari 5+
      // @see http://kangax.github.com/es5-compat-table/
      return Object.keys(obj).length;
    };

    // Only add a layer switcher if it is enabled in settings, and we have
    // at least two base layers or at least one overlay.
    if (self.layer_control == null && self.settings.layerControl && (count_layers(self.base_layers) > 1 || count_layers(self.overlays) > 0)) {
      // Instantiate layer control, using settings.layerControl as settings.
      self.layer_control = new L.Control.Layers(self.base_layers, self.overlays, self.settings.layerControlOptions);
      self.lMap.addControl(self.layer_control);
    }
  };

  Drupal.Leaflet.prototype.add_base_layer = function (key, definition, i) {
    var self = this;
    var map_layer = self.create_layer(definition, key);
    self.base_layers[key] = map_layer;
    if (i === 0) {    //  Only the first base layer needs to be added to the map - all the others are accessed via the layer switcher
      self.lMap.addLayer(map_layer);
    }
    if (self.layer_control == null) {
      self.initialise_layer_control();
    }
    else {
      // If we already have a layer control, add the new base layer to it.
      self.layer_control.addBaseLayer(map_layer, key);
    }
  };

  Drupal.Leaflet.prototype.add_overlay = function (label, layer, layer_hidden) {
    var self = this;
    self.overlays[label] = layer;
    if (!layer_hidden) {
      self.lMap.addLayer(layer);
    }

    if (self.layer_control == null) {
      self.initialise_layer_control();
    }
    else {
      // If we already have a layer control, add the new overlay to it.
      self.layer_control.addOverlay(layer, label);
    }
  };

  Drupal.Leaflet.prototype.add_features = function (mapid, features, initial) {
    var self = this;
    for (var i = 0; i < features.length; i++) {
      var feature = features[i];
      var lFeature;

      // dealing with a layer group
      if (feature.group) {
        var lGroup = self.create_feature_group(feature);
        for (var groupKey in feature.features) {
          var groupFeature = feature.features[groupKey];
          lFeature = self.create_feature(groupFeature);
          if (lFeature !== undefined) {
            if (lFeature.setStyle) {
              lFeature.setStyle(Drupal.Leaflet[mapid].path);
            }
            if (groupFeature.popup) {
              lFeature.bindPopup(groupFeature.popup);
            }
            lGroup.addLayer(lFeature);
          }
        }

        // Add the group to the layer switcher.
        self.add_overlay(feature.label, lGroup, FALSE);
      }
      else {
        lFeature = self.create_feature(feature);
        if (lFeature !== undefined) {
          if (lFeature.setStyle) {
            lFeature.setStyle(Drupal.Leaflet[mapid].path);
          }
          self.lMap.addLayer(lFeature);

          if (feature.popup) {
            lFeature.bindPopup(feature.popup);
          }
        }
      }

      // Allow others to do something with the feature that was just added to the map
      $(document).trigger('leaflet.feature', [lFeature, feature, self]);
    }

    // Allow plugins to do things after features have been added.
    $(document).trigger('leaflet.features', [initial || false, self])
  };

  Drupal.Leaflet.prototype.create_feature_group = function (feature) {
    return new L.LayerGroup();
  };

  Drupal.Leaflet.prototype.create_feature = function (feature) {
    var self = this;
    var lFeature;
    switch (feature.type) {
      case 'point':
        lFeature = self.create_point(feature);
        break;
      case 'linestring':
        lFeature = self.create_linestring(feature);
        break;
      case 'polygon':
        lFeature = self.create_polygon(feature);
        break;
      case 'multipolygon':
        lFeature = self.create_multipolygon(feature);
        break;
      case 'multipolyline':
        lFeature = self.create_multipoly(feature);
        break;
      case 'json':
        lFeature = self.create_json(feature.json);
        break;
      case 'multipoint':
      case 'geometrycollection':
        lFeature = self.create_collection(feature);
        break;
      default:
        return; // Crash and burn.
    }

    var options = {};
    if (feature.options) {
      for (var option in feature.options) {
        if (feature.options.hasOwnProperty(option)) {
          options[option] = feature.options.option;
        }
      }
      lFeature.setStyle(options);
    }

    if (feature.entity_id) {

      // Generate the markers object index based on entity id (and geofield
      // cardinality), and add the marker to the markers object.
      var entity_id = feature.entity_id;
      if (self.map_definition.geofield_cardinality && self.map_definition.geofield_cardinality !== 1) {
        var i = 0;
        while (Drupal.Leaflet[self.mapid].markers[entity_id + '-' + i]) {
          i++;
        }
        Drupal.Leaflet[self.mapid].markers[entity_id + '-' + i] = lFeature;
      }
      else {
        Drupal.Leaflet[self.mapid].markers[entity_id] = lFeature;
      }
    }
    return lFeature;
  };

  Drupal.Leaflet.prototype.create_layer = function (layer, key) {
    var self = this;
    var map_layer = new L.TileLayer(layer.urlTemplate);
    map_layer._leaflet_id = key;

    if (layer.options) {
      for (var option in layer.options) {
        map_layer.options[option] = layer.options[option];
      }
    }

    // layers served from TileStream need this correction in the y coordinates
    // TODO: Need to explore this more and find a more elegant solution
    if (layer.type === 'tilestream') {
      map_layer.getTileUrl = function (tilePoint) {
        self._adjustTilePoint(tilePoint);
        var zoom = self._getZoomForUrl();
        return L.Util.template(self._url, L.Util.extend({
          s: self._getSubdomain(tilePoint),
          z: zoom,
          x: tilePoint.x,
          y: Math.pow(2, zoom) - tilePoint.y - 1
        }, self.options));
      }
    }
    return map_layer;
  };

  Drupal.Leaflet.prototype.create_icon = function (options) {
    var icon = new L.Icon({iconUrl: options.iconUrl});

    // override applicable marker defaults
    if (options.iconSize) {
      icon.options.iconSize = new L.Point(parseInt(options.iconSize.x), parseInt(options.iconSize.y));
    }
    if (options.iconAnchor && options.iconAnchor.x && options.iconAnchor.y) {
      icon.options.iconAnchor = new L.Point(parseFloat(options.iconAnchor.x), parseFloat(options.iconAnchor.y));
    }
    if (options.popupAnchor && options.popupAnchor.x && options.popupAnchor.y) {
      icon.options.popupAnchor = new L.Point(parseInt(options.popupAnchor.x), parseInt(options.popupAnchor.y));
    }
    if (options.shadowUrl) {
      icon.options.shadowUrl = options.shadowUrl;
    }
    if (options.shadowSize && options.shadowSize.x && options.shadowSize.y) {
      icon.options.shadowSize = new L.Point(parseInt(options.shadowSize.x), parseInt(options.shadowSize.y));
    }
    if (options.shadowAnchor && options.shadowAnchor.x && options.shadowAnchor.y) {
      icon.options.shadowAnchor = new L.Point(parseInt(options.shadowAnchor.x), parseInt(options.shadowAnchor.y));
    }
    if (options.className) {
      icon.options.className = options.className;
    }

    return icon;
  };

  Drupal.Leaflet.prototype.create_point = function (marker) {
    var self = this;
    var latLng = new L.LatLng(marker.lat, marker.lon);
    self.bounds.push(latLng);
    var lMarker;
    var tooltip = marker.label ? marker.label.replace(/<[^>]*>/g, '').trim() : '';
    var options = {
      title: tooltip
    };

    if (marker.alt !== undefined) {
      options.alt = marker.alt;
    }

    function checkImage(imageSrc, setIcon, logError) {
      var img = new Image();
      img.src = imageSrc;
      img.onload = setIcon;
      img.onerror = logError;
    }

    lMarker = new L.Marker(latLng, options);

    if (marker.icon) {
      checkImage(marker.icon.iconUrl,
        // Success loading image.
        function(){
          marker.icon.iconSize = marker.icon.iconSize || {};
          marker.icon.iconSize.x = marker.icon.iconSize.x || this.naturalWidth;
          marker.icon.iconSize.y = marker.icon.iconSize.y || this.naturalHeight;
          if (marker.icon.shadowUrl) {
            marker.icon.shadowSize = marker.icon.shadowSize || {};
            marker.icon.shadowSize.x = marker.icon.shadowSize.x || this.naturalWidth;
            marker.icon.shadowSize.y = marker.icon.shadowSize.y || this.naturalHeight;
          }
          options.icon = self.create_icon(marker.icon);
          lMarker.setIcon(options.icon);
        },
        // Error loading image.
        function(err){
          console.log("Leaflet: The Icon Image doesn't exist at the requested path: " + marker.icon.iconUrl);
        });
    }

    return lMarker;
  };

  Drupal.Leaflet.prototype.create_linestring = function (polyline) {
    var self = this;
    var latlngs = [];
    for (var i = 0; i < polyline.points.length; i++) {
      var latlng = new L.LatLng(polyline.points[i].lat, polyline.points[i].lon);
      latlngs.push(latlng);
      self.bounds.push(latlng);
    }
    return new L.Polyline(latlngs);
  };

  Drupal.Leaflet.prototype.create_collection = function (collection) {
    var self = this;
    var layers = new L.featureGroup();
    for (var x = 0; x < collection.component.length; x++) {
      layers.addLayer(self.create_feature(collection.component[x]));
    }
    return layers;
  };

  Drupal.Leaflet.prototype.create_polygon = function (polygon) {
    var self = this;
    var latlngs = [];
    for (var i = 0; i < polygon.points.length; i++) {
      var latlng = new L.LatLng(polygon.points[i].lat, polygon.points[i].lon);
      latlngs.push(latlng);
      self.bounds.push(latlng);
    }
    return new L.Polygon(latlngs);
  };

  Drupal.Leaflet.prototype.create_multipolygon = function (multipolygon) {
    var self = this;
    var polygons = [];
    for (var x = 0; x < multipolygon.component.length; x++) {
      var latlngs = [];
      var polygon = multipolygon.component[x];
      for (var i = 0; i < polygon.points.length; i++) {
        var latlng = [polygon.points[i].lat, polygon.points[i].lon];
        latlngs.push(latlng);
        self.bounds.push(latlng);
      }
      polygons.push(latlngs);
    }
    return new L.Polygon(polygons);
  };

  Drupal.Leaflet.prototype.create_multipoly = function (multipoly) {
    var self = this;
    var polygons = [];
    for (var x = 0; x < multipoly.component.length; x++) {
      var latlngs = [];
      var polygon = multipoly.component[x];
      for (var i = 0; i < polygon.points.length; i++) {
        var latlng = new L.LatLng(polygon.points[i].lat, polygon.points[i].lon);
        latlngs.push(latlng);
        self.bounds.push(latlng);
      }
      polygons.push(latlngs);
    }
    if (multipoly.multipolyline) {
      return new L.polyline(polygons);
    }
    else {
      return new L.polygon(polygons);
    }
  };

  Drupal.Leaflet.prototype.create_json = function (json) {
    var lJSON = new L.GeoJSON();

    lJSON.options.onEachFeature = function(feature, layer){
      for (var layer_id in layer._layers) {
        for (var i in layer._layers[layer_id]._latlngs) {
          Drupal.Leaflet.bounds.push(layer._layers[layer_id]._latlngs[i]);
        }
      }
      if (feature.properties.style) {
        layer.setStyle(feature.properties.style);
      }
      if (feature.properties.leaflet_id) {
        layer._leaflet_id = feature.properties.leaflet_id;
      }
      if (feature.properties.popup) {
        layer.bindPopup(feature.properties.popup);
      }
    };

    lJSON.addData(json);
    return lJSON;
  };

  // Set Map position, fitting Bounds in case of more than one feature
  // @NOTE: This method used by Leaflet Markecluster module (don't remove/rename)
  Drupal.Leaflet.prototype.fitbounds = function () {
    var self = this;
    // Fit Bounds if both them and features exist, and the Map Position in not forced.
    if (!self.settings.map_position_force && self.bounds.length > 0) {
      self.lMap.fitBounds(new L.LatLngBounds(self.bounds));

      // In case of single result use the custom Map Zoom set.
      if (self.bounds.length === 1 && self.settings.zoom) {
        self.lMap.setZoom(self.settings.zoom);
      }
    }
  };

  Drupal.Leaflet.prototype.map_reset = function (mapid) {
    Drupal.Leaflet[mapid].lMap.setView(Drupal.Leaflet[mapid].start_center, Drupal.Leaflet[mapid].start_zoom);
  };

  Drupal.Leaflet.prototype.map_reset_control = function(controlDiv, mapid, reset_map_position) {
    var self = this;
    var control = new L.Control({position: reset_map_position});
    control.onAdd = function() {
      // Set CSS for the control border.
      var controlUI = L.DomUtil.create('div','resetzoom')
      controlUI.style.backgroundColor = '#fff';
      controlUI.style.border = '2px solid #fff';
      controlUI.style.borderRadius = '3px';
      controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
      controlUI.style.cursor = 'pointer';
      controlUI.style.margin = '6px';
      controlUI.style.textAlign = 'center';
      controlUI.title = Drupal.t('Click to reset the map to its initial state');
      controlUI.id = 'leaflet-map--' + mapid + '--reset-control';
      controlDiv.appendChild(controlUI);

      // Set CSS for the control interior.
      var controlText = document.createElement('div');
      controlText.style.color = 'rgb(25,25,25)';
      controlText.style.fontSize = '1.1em';
      controlText.style.lineHeight = '28px';
      controlText.style.paddingLeft = '5px';
      controlText.style.paddingRight = '5px';
      controlText.innerHTML = Drupal.t('Reset Map');
      controlUI.appendChild(controlText);

      L.DomEvent
        .disableClickPropagation(controlUI)
        .addListener(controlUI, 'click', function() {
          self.map_reset(mapid);
        },controlUI);
      return controlUI;
    };
    return control;
  };

})(jQuery, Drupal, drupalSettings);
;
