<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1ce346e4a21df1d1209fab855d1142763f5b94d4ecee90a596a3db14c2276803 extends Twig_Template
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
        $__internal_72a9728d69e46f5b710e691e79843013fb5e596287d54791d85d992ca72bac89 = $this->env->getExtension("native_profiler");
        $__internal_72a9728d69e46f5b710e691e79843013fb5e596287d54791d85d992ca72bac89->enter($__internal_72a9728d69e46f5b710e691e79843013fb5e596287d54791d85d992ca72bac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a9728d69e46f5b710e691e79843013fb5e596287d54791d85d992ca72bac89->leave($__internal_72a9728d69e46f5b710e691e79843013fb5e596287d54791d85d992ca72bac89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_759c8f46432d723a77ebb35b27114746d7873d23ba0f8126c5f5f666c44708fe = $this->env->getExtension("native_profiler");
        $__internal_759c8f46432d723a77ebb35b27114746d7873d23ba0f8126c5f5f666c44708fe->enter($__internal_759c8f46432d723a77ebb35b27114746d7873d23ba0f8126c5f5f666c44708fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_759c8f46432d723a77ebb35b27114746d7873d23ba0f8126c5f5f666c44708fe->leave($__internal_759c8f46432d723a77ebb35b27114746d7873d23ba0f8126c5f5f666c44708fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99eccf9f1010178edbd7a278604094446f45a778d4ff2391a443619dcd3d90b5 = $this->env->getExtension("native_profiler");
        $__internal_99eccf9f1010178edbd7a278604094446f45a778d4ff2391a443619dcd3d90b5->enter($__internal_99eccf9f1010178edbd7a278604094446f45a778d4ff2391a443619dcd3d90b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99eccf9f1010178edbd7a278604094446f45a778d4ff2391a443619dcd3d90b5->leave($__internal_99eccf9f1010178edbd7a278604094446f45a778d4ff2391a443619dcd3d90b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90771c3528aecca49e8232b0238ce8078647a4d467f5f47accfe7c707eea54e5 = $this->env->getExtension("native_profiler");
        $__internal_90771c3528aecca49e8232b0238ce8078647a4d467f5f47accfe7c707eea54e5->enter($__internal_90771c3528aecca49e8232b0238ce8078647a4d467f5f47accfe7c707eea54e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90771c3528aecca49e8232b0238ce8078647a4d467f5f47accfe7c707eea54e5->leave($__internal_90771c3528aecca49e8232b0238ce8078647a4d467f5f47accfe7c707eea54e5_prof);

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
