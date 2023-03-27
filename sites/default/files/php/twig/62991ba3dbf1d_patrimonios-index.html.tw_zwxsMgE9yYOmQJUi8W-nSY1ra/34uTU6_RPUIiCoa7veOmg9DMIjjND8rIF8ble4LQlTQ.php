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

/* modules/custom/ide_patrimonio/templates/patrimonios-index.html.twig */
class __TwigTemplate_8c4c3c358fc4096461e0029b700291f5fa7a3518f352f4c36fab84ab3619335f extends \Twig\Template
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
";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ide_patrimonio/ide_patrimonio_patrimonios"), "html", null, true);
        echo "
<div class=\"container-fluid bg-ide pt-3\">
  <div class=\"container pb-5\">
    <h2 class=\"title-ide color-black\">Descubre el Patrimonio Cultural en Chile</h2>
    <input type=\"hidden\" id=\"regionesJson\" value=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["regionesJson"] ?? null), 6, $this->source), "html", null, true);
        echo "\">
    <form method=\"get\" action=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.patrimonios"));
        echo "\" class=\"mt-5\">
      <input type=\"hidden\" id=\"resultPerPageHidden\" name=\"result-per-page\">
      <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12\">
          <div class=\"input-group\">
            <input id=\"patrimonio-search-input\" name=\"search-text\" type=\"text\" class=\"form-control text-right\" placeholder=\"Busca un registro patrimonial en Chile\" value=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "searchText", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\">
            <div class=\"input-group-append\">
              <span class=\"input-group-text\" id=\"patrimonio-search-input-addon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                  <path fill-rule=\"evenodd\" d=\"M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z\"/>
                  <path fill-rule=\"evenodd\" d=\"M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z\"/>
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row py-5\">
        <div class=\"col-md-4\">
          <select name=\"region\" class=\"form-control w-100 ide-control\" id=\"region\">
            <option value=\"\">Seleccione una región</option>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["regiones"] ?? null));
        foreach ($context['_seq'] as $context["region"] => $context["comuna"]) {
            // line 30
            echo "              <option value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["region"], 30, $this->source), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "region", [], "any", false, false, true, 30) === $context["region"])) {
                echo " selected ";
            }
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["region"], 30, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['comuna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "          </select>
        </div>
        <div class=\"col-md-4\">
          <select name=\"comuna\" class=\"form-control w-100 ide-control\" id=\"comuna\">
            <option value=\"\">Seleccione una comuna</option>
            ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "region", [], "any", false, false, true, 37)) {
            // line 38
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["regiones"] ?? null));
            foreach ($context['_seq'] as $context["region"] => $context["comunas"]) {
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "region", [], "any", false, false, true, 39) === $context["region"])) {
                    // line 40
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["comunas"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["comuna"]) {
                        // line 41
                        echo "                    <option value=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comuna"], "comuna", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "comuna", [], "any", false, false, true, 41) === twig_get_attribute($this->env, $this->source, $context["comuna"], "comuna", [], "any", false, false, true, 41))) {
                            echo " selected ";
                        }
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comuna"], "comuna", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "</option>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comuna'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                ";
                }
                // line 44
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['region'], $context['comunas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        }
        // line 46
        echo "          </select>
        </div>
        <div class=\"col-md-4\">
          <select name=\"capa\" id=\"capa\" class=\"form-control w-100 ide-control\">
            <option value=\"\">Seleccione un tipo de patrimonio</option>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["capas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["capa"]) {
            // line 52
            echo "              <option value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "capa", [], "any", false, false, true, 52) === twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 52))) {
                echo " selected ";
            }
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["capa"], "name", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['capa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "          </select>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"offset-md-8 col-md-4\">
          <input type=\"submit\" class=\"form-control w-100 btn btn-ide-patrimonio-secondary\" value=\"Buscar\"/>
        </div>
      </div>
    </form>

    <div id=\"searchFilters\" class=\"row row-cols-3 \">
      <div class=\"col-auto ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "region", [], "any", false, false, true, 65) === "")) {
            echo "d-none ";
        }
        echo " mt-3\" id=\"filterRegionDiv\">
        <div>
          <span id=\"filterRegionButtonText\">";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "region", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "</span>
          <button id=\"btnFilterHideRegion\" class=\"btn-transparent\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21.668\" height=\"17\" viewBox=\"0 0 21.668 21.668\">
              <g id=\"Grupo_15435\" data-name=\"Grupo 15435\" transform=\"translate(2.121 2.121)\">
                <line id=\"Línea_64\" data-name=\"Línea 64\" y1=\"24.642\" transform=\"translate(17.425 17.425) rotate(135)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
                <line id=\"Línea_65\" data-name=\"Línea 65\" y2=\"24.642\" transform=\"translate(17.425) rotate(45)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
      <div class=\"col-auto ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "comuna", [], "any", false, false, true, 78) === "")) {
            echo "d-none ";
        }
        echo "mt-3\" id=\"filterComunaDiv\">
        <div>
          <span id=\"filterComunaButtonText\">";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "comuna", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "</span>
          <button id=\"btnFilterHideComuna\" class=\"btn-transparent\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21.668\" height=\"17\" viewBox=\"0 0 21.668 21.668\">
              <g id=\"Grupo_15435\" data-name=\"Grupo 15435\" transform=\"translate(2.121 2.121)\">
                <line id=\"Línea_64\" data-name=\"Línea 64\" y1=\"24.642\" transform=\"translate(17.425 17.425) rotate(135)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
                <line id=\"Línea_65\" data-name=\"Línea 65\" y2=\"24.642\" transform=\"translate(17.425) rotate(45)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
      <div class=\"col-auto ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "capa", [], "any", false, false, true, 91) === "")) {
            echo "d-none ";
        }
        echo "mt-3\" id=\"filterCapaDiv\">
        <div>
          <span id=\"filterCapaButtonText\">";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "capa", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "</span>
          <button id=\"btnFilterHideCapa\" class=\"btn-transparent\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21.668\" height=\"17\" viewBox=\"0 0 21.668 21.668\">
              <g id=\"Grupo_15435\" data-name=\"Grupo 15435\" transform=\"translate(2.121 2.121)\">
                <line id=\"Línea_64\" data-name=\"Línea 64\" y1=\"24.642\" transform=\"translate(17.425 17.425) rotate(135)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
                <line id=\"Línea_65\" data-name=\"Línea 65\" y2=\"24.642\" transform=\"translate(17.425) rotate(45)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
      <div class=\"col-auto ";
        // line 104
        if (($context["noFilters"] ?? null)) {
            echo "d-none ";
        }
        echo " mt-3\" id=\"limpiarTodoDiv\">
        <div>
          <span>Limpiar todo</span>
          <button id=\"btnFilterHideAll\" class=\"btn-transparent\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"21.668\" height=\"17\" viewBox=\"0 0 21.668 21.668\">
              <g id=\"Grupo_15435\" data-name=\"Grupo 15435\" transform=\"translate(2.121 2.121)\">
                <line id=\"Línea_64\" data-name=\"Línea 64\" y1=\"24.642\" transform=\"translate(17.425 17.425) rotate(135)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
                <line id=\"Línea_65\" data-name=\"Línea 65\" y2=\"24.642\" transform=\"translate(17.425) rotate(45)\" fill=\"none\" stroke=\"#4a4a4a\" stroke-linecap=\"round\" stroke-width=\"3\"/>
              </g>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class=\"row mt-5\">
      <div class=\"col center-vertical\">
        <div id=\"patrimonios-title-container\" class=\"my-auto\">
          ";
        // line 122
        if (($context["noFilters"] ?? null)) {
            // line 123
            echo "            <h4><strong>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalItems"] ?? null), 123, $this->source), "html", null, true);
            echo " Patrimonios</strong></h4>
          ";
        } else {
            // line 125
            echo "            <h4><strong>Registros encontrados ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["totalItems"] ?? null), 125, $this->source), "html", null, true);
            echo " </strong></h4>
          ";
        }
        // line 127
        echo "        </div>
      </div>
      <div class=\"col-auto\">
        <div class=\"row\">
          <div class=\"col-auto\">
            <div class=\"form-inline\">
              <div class=\"form-group\">
                <label for=\"resultPerPage\">mostrar</label>
                <select id=\"resultPerPage\" class=\"form-control ml-2 p-0\">
                  <option value=\"6\" ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "resultsPerPage", [], "any", false, false, true, 136) === 6)) {
            echo " selected ";
        }
        echo ">06</option>
                  <option value=\"9\" ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "resultsPerPage", [], "any", false, false, true, 137) === 9)) {
            echo " selected ";
        }
        echo ">09</option>
                  <option value=\"12\" ";
        // line 138
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "resultsPerPage", [], "any", false, false, true, 138) === 12)) {
            echo " selected ";
        }
        echo ">12</option>
                </select>
              </div>
            </div>
          </div>
          <div class=\"col-auto\">

            ";
        // line 145
        if (($context["pager"] ?? null)) {
            // line 146
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 146, $this->source), "html", null, true);
            echo "
            ";
        }
        // line 148
        echo "          </div>
        </div>
      </div>
    </div>
    <hr class=\"horizontal-line\">

    ";
        // line 154
        $context["columns"] = 3;
        // line 155
        echo "    <div class=\" my-5 patrimonios\">
      <div class=\"row\">
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patrimonios"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 158
            echo "        <div class=\"col-md-4\">
          <div class=\"card\">
            <a href=\"";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.patrimonio.show", ["patrimonio" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, true, 160)]), "html", null, true);
            echo "\">
              <img class=\"card-img-top ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((twig_in_filter("images/capas", twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 161)) && twig_in_filter("_540.png", twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 161)))) ? ("img-ic-capa") : ("")));
            echo "\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "\" alt=\"Card image cap\">
            </a>
            <div class=\"card-body\">
              <div class=\"card-title\">
                <h5 class=\"max-lines-2\" title=\"";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "\"><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("ide_patrimonio.patrimonio.show", ["patrimonio" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, true, 165)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "</a></h5>
              </div>
            </div>
          </div>
        </div>
        ";
            // line 170
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 170) % ($context["columns"] ?? null)) == 0)) {
                // line 171
                echo "      </div>
      <div class=\"row mt-3\">
        ";
            }
            // line 174
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "      </div>
    </div>

    <div class=\"row\">
      <div class=\"col\"></div>
      <div class=\"col-auto\">
        <div class=\"form-inline\">
          <div class=\"form-group\">
            <label for=\"resultPerPageBottom\">mostrar</label>
            <select id=\"resultPerPageBottom\" class=\"form-control ml-2 p-0\">
              <option value=\"6\" ";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "resultsPerPage", [], "any", false, false, true, 185) === 6)) {
            echo " selected ";
        }
        echo ">06</option>
              <option value=\"9\" ";
        // line 186
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "resultsPerPage", [], "any", false, false, true, 186) === 9)) {
            echo " selected ";
        }
        echo ">09</option>
              <option value=\"12\" ";
        // line 187
        if ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "resultsPerPage", [], "any", false, false, true, 187) === 12)) {
            echo " selected ";
        }
        echo ">12</option>
            </select>
          </div>
        </div>
      </div>
      <div class=\"col-auto\">

        ";
        // line 194
        if (($context["pager"] ?? null)) {
            // line 195
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 195, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 197
        echo "      </div>
    </div>

    ";
        // line 200
        if (($context["showVisorSliderEstadisticas"] ?? null)) {
            // line 201
            echo "      <div class=\"ide-iframe-container mb-40\">
        <iframe height=\"400\" id=\"iframe-field_iframe\" title=\"\"
                allow=\"autoplay,camera,microphone,payment,accelerometer,geolocation,encrypted-media,gyroscope\"
                src=\"";
            // line 204
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["urlIframeVisor"] ?? null), 204, $this->source), "html", null, true);
            echo "\"
                class=\"w-100 mt-17\">
        </iframe>
        <img src=\"/";
            // line 207
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["module_path"] ?? null), 207, $this->source), "html", null, true);
            echo "/assets/images/simbologia.png\"
             alt=\"iframe-visor-territorial-leyenda\" class=\"w-100 mt-25\">

      </div>
      ";
            // line 211
            $this->loadTemplate("@ide_patrimonio/partials/statistics-slider.html.twig", "modules/custom/ide_patrimonio/templates/patrimonios-index.html.twig", 211)->display($context);
            // line 212
            echo "    ";
        }
        // line 213
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/ide_patrimonio/templates/patrimonios-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 213,  484 => 212,  482 => 211,  475 => 207,  469 => 204,  464 => 201,  462 => 200,  457 => 197,  451 => 195,  449 => 194,  437 => 187,  431 => 186,  425 => 185,  413 => 175,  399 => 174,  394 => 171,  392 => 170,  380 => 165,  371 => 161,  367 => 160,  363 => 158,  346 => 157,  342 => 155,  340 => 154,  332 => 148,  326 => 146,  324 => 145,  312 => 138,  306 => 137,  300 => 136,  289 => 127,  283 => 125,  277 => 123,  275 => 122,  252 => 104,  238 => 93,  231 => 91,  217 => 80,  210 => 78,  196 => 67,  189 => 65,  176 => 54,  161 => 52,  157 => 51,  150 => 46,  147 => 45,  141 => 44,  138 => 43,  123 => 41,  118 => 40,  115 => 39,  110 => 38,  108 => 37,  101 => 32,  86 => 30,  82 => 29,  62 => 12,  54 => 7,  50 => 6,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/ide_patrimonio/templates/patrimonios-index.html.twig", "/var/www/html/web_patrimoniosculturales/modules/custom/ide_patrimonio/templates/patrimonios-index.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 29, "if" => 30, "set" => 154, "include" => 211);
        static $filters = array("escape" => 1);
        static $functions = array("attach_library" => 1, "path" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set', 'include'],
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
