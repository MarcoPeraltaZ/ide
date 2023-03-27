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

/* modules/custom/ide_patrimonio/templates/acerca-de.html.twig */
class __TwigTemplate_d214c14a879bf0fb7367f0d3d2a9ac5b80acc89b6a09b9a8cdd7722fb40266e6 extends \Twig\Template
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
        $this->loadTemplate("@ide_patrimonio/block-banner.html.twig", "modules/custom/ide_patrimonio/templates/acerca-de.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"container mt-30 mb-46\" id=\"acerca-de-container\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <div class=\"text-center\">
        <img class=\"img-fluid\" src=\"/";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 6, $this->source), "html", null, true);
        echo "/assets/images/que_es_ide.png\" alt=\"Que es IDE\">
      </div>
    </div>
    <div class=\"col-md-9 mt-50\">
      <p>IDE Patrimonio es una plataforma pública y digital elaborada y coordinada por el Ministerio
        de las Culturas, las Artes y el Patrimonio, que pone a disposición del público interesado y la
        ciudadanía un visor territorial y georreferenciado del patrimonio cultural en Chile.</p>

      <p>Esta Infraestructura de Datos Espaciales permite la visualización y gestión de información de
        ámbitos, acciones, programas, iniciativas o componentes patrimoniales presentes en el
        territorio nacional como; registros de usos, representaciones, expresiones, conocimientos y
        técnicas de patrimonio cultural inmaterial, Sello Artesanía Indígena, información en torno a
        Bibliotecas, Museos y Archivos, iglesias del archipiélago de Chiloé pertenecientes a la Escuela
        Chilota de Arquitectura Religiosa en Madera y la identificación y localización de los
        monumentos nacionales en las categorías de Monumento Histórico, Zonas Típicas y
        Santuarios de la Naturaleza. </p>

      <h2 class=\"mt-50 mb-35\">¿Para qué?</h2>

      <p>El propósito es permitir el acceso a los actores interesados, investigadores y a la ciudadanía, de información
        simultánea y geoespacial actualizada relativa al patrimonio cultural en Chile, contribuyendo de ese modo a su
        conocimiento, gestión y protección.</p>

      <p>IDE Patrimonio contiene descripciones generales de manifestaciones y elementos patrimoniales e información de
        su ubicación, datos que dan cuenta de su diversidad y permiten consultar y construir estadísticas con enfoque
        territorial en la materia. Así, la plataforma busca constituirse como una herramienta útil para la definición
        de políticas públicas en el área patrimonial.</p>

      <p>IDE Patrimonio se encuentra en un proceso de crecimiento y mejora continua. Puedes enviar tus dudas o
        sugerencias al correo contactoidepatrimonio@cultura.gob.cl</p>

      <h2 class=\"mt-50 mb-35\">Historia</h2>

      <p>La historia de la IDE Patrimonio se remonta al año 2006 con la creación del Sistema Nacional de Coordinación
        de Información Territorial (SNIT-IDE Chile), que liderado por el Ministerio de Bienes Nacionales, considera
        entre sus áreas temáticas el sector Patrimonio, además de señalar estándares en relación a la información
        georreferenciada.</p>

      <p>Desde sus inicios el Área de Patrimonio del SNIT-IDE Chile estuvo bajo la coordinación del Centro Nacional de
        Conservación y Restauración (CNCR) dependiente del actual Ministerio de las Culturas, las Artes y el Patrimonio,
        congregando a numerosas instituciones públicas del ámbito patrimonial.</p>

      <div class=\"collapse\" id=\"collapseAbout\">
        <p>El trabajo multisectorial del Área de Patrimonio permite generar importantes frutos, como la elaboración de
          estándares para el registro de patrimonio arqueológico y de patrimonio edificado, junto con el desarrollo del
          primer “Atlas del patrimonio cultural y natural, Chile 2016”.</p>

        <p>Aportes significativos a la IDE Patrimonio lo constituyen también el proyecto GeoportalCMN (2014) del Consejo
          de Monumentos Nacionales (CMN), que permite interactuar con la información georreferenciada de los monumentos
          protegidos por la Ley N° 17.288 en las categorías de Monumentos Históricos, Zonas Típicas y Santuarios de la
          Naturaleza. También la plataforma SIGPA (Sistema de Información para la Gestión del Patrimonio Cultural Inmaterial)
          de la Subdirección Nacional de Patrimonio Cultural Inmaterial del Servicio Nacional del Patrimonio Cultural para
          la identificación y el recuento de elementos de patrimonio cultural inmaterial en Chile y de sus respectivos cultores
          y cultoras, junto con el formulario de Solicitud Ciudadana para el ingreso ciudadano de elementos inmateriales
          que se postulan al Proceso para la Salvaguardia.</p>

        <p>La información de los sistemas nacionales de Museos, Archivos y Bibliotecas del Servicio Nacional del Patrimonio
          Cultural fue levantada por los equipos profesionales de las respectivas Subdirecciones a lo largo del país,
          y posteriormente sistematizada por la Unidad de Patrimonio y Territorio del CNCR, para su incorporación a la
          IDE Patrimonio.</p>

        <p>La puesta en marcha del Ministerio de las Culturas, las Artes y el Patrimonio en 2018 a partir de la Ley 21.045,
          nos invita a una integración de los registros relacionados con el patrimonio  cultural, que se manifiesta en esta
          IDE Patrimonio, que es fruto del trabajo técnico del Servicio Nacional del Patrimonio Cultural representado por
          el Centro Nacional de Restauración y Conservación, Consejo de Monumentos Nacionales, Subdirección Nacional de
          Pueblos Originarios, Subdirección Nacional de Patrimonio Cultural Inmaterial y Políticas Digitales, en
          coordinación con la Subsecretaría del Patrimonio Cultural, aportando a la promoción, gestión y difusión del
          patrimonio cultural en Chile.</p>
      </div>

      <button class=\"btn btn-ide-patrimonio w-100 hide-collapse-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseAbout\" aria-expanded=\"false\" aria-controls=\"collapseAbout\">
        Leer más
      </button>
    </div>
  </div>
</div>

";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\twig_tweak\TwigExtension']->drupalBlock("ide_patrimonio_slider"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/acerca-de.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 83,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/acerca-de.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/acerca-de.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 6);
        static $functions = array("drupal_block" => 83);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                ['drupal_block']
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
