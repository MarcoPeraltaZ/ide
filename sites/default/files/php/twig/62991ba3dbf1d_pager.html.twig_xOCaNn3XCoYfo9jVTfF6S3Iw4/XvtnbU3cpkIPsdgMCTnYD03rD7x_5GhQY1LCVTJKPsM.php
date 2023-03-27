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

/* themes/custom/b4_idepatrimonio/templates/navigation/pager.html.twig */
class __TwigTemplate_058015e42e034ba33c66e8a1916c8f2b07a9b832d1b95dc3cd00f4ce4b4b526f extends \Twig\Template
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
        // line 33
        $context["btn_classes"] = [0 => "btn", 1 => "btn-transparent"];
        // line 38
        if (($context["items"] ?? null)) {
            // line 39
            echo "  <nav class=\"pager text-right\" role=\"toolbar\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items js-pager__items btn-group\" role=\"group\">
      ";
            // line 43
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 43)) {
                // line 44
                echo "        <li class=\"pager__item pager__item--previous btn btn-navigation\">
          <a href=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 45), "href", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\" title=\"Anterior página\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 45), "attributes", [], "any", false, false, true, 45), 45, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">Anterior</span>
            <span aria-hidden=\"true\"><</span>
          </a>
        </li>
      ";
            }
            // line 51
            echo "      ";
            // line 52
            echo "      ";
            // line 55
            echo "      ";
            // line 56
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 56));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 57
                echo "        <li class=\"px-2 btn pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" active btn-dark") : ("")));
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["btn_classes"] ?? null), 57, $this->source), " "), "html", null, true);
                echo "\">
          ";
                // line 58
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 59
                    echo "            ";
                    $context["title"] = t("Página actual");
                    // line 60
                    echo "          ";
                } else {
                    // line 61
                    echo "            ";
                    $context["title"] = t("Ir a @key", ["@key" => $context["key"]]);
                    // line 62
                    echo "          ";
                }
                // line 63
                echo "          <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 63, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 63), 63, $this->source), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Página actual")) : (t("Página"))));
                echo "
            </span>";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 67, $this->source), "html", null, true);
                // line 68
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "      ";
            // line 72
            echo "      ";
            // line 75
            echo "      ";
            // line 76
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 76)) {
                // line 77
                echo "        <li class=\"pager__item pager__item--next btn btn-navigation\">
          <a href=\"";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 78), "href", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Próxima página"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 78), "attributes", [], "any", false, false, true, 78), 78, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Próxima página"));
                echo "</span>
            <span aria-hidden=\"true\">></span>
          </a>
        </li>
      ";
            }
            // line 84
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/b4_idepatrimonio/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 84,  144 => 79,  136 => 78,  133 => 77,  130 => 76,  128 => 75,  126 => 72,  124 => 71,  116 => 68,  114 => 67,  110 => 65,  100 => 63,  97 => 62,  94 => 61,  91 => 60,  88 => 59,  86 => 58,  79 => 57,  74 => 56,  72 => 55,  70 => 52,  68 => 51,  57 => 45,  54 => 44,  51 => 43,  46 => 40,  43 => 39,  41 => 38,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/b4_idepatrimonio/templates/navigation/pager.html.twig", "/var/www/html/web_patrimoniosculturales/themes/custom/b4_idepatrimonio/templates/navigation/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 33, "if" => 38, "for" => 56);
        static $filters = array("t" => 40, "escape" => 45, "without" => 45, "join" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['t', 'escape', 'without', 'join'],
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
