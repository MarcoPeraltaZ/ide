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

/* @b4_idepatrimonio/partial/header.html.twig */
class __TwigTemplate_645722233bc60a748a2b164652340b9d0e53d1a5fc924007d9729ab70ab96771 extends \Twig\Template
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
        echo "<header>
  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 3)) {
            // line 4
            echo "    <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 4, $this->source), "html", null, true);
            echo "\">
      <div class=\"container row mx-auto\">
        <div class=\"col-auto p-0\">
          ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
        </div>
        <div class=\"col-aut col-menu-btn\">
          <div class=\" p-0 text-right\">
            <button class=\"navbar-toggler collapsed  p-0\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarSupportedContentSm\" aria-controls=\"navbarSupportedContentSm\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"55\" height=\"55\" viewBox=\"9 5 55 55\">
                <defs>
                  <filter id=\"Elipse_395\" x=\"0\" y=\"0\" width=\"71\" height=\"71\" filterUnits=\"userSpaceOnUse\">
                    <feOffset dy=\"3\" input=\"SourceAlpha\"/>
                    <feGaussianBlur stdDeviation=\"3\" result=\"blur\"/>
                    <feFlood flood-opacity=\"0.161\"/>
                    <feComposite operator=\"in\" in2=\"blur\"/>
                    <feComposite in=\"SourceGraphic\"/>
                  </filter>
                </defs>
                <g id=\"Grupo_14501\" data-name=\"Grupo 14501\" transform=\"translate(-327 -58)\">
                  <g id=\"Grupo_12808\" data-name=\"Grupo 12808\">
                    <g transform=\"matrix(1, 0, 0, 1, 327, 58)\" filter=\"url(#Elipse_395)\">
                      <circle id=\"Elipse_395-2\" data-name=\"Elipse 395\" cx=\"26.5\" cy=\"26.5\" r=\"26.5\" transform=\"translate(9 6)\"/>
                    </g>
                    <g id=\"Grupo_12730\" data-name=\"Grupo 12730\">
                      <line id=\"Línea_130\" data-name=\"Línea 130\" x2=\"20\" transform=\"translate(352.5 84.5)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"2\"/>
                      <line id=\"Línea_131\" data-name=\"Línea 131\" x2=\"20\" transform=\"translate(352.5 89.5)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"2\"/>
                      <line id=\"Línea_132\" data-name=\"Línea 132\" x2=\"20\" transform=\"translate(352.5 95.5)\" fill=\"none\" stroke=\"#fff\" stroke-width=\"2\"/>
                    </g>
                  </g>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
  ";
        }
        // line 43
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 43) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 43))) {
            // line 44
            echo "    <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 44, $this->source), "html", null, true);
            echo " navbar-ide d-lg-none\" id=\"nav-bar-sm\">
      <div class=\"container row mx-auto\" id=\"navbarSupportedContentSmContainer\">
        <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-center bg-black \" id=\"navbarSupportedContentSm\">
          ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
          ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </nav>
    <nav class=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 52, $this->source), "html", null, true);
            echo " navbar-ide bg-black d-none d-lg-block\">
      <div class=\"container row mx-auto\">
        <div class=\"col-3 col-md-auto p-0 text-right\">
          <button class=\"navbar-toggler collapsed btn-circle\" type=\"button\" data-toggle=\"collapse\"
                  data-target=\"#navbarSupportedContentLg\" aria-controls=\"navbarSupportedContentLg\"
                  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
        </div>

        <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-center\" id=\"navbarSupportedContentLg\">
          ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
          ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </nav>
  ";
        }
        // line 69
        echo "</header>
";
    }

    public function getTemplateName()
    {
        return "@b4_idepatrimonio/partial/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  133 => 64,  129 => 63,  115 => 52,  108 => 48,  104 => 47,  97 => 44,  94 => 43,  55 => 7,  48 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@b4_idepatrimonio/partial/header.html.twig", "/var/www/html/web_patrimoniosculturales/themes/custom/b4_idepatrimonio/templates/partial/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3);
        static $filters = array("escape" => 2);
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
