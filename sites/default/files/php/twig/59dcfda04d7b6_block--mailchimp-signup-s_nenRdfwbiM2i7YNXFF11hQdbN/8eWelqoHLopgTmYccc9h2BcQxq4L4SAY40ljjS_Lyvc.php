<?php

/* themes/informe24/templates/block--mailchimp-signup-subscribe-block.html.twig */
class __TwigTemplate_68c270f237e1d10113da0666d9d1f921e6a1c121da4c32df5133b32dc1e384ee extends Twig_Template
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
        echo "<div id=\"newsletter-subscription\" class=\"pall10 mt10\">
    <div class=\"form-section pull-left col-sm-4\">
        <img width=\"100%\" src=\"/themes/informe24/logo.png\" />
    </div>
    <div class=\"form-section pull-left col-sm-8\">
        <div id=\"newsletter-subscription-form\">
            ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
            <span id=\"mailchimp-signup-subscribe-block-informe24-mc-form-error-message\"></span>
        </div>
    </div>
    <div class=\"clear\"></div>
    <span class=\"text-white block pall5 text-center mt10 pull-none newsletter-conditions\">
            Al continuar estas aceptando nuestro Aviso de privacidad, nuestros Términos y condiciones de uso
    </span>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/block--mailchimp-signup-subscribe-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"newsletter-subscription\" class=\"pall10 mt10\">
    <div class=\"form-section pull-left col-sm-4\">
        <img width=\"100%\" src=\"/themes/informe24/logo.png\" />
    </div>
    <div class=\"form-section pull-left col-sm-8\">
        <div id=\"newsletter-subscription-form\">
            {{ content }}
            <span id=\"mailchimp-signup-subscribe-block-informe24-mc-form-error-message\"></span>
        </div>
    </div>
    <div class=\"clear\"></div>
    <span class=\"text-white block pall5 text-center mt10 pull-none newsletter-conditions\">
            Al continuar estas aceptando nuestro Aviso de privacidad, nuestros Términos y condiciones de uso
    </span>
</div>", "themes/informe24/templates/block--mailchimp-signup-subscribe-block.html.twig", "/var/www/html/informe24/themes/informe24/templates/block--mailchimp-signup-subscribe-block.html.twig");
    }
}
