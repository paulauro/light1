<?php

/* themes/bootstrapsub/templates/page.html.twig */
class __TwigTemplate_69e9e58769fb212a788e2f718974f3a12f1cced8f13a1983eceeca9804e5ca26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 1, "if" => 3, "block" => 4);
        $filters = array("clean_class" => 9, "t" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

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
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 3
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 4
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('main', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 155
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        // line 6
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 8
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 9
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_position", array())))) : ((isset($context["container"]) ? $context["container"] : null))));
        // line 12
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 13
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 14
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 16
        echo "      <div class=\"navbar-header\">
        ";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 20
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 27
        echo "      </div>

      ";
        // line 30
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 31
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 35
        echo "      ";
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => "container"), "method")) {
            // line 36
            echo "        </div>
      ";
        }
        // line 38
        echo "    </header>
  ";
    }

    // line 43
    public function block_main($context, array $blocks = array())
    {
        // line 44
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 48
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 49
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 54
            echo "      ";
        }
        // line 55
        echo "
      

       <!-- start middle content div -->
      ";
        // line 60
        echo "      ";
        // line 61
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 62
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-12 col-md-8 col-md-push-2") : ("")), 1 => ((($this->getAttribute(        // line 63
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-md-10 col-md-push-2") : ("")), 2 => ((($this->getAttribute(        // line 64
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-10") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 65
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 68
        echo "      <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 71
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 72
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 75
            echo "        ";
        }
        // line 76
        echo "
        ";
        // line 78
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 79
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 82
            echo "        ";
        }
        // line 83
        echo "
        ";
        // line 85
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 86
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 89
            echo "        ";
        }
        // line 90
        echo "
        ";
        // line 92
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 93
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 96
            echo "        ";
        }
        // line 97
        echo "
        ";
        // line 99
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "      </section>
      <!-- end middle content div -->


      <!-- start right sidebar content div -->
      ";
        // line 110
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 111
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 124
            echo "      ";
        }
        // line 125
        echo "      <!-- end right sidebar content div -->


      <!-- start leftsidebar content div -->
      ";
        // line 130
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 131
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 144
            echo "      ";
        }
        // line 145
        echo "      <!-- end leftsidebar content div -->




    </div>
  </div>
";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 72
    public function block_highlighted($context, array $blocks = array())
    {
        // line 73
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 79
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 80
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
    }

    // line 86
    public function block_action_links($context, array $blocks = array())
    {
        // line 87
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 93
    public function block_help($context, array $blocks = array())
    {
        // line 94
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
        echo "          <a id=\"main-content\"></a>
          ";
        // line 101
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          <h1> Breakpoint tester useful for debugging: <span class=\"visible-xs\">SIZE XS</span><span class=\"visible-sm\">SIZE SM</span><span class=\"visible-md\">SIZE MD</span><span class=\"visible-lg\">SIZE LG</span></h1>
        ";
    }

    // line 111
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 112
        echo "          ";
        // line 113
        $context["sidebar_second_classes"] = array(0 => ((($this->getAttribute(        // line 114
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-12 col-md-2 pull-right") : ("")), 1 => ((($this->getAttribute(        // line 115
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("") : ("")), 2 => ((($this->getAttribute(        // line 116
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-12 col-md-2") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 117
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("") : ("")));
        // line 120
        echo "            <asideright";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["sidebar_second_classes"]) ? $context["sidebar_second_classes"] : null)), "method"), "removeClass", array(0 => "content_classes"), "method"), "html", null, true));
        echo ">
              ";
        // line 121
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
            </asideright>
        ";
    }

    // line 131
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 132
        echo "          ";
        // line 133
        $context["sidebar_first_classes"] = array(0 => ((($this->getAttribute(        // line 134
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-12 col-md-2 col-md-pull-8") : ("")), 1 => ((($this->getAttribute(        // line 135
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12 col-md-2 col-md-pull-10") : ("")), 2 => ((($this->getAttribute(        // line 136
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 137
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("") : ("")));
        // line 140
        echo "            <asideleft";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["sidebar_first_classes"]) ? $context["sidebar_first_classes"] : null)), "method"), "removeClass", array(0 => "col-sm-2 pull-right"), "method"), "html", null, true));
        echo ">
              ";
        // line 141
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
            </asideleft>
        ";
    }

    // line 155
    public function block_footer($context, array $blocks = array())
    {
        // line 156
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 157
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrapsub/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 157,  397 => 156,  394 => 155,  387 => 141,  382 => 140,  380 => 137,  379 => 136,  378 => 135,  377 => 134,  376 => 133,  374 => 132,  371 => 131,  364 => 121,  359 => 120,  357 => 117,  356 => 116,  355 => 115,  354 => 114,  353 => 113,  351 => 112,  348 => 111,  341 => 101,  338 => 100,  335 => 99,  328 => 94,  325 => 93,  318 => 87,  315 => 86,  308 => 80,  305 => 79,  298 => 73,  295 => 72,  288 => 51,  285 => 50,  282 => 49,  271 => 145,  268 => 144,  265 => 131,  262 => 130,  256 => 125,  253 => 124,  250 => 111,  247 => 110,  240 => 104,  237 => 99,  234 => 97,  231 => 96,  228 => 93,  225 => 92,  222 => 90,  219 => 89,  216 => 86,  213 => 85,  210 => 83,  207 => 82,  204 => 79,  201 => 78,  198 => 76,  195 => 75,  192 => 72,  189 => 71,  183 => 68,  181 => 65,  180 => 64,  179 => 63,  178 => 62,  177 => 61,  175 => 60,  169 => 55,  166 => 54,  163 => 49,  160 => 48,  153 => 44,  150 => 43,  145 => 38,  141 => 36,  138 => 35,  132 => 32,  129 => 31,  126 => 30,  122 => 27,  113 => 21,  110 => 20,  107 => 19,  103 => 17,  100 => 16,  94 => 14,  92 => 13,  87 => 12,  85 => 9,  84 => 8,  83 => 6,  81 => 5,  78 => 4,  72 => 155,  70 => 154,  67 => 153,  65 => 43,  62 => 41,  58 => 4,  56 => 3,  54 => 1,);
    }

    public function getSource()
    {
        return "{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
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
      {% if not navbar_attributes.hasClass('container') %}
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
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass('container') %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      

       <!-- start middle content div -->
      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-12 col-md-8 col-md-push-2',
          page.sidebar_first and page.sidebar_second is empty ? 'col-md-10 col-md-push-2',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-10',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

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
          <h1> Breakpoint tester useful for debugging: <span class=\"visible-xs\">SIZE XS</span><span class=\"visible-sm\">SIZE SM</span><span class=\"visible-md\">SIZE MD</span><span class=\"visible-lg\">SIZE LG</span></h1>
        {% endblock %}
      </section>
      <!-- end middle content div -->


      <!-- start right sidebar content div -->
      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          {%
            set sidebar_second_classes = [
              page.sidebar_first and page.sidebar_second ? 'col-sm-12 col-md-2 pull-right',
              page.sidebar_first and page.sidebar_second is empty ? '',
              page.sidebar_second and page.sidebar_first is empty ? 'col-sm-12 col-md-2',
              page.sidebar_first is empty and page.sidebar_second is empty ? ''
            ]
          %}
            <asideright{{ attributes.addClass(sidebar_second_classes).removeClass('content_classes') }}>
              {{ page.sidebar_second }}
            </asideright>
        {% endblock %}
      {% endif %}
      <!-- end right sidebar content div -->


      <!-- start leftsidebar content div -->
      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          {%
            set sidebar_first_classes = [
              page.sidebar_first and page.sidebar_second ? 'col-sm-12 col-md-2 col-md-pull-8',
              page.sidebar_first and page.sidebar_second is empty ? 'col-sm-12 col-md-2 col-md-pull-10',
              page.sidebar_second and page.sidebar_first is empty ? '',
              page.sidebar_first is empty and page.sidebar_second is empty ? ''
            ]
          %}
            <asideleft{{ attributes.addClass(sidebar_first_classes).removeClass('col-sm-2 pull-right') }}>
              {{ page.sidebar_first }}
            </asideleft>
        {% endblock %}
      {% endif %}
      <!-- end leftsidebar content div -->




    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
";
    }
}
