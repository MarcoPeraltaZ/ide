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

/* @b4_idepatrimonio/partial/footer.html.twig */
class __TwigTemplate_a2a649ad1c8b9ffeb6fd12ff803733e22cb03ca1b338268bf0a4d36f7281b975 extends \Twig\Template
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
        echo "<div class=\"site-footer py-100\">
  <div class=\"container\">
    <div class=\"row no-gutters\">
      <div class=\"col-md-auto text-align-center\">
        <img class=\"img-fluid footer-image\" id=\"logo-ministerio\" src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
        echo "/images/logo_ministerio.svg\"/>
      </div>

      <div class=\"col-md-9 pl-50 my-3 my-md-0\">
        <div>
          <strong>
            Ministerio de las Culturas, las Artes y el Patrimonio<br>
            Gobierno de Chile
          </strong>
        </div>
        <div >
          Dirección Valparaíso: Plaza Sotomayor 233.<br>
          Dirección Santiago: Paseo Ahumada 48, Pisos 4, 5, 6, 7, 8 <br>y 11.
        </div>

        <div >
          Atención Ciudadana | Términos y Condiciones de Uso <br>
          © Servicio Nacional del Patrimonio Cultural
        </div>
      </div>
      <div class=\"col text-align-right\">
        <div>
          <button id=\"footer-go-top\" onclick=\"goToTop()\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 48 48\">
              <g id=\"Grupo_14676\" data-name=\"Grupo 14676\" transform=\"translate(-236 -600)\">
                <rect id=\"Rectángulo_3845\" data-name=\"Rectángulo 3845\" width=\"48\" height=\"48\" transform=\"translate(236 600)\" fill=\"#a30952\"/>
                <path id=\"Icon_material-keyboard-arrow-up\" data-name=\"Icon material-keyboard-arrow-up\" d=\"M12.425,30l11.15-11.126L34.725,30l3.425-3.425L23.575,12,9,26.575Z\" transform=\"translate(236 603)\" fill=\"#fff\"/>
                <path id=\"Icon_material-keyboard-arrow-up-2\" data-name=\"Icon material-keyboard-arrow-up\" d=\"M12.425,30l11.15-11.126L34.725,30l3.425-3.425L23.575,12,9,26.575Z\" transform=\"translate(236 603)\" fill=\"#fff\"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@b4_idepatrimonio/partial/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@b4_idepatrimonio/partial/footer.html.twig", "/var/www/html/web_patrimoniosculturales/themes/custom/b4_idepatrimonio/templates/partial/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
