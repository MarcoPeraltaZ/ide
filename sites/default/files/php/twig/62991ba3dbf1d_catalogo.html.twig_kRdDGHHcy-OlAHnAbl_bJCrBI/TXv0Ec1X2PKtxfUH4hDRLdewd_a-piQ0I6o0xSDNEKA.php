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

/* modules/custom/ide_patrimonio/templates/catalogo.html.twig */
class __TwigTemplate_28dd828c9c138c374aa53b7c22f90fa29597c96c5cf07175537b787de002d754 extends \Twig\Template
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
      <h2 class=\"title-ide color-black\">Catálogo de Metadatos<br>
        y Descarga de Capas del Patrimonio Cultural en Chile</h2>
    </div>
    <div class=\"ide-iframe-container text-center  mt-30\">
      <iframe height=\"800\"
              name=\"iframe-field_iframe\"
              id=\"iframe-field_iframe_catalogo\"
              title=\"\"
              allow=\"autoplay,camera,microphone,payment,accelerometer,geolocation,encrypted-media,gyroscope\"
              src=\"https://catalogo.patrimoniocultural.gob.cl/geonetwork/srv/spa/catalog.search#/home\">
      </iframe>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/catalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/catalogo.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/catalogo.html.twig");
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
