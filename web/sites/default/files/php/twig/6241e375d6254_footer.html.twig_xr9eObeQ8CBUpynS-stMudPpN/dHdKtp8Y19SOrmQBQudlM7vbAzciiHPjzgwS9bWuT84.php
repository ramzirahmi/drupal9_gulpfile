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

/* themes/custom/formation_drupal9/templates/layout/includes/footer.html.twig */
class __TwigTemplate_4539c985b8200eecb3cc1337c990a7ae8670f95bf99bcaad3c61f7b4dccf9f08 extends \Twig\Template
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
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 1) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 1)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 1))) {
            // line 2
            echo "    <footer class=\"bg-footer\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 6)) {
                // line 7
                echo "                        <div class=\"col-md-3 logo-footer\">
                            ";
                // line 8
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_left", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 11
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 11)) {
                // line 12
                echo "                        <div class=\"col-md-9 info-contact\">
                            <div class=\"row\">
                                ";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_right", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "
                            </div>
                        </div>
                    ";
            }
            // line 18
            echo "                </div>
            </div>
        </div>
        <div class=\"footer-content\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 24)) {
                // line 25
                echo "                        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "
                    ";
            }
            // line 27
            echo "                </div>
            </div>
        </div>
        <div class=\"footer-copyright\">
            <div class=\"container\">
                <div class=\"border-top\">
                    <div class=\"row\">
                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 34)) {
                // line 35
                echo "                            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_copyright", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
                        ";
            }
            // line 37
            echo "                    </div>
                </div>
            </div>
        </div>
    </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/formation_drupal9/templates/layout/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  99 => 35,  97 => 34,  88 => 27,  82 => 25,  80 => 24,  72 => 18,  65 => 14,  61 => 12,  58 => 11,  52 => 8,  49 => 7,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/formation_drupal9/templates/layout/includes/footer.html.twig", "C:\\laragon\\www\\formation_drupal9\\web\\themes\\custom\\formation_drupal9\\templates\\layout\\includes\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
