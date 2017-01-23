<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
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
        $__internal_c2b930aa3a01da5cf57845ca28692979441dd591650c2e7070245e5965fd1f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b930aa3a01da5cf57845ca28692979441dd591650c2e7070245e5965fd1f08->enter($__internal_c2b930aa3a01da5cf57845ca28692979441dd591650c2e7070245e5965fd1f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d648610aad2ef8ae15375690f3da422716ba2d2630021a6f7cf087e061efe7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d648610aad2ef8ae15375690f3da422716ba2d2630021a6f7cf087e061efe7fd->enter($__internal_d648610aad2ef8ae15375690f3da422716ba2d2630021a6f7cf087e061efe7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b930aa3a01da5cf57845ca28692979441dd591650c2e7070245e5965fd1f08->leave($__internal_c2b930aa3a01da5cf57845ca28692979441dd591650c2e7070245e5965fd1f08_prof);

        
        $__internal_d648610aad2ef8ae15375690f3da422716ba2d2630021a6f7cf087e061efe7fd->leave($__internal_d648610aad2ef8ae15375690f3da422716ba2d2630021a6f7cf087e061efe7fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2d9f1e30c4e20179f72984f3752a4e3ef9edef57a61fc05d6a8befb1fa1b245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d9f1e30c4e20179f72984f3752a4e3ef9edef57a61fc05d6a8befb1fa1b245->enter($__internal_e2d9f1e30c4e20179f72984f3752a4e3ef9edef57a61fc05d6a8befb1fa1b245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_51099c0671490fe65f878a30d28a35613f0a048f1890973f2f44678341ce9910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51099c0671490fe65f878a30d28a35613f0a048f1890973f2f44678341ce9910->enter($__internal_51099c0671490fe65f878a30d28a35613f0a048f1890973f2f44678341ce9910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_51099c0671490fe65f878a30d28a35613f0a048f1890973f2f44678341ce9910->leave($__internal_51099c0671490fe65f878a30d28a35613f0a048f1890973f2f44678341ce9910_prof);

        
        $__internal_e2d9f1e30c4e20179f72984f3752a4e3ef9edef57a61fc05d6a8befb1fa1b245->leave($__internal_e2d9f1e30c4e20179f72984f3752a4e3ef9edef57a61fc05d6a8befb1fa1b245_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f78db8c98bf1cfd6d90af61643ab41ffc9fcb2e97bbdda9a67ea1653b96538e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f78db8c98bf1cfd6d90af61643ab41ffc9fcb2e97bbdda9a67ea1653b96538e->enter($__internal_7f78db8c98bf1cfd6d90af61643ab41ffc9fcb2e97bbdda9a67ea1653b96538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d2f2a393f5d00fedd836148f70963e0d0d4a99c49e226aa7d49370c17947d8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f2a393f5d00fedd836148f70963e0d0d4a99c49e226aa7d49370c17947d8d8->enter($__internal_d2f2a393f5d00fedd836148f70963e0d0d4a99c49e226aa7d49370c17947d8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2f2a393f5d00fedd836148f70963e0d0d4a99c49e226aa7d49370c17947d8d8->leave($__internal_d2f2a393f5d00fedd836148f70963e0d0d4a99c49e226aa7d49370c17947d8d8_prof);

        
        $__internal_7f78db8c98bf1cfd6d90af61643ab41ffc9fcb2e97bbdda9a67ea1653b96538e->leave($__internal_7f78db8c98bf1cfd6d90af61643ab41ffc9fcb2e97bbdda9a67ea1653b96538e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e28247efd2833c46975263e0bb6561801e2005c1f4de44f29257c319eae4e8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28247efd2833c46975263e0bb6561801e2005c1f4de44f29257c319eae4e8d9->enter($__internal_e28247efd2833c46975263e0bb6561801e2005c1f4de44f29257c319eae4e8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c867936e40037303ced165bfe25d1dbb81aa04b0178144c1dfff27c717e63412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c867936e40037303ced165bfe25d1dbb81aa04b0178144c1dfff27c717e63412->enter($__internal_c867936e40037303ced165bfe25d1dbb81aa04b0178144c1dfff27c717e63412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c867936e40037303ced165bfe25d1dbb81aa04b0178144c1dfff27c717e63412->leave($__internal_c867936e40037303ced165bfe25d1dbb81aa04b0178144c1dfff27c717e63412_prof);

        
        $__internal_e28247efd2833c46975263e0bb6561801e2005c1f4de44f29257c319eae4e8d9->leave($__internal_e28247efd2833c46975263e0bb6561801e2005c1f4de44f29257c319eae4e8d9_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
