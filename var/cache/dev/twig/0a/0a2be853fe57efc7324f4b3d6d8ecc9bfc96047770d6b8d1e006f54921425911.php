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
        $__internal_280fce912584d06b23355ed354c152f8560eded216e6dd13360538a450f4b018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280fce912584d06b23355ed354c152f8560eded216e6dd13360538a450f4b018->enter($__internal_280fce912584d06b23355ed354c152f8560eded216e6dd13360538a450f4b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fe35ef7b6df2053bf08ba8dc32749a8449fa5cbbfe58eb57a7094acfe393510f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe35ef7b6df2053bf08ba8dc32749a8449fa5cbbfe58eb57a7094acfe393510f->enter($__internal_fe35ef7b6df2053bf08ba8dc32749a8449fa5cbbfe58eb57a7094acfe393510f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_280fce912584d06b23355ed354c152f8560eded216e6dd13360538a450f4b018->leave($__internal_280fce912584d06b23355ed354c152f8560eded216e6dd13360538a450f4b018_prof);

        
        $__internal_fe35ef7b6df2053bf08ba8dc32749a8449fa5cbbfe58eb57a7094acfe393510f->leave($__internal_fe35ef7b6df2053bf08ba8dc32749a8449fa5cbbfe58eb57a7094acfe393510f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_344b0279835d67498bcf32938e62af2ffce6ab01805f09f9c3ca8980631d35f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344b0279835d67498bcf32938e62af2ffce6ab01805f09f9c3ca8980631d35f4->enter($__internal_344b0279835d67498bcf32938e62af2ffce6ab01805f09f9c3ca8980631d35f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_686d0b57faef5f4ffab02beaf640e126d13650b2ab4a716497bafd180b258d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686d0b57faef5f4ffab02beaf640e126d13650b2ab4a716497bafd180b258d4e->enter($__internal_686d0b57faef5f4ffab02beaf640e126d13650b2ab4a716497bafd180b258d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_686d0b57faef5f4ffab02beaf640e126d13650b2ab4a716497bafd180b258d4e->leave($__internal_686d0b57faef5f4ffab02beaf640e126d13650b2ab4a716497bafd180b258d4e_prof);

        
        $__internal_344b0279835d67498bcf32938e62af2ffce6ab01805f09f9c3ca8980631d35f4->leave($__internal_344b0279835d67498bcf32938e62af2ffce6ab01805f09f9c3ca8980631d35f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b07c9dac5aa669c6e2ddfcdcaa1d244bfdd27b6cbd3b6c5482837f9c1053e31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b07c9dac5aa669c6e2ddfcdcaa1d244bfdd27b6cbd3b6c5482837f9c1053e31a->enter($__internal_b07c9dac5aa669c6e2ddfcdcaa1d244bfdd27b6cbd3b6c5482837f9c1053e31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c262c2e3cd18857bc093d55c2299f127aac33cfbbb71a86069765cc155f4a0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c262c2e3cd18857bc093d55c2299f127aac33cfbbb71a86069765cc155f4a0eb->enter($__internal_c262c2e3cd18857bc093d55c2299f127aac33cfbbb71a86069765cc155f4a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c262c2e3cd18857bc093d55c2299f127aac33cfbbb71a86069765cc155f4a0eb->leave($__internal_c262c2e3cd18857bc093d55c2299f127aac33cfbbb71a86069765cc155f4a0eb_prof);

        
        $__internal_b07c9dac5aa669c6e2ddfcdcaa1d244bfdd27b6cbd3b6c5482837f9c1053e31a->leave($__internal_b07c9dac5aa669c6e2ddfcdcaa1d244bfdd27b6cbd3b6c5482837f9c1053e31a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e95e2ec88301b30c2642f1032c9e861639206f7927812fd3e9d170f40b458ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95e2ec88301b30c2642f1032c9e861639206f7927812fd3e9d170f40b458ea3->enter($__internal_e95e2ec88301b30c2642f1032c9e861639206f7927812fd3e9d170f40b458ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff0abdd9909822e9c5248a093819275231616d9670a0cd1c3a11fe27151f92ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff0abdd9909822e9c5248a093819275231616d9670a0cd1c3a11fe27151f92ef->enter($__internal_ff0abdd9909822e9c5248a093819275231616d9670a0cd1c3a11fe27151f92ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff0abdd9909822e9c5248a093819275231616d9670a0cd1c3a11fe27151f92ef->leave($__internal_ff0abdd9909822e9c5248a093819275231616d9670a0cd1c3a11fe27151f92ef_prof);

        
        $__internal_e95e2ec88301b30c2642f1032c9e861639206f7927812fd3e9d170f40b458ea3->leave($__internal_e95e2ec88301b30c2642f1032c9e861639206f7927812fd3e9d170f40b458ea3_prof);

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
