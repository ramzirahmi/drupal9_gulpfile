<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/formation_drupal9/templates/views/partenaires/views-view--partenaires--block-1.html.twig */
class __TwigTemplate_23751145e08421ea8697cb5542bd46a7a3696102ad8a5d33e21eb59409d5bccd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 35
($context["id"] ?? null), 35, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null), 36, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["display_id"] ?? null), 37, $this->source)), 4 => ((        // line 38
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 38, $this->source))) : ("")), 5 => "nos-partenaires"];
        // line 40
        echo "<section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">
    <div class=\"container\">
        ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 42, $this->source), "html", null, true);
        echo "
        ";
        // line 43
        if (($context["title"] ?? null)) {
            // line 44
            echo "            <div class=\"text-center text-success\">
               <h2>";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 45, $this->source), "html", null, true);
            echo "</h2>
            </div>
        ";
        }
        // line 48
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        echo "
        ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "            <div class=\"view-header\">
                ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 54
        echo "        ";
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "            <div class=\"view-filters\">
                ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 56, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 59
        echo "        ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "            <div class=\"attachment attachment-before\">
                ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 61, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            echo "            <div class=\"row\">
                <div id=\"owl-demo\">
                    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 68, $this->source), "html", null, true);
            echo "
                </div>
            </div>
        ";
        } elseif (        // line 71
($context["empty"] ?? null)) {
            // line 72
            echo "            <div class=\"view-empty\">
                ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 73, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 76
        echo "
        ";
        // line 77
        if (($context["pager"] ?? null)) {
            // line 78
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 78, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 80
        echo "        ";
        if (($context["attachment_after"] ?? null)) {
            // line 81
            echo "            <div class=\"attachment attachment-after\">
                ";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 82, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 85
        echo "        ";
        if (($context["more"] ?? null)) {
            // line 86
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 86, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 88
        echo "        ";
        if (($context["footer"] ?? null)) {
            // line 89
            echo "            <div class=\"view-footer\">
                ";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 90, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 93
        echo "        ";
        if (($context["feed_icons"] ?? null)) {
            // line 94
            echo "            <div class=\"feed-icons\">
                ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 95, $this->source), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 98
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/formation_drupal9/templates/views/partenaires/views-view--partenaires--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 98,  182 => 95,  179 => 94,  176 => 93,  170 => 90,  167 => 89,  164 => 88,  158 => 86,  155 => 85,  149 => 82,  146 => 81,  143 => 80,  137 => 78,  135 => 77,  132 => 76,  126 => 73,  123 => 72,  121 => 71,  115 => 68,  111 => 66,  109 => 65,  106 => 64,  100 => 61,  97 => 60,  94 => 59,  88 => 56,  85 => 55,  82 => 54,  76 => 51,  73 => 50,  71 => 49,  66 => 48,  60 => 45,  57 => 44,  55 => 43,  51 => 42,  45 => 40,  43 => 38,  42 => 37,  41 => 36,  40 => 35,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/formation_drupal9/templates/views/partenaires/views-view--partenaires--block-1.html.twig", "C:\\laragon\\www\\formation_drupal9\\web\\themes\\custom\\formation_drupal9\\templates\\views\\partenaires\\views-view--partenaires--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "if" => 43);
        static $filters = array("clean_class" => 35, "escape" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
