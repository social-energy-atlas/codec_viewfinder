<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/enterpriseplus/templates/page.html.twig */
class __TwigTemplate_b679f68a9b3e20c6671b3c33d5d9c4e3110f5e2dfbdfba33661887e3ba02db59 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 76];
        $filters = ["escape" => 78];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 77
            echo "  ";
            // line 78
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 80
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 86
            echo "  </div>
  ";
            // line 88
            echo "
  ";
            // line 90
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fa fa-align-justify\"></i></button>
  ";
        }
        // line 93
        echo "
";
        // line 95
        echo "<div class=\"page-container\">

  ";
        // line 97
        if (((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "search_area", [])) || $this->getAttribute(($context["page"] ?? null), "navigation", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <div class=\"header-container\">

      ";
            // line 101
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 102
                echo "        ";
                // line 103
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo "\">
          <div class=\"";
                // line 104
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 106
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 107
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 108
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 109
                echo ">
              <div class=\"row\">
                ";
                // line 111
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 112
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 114
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 115
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 118
                    echo "                  </div>
                ";
                }
                // line 120
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 121
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 123
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 124
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 127
                    echo "                  </div>
                ";
                }
                // line 129
                echo "              </div>
            </div>
            ";
                // line 132
                echo "          </div>
        </div>
        ";
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 138
                echo "        ";
                // line 139
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo "\">
          <div class=\"";
                // line 140
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 142
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
              ";
                // line 143
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 144
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 145
                echo ">
              <div class=\"row\">
                ";
                // line 147
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 148
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 150
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 151
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 154
                    echo "                  </div>
                ";
                }
                // line 156
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 157
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 159
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 160
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 163
                    echo "                  </div>
                ";
                }
                // line 165
                echo "              </div>
            </div>
            ";
                // line 168
                echo "          </div>
        </div>
        ";
                // line 171
                echo "      ";
            }
            // line 172
            echo "
      ";
            // line 173
            if (((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "search_area", [])) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
                // line 174
                echo "        ";
                // line 175
                echo "        <header role=\"banner\" class=\"clearfix header region--dark-typography region--white-background ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo "\">
          <div class=\"";
                // line 176
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 178
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 180
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 181
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 183
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 184
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 187
                    echo "                  </div>
                ";
                }
                // line 189
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 190
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 192
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 193
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 196
                    echo "                  </div>
                ";
                }
                // line 198
                echo "                ";
                if (($this->getAttribute(($context["page"] ?? null), "search_area", []) || $this->getAttribute(($context["page"] ?? null), "navigation", []))) {
                    // line 199
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 201
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 202
                    if ($this->getAttribute(($context["page"] ?? null), "search_area", [])) {
                        // line 203
                        echo "                        <div class=\"clearfix search-area\">
                          ";
                        // line 204
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search_area", [])), "html", null, true);
                        echo "
                        </div>
                      ";
                    }
                    // line 207
                    echo "                      ";
                    if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                        // line 208
                        echo "                        ";
                        // line 209
                        echo "                        <div class=\"clearfix main-navigation ";
                        if ($this->getAttribute(($context["page"] ?? null), "search_area", [])) {
                            echo " with-search-bar ";
                        }
                        echo "\">
                          <nav role=\"navigation\">
                            ";
                        // line 211
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                        echo "
                          </nav>
                        </div>
                        ";
                        // line 215
                        echo "                      ";
                    }
                    // line 216
                    echo "                    </div>
                    ";
                    // line 218
                    echo "                  </div>
                ";
                }
                // line 220
                echo "              </div>
            </div>
            ";
                // line 223
                echo "          </div>
          ";
                // line 224
                if ((($context["post_progress_status"] ?? null) == "enabled")) {
                    // line 225
                    echo "            ";
                    // line 226
                    echo "            <div class=\"post-progress\">
              <div class=\"post-progress__bar\"></div>
            </div>
            ";
                    // line 230
                    echo "          ";
                }
                // line 231
                echo "        </header>
        ";
                // line 233
                echo "      ";
            }
            // line 234
            echo "
    </div>
    ";
            // line 237
            echo "  ";
        }
        // line 238
        echo "
  ";
        // line 239
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 240
            echo "    ";
            // line 241
            echo "    <div class=\"clearfix banner\">
      ";
            // line 243
            echo "      <div class=\"clearfix banner__section\">
        ";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
      </div>
      ";
            // line 247
            echo "    </div>
    ";
            // line 249
            echo "  ";
        }
        // line 250
        echo "
  ";
        // line 252
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>

  ";
        // line 254
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 255
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 259
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 265
        echo "
  ";
        // line 266
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 267
            echo "    ";
            // line 268
            echo "    <div class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 269
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 271
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 272
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 273
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 274
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">
                ";
            // line 278
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 284
            echo "      </div>
    </div>
    ";
            // line 287
            echo "  ";
        }
        // line 288
        echo "
  ";
        // line 289
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 290
            echo "    ";
            // line 291
            echo "    <div class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 292
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 294
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 295
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 296
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 297
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 301
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 307
            echo "      </div>
    </div>
    ";
            // line 310
            echo "  ";
        }
        // line 311
        echo "
  ";
        // line 312
        if (($this->getAttribute(($context["page"] ?? null), "media_background_first", []) || $this->getAttribute(($context["page"] ?? null), "media_background_second", []))) {
            // line 313
            echo "    ";
            // line 314
            echo "    <div class=\"clearfix media-background ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_separator"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 316
            echo "      <div class=\"media-background-transparent-bg\"></div>
      ";
            // line 318
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 320
            echo "        <div class=\"clearfix media-background__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["media_background_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 321
            if ((($context["media_background_animations"] ?? null) == "enabled")) {
                // line 322
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 323
            echo ">
          <div class=\"row\">
            ";
            // line 325
            if ($this->getAttribute(($context["page"] ?? null), "media_background_first", [])) {
                // line 326
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 328
                echo "                <div class=\"clearfix media-background__section media-background-first\">
                  ";
                // line 329
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "media_background_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 332
                echo "              </div>
            ";
            }
            // line 334
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "media_background_second", [])) {
                // line 335
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media_background_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 337
                echo "                <div class=\"clearfix media-background__section media-background-second\">
                  ";
                // line 338
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "media_background_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 341
                echo "              </div>
            ";
            }
            // line 343
            echo "          </div>
        </div>
        ";
            // line 346
            echo "      </div>
    </div>
    ";
            // line 349
            echo "  ";
        }
        // line 350
        echo "
  ";
        // line 352
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 356
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 358
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
        echo "\"
              ";
        // line 359
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 360
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 361
        echo ">
              ";
        // line 362
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 363
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 365
        echo "            </div>
            ";
        // line 367
        echo "          </section>
          ";
        // line 368
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 369
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 371
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
                ";
            // line 372
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 373
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 374
            echo ">
                ";
            // line 375
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 378
            echo "            </aside>
          ";
        }
        // line 380
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 381
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 383
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
                ";
            // line 384
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 385
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 386
            echo ">
                ";
            // line 387
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 390
            echo "            </aside>
          ";
        }
        // line 392
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 397
        echo "
  ";
        // line 398
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 399
            echo "    ";
            // line 400
            echo "    <div class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 401
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 403
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 404
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 405
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 406
            echo ">
          <div class=\"row\">
            ";
            // line 408
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 409
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 411
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 412
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 415
                echo "              </div>
            ";
            }
            // line 417
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 418
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 420
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 421
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 424
                echo "              </div>
            ";
            }
            // line 426
            echo "          </div>
        </div>
        ";
            // line 429
            echo "      </div>
    </div>
    ";
            // line 432
            echo "  ";
        }
        // line 433
        echo "
  ";
        // line 434
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 435
            echo "    ";
            // line 436
            echo "    <div class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 437
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 439
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 440
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 441
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 442
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 446
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 452
            echo "      </div>
    </div>
    ";
            // line 455
            echo "  ";
        }
        // line 456
        echo "
  ";
        // line 457
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 458
            echo "    ";
            // line 459
            echo "    <div class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 460
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 462
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 463
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 464
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 465
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 469
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 475
            echo "      </div>
    </div>
    ";
            // line 478
            echo "  ";
        }
        // line 479
        echo "
  ";
        // line 480
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 481
            echo "    ";
            // line 482
            echo "    <div class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 483
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 485
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 486
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 487
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 488
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 492
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 498
            echo "      </div>
    </div>
    ";
            // line 501
            echo "  ";
        }
        // line 502
        echo "
  ";
        // line 503
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 504
            echo "    ";
            // line 505
            echo "    <div class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 506
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 508
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 509
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 510
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 511
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 515
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 521
            echo "      </div>
    </div>
    ";
            // line 524
            echo "  ";
        }
        // line 525
        echo "
  ";
        // line 526
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 527
            echo "    ";
            // line 528
            echo "    <div class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 529
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 531
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 532
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 533
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 534
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 538
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 544
            echo "      </div>
    </div>
    ";
            // line 547
            echo "  ";
        }
        // line 548
        echo "
  ";
        // line 549
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 550
            echo "    ";
            // line 551
            echo "    <div class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 552
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 554
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 555
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 556
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 557
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 561
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 567
            echo "      </div>
    </div>
    ";
            // line 570
            echo "  ";
        }
        // line 571
        echo "
  ";
        // line 572
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 573
            echo "    ";
            // line 574
            echo "    <div class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 575
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 577
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
            echo "\"
          ";
            // line 578
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 579
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 580
            echo ">
          <div class=\"row\">
            ";
            // line 582
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 583
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 585
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 586
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 589
                echo "              </div>
            ";
            }
            // line 591
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 592
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 594
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 595
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 598
                echo "              </div>
            ";
            }
            // line 600
            echo "          </div>
        </div>
        ";
            // line 603
            echo "      </div>
    </div>
    ";
            // line 606
            echo "  ";
        }
        // line 607
        echo "
  ";
        // line 608
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 609
            echo "    ";
            // line 610
            echo "    <footer class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 611
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 614
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 615
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 617
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 618
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 619
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 620
                echo ">
                  ";
                // line 621
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 624
                echo "              </div>
            ";
            }
            // line 626
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 627
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 629
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 630
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 631
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 632
                echo ">
                  ";
                // line 633
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 636
                echo "              </div>
            ";
            }
            // line 638
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 639
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 640
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 642
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 643
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 644
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 645
                echo ">
                  ";
                // line 646
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 649
                echo "              </div>
            ";
            }
            // line 651
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 652
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 653
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 655
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 656
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 657
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 658
                echo ">
                  ";
                // line 659
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 662
                echo "              </div>
            ";
            }
            // line 664
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 665
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 667
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : ("")));
                echo "\"
                  ";
                // line 668
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 669
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 670
                echo ">
                  ";
                // line 671
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 674
                echo "              </div>
            ";
            }
            // line 676
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 681
            echo "  ";
        }
        // line 682
        echo "
  ";
        // line 683
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 684
            echo "    ";
            // line 685
            echo "    <div class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 686
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 688
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 692
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 698
            echo "      </div>
    </div>
    ";
            // line 701
            echo "  ";
        }
        // line 702
        echo "
  ";
        // line 703
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 704
            echo "    ";
            // line 705
            echo "    <div class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo "\">
      <div class=\"";
            // line 706
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 708
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 710
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 711
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 713
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 714
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 717
                echo "              </div>
            ";
            }
            // line 719
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 720
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 722
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 723
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 726
                echo "              </div>
            ";
            }
            // line 728
            echo "          </div>
        </div>
        ";
            // line 731
            echo "      </div>
    </div>
    ";
            // line 734
            echo "  ";
        }
        // line 735
        echo "
  ";
        // line 736
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 737
            echo "  ";
            // line 738
            echo "    <div class=\"to-top\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_text"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 740
            echo "  ";
        }
        // line 741
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/enterpriseplus/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1574 => 741,  1571 => 740,  1566 => 738,  1564 => 737,  1562 => 736,  1559 => 735,  1556 => 734,  1552 => 731,  1548 => 728,  1544 => 726,  1539 => 723,  1536 => 722,  1531 => 720,  1528 => 719,  1524 => 717,  1519 => 714,  1516 => 713,  1511 => 711,  1509 => 710,  1505 => 708,  1501 => 706,  1494 => 705,  1492 => 704,  1490 => 703,  1487 => 702,  1484 => 701,  1480 => 698,  1472 => 692,  1466 => 688,  1462 => 686,  1455 => 685,  1453 => 684,  1451 => 683,  1448 => 682,  1445 => 681,  1439 => 676,  1435 => 674,  1430 => 671,  1427 => 670,  1421 => 669,  1419 => 668,  1414 => 667,  1409 => 665,  1406 => 664,  1402 => 662,  1397 => 659,  1394 => 658,  1388 => 657,  1386 => 656,  1381 => 655,  1376 => 653,  1374 => 652,  1367 => 651,  1363 => 649,  1358 => 646,  1355 => 645,  1349 => 644,  1347 => 643,  1342 => 642,  1337 => 640,  1335 => 639,  1330 => 638,  1326 => 636,  1321 => 633,  1318 => 632,  1312 => 631,  1310 => 630,  1305 => 629,  1300 => 627,  1297 => 626,  1293 => 624,  1288 => 621,  1285 => 620,  1279 => 619,  1277 => 618,  1272 => 617,  1267 => 615,  1265 => 614,  1259 => 611,  1252 => 610,  1250 => 609,  1248 => 608,  1245 => 607,  1242 => 606,  1238 => 603,  1234 => 600,  1230 => 598,  1225 => 595,  1222 => 594,  1217 => 592,  1214 => 591,  1210 => 589,  1205 => 586,  1202 => 585,  1197 => 583,  1195 => 582,  1191 => 580,  1185 => 579,  1183 => 578,  1178 => 577,  1174 => 575,  1165 => 574,  1163 => 573,  1161 => 572,  1158 => 571,  1155 => 570,  1151 => 567,  1143 => 561,  1137 => 557,  1131 => 556,  1129 => 555,  1124 => 554,  1120 => 552,  1113 => 551,  1111 => 550,  1109 => 549,  1106 => 548,  1103 => 547,  1099 => 544,  1091 => 538,  1085 => 534,  1079 => 533,  1077 => 532,  1072 => 531,  1068 => 529,  1061 => 528,  1059 => 527,  1057 => 526,  1054 => 525,  1051 => 524,  1047 => 521,  1039 => 515,  1033 => 511,  1027 => 510,  1025 => 509,  1020 => 508,  1016 => 506,  1009 => 505,  1007 => 504,  1005 => 503,  1002 => 502,  999 => 501,  995 => 498,  987 => 492,  981 => 488,  975 => 487,  973 => 486,  968 => 485,  964 => 483,  957 => 482,  955 => 481,  953 => 480,  950 => 479,  947 => 478,  943 => 475,  935 => 469,  929 => 465,  923 => 464,  921 => 463,  916 => 462,  912 => 460,  905 => 459,  903 => 458,  901 => 457,  898 => 456,  895 => 455,  891 => 452,  883 => 446,  877 => 442,  871 => 441,  869 => 440,  864 => 439,  860 => 437,  853 => 436,  851 => 435,  849 => 434,  846 => 433,  843 => 432,  839 => 429,  835 => 426,  831 => 424,  826 => 421,  823 => 420,  818 => 418,  815 => 417,  811 => 415,  806 => 412,  803 => 411,  798 => 409,  796 => 408,  792 => 406,  786 => 405,  784 => 404,  779 => 403,  775 => 401,  768 => 400,  766 => 399,  764 => 398,  761 => 397,  755 => 392,  751 => 390,  746 => 387,  743 => 386,  737 => 385,  735 => 384,  730 => 383,  725 => 381,  722 => 380,  718 => 378,  713 => 375,  710 => 374,  704 => 373,  702 => 372,  697 => 371,  692 => 369,  690 => 368,  687 => 367,  684 => 365,  678 => 363,  676 => 362,  673 => 361,  667 => 360,  665 => 359,  660 => 358,  656 => 356,  648 => 352,  645 => 350,  642 => 349,  638 => 346,  634 => 343,  630 => 341,  625 => 338,  622 => 337,  617 => 335,  614 => 334,  610 => 332,  605 => 329,  602 => 328,  597 => 326,  595 => 325,  591 => 323,  585 => 322,  583 => 321,  578 => 320,  573 => 318,  570 => 316,  563 => 314,  561 => 313,  559 => 312,  556 => 311,  553 => 310,  549 => 307,  541 => 301,  535 => 297,  529 => 296,  527 => 295,  522 => 294,  518 => 292,  511 => 291,  509 => 290,  507 => 289,  504 => 288,  501 => 287,  497 => 284,  489 => 278,  483 => 274,  477 => 273,  475 => 272,  470 => 271,  466 => 269,  461 => 268,  459 => 267,  457 => 266,  454 => 265,  445 => 259,  439 => 255,  437 => 254,  433 => 252,  430 => 250,  427 => 249,  424 => 247,  419 => 244,  416 => 243,  413 => 241,  411 => 240,  409 => 239,  406 => 238,  403 => 237,  399 => 234,  396 => 233,  393 => 231,  390 => 230,  385 => 226,  383 => 225,  381 => 224,  378 => 223,  374 => 220,  370 => 218,  367 => 216,  364 => 215,  358 => 211,  350 => 209,  348 => 208,  345 => 207,  339 => 204,  336 => 203,  334 => 202,  331 => 201,  326 => 199,  323 => 198,  319 => 196,  314 => 193,  311 => 192,  306 => 190,  303 => 189,  299 => 187,  294 => 184,  291 => 183,  286 => 181,  284 => 180,  280 => 178,  276 => 176,  269 => 175,  267 => 174,  265 => 173,  262 => 172,  259 => 171,  255 => 168,  251 => 165,  247 => 163,  242 => 160,  239 => 159,  234 => 157,  231 => 156,  227 => 154,  222 => 151,  219 => 150,  214 => 148,  212 => 147,  208 => 145,  202 => 144,  200 => 143,  195 => 142,  191 => 140,  186 => 139,  184 => 138,  182 => 137,  179 => 136,  176 => 135,  172 => 132,  168 => 129,  164 => 127,  159 => 124,  156 => 123,  151 => 121,  148 => 120,  144 => 118,  139 => 115,  136 => 114,  131 => 112,  129 => 111,  125 => 109,  119 => 108,  117 => 107,  112 => 106,  108 => 104,  103 => 103,  101 => 102,  99 => 101,  95 => 99,  93 => 98,  91 => 97,  87 => 95,  84 => 93,  80 => 90,  77 => 88,  74 => 86,  68 => 82,  64 => 80,  59 => 78,  57 => 77,  55 => 76,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/enterpriseplus/templates/page.html.twig", "/Applications/MAMP/htdocs/Development/codec_viewfinder/themes/enterpriseplus/templates/page.html.twig");
    }
}
