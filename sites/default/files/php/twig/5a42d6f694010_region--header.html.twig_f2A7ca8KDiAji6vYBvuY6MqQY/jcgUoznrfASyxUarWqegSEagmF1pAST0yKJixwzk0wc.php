<?php

/* themes/bootstrapsub/templates/region--header.html.twig */
class __TwigTemplate_60881d5ce5c3c1f9ffdaac57fdee9491772ee225a152b5b22e089c1d09d2bcee extends Twig_Template
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
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "\t
\t\t
\t\t\t<div class=\"us-masthead\"><!-- start us-masthead -->
\t\t\t\t<div class=\"usa-banner col-xs-12\">

\t\t\t\t\t<img class=\"usa-banner__us-flag\" src=\"/";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/images/US_Flag-2.png\" alt=\"U.S. flag\" />

\t\t\t\t\t<span>An official website of the United States government</span>
\t\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#USABannerMenu\" class=\"\" href=\"javascript:void(0);\"><span>Here’s how you know</span> <span class=\"toggle-indicator\"> </span></a>
\t\t\t\t\t<div class=\"col-xs-12 collapse usa-banner__menu\" id=\"USABannerMenu\" aria-labelledby=\"USMenuButton\">
\t\t\t\t\t\t<div id=\"gov-banner\" class=\"row usa-banner-content usa-grid usa-accordion-content\" aria-hidden=\"true\">
\t\t\t\t\t\t\t      <div class=\"col-xs-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t        <img class=\"usa-banner-icon usa-media_block-img\" src=\"/";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/images/icon-dot-gov.svg\" alt=\"Dot gov\" style=\"width:3em;\">
\t\t\t\t\t\t\t\t\t<div class=\"usa-media_block-body\">
\t\t\t\t\t\t\t\t      <p><strong>The .gov means it’s official.</strong><br>Federal government websites often end in .gov or .mil. Before sharing sensitive information, make sure you're on a federal government site.</p>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"col-xs-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t        <img class=\"usa-banner-icon usa-media_block-img\" src=\"/";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/images/icon-https.svg\" alt=\"SSL\" style=\"width:3em;\">
\t\t\t\t\t\t\t        <div class=\"usa-media_block-body\">
\t\t\t\t\t\t\t\t         <p><strong>The site is secure.</strong><br> The <strong>https://</strong> ensures that you are connecting to the official website and that any information you provide is encrypted and transmitted securely.</p>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div><!-- end us-masthead -->



\t\t\t<div class=\"fda-masthead\"><!-- start fda-masthead -->

\t\t\t\t<div class=\"col-xs-2 col-md-1 col-md-push-11\"> <!-- menu -->
\t\t\t\t\t<a class=\"btn btn-default btn-sm fda-masthead__btn-menu\" href=\"#\"><span class=\"fa fa-bars\" aria-hidden=\"true\">&nbsp;</span> Menu</a>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-8 col-md-6 col-md-pull-1 fda-masthead-logo\"><!-- logo --> 
\t\t\t\t\t<div class=\"gov-webicon fda blue\">
\t\t\t\t\t\t<h1><a href=\"#\" title=\"FDA Homepage\">U.S. Food and Drug Administration</a></h1>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-md-5 col-md-pull-1\"> <!-- search --> 
\t\t\t\t\t<div id=\"search-form\" class=\"fda-masthead__search col-xs-12 col-md-9 pull-right\">
\t\t\t\t\t\t<form role=\"search\" action=\"";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_form_action"]) ? $context["search_form_action"] : null), "html", null, true));
        echo "\" method=\"GET\" id=\"usasearch-search-block-form searchbox\" accept-charset=\"UTF-8\" data-drupal-form-fields=\"query,edit-submit\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"search-popover\" id=\"search-popover\">
\t\t\t\t\t\t\t\t<div class=\"input-group pull-right\" id=\"input-group\">
\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"search\">Search FDA</label>
\t\t\t\t\t\t\t\t\t<input accesskey=\"4\" class=\"form-control search-input usagov-search-autocomplete\" id=\"query\" name=\"query\" aria-autocomplete=\"list\" aria-haspopup=\"true\" data-drupal-selector=\"edit-query\" title=\"Enter the terms you wish to search for.\" placeholder=\"Search FDA\" autocomplete=\"";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_autocomplete"]) ? $context["search_autocomplete"] : null), "html", null, true));
        echo "\" type=\"text\" /> 
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" id=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button data-drupal-selector=\"edit-submit\" type=\"submit\" class=\"btn btn-danger search-btn\" id=\"search-btn\" title=\"Search\"><span class=\"fa fa-search\" aria-hidden=\"true\"><span class=\"sr-only\">Submit search</span></span></button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input data-drupal-selector=\"edit-affiliate\" name=\"affiliate\" value=\"";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["search_affilate"]) ? $context["search_affilate"] : null), "html", null, true));
        echo "\" type=\"hidden\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- Hide DigitalGov block in page so that 'search while you type' functionality works. -->
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["block_usasearchform"]) ? $context["block_usasearchform"] : null), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div><!-- end fda-masthead -->




";
    }

    public function getTemplateName()
    {
        return "themes/bootstrapsub/templates/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 64,  119 => 60,  109 => 53,  101 => 48,  69 => 19,  60 => 13,  50 => 6,  43 => 1,);
    }

    public function getSource()
    {
        return "\t
\t\t
\t\t\t<div class=\"us-masthead\"><!-- start us-masthead -->
\t\t\t\t<div class=\"usa-banner col-xs-12\">

\t\t\t\t\t<img class=\"usa-banner__us-flag\" src=\"/{{ directory }}/assets/images/US_Flag-2.png\" alt=\"U.S. flag\" />

\t\t\t\t\t<span>An official website of the United States government</span>
\t\t\t\t\t<a data-toggle=\"collapse\" data-target=\"#USABannerMenu\" class=\"\" href=\"javascript:void(0);\"><span>Here’s how you know</span> <span class=\"toggle-indicator\"> </span></a>
\t\t\t\t\t<div class=\"col-xs-12 collapse usa-banner__menu\" id=\"USABannerMenu\" aria-labelledby=\"USMenuButton\">
\t\t\t\t\t\t<div id=\"gov-banner\" class=\"row usa-banner-content usa-grid usa-accordion-content\" aria-hidden=\"true\">
\t\t\t\t\t\t\t      <div class=\"col-xs-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t        <img class=\"usa-banner-icon usa-media_block-img\" src=\"/{{ directory }}/assets/images/icon-dot-gov.svg\" alt=\"Dot gov\" style=\"width:3em;\">
\t\t\t\t\t\t\t\t\t<div class=\"usa-media_block-body\">
\t\t\t\t\t\t\t\t      <p><strong>The .gov means it’s official.</strong><br>Federal government websites often end in .gov or .mil. Before sharing sensitive information, make sure you're on a federal government site.</p>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"col-xs-12 col-sm-6 col-md-3\">
\t\t\t\t\t\t\t        <img class=\"usa-banner-icon usa-media_block-img\" src=\"/{{ directory }}/assets/images/icon-https.svg\" alt=\"SSL\" style=\"width:3em;\">
\t\t\t\t\t\t\t        <div class=\"usa-media_block-body\">
\t\t\t\t\t\t\t\t         <p><strong>The site is secure.</strong><br> The <strong>https://</strong> ensures that you are connecting to the official website and that any information you provide is encrypted and transmitted securely.</p>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div><!-- end us-masthead -->



\t\t\t<div class=\"fda-masthead\"><!-- start fda-masthead -->

\t\t\t\t<div class=\"col-xs-2 col-md-1 col-md-push-11\"> <!-- menu -->
\t\t\t\t\t<a class=\"btn btn-default btn-sm fda-masthead__btn-menu\" href=\"#\"><span class=\"fa fa-bars\" aria-hidden=\"true\">&nbsp;</span> Menu</a>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-8 col-md-6 col-md-pull-1 fda-masthead-logo\"><!-- logo --> 
\t\t\t\t\t<div class=\"gov-webicon fda blue\">
\t\t\t\t\t\t<h1><a href=\"#\" title=\"FDA Homepage\">U.S. Food and Drug Administration</a></h1>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-xs-12 col-md-5 col-md-pull-1\"> <!-- search --> 
\t\t\t\t\t<div id=\"search-form\" class=\"fda-masthead__search col-xs-12 col-md-9 pull-right\">
\t\t\t\t\t\t<form role=\"search\" action=\"{{ search_form_action }}\" method=\"GET\" id=\"usasearch-search-block-form searchbox\" accept-charset=\"UTF-8\" data-drupal-form-fields=\"query,edit-submit\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"search-popover\" id=\"search-popover\">
\t\t\t\t\t\t\t\t<div class=\"input-group pull-right\" id=\"input-group\">
\t\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"search\">Search FDA</label>
\t\t\t\t\t\t\t\t\t<input accesskey=\"4\" class=\"form-control search-input usagov-search-autocomplete\" id=\"query\" name=\"query\" aria-autocomplete=\"list\" aria-haspopup=\"true\" data-drupal-selector=\"edit-query\" title=\"Enter the terms you wish to search for.\" placeholder=\"Search FDA\" autocomplete=\"{{ search_autocomplete }}\" type=\"text\" /> 
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\" id=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button data-drupal-selector=\"edit-submit\" type=\"submit\" class=\"btn btn-danger search-btn\" id=\"search-btn\" title=\"Search\"><span class=\"fa fa-search\" aria-hidden=\"true\"><span class=\"sr-only\">Submit search</span></span></button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input data-drupal-selector=\"edit-affiliate\" name=\"affiliate\" value=\"{{ search_affilate }}\" type=\"hidden\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- Hide DigitalGov block in page so that 'search while you type' functionality works. -->
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t{{ block_usasearchform }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</div><!-- end fda-masthead -->




";
    }
}
