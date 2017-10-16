<?php

/* themes/informe24/templates/block--informe24-fbhome.html.twig */
class __TwigTemplate_db9b5dd45a8fa3cc447544b66f694bb5d80a9d047bb7d7d9fef0b95e4afd711d extends Twig_Template
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
        echo "<div id=\"fb-widget\">
    <div class=\"fb-widget-head\">@Infome24</div>
    <div class=\"fb-page\" data-href=\"https://www.facebook.com/Informe24Mexico/\" data-tabs=\"timeline\"
         data-small-header=\"false\"
         data-adapt-container-width=\"true\" data-width=\"300\" data-hide-cover=\"false\" data-show-facepile=\"true\">
        <blockquote cite=\"https://www.facebook.com/MasMusicaBanda/\" class=\"fb-xfbml-parse-ignore\"><a
                    href=\"https://www.facebook.com/MasMusicaBanda/\">Informe24</a></blockquote>
    </div>
</div>

<div id=\"tw-widget\" class=\"mt50\">
    <div class=\"tw-widget-head\">@informe24mexico</div>
    <div class=\"tw-page\">
        <a class=\"twitter-timeline\" data-tweet-limit=\"2\" href=\"https://twitter.com/informe24mexico\">Informe24</a>
        <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/block--informe24-fbhome.html.twig";
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
        return new Twig_Source("<div id=\"fb-widget\">
    <div class=\"fb-widget-head\">@Infome24</div>
    <div class=\"fb-page\" data-href=\"https://www.facebook.com/Informe24Mexico/\" data-tabs=\"timeline\"
         data-small-header=\"false\"
         data-adapt-container-width=\"true\" data-width=\"300\" data-hide-cover=\"false\" data-show-facepile=\"true\">
        <blockquote cite=\"https://www.facebook.com/MasMusicaBanda/\" class=\"fb-xfbml-parse-ignore\"><a
                    href=\"https://www.facebook.com/MasMusicaBanda/\">Informe24</a></blockquote>
    </div>
</div>

<div id=\"tw-widget\" class=\"mt50\">
    <div class=\"tw-widget-head\">@informe24mexico</div>
    <div class=\"tw-page\">
        <a class=\"twitter-timeline\" data-tweet-limit=\"2\" href=\"https://twitter.com/informe24mexico\">Informe24</a>
        <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
    </div>
</div>", "themes/informe24/templates/block--informe24-fbhome.html.twig", "/var/www/html/informe24/themes/informe24/templates/block--informe24-fbhome.html.twig");
    }
}
