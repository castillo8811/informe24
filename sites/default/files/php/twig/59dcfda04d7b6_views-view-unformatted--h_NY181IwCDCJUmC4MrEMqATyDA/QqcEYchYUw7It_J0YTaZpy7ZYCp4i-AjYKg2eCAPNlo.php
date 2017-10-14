<?php

/* themes/informe24/templates/views/views-view-unformatted--home--news_home.html.twig */
class __TwigTemplate_6b05f9514b5c308c5b5a30518a8bf89db72dcbab19cdadc4004fa9f16765fc4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 1, "for" => 15);
        $filters = array("first" => 1, "slice" => 2);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'for'),
                array('first', 'slice'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["stage"] = twig_first($this->env, (isset($context["rows"]) ? $context["rows"] : null));
        // line 2
        $context["rows"] = twig_slice($this->env, (isset($context["rows"]) ? $context["rows"] : null), 1, 6);
        // line 3
        echo "
<div id=\"stage\">
  <div class=\"col-md-12 stageInner\">
    ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["stage"]) ? $context["stage"] : null), "content", array()), "html", null, true));
        echo "
    <div class=\"clear\"></div>
  </div>
</div>

<div id=\"last-news\">
  <div class=\"block PN3r0 text-bold ml10 text-center\">
    <span class=\"text-danger text-center\">Más de Informe 24</span>
  </div>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 16
            echo "    ";
            // line 17
            $context["row_classes"] = array(0 => ((            // line 18
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")), 1 => "panel", 2 => "panel-default");
            // line 23
            echo "
    <div class=\"nodeListItem col-md-4 col-xs-6\">
      <div class=\"nodeListItemInner\">
        ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/views/views-view-unformatted--home--news_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  78 => 26,  73 => 23,  71 => 18,  70 => 17,  68 => 16,  64 => 15,  52 => 6,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set stage = rows | first %}
{% set rows = rows | slice(1,6) %}

<div id=\"stage\">
  <div class=\"col-md-12 stageInner\">
    {{ stage.content }}
    <div class=\"clear\"></div>
  </div>
</div>

<div id=\"last-news\">
  <div class=\"block PN3r0 text-bold ml10 text-center\">
    <span class=\"text-danger text-center\">Más de Informe 24</span>
  </div>
  {% for row in rows %}
    {%
    set row_classes = [
    default_row_class ? 'views-row',
    'panel',
    'panel-default',
    ]
    %}

    <div class=\"nodeListItem col-md-4 col-xs-6\">
      <div class=\"nodeListItemInner\">
        {{ row.content }}
      </div>
    </div>
  {% endfor %}
</div>", "themes/informe24/templates/views/views-view-unformatted--home--news_home.html.twig", "/var/www/html/informe24/themes/informe24/templates/views/views-view-unformatted--home--news_home.html.twig");
    }
}
