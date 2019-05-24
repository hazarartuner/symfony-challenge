<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1abc1c75f633ac4224084ed3449289865743729ab34fe0a7fe3dc1666a8782c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21c50f1ea9462102d82ae6a4d58bd74e6908367de93866de9948e3f01f070604 = $this->env->getExtension("native_profiler");
        $__internal_21c50f1ea9462102d82ae6a4d58bd74e6908367de93866de9948e3f01f070604->enter($__internal_21c50f1ea9462102d82ae6a4d58bd74e6908367de93866de9948e3f01f070604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c50f1ea9462102d82ae6a4d58bd74e6908367de93866de9948e3f01f070604->leave($__internal_21c50f1ea9462102d82ae6a4d58bd74e6908367de93866de9948e3f01f070604_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a68a45f5a32910cf9983e35e4cf3eadbd0441ebf29c27956069a8caa51e61efe = $this->env->getExtension("native_profiler");
        $__internal_a68a45f5a32910cf9983e35e4cf3eadbd0441ebf29c27956069a8caa51e61efe->enter($__internal_a68a45f5a32910cf9983e35e4cf3eadbd0441ebf29c27956069a8caa51e61efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a68a45f5a32910cf9983e35e4cf3eadbd0441ebf29c27956069a8caa51e61efe->leave($__internal_a68a45f5a32910cf9983e35e4cf3eadbd0441ebf29c27956069a8caa51e61efe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38a2ee4f6c8240a4e69b0cb9f9c1f7dd70c78295230e8075a8d9a18b18f6f95a = $this->env->getExtension("native_profiler");
        $__internal_38a2ee4f6c8240a4e69b0cb9f9c1f7dd70c78295230e8075a8d9a18b18f6f95a->enter($__internal_38a2ee4f6c8240a4e69b0cb9f9c1f7dd70c78295230e8075a8d9a18b18f6f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38a2ee4f6c8240a4e69b0cb9f9c1f7dd70c78295230e8075a8d9a18b18f6f95a->leave($__internal_38a2ee4f6c8240a4e69b0cb9f9c1f7dd70c78295230e8075a8d9a18b18f6f95a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad7dfe26841df6cf712ad0ae36f8a322e3dc580e3b39d7e5e5374fe5b7feea6a = $this->env->getExtension("native_profiler");
        $__internal_ad7dfe26841df6cf712ad0ae36f8a322e3dc580e3b39d7e5e5374fe5b7feea6a->enter($__internal_ad7dfe26841df6cf712ad0ae36f8a322e3dc580e3b39d7e5e5374fe5b7feea6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ad7dfe26841df6cf712ad0ae36f8a322e3dc580e3b39d7e5e5374fe5b7feea6a->leave($__internal_ad7dfe26841df6cf712ad0ae36f8a322e3dc580e3b39d7e5e5374fe5b7feea6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
