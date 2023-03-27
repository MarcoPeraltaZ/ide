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

/* modules/custom/ide_patrimonio/templates/block-herramientas-ide.html.twig */
class __TwigTemplate_ccf420aa34a5024046f826795ae2a41c724e931af63057edf62698732fd7d8ea extends \Twig\Template
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
<div class=\"container-fluid bg-ide mt-46\">
  <div class=\"container pt-30\">
    <h2 class=\"title-ide color-black\" id=\"herramientas\">
      Herramientas
    </h2>
    <div class=\"ide-iframe-container mt-70\">
      <iframe height=\"400\" id=\"iframe-field_iframe\" title=\"\"
              allow=\"autoplay,camera,microphone,payment,accelerometer,geolocation,encrypted-media,gyroscope\"
              src=\"https://geoportalcmn.cl/portal/apps/Embed/index.html?webmap=e0e0598e808b435eaa4f9e88bfd1ab42&extent=-74.2095,-42.3267,-71.1772,-40.8664&zoom=false&previewImage=false&scale=false&disable_scroll=true&theme=light\"
              class=\"w-100\">
      </iframe>
      <img src=\"/";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 13, $this->source), "html", null, true);
        echo "/assets/images/simbologia.png\"
           alt=\"iframe-visor-territorial-leyenda\" class=\"w-100 mt-20\">
    </div>

    <div class=\"row mt-50\">
      <div class=\"col-md-4\">
        <div class=\"card herramientas-card\">
          <a href=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.visor-cerca"));
        echo "\">
            <img src=\"/";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 21, $this->source), "html", null, true);
        echo "/assets/images/visor_cerca.png\" class=\"card-img-top herramientas-image gray-image\" alt=\"...\">
          </a>
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.visor-cerca"));
        echo "\">Visor Cerca de Mí</a></h5>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card herramientas-card\">
          <a href=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.visor-territorial"));
        echo "\">
            <img src=\"/";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 31, $this->source), "html", null, true);
        echo "/assets/images/visor_territorial.png\" class=\"card-img-top herramientas-image gray-image\" alt=\"...\">
          </a>
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.visor-territorial"));
        echo "\">Visor Territorial</a></h5>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"card herramientas-card\">
          <a href=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.visor-estadistico"));
        echo "\">
            <img src=\"/";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 41, $this->source), "html", null, true);
        echo "/assets/images/visor_estadistico.png\" class=\"card-img-top herramientas-image gray-image\" alt=\"...\">
          </a>
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.visor-estadistico"));
        echo "\">Visor Estadístico</a></h5>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12  mt-35 mb-80\">
        <a id=\"buttonMetadatos\" class=\"btn btn-ide-patrimonio-secondary w-100 btn-rectangle font-wb\" href=\"";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.catalogo"));
        echo "\">Metadatos y Descarga de Capas</a>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/block-herramientas-ide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  112 => 44,  106 => 41,  102 => 40,  93 => 34,  87 => 31,  83 => 30,  74 => 24,  68 => 21,  64 => 20,  54 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/block-herramientas-ide.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/block-herramientas-ide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "path" => 20);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library', 'path']
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
