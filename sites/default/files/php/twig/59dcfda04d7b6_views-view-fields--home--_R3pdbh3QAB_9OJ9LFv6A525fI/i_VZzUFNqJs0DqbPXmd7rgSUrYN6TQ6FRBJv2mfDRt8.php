<?php

/* themes/informe24/templates/views/views-view-fields--home--news_home.html.twig */
class __TwigTemplate_633b5a5bdb4c2a81b964b28dbe3386feae86c5ade5b7b6408f327cb8ea620bf0 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"nodelist-title\">
    ";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "
</div>

<div class=\"col-md-12 block\">
    <div>
        <div class=\"pull-left col-sm-4\">
            ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_conductor", array()), "content", array()), "html", null, true));
        echo "
        </div>
        <div class=\"nodelist-autor pull-left col-sm-8\">
            ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_programa", array()), "content", array()), "html", null, true));
        echo "
            <div class=\"node-autor-name\">
                ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_conductor_1", array()), "content", array()), "html", null, true));
        echo "
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"nodelist-audiolink\">
    <span>
        Escuchar <img src=\"/themes/informe24/images/icono_audio.png\" />
    </span>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/views/views-view-fields--home--news_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 11,  55 => 8,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"nodelist-title\">
    {{ fields.title.content }}
</div>

<div class=\"col-md-12 block\">
    <div>
        <div class=\"pull-left col-sm-4\">
            {{ fields.field_conductor.content }}
        </div>
        <div class=\"nodelist-autor pull-left col-sm-8\">
            {{ fields.field_programa.content }}
            <div class=\"node-autor-name\">
                {{ fields.field_conductor_1.content }}
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
</div>

<div class=\"nodelist-audiolink\">
    <span>
        Escuchar <img src=\"/themes/informe24/images/icono_audio.png\" />
    </span>
</div>", "themes/informe24/templates/views/views-view-fields--home--news_home.html.twig", "/var/www/html/informe24/themes/informe24/templates/views/views-view-fields--home--news_home.html.twig");
    }
}
