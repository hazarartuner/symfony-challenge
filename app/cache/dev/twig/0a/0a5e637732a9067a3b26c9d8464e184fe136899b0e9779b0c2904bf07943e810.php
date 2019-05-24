<?php

/* base.html.twig */
class __TwigTemplate_abb7ac7c197704450efb77cdd54f55a48dd2a0d6db0c45c64754a8e77b4ce471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f48de2db820ee4bf0fb6d2e122e2cc7b7c4cfe99f59fd434f00375e59dc0acb = $this->env->getExtension("native_profiler");
        $__internal_5f48de2db820ee4bf0fb6d2e122e2cc7b7c4cfe99f59fd434f00375e59dc0acb->enter($__internal_5f48de2db820ee4bf0fb6d2e122e2cc7b7c4cfe99f59fd434f00375e59dc0acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Bootstrap -->
        ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ab5d97f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab5d97f_0") : $this->env->getExtension('asset')->getAssetUrl("css/base_bootstrap.min_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ab5d97f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab5d97f_1") : $this->env->getExtension('asset')->getAssetUrl("css/base_font-awesome.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ab5d97f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab5d97f_2") : $this->env->getExtension('asset')->getAssetUrl("css/base_bootstrap-datepicker.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ab5d97f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ab5d97f") : $this->env->getExtension('asset')->getAssetUrl("css/base.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        <!-- Main styles -->
        ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e5d3b35_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5d3b35_0") : $this->env->getExtension('asset')->getAssetUrl("css/app_style_1.css");
            // line 18
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "e5d3b35"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5d3b35") : $this->env->getExtension('asset')->getAssetUrl("css/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <!-- Header Start -->
        ";
        // line 26
        echo "        <!-- Header End -->
        <div class=\"container\">
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        </div>
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_5f48de2db820ee4bf0fb6d2e122e2cc7b7c4cfe99f59fd434f00375e59dc0acb->leave($__internal_5f48de2db820ee4bf0fb6d2e122e2cc7b7c4cfe99f59fd434f00375e59dc0acb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dbaf46a117715ca87971e1c1de5aa796efa298f1da189b2a70a6a8e554da85a = $this->env->getExtension("native_profiler");
        $__internal_4dbaf46a117715ca87971e1c1de5aa796efa298f1da189b2a70a6a8e554da85a->enter($__internal_4dbaf46a117715ca87971e1c1de5aa796efa298f1da189b2a70a6a8e554da85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4dbaf46a117715ca87971e1c1de5aa796efa298f1da189b2a70a6a8e554da85a->leave($__internal_4dbaf46a117715ca87971e1c1de5aa796efa298f1da189b2a70a6a8e554da85a_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6cd2dcf7d9660378dc003f8e6e98ad4fb4579faad5f856d1efab6f7a6789ba7 = $this->env->getExtension("native_profiler");
        $__internal_b6cd2dcf7d9660378dc003f8e6e98ad4fb4579faad5f856d1efab6f7a6789ba7->enter($__internal_b6cd2dcf7d9660378dc003f8e6e98ad4fb4579faad5f856d1efab6f7a6789ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6cd2dcf7d9660378dc003f8e6e98ad4fb4579faad5f856d1efab6f7a6789ba7->leave($__internal_b6cd2dcf7d9660378dc003f8e6e98ad4fb4579faad5f856d1efab6f7a6789ba7_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3920c6d4e03f60448554d4debf14bff8770920a8b76c0382af1f7e6a4ae83ceb = $this->env->getExtension("native_profiler");
        $__internal_3920c6d4e03f60448554d4debf14bff8770920a8b76c0382af1f7e6a4ae83ceb->enter($__internal_3920c6d4e03f60448554d4debf14bff8770920a8b76c0382af1f7e6a4ae83ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3920c6d4e03f60448554d4debf14bff8770920a8b76c0382af1f7e6a4ae83ceb->leave($__internal_3920c6d4e03f60448554d4debf14bff8770920a8b76c0382af1f7e6a4ae83ceb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  129 => 28,  117 => 5,  108 => 31,  106 => 30,  103 => 29,  101 => 28,  97 => 26,  90 => 21,  87 => 20,  73 => 18,  69 => 15,  66 => 14,  40 => 12,  36 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <!-- Bootstrap -->*/
/*         {% stylesheets output="css/base.css" filter="cssrewrite"*/
/*         "bundles/cobblewebapp/bower_components/bootstrap/dist/css/bootstrap.min.css"*/
/*         "bundles/cobblewebapp/bower_components/fontawesome/css/font-awesome.min.css"*/
/*         "bundles/cobblewebapp/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"*/
/*         %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*         <!-- Main styles -->*/
/*         {% stylesheets filter="scssphp" output="css/app.css"*/
/*         "../app/Resources/public/sass/style.scss"*/
/*         %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <!-- Header Start -->*/
/*         {#{% include '::layout/parts/header.html.twig' %}#}*/
/*         <!-- Header End -->*/
/*         <div class="container">*/
/*         {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
