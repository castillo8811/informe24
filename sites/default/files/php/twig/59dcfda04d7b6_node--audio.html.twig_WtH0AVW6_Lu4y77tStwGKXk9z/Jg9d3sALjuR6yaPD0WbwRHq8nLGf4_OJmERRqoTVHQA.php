<?php

/* themes/informe24/templates/node--audio.html.twig */
class __TwigTemplate_52784d11839303963a8f9113c9bce46170412a2f7f886837fe423e809a0f45b2 extends Twig_Template
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
        $tags = array("set" => 69, "if" => 80);
        $filters = array("clean_class" => 70);
        $functions = array("url" => 112);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
                array('url')
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

        // line 69
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 1 => (($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 74
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 5 => "clearfix", 6 => "node-article-wrapper");
        // line 78
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 80
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 81
            echo "    <h2";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
      <a href=\"";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
    </h2>
    <span class=\"node-date text-xs-center\">Última actualización: ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true));
            echo "</span>
  ";
        }
        // line 86
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 88
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 89
            echo "    <footer>
      <div";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node-author-section"), "method"), "html", null, true));
            echo ">
        <div class=\"node-author-section-inner\">
          <div class=\"pull-left col-sm-3\">
            ";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
          </div>
          <div class=\"pull-left col-sm-9\">
            <span class=\"node-programa text-xs-center pull-left\">";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_programa", array()), "html", null, true));
            echo "</span>
            <span class=\"node-conductor text-xs-center pull-left\">";
            // line 97
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_conductor", array()), "html", null, true));
            echo "</span>
          </div>
          <div class=\"clearfix\"></div>
        </div>
        ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 105
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node-body"), "method"), "html", null, true));
        echo ">
    ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_soundcloud_item", array()), "html", null, true));
        echo "
  </div>

  <div id=\"social-shares\" class=\"block\">
    <div id=\"social-shares-inner\" class=\"col-sm-6 col-xs-12\">
      <div id=\"fb-share\" class=\"col-lg-4\">
        <a class=\"share-btn\" href=\"https://www.facebook.com/sharer/sharer.php?app_id=1855953211331152&sdk=joey&u=";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
        echo "&display=popup&ref=plugin&src=share_button\" onclick=\"return !window.open(this.href, 'Facebook', 'width=640,height=580')\"></a>
        <span></span>
      </div>
      <div id=\"tw-share\" class=\"col-lg-4\">
        <a class=\"block\" target=\"_blank\" href=\"http://twitter.com/home?status=Estooy leyendo ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
        echo " via @masmusicabanda\">
          <span></span>
        </a>
      </div>
      <div id=\"whatsapp-share\" class=\"col-lg-4\">
        <a class=\"block loader-none\" href=\"whatsapp://send?text=Mira que estoy leyendo en ";
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
        echo "\">
          <span></span>
        </a>
      </div>
      <div class=\"both\"></div>
    </div>
    <div class=\"both\"></div>
  </div>

</article>";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/node--audio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 121,  140 => 116,  133 => 112,  124 => 106,  119 => 105,  112 => 101,  105 => 97,  101 => 96,  95 => 93,  89 => 90,  86 => 89,  84 => 88,  78 => 86,  73 => 84,  66 => 82,  61 => 81,  59 => 80,  55 => 79,  50 => 78,  48 => 74,  47 => 73,  46 => 72,  45 => 71,  44 => 70,  43 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
set classes = [
node.bundle|clean_class,
node.isPromoted() ? 'is-promoted',
node.isSticky() ? 'is-sticky',
not node.isPublished() ? 'is-unpublished',
view_mode ? view_mode|clean_class,
'clearfix','node-article-wrapper'
]
%}
<article{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
    <span class=\"node-date text-xs-center\">Última actualización: {{ date }}</span>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer>
      <div{{ author_attributes.addClass('node-author-section') }}>
        <div class=\"node-author-section-inner\">
          <div class=\"pull-left col-sm-3\">
            {{ author_picture }}
          </div>
          <div class=\"pull-left col-sm-9\">
            <span class=\"node-programa text-xs-center pull-left\">{{ content.field_programa }}</span>
            <span class=\"node-conductor text-xs-center pull-left\">{{ content.field_conductor }}</span>
          </div>
          <div class=\"clearfix\"></div>
        </div>
        {{ metadata }}
      </div>
    </footer>
  {% endif %}
  <div{{ content_attributes.addClass('node-body') }}>
    {{ content.field_soundcloud_item }}
  </div>

  <div id=\"social-shares\" class=\"block\">
    <div id=\"social-shares-inner\" class=\"col-sm-6 col-xs-12\">
      <div id=\"fb-share\" class=\"col-lg-4\">
        <a class=\"share-btn\" href=\"https://www.facebook.com/sharer/sharer.php?app_id=1855953211331152&sdk=joey&u={{ url('<current>') }}&display=popup&ref=plugin&src=share_button\" onclick=\"return !window.open(this.href, 'Facebook', 'width=640,height=580')\"></a>
        <span></span>
      </div>
      <div id=\"tw-share\" class=\"col-lg-4\">
        <a class=\"block\" target=\"_blank\" href=\"http://twitter.com/home?status=Estooy leyendo {{ url('<current>') }} via @masmusicabanda\">
          <span></span>
        </a>
      </div>
      <div id=\"whatsapp-share\" class=\"col-lg-4\">
        <a class=\"block loader-none\" href=\"whatsapp://send?text=Mira que estoy leyendo en {{ url('<current>') }}\">
          <span></span>
        </a>
      </div>
      <div class=\"both\"></div>
    </div>
    <div class=\"both\"></div>
  </div>

</article>", "themes/informe24/templates/node--audio.html.twig", "/var/www/html/informe24/themes/informe24/templates/node--audio.html.twig");
    }
}