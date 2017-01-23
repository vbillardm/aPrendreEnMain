<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f077177bec64458eb7fd28f1bc0eaab0c50612349ecac41fb941c2aa28b50ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f077177bec64458eb7fd28f1bc0eaab0c50612349ecac41fb941c2aa28b50ef7->enter($__internal_f077177bec64458eb7fd28f1bc0eaab0c50612349ecac41fb941c2aa28b50ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c04a245061dcb43893b658e84271073e50a5dec9e416c038ef2bce149feafc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04a245061dcb43893b658e84271073e50a5dec9e416c038ef2bce149feafc22->enter($__internal_c04a245061dcb43893b658e84271073e50a5dec9e416c038ef2bce149feafc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f077177bec64458eb7fd28f1bc0eaab0c50612349ecac41fb941c2aa28b50ef7->leave($__internal_f077177bec64458eb7fd28f1bc0eaab0c50612349ecac41fb941c2aa28b50ef7_prof);

        
        $__internal_c04a245061dcb43893b658e84271073e50a5dec9e416c038ef2bce149feafc22->leave($__internal_c04a245061dcb43893b658e84271073e50a5dec9e416c038ef2bce149feafc22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37b26e87fdd7d4aea3789d5f46afc36a55c7adfa637ae029745d3f4c9e960978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b26e87fdd7d4aea3789d5f46afc36a55c7adfa637ae029745d3f4c9e960978->enter($__internal_37b26e87fdd7d4aea3789d5f46afc36a55c7adfa637ae029745d3f4c9e960978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c558fee6a02a76b90009712575627e40046ca6472da720f29b8cb851d1208adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c558fee6a02a76b90009712575627e40046ca6472da720f29b8cb851d1208adf->enter($__internal_c558fee6a02a76b90009712575627e40046ca6472da720f29b8cb851d1208adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c558fee6a02a76b90009712575627e40046ca6472da720f29b8cb851d1208adf->leave($__internal_c558fee6a02a76b90009712575627e40046ca6472da720f29b8cb851d1208adf_prof);

        
        $__internal_37b26e87fdd7d4aea3789d5f46afc36a55c7adfa637ae029745d3f4c9e960978->leave($__internal_37b26e87fdd7d4aea3789d5f46afc36a55c7adfa637ae029745d3f4c9e960978_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_356f12dfd009494cab4396f0d34e3f56721f64a941f6f7c4ba7572bb8f517e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356f12dfd009494cab4396f0d34e3f56721f64a941f6f7c4ba7572bb8f517e42->enter($__internal_356f12dfd009494cab4396f0d34e3f56721f64a941f6f7c4ba7572bb8f517e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a05b003eafcddb120fc3bc665e9d4db7caaba574eaa3f089abe4b593dc44f8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05b003eafcddb120fc3bc665e9d4db7caaba574eaa3f089abe4b593dc44f8e6->enter($__internal_a05b003eafcddb120fc3bc665e9d4db7caaba574eaa3f089abe4b593dc44f8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a05b003eafcddb120fc3bc665e9d4db7caaba574eaa3f089abe4b593dc44f8e6->leave($__internal_a05b003eafcddb120fc3bc665e9d4db7caaba574eaa3f089abe4b593dc44f8e6_prof);

        
        $__internal_356f12dfd009494cab4396f0d34e3f56721f64a941f6f7c4ba7572bb8f517e42->leave($__internal_356f12dfd009494cab4396f0d34e3f56721f64a941f6f7c4ba7572bb8f517e42_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1cf14696d974e3f2988d9d471210586671eb5ee21a4dce0889040ebdf7110bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cf14696d974e3f2988d9d471210586671eb5ee21a4dce0889040ebdf7110bd->enter($__internal_e1cf14696d974e3f2988d9d471210586671eb5ee21a4dce0889040ebdf7110bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f78d0ec27b76b7796913fb226a64183d9133ab1c4461f1160db92f3ea25f2f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78d0ec27b76b7796913fb226a64183d9133ab1c4461f1160db92f3ea25f2f5a->enter($__internal_f78d0ec27b76b7796913fb226a64183d9133ab1c4461f1160db92f3ea25f2f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f78d0ec27b76b7796913fb226a64183d9133ab1c4461f1160db92f3ea25f2f5a->leave($__internal_f78d0ec27b76b7796913fb226a64183d9133ab1c4461f1160db92f3ea25f2f5a_prof);

        
        $__internal_e1cf14696d974e3f2988d9d471210586671eb5ee21a4dce0889040ebdf7110bd->leave($__internal_e1cf14696d974e3f2988d9d471210586671eb5ee21a4dce0889040ebdf7110bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
