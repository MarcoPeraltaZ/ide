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

/* modules/custom/ide_patrimonio/templates/visor-estadistico.html.twig */
class __TwigTemplate_ee868c6c677af63f5395277690774bf6dd20d75082f4f06968227420bccdc5d6 extends \Twig\Template
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
  <div class=\"container\">
    <div class=\"ide-iframe-container-title\">
      <h2 class=\"title-ide color-black\">Visor Estadístico</h2>
    </div>
    <div class=\"text-center mt-30\">
      <div class=\"ide-iframe-container\">
        <iframe height=\"800\"
                name=\"iframe-field_iframe\"
                id=\"iframe-field_iframe\"
                title=\"\"
                allow=\"autoplay,camera,microphone,payment,accelerometer,geolocation,encrypted-media,gyroscope\"
                src=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visor_url"] ?? null), 14, $this->source), "html", null, true);
        echo "\">
        </iframe>
      </div>
      <img src=\"/";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 17, $this->source), "html", null, true);
        echo "/assets/images/simbologia.png\"
           alt=\"iframe-visor-territorial-leyenda\" class=\"w-100 mt-30 mb-80\">
    </div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/visor-estadistico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  55 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/visor-estadistico.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/visor-estadistico.html.twig");
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
