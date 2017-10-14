<?php

/* themes/informe24/templates/page.html.twig */
class __TwigTemplate_188b02bc8b19c4e7a65b8c910fc53272cc8b5e313a6276af09e6e00b380fd82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'highlighted' => array($this, 'block_highlighted'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 69, "if" => 71, "block" => 72);
        $filters = array("clean_class" => 77, "t" => 89);
        $functions = array("url" => 103);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 59
        echo "<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=299482056769007\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


";
        // line 69
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 71
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 72
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 134
        echo "
";
        // line 136
        $this->displayBlock('main', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 210
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 72
    public function block_navbar($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 76
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 77
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 80
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 81
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 82
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 84
        echo "      <div class=\"navbar-header\">
        ";
        // line 85
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 87
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 88
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">
            <img src=\"/themes/informe24/logo.png\" />
          </a>
        ";
        }
        // line 98
        echo "
        ";
        // line 99
        if ((isset($context["node"]) ? $context["node"] : null)) {
            // line 100
            echo "          <div id=\"social-shares\" class=\"pull-right col-md-6 col-xs-7\">
            <div id=\"social-shares-inner\">
              <div id=\"fb-share\" class=\"col-lg-4\">
                <a class=\"share-btn\" href=\"https://www.facebook.com/sharer/sharer.php?app_id=1855953211331152&sdk=joey&u=";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "&display=popup&ref=plugin&src=share_button\" onclick=\"return !window.open(this.href, 'Facebook', 'width=640,height=580')\"></a>
                <span></span>
              </div>
              <div id=\"tw-share\" class=\"col-lg-4\">
                <a class=\"block\" target=\"_blank\" href=\"http://twitter.com/home?status=Estooy leyendo ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo " via @masmusicabanda\">
                  <span></span>
                </a>
              </div>
              <div id=\"whatsapp-share\" class=\"col-lg-4\">
                <a class=\"block loader-none\" href=\"whatsapp://send?text=Mira que estoy leyendo en ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>")));
            echo "\">
                  <span></span>
                </a>
              </div>
              <div class=\"both\"></div>
            </div>
            <div class=\"both\"></div>
          </div>
        ";
        }
        // line 121
        echo "      </div>
      ";
        // line 123
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 124
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 128
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 129
            echo "        </div>
      ";
        }
        // line 131
        echo "    </header>
  ";
    }

    // line 136
    public function block_main($context, array $blocks = array())
    {
        // line 137
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">
      ";
        // line 140
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 141
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 144
            echo "      ";
        }
        // line 145
        echo "
      ";
        // line 147
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 148
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 153
            echo "      ";
        }
        // line 154
        echo "

      ";
        // line 157
        echo "      ";
        // line 158
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 159
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 160
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 161
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-8") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 162
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-8") : ("")));
        // line 165
        echo "      <div id=\"page-content\">
        <section";
        // line 166
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">
          ";
        // line 168
        echo "          ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 169
            echo "            ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 172
            echo "          ";
        }
        // line 173
        echo "
          ";
        // line 175
        echo "          ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 176
            echo "            ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 179
            echo "          ";
        }
        // line 180
        echo "
          ";
        // line 182
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 183
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 186
            echo "          ";
        }
        // line 187
        echo "
          ";
        // line 189
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 193
        echo "        </section>

        ";
        // line 196
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 197
            echo "          ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 202
            echo "        ";
        }
        // line 203
        echo "        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
";
    }

    // line 141
    public function block_highlighted($context, array $blocks = array())
    {
        // line 142
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 148
    public function block_header($context, array $blocks = array())
    {
        // line 149
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 169
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 170
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
            ";
    }

    // line 176
    public function block_action_links($context, array $blocks = array())
    {
        // line 177
        echo "              <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
            ";
    }

    // line 183
    public function block_help($context, array $blocks = array())
    {
        // line 184
        echo "              ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
            ";
    }

    // line 189
    public function block_content($context, array $blocks = array())
    {
        // line 190
        echo "            <a id=\"main-content\"></a>
            ";
        // line 191
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          ";
    }

    // line 197
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 198
        echo "            <aside class=\"sidebar-second col-sm-4 hidden-xs\" role=\"complementary\">
              ";
        // line 199
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 210
    public function block_footer($context, array $blocks = array())
    {
        // line 211
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 212
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/informe24/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 212,  390 => 211,  387 => 210,  380 => 199,  377 => 198,  374 => 197,  368 => 191,  365 => 190,  362 => 189,  355 => 184,  352 => 183,  345 => 177,  342 => 176,  335 => 170,  332 => 169,  325 => 150,  322 => 149,  319 => 148,  312 => 142,  309 => 141,  301 => 203,  298 => 202,  295 => 197,  292 => 196,  288 => 193,  285 => 189,  282 => 187,  279 => 186,  276 => 183,  273 => 182,  270 => 180,  267 => 179,  264 => 176,  261 => 175,  258 => 173,  255 => 172,  252 => 169,  249 => 168,  245 => 166,  242 => 165,  240 => 162,  239 => 161,  238 => 160,  237 => 159,  236 => 158,  234 => 157,  230 => 154,  227 => 153,  224 => 148,  221 => 147,  218 => 145,  215 => 144,  212 => 141,  209 => 140,  203 => 137,  200 => 136,  195 => 131,  191 => 129,  188 => 128,  182 => 125,  179 => 124,  176 => 123,  173 => 121,  161 => 112,  153 => 107,  146 => 103,  141 => 100,  139 => 99,  136 => 98,  124 => 89,  121 => 88,  118 => 87,  114 => 85,  111 => 84,  105 => 82,  103 => 81,  98 => 80,  96 => 77,  95 => 76,  94 => 74,  92 => 73,  89 => 72,  83 => 210,  81 => 209,  78 => 208,  76 => 136,  73 => 134,  69 => 72,  67 => 71,  65 => 69,  53 => 59,);
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
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=299482056769007\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">
            <img src=\"/themes/informe24/logo.png\" />
          </a>
        {% endif %}

        {% if node %}
          <div id=\"social-shares\" class=\"pull-right col-md-6 col-xs-7\">
            <div id=\"social-shares-inner\">
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
        {% endif %}
      </div>
      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">
      {# Highlighted #}
      {% if page.highlighted %}
        {% block highlighted %}
          <div class=\"highlighted\">{{ page.highlighted }}</div>
        {% endblock %}
      {% endif %}

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}


      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-8',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-8'
        ]
      %}
      <div id=\"page-content\">
        <section{{ content_attributes.addClass(content_classes) }}>
          {# Breadcrumbs #}
          {% if breadcrumb %}
            {% block breadcrumb %}
              {{ breadcrumb }}
            {% endblock %}
          {% endif %}

          {# Action Links #}
          {% if action_links %}
            {% block action_links %}
              <ul class=\"action-links\">{{ action_links }}</ul>
            {% endblock %}
          {% endif %}

          {# Help #}
          {% if page.help %}
            {% block help %}
              {{ page.help }}
            {% endblock %}
          {% endif %}

          {# Content #}
          {% block content %}
            <a id=\"main-content\"></a>
            {{ page.content }}
          {% endblock %}
        </section>

        {# Sidebar Second #}
        {% if page.sidebar_second %}
          {% block sidebar_second %}
            <aside class=\"sidebar-second col-sm-4 hidden-xs\" role=\"complementary\">
              {{ page.sidebar_second }}
            </aside>
          {% endblock %}
        {% endif %}
        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}", "themes/informe24/templates/page.html.twig", "/var/www/html/informe24/themes/informe24/templates/page.html.twig");
    }
}
