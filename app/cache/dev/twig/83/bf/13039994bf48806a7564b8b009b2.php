<?php

/* CoreTemplateBundle::layout.html.twig */
class __TwigTemplate_83bf13039994bf48806a7564b8b009b2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Bootstrap, from Twitter</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "26fbbe1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26fbbe1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/26fbbe1_bootstrap_1.css");
            // line 13
            echo "   <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
";
        } else {
            // asset "26fbbe1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26fbbe1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/26fbbe1.css");
            echo "   <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
";
        }
        unset($context["asset_url"]);
        // line 15
        echo "
";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b98098e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_README_1.js");
            // line 17
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-alert_2.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-button_3.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-carousel_4.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-collapse_5.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-dropdown_6.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-modal_7.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-popover_8.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-scrollspy_9.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-tab_10.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-tooltip_11.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-transition_12.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_bootstrap-typeahead_13.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
            // asset "b98098e_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e_part_1_tests_14.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
        } else {
            // asset "b98098e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b98098e") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b98098e.js");
            echo "   <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/javascript\" /></script>
";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=\"../assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
  </head>

  <body>

    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">dionisum</a>
          <div class=\"nav-collapse\">
            <ul class=\"nav pull-right\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container\">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class=\"hero-unit\">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class=\"row\">
        <div class=\"span4\">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
        </div>
        <div class=\"span4\">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
       </div>
        <div class=\"span4\">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CoreTemplateBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
