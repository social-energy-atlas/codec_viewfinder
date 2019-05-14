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

/* themes/enterpriseplus/templates/maintenance-page.html.twig */
class __TwigTemplate_b944b0245fca08fbaae6b504c8c14e8ed56a3077fdb09ebe9752ad76ab32f8d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 29];
        $filters = ["escape" => 12, "t" => 31];
        $functions = ["attach_library" => 12, "path" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library', 'path']
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
        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/maintenance-page"), "html", null, true);
        echo "

";
        // line 15
        echo "<div class=\"page-container\">

  ";
        // line 18
        echo "  <div class=\"header-container\">

    ";
        // line 21
        echo "    <header role=\"banner\" class=\"clearfix header region--dark-typography region--white-background full-width two-columns\">
      <div class=\"container\">
        ";
        // line 24
        echo "        <div class=\"clearfix header__container\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <div class=\"clearfix header__section header-first\">
                <div class=\"logo-and-site-name-wrapper clearfix\">
                  ";
        // line 29
        if (($context["logo"] ?? null)) {
            // line 30
            echo "                    <div class=\"logo\">
                      <a href=\"";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
                        <img src=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
                      </a>
                    </div>
                  ";
        }
        // line 36
        echo "                  ";
        if (($context["site_name"] ?? null)) {
            // line 37
            echo "                    <div class=\"site-name site-branding__name\">
                      <a href=\"";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</a>
                    </div>
                  ";
        }
        // line 41
        echo "                  ";
        if (($context["site_slogan"] ?? null)) {
            // line 42
            echo "                    <div class=\"site-slogan site-branding__slogan\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "</div>
                  ";
        }
        // line 44
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        // line 50
        echo "      </div>
    </header>
    ";
        // line 53
        echo "
  </div>
  ";
        // line 56
        echo "
  <div class=\"system-messages\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>

  ";
        // line 68
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"col-md-12\">
            ";
        // line 74
        echo "            <div class=\"clearfix main-content__section\">
              ";
        // line 75
        if (($context["title"] ?? null)) {
            // line 76
            echo "                <h1 class=\"title page-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
              ";
        }
        // line 78
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </div>
            ";
        // line 81
        echo "          </section>
          <aside class=\"col-md-12\">
            ";
        // line 84
        echo "            <section class=\"sidebar__section sidebar-second clearfix\">
            </section>
            ";
        // line 87
        echo "          </aside>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 93
        echo "
  ";
        // line 95
        echo "  <footer class=\"clearfix footer region--light-typography region--dark-background\">
    <div class=\"container\">
      <div class=\"clearfix footer__container\">
        <div class=\"row\">
          <div class=\"col-sm-4 col-lg-2\">
            ";
        // line 101
        echo "            <div class=\"clearfix footer__section footer-first\">
            </div>
            ";
        // line 104
        echo "          </div>
          <div class=\"col-sm-4 col-lg-2\">
            ";
        // line 107
        echo "            <div class=\"clearfix footer__section footer-second\">
            </div>
            ";
        // line 110
        echo "          </div>
          <div class=\"clearfix visible-xs-block\"></div>
          <div class=\"col-sm-4 col-lg-2\">
            ";
        // line 114
        echo "            <div class=\"clearfix footer__section footer-third\">
            </div>
            ";
        // line 117
        echo "          </div>
          <div class=\"clearfix visible-xs-block visible-sm-block visible-md-block\"></div>
          <div class=\"col-sm-6 col-lg-3\">
            ";
        // line 121
        echo "            <div class=\"clearfix footer__section footer-fourth\">
            </div>
            ";
        // line 124
        echo "          </div>
          <div class=\"col-sm-6 col-lg-3\">
            ";
        // line 127
        echo "            <div class=\"clearfix footer__section footer-fifth\">
            </div>
            ";
        // line 130
        echo "          </div>
        </div>
      </div>
    </div>
  </footer>
  ";
        // line 136
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/enterpriseplus/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 136,  245 => 130,  241 => 127,  237 => 124,  233 => 121,  228 => 117,  224 => 114,  219 => 110,  215 => 107,  211 => 104,  207 => 101,  200 => 95,  197 => 93,  190 => 87,  186 => 84,  182 => 81,  176 => 78,  170 => 76,  168 => 75,  165 => 74,  158 => 68,  149 => 61,  142 => 56,  138 => 53,  134 => 50,  127 => 44,  121 => 42,  118 => 41,  108 => 38,  105 => 37,  102 => 36,  93 => 32,  87 => 31,  84 => 30,  82 => 29,  75 => 24,  71 => 21,  67 => 18,  63 => 15,  58 => 12,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/enterpriseplus/templates/maintenance-page.html.twig", "/Applications/MAMP/htdocs/Development/codec_test/themes/enterpriseplus/templates/maintenance-page.html.twig");
    }
}
