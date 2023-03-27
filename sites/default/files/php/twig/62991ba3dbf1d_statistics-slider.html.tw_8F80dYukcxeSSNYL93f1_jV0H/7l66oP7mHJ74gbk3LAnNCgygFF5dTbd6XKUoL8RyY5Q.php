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

/* @ide_patrimonio/partials/statistics-slider.html.twig */
class __TwigTemplate_5b5047b18165933c516a1f7bca37643178c826120f73a5666ca38b42630a4e4d extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ide_patrimonio/ide_patrimonio_slider"), "html", null, true);
        echo "
<div class=\"d-none d-sm-block\">
  <div class=\"slider-capas\">
    <h2 class=\"title-ide\">
      Estadísticas
    </h2>
    <div class=\"row mt-18\">
      <div class=\"col-md-1 custom-navigation center-vertical\">
        <div>
          <a href=\"#\" class=\"flex-prev\">
            <svg id=\"Grupo_14633\" data-name=\"Grupo 14633\" xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\">
              <g id=\"Grupo_14384\" data-name=\"Grupo 14384\" transform=\"translate(32) rotate(90)\">
                <rect id=\"Rectángulo_3845\" data-name=\"Rectángulo 3845\" width=\"32\" height=\"32\"/>
                <path id=\"Icon_material-keyboard-arrow-up\" data-name=\"Icon material-keyboard-arrow-up\" d=\"M2.129,0l6.93,6.915L15.989,0l2.129,2.129L9.059,11.188,0,2.129Z\" transform=\"translate(7 10)\" fill=\"#fff\"/>
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class=\"col-md-10 flexslider-estadisticas carousel carousel-capas\">
        <ul class=\"slides\">
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["capasEstadisticas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["capa"]) {
            // line 23
            echo "            <li>
              <div class=\"text-center card-estadistica\">
                <div><img class=\"card-estadistica-capa-icono\" src=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "icono", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "\"></div>
                <div class=\"font-s18 max-lines-4\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "</div>
                <div class=\"font-s60\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "cantidadPatrimonios", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</div>
                <div class=\"font-s14\">";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "cantidadPatrimoniosNacional", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo " a nivel nacional</div>
                <div class=\"mt-23\"><a href=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "visor", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"m-0 px-3 py-2 btn btn-ide-patrimonio\">Revisar en mapa</a></div>
              </div>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </ul>
      </div>
      <div class=\"col-md-1 custom-navigation center-vertical\">
        <div>
          <a href=\"#\" class=\"flex-next\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\">
              <g id=\"Grupo_14632\" data-name=\"Grupo 14632\" transform=\"translate(-1265 -524)\">
                <g id=\"Grupo_14384\" data-name=\"Grupo 14384\" transform=\"translate(1897 288) rotate(90)\">
                  <rect id=\"Rectángulo_3845\" data-name=\"Rectángulo 3845\" width=\"32\" height=\"32\" transform=\"translate(236 600)\"/>
                  <path id=\"Icon_material-keyboard-arrow-up\" data-name=\"Icon material-keyboard-arrow-up\" d=\"M11.129,23.188l6.93-6.915,6.93,6.915,2.129-2.129L18.059,12,9,21.059Z\" transform=\"translate(234 598.813)\" fill=\"#fff\"/>
                </g>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ide_patrimonio/partials/statistics-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 23,  63 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ide_patrimonio/partials/statistics-slider.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/partials/statistics-slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 22);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['attach_library']
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
