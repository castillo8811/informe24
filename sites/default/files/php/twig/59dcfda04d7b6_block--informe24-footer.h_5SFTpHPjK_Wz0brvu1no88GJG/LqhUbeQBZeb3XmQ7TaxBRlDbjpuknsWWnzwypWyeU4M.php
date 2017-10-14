<?php

/* themes/informe24/templates/block--informe24-footer.html.twig */
class __TwigTemplate_79d252a5df98a4c415851e2dbd0ce69262e4aa99500e4c74038957549be41b35 extends Twig_Template
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
        echo "<div id=\"footer-brand\">
        <a class=\"navbar-brand\" href=\"#!\">
            <img src=\"/themes/informe24/logo.png\" />
        </a>
</div>
<div id=\"footer-spotify\" class=\"text-center text-white\">
    <img src=\"/themes/informe24/images/icono_correo.png\" />
    <a href=\"/contact\">Contacto</a>
</div>
<div id=\"foot-year\" class=\"text-center text-white black\">
    Derechos reservados 2017
</div>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/block--informe24-footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"footer-brand\">
        <a class=\"navbar-brand\" href=\"#!\">
            <img src=\"/themes/informe24/logo.png\" />
        </a>
</div>
<div id=\"footer-spotify\" class=\"text-center text-white\">
    <img src=\"/themes/informe24/images/icono_correo.png\" />
    <a href=\"/contact\">Contacto</a>
</div>
<div id=\"foot-year\" class=\"text-center text-white black\">
    Derechos reservados 2017
</div>", "themes/informe24/templates/block--informe24-footer.html.twig", "/var/www/html/informe24/themes/informe24/templates/block--informe24-footer.html.twig");
    }
}
