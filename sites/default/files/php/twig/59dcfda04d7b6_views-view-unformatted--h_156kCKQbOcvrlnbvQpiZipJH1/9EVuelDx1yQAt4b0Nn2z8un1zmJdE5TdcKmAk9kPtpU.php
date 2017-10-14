<?php

/* themes/informe24/templates/views/views-view-unformatted--home--more_news_home.html.twig */
class __TwigTemplate_bd93bce3e4a84c9fb1ffcbd9428435f5465d524d602a24db4a4c864550493d75 extends Twig_Template
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
        $tags = array("for" => 2, "set" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set'),
                array(),
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
        echo "<div class=\"more-news\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "    ";
            // line 4
            $context["row_classes"] = array(0 => ((            // line 5
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")), 1 => "panel", 2 => "panel-default");
            // line 10
            echo "
    <div class=\"nodeListItem col-md-4 col-xs-6\">
      <div class=\"nodeListItemInner\">
        ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  <div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/views/views-view-unformatted--home--more_news_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  60 => 13,  55 => 10,  53 => 5,  52 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"more-news\">
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
  <div class=\"clear\"></div>
</div>", "themes/informe24/templates/views/views-view-unformatted--home--more_news_home.html.twig", "/var/www/html/informe24/themes/informe24/templates/views/views-view-unformatted--home--more_news_home.html.twig");
    }
}
