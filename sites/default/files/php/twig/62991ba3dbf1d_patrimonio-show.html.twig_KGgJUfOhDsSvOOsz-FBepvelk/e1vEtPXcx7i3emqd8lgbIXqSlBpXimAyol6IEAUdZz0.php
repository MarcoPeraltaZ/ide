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

/* modules/custom/ide_patrimonio/templates/patrimonio-show.html.twig */
class __TwigTemplate_f53d24cb50e0e1b43370d95b17a8c704a8b3993a437263323803d056c1390146 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ide_patrimonio/ide_patrimonio"), "html", null, true);
        echo "
<div class=\"container-fluid bg-ide\">
  <div class=\"container py-3\">
    <button class=\"btn btn-ide-patrimonio my-3 mw-15\" onclick=\"window.history.back()\">Volver</button>

    <div class=\"mb-5\">
      <img class=\"img-fluid align-text-bottom\" src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "capa_ic", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
      <span class=\"font-wb font-s32 color-black\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "capa", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</span>
    </div>

    <div class=\"font-wb font-s24  font-color-ficha-tecnica\">";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</div>
    <hr class=\"horizontal-line\"/>

    <div class=\"row ficha-tecnica font-color-ficha-tecnica mb-3 pt-2\">
      <div class=\"col-md-6\">
        <img class=\"img-fluid br-4 w-100  ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_in_filter("images/capas", twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "url", [], "any", false, false, true, 16)) && twig_in_filter("_540.png", twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "url", [], "any", false, false, true, 16)))) ? ("img-ic-capa") : ("")));
        echo "\" src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\">
      </div>
      <div class=\"col-md-6\">
        <div class=\"font-wb font-s24 mb-40\">
          <span>Ficha Técnica</span>
        </div>
        <div class=\"font-wn font-s16\">Región</div>
        <div class=\"font-wb font-s20\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "region", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</div>
        <div class=\"font-wn font-s16\">Provincia</div>
        <div class=\"font-wb font-s20\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "provincia", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "</div>
        <div class=\"font-wn font-s16\">Comuna</div>
        <div class=\"font-wb font-s20\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "comuna", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</div>
      </div>
    </div>
    <iframe height=\"382\" class=\"br-18 w-100 mt-3 border-0\"
            allow=\"autoplay,camera,microphone,payment,accelerometer,geolocation,encrypted-media,gyroscope\"
            src=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "visor", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "&center=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "longitude", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo ",";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "latitude", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "&level=";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["patrimonio"] ?? null), "zoom", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\"></iframe>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/patrimonio-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  88 => 27,  83 => 25,  78 => 23,  66 => 16,  58 => 11,  52 => 8,  48 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/patrimonio-show.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/patrimonio-show.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                [],
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
