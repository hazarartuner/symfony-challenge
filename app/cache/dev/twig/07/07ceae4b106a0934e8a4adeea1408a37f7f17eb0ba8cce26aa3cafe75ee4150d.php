<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fca94228e0ca73146bae7f88c4252bff392e0a835e2548e1c9b52dece9bf6d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7af1ebad6196990c24f22f5e8e13f06ffdfdf61a1fffb0a99085d396c04d6080 = $this->env->getExtension("native_profiler");
        $__internal_7af1ebad6196990c24f22f5e8e13f06ffdfdf61a1fffb0a99085d396c04d6080->enter($__internal_7af1ebad6196990c24f22f5e8e13f06ffdfdf61a1fffb0a99085d396c04d6080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af1ebad6196990c24f22f5e8e13f06ffdfdf61a1fffb0a99085d396c04d6080->leave($__internal_7af1ebad6196990c24f22f5e8e13f06ffdfdf61a1fffb0a99085d396c04d6080_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd9042053f8b7c7718038ccbfced2cf626d627d9824b2483ce52dcf5c2857b10 = $this->env->getExtension("native_profiler");
        $__internal_dd9042053f8b7c7718038ccbfced2cf626d627d9824b2483ce52dcf5c2857b10->enter($__internal_dd9042053f8b7c7718038ccbfced2cf626d627d9824b2483ce52dcf5c2857b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd9042053f8b7c7718038ccbfced2cf626d627d9824b2483ce52dcf5c2857b10->leave($__internal_dd9042053f8b7c7718038ccbfced2cf626d627d9824b2483ce52dcf5c2857b10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5689a15ecf0470322ed95c23c2162e0630cc2e3f4d7ce5415939f2a9bedf1565 = $this->env->getExtension("native_profiler");
        $__internal_5689a15ecf0470322ed95c23c2162e0630cc2e3f4d7ce5415939f2a9bedf1565->enter($__internal_5689a15ecf0470322ed95c23c2162e0630cc2e3f4d7ce5415939f2a9bedf1565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5689a15ecf0470322ed95c23c2162e0630cc2e3f4d7ce5415939f2a9bedf1565->leave($__internal_5689a15ecf0470322ed95c23c2162e0630cc2e3f4d7ce5415939f2a9bedf1565_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa368a581a46fd4042b23d7ee741547eca5539f5f67b0f5601acca9b79048776 = $this->env->getExtension("native_profiler");
        $__internal_aa368a581a46fd4042b23d7ee741547eca5539f5f67b0f5601acca9b79048776->enter($__internal_aa368a581a46fd4042b23d7ee741547eca5539f5f67b0f5601acca9b79048776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa368a581a46fd4042b23d7ee741547eca5539f5f67b0f5601acca9b79048776->leave($__internal_aa368a581a46fd4042b23d7ee741547eca5539f5f67b0f5601acca9b79048776_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
