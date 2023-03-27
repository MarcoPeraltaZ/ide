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

/* modules/custom/ide_patrimonio/templates/block-acerca-de.html.twig */
class __TwigTemplate_fcd9447c7b96b4ec1f204d5c1d87f196cf7df9514b0f3ba2aa129e5e13d94705 extends \Twig\Template
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
        echo "<div class=\"container my-30\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"text-center\">
        <img class=\"img-fluid\" src=\"/";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 5, $this->source), "html", null, true);
        echo "/assets/images/que_es_ide.png\" alt=\"Que es IDE\">
      </div>
    </div>
    <div class=\"col-md-9 center-vertical\">
      <div>
        <div style=\"display: block;height: auto;\">
          <p>IDE Patrimonio es una plataforma pública y digital, que pone a disposición un visor
          territorial y georreferenciado del patrimonio cultural en Chile. Conoce y descubre
          expresiones, reconocimientos y técnicas de patrimonio cultural inmaterial, Inmuebles
          patrimoniales, Bibliotecas, Museos y Monumentos Nacionales presentes en el territorio
            nacional.</p>
          <br>
          <a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.about"));
        echo "\" class=\"m-0 px-3 py-2 btn btn-ide-patrimonio\">Ver más</a>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/block-acerca-de.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/block-acerca-de.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/block-acerca-de.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['path']
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
