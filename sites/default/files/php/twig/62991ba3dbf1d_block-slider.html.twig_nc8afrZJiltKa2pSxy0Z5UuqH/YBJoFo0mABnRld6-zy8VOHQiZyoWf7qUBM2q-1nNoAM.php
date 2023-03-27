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

/* modules/custom/ide_patrimonio/templates/block-slider.html.twig */
class __TwigTemplate_16b8998c68000ffea084bed4271f444d061cb8d0b4ac84b7f1db7a5d15f3d74e extends \Twig\Template
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
<div class=\"container-fluid bg-ide d-none d-sm-block\">
  <div class=\"container slider-capas pt-30\">
    <h2 class=\"title-ide color-black\">
      Descubre el Patrimonio Cultural en Chile
    </h2>
    <div class=\"row\">
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
      <div class=\"col-md-10 flexslider carousel carousel-capas\">
        <ul class=\"slides\">
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["capas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["capa"]) {
            // line 23
            echo "            <li>
              <div class=\"card\">
                <div class=\"card-img-top\">
                  <a href=\"/patrimonios?capa=";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\">
                    <img class=\"card-img-top\" src=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "image", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
                  </a>
                </div>
                <div class=\"card-body card-carrousel\">
                  <img class=\"img-fluid icono-capa\" src=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "icono", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "\">
                  <div class=\"card-title\">
                    <a href=\"/patrimonios?capa=";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</a>
                  </div>
                  <p class=\"card-text\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "description", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</p>
                </div>
              </div>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "modules/custom/ide_patrimonio/templates/block-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  95 => 35,  88 => 33,  83 => 31,  76 => 27,  72 => 26,  67 => 23,  63 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/block-slider.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/block-slider.html.twig");
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
