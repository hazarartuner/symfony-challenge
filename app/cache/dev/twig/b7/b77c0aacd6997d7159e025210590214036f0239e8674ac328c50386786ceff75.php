<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_340b40b09dbaca9436c268ded6600485281014cabc3d26657f9c39e329e5464e extends Twig_Template
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
        $__internal_ef414eb2fe35916bc5c0ded91e8843c4407be1372ef02bd3bc73502dc51c4cf1 = $this->env->getExtension("native_profiler");
        $__internal_ef414eb2fe35916bc5c0ded91e8843c4407be1372ef02bd3bc73502dc51c4cf1->enter($__internal_ef414eb2fe35916bc5c0ded91e8843c4407be1372ef02bd3bc73502dc51c4cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef414eb2fe35916bc5c0ded91e8843c4407be1372ef02bd3bc73502dc51c4cf1->leave($__internal_ef414eb2fe35916bc5c0ded91e8843c4407be1372ef02bd3bc73502dc51c4cf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_beddc128256a7b961efa7a5adf30b78e92ee96755cfbb609fa8f732574421085 = $this->env->getExtension("native_profiler");
        $__internal_beddc128256a7b961efa7a5adf30b78e92ee96755cfbb609fa8f732574421085->enter($__internal_beddc128256a7b961efa7a5adf30b78e92ee96755cfbb609fa8f732574421085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_beddc128256a7b961efa7a5adf30b78e92ee96755cfbb609fa8f732574421085->leave($__internal_beddc128256a7b961efa7a5adf30b78e92ee96755cfbb609fa8f732574421085_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b85b6e8c21e6eaf66b9efca090fce0a9b19c7a33a3a818c436d49991b2a46ebf = $this->env->getExtension("native_profiler");
        $__internal_b85b6e8c21e6eaf66b9efca090fce0a9b19c7a33a3a818c436d49991b2a46ebf->enter($__internal_b85b6e8c21e6eaf66b9efca090fce0a9b19c7a33a3a818c436d49991b2a46ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b85b6e8c21e6eaf66b9efca090fce0a9b19c7a33a3a818c436d49991b2a46ebf->leave($__internal_b85b6e8c21e6eaf66b9efca090fce0a9b19c7a33a3a818c436d49991b2a46ebf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd826de99afd66dc195a482a07ba18249cccae2760535797cd118193708466b9 = $this->env->getExtension("native_profiler");
        $__internal_bd826de99afd66dc195a482a07ba18249cccae2760535797cd118193708466b9->enter($__internal_bd826de99afd66dc195a482a07ba18249cccae2760535797cd118193708466b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd826de99afd66dc195a482a07ba18249cccae2760535797cd118193708466b9->leave($__internal_bd826de99afd66dc195a482a07ba18249cccae2760535797cd118193708466b9_prof);

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
