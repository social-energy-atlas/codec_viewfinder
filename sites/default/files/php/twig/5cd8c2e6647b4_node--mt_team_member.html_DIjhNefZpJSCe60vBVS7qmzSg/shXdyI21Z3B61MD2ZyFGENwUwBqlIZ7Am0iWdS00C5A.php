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

/* themes/enterpriseplus/templates/node--mt_team_member.html.twig */
class __TwigTemplate_6ce3f8cec3633b86c89938139638c8c51b54437ef5a41a579af77d368d83336a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("node.html.twig", "themes/enterpriseplus/templates/node--mt_team_member.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 13];
        $filters = ["escape" => 10, "without" => 11, "render" => 13];
        $functions = ["attach_library" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without', 'render'],
                ['attach_library']
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

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/node-team-member"), "html", null, true);
        echo "
  ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_mt_member_photo", "field_mt_subtitle", "field_mt_facebook_account", "field_mt_twitter_account", "field_mt_linkedin_account", "body", "comment"), "html", null, true);
        echo "
  <div class=\"row content\">
    ";
        // line 13
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", []))) {
            // line 14
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("enterpriseplus/magnific-popup-field-member-photo-init"), "html", null, true);
            echo "
      <div class=\"col-md-5 col-sm-6\">
        <div class=\"photo-container\">
          ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_mt_member_photo", [])))) ? ("col-md-7 col-sm-6") : ("col-sm-12")));
        echo "\">
      ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_mt_subtitle", [])), "html", null, true);
        echo "
      ";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
      ";
        // line 24
        if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", []))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_linkedin_account", [])))) {
            // line 25
            echo "        <ul class=\"icons-list\">
          ";
            // line 26
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_facebook_account", []))) {
                // line 27
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 28
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_facebook_account", []), "value", [])), "html", null, true);
                echo "\">
                <i class=\"fa fa-facebook\"><span class=\"sr-only\">facebook</span></i>
              </a>
            </li>
          ";
            }
            // line 33
            echo "          ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_twitter_account", []))) {
                // line 34
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_twitter_account", []), "value", [])), "html", null, true);
                echo "\">
                <i class=\"fa fa-twitter\"><span class=\"sr-only\">twitter</span></i>
              </a>
            </li>
          ";
            }
            // line 40
            echo "          ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_mt_linkedin_account", []))) {
                // line 41
                echo "            <li>
              <a target=\"_blank\" href=\"";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_mt_linkedin_account", []), "value", [])), "html", null, true);
                echo "\">
                <i class=\"fa fa-linkedin\"><span class=\"sr-only\">linkedin</span></i>
              </a>
            </li>
          ";
            }
            // line 47
            echo "        </ul>
      ";
        }
        // line 49
        echo "    </div>
  </div>
  ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/enterpriseplus/templates/node--mt_team_member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 51,  156 => 49,  152 => 47,  144 => 42,  141 => 41,  138 => 40,  130 => 35,  127 => 34,  124 => 33,  116 => 28,  113 => 27,  111 => 26,  108 => 25,  106 => 24,  102 => 23,  98 => 22,  93 => 21,  86 => 17,  79 => 14,  77 => 13,  72 => 11,  67 => 10,  64 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/enterpriseplus/templates/node--mt_team_member.html.twig", "/Applications/MAMP/htdocs/codec_viewfinder/themes/enterpriseplus/templates/node--mt_team_member.html.twig");
    }
}
