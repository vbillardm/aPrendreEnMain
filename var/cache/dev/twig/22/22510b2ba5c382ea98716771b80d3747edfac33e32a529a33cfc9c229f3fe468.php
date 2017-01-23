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
        $__internal_bb7b98d5709d2077fe0aa2e6a7a4822ce8b6e92c882e397b762c2c8af4f1f1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7b98d5709d2077fe0aa2e6a7a4822ce8b6e92c882e397b762c2c8af4f1f1ce->enter($__internal_bb7b98d5709d2077fe0aa2e6a7a4822ce8b6e92c882e397b762c2c8af4f1f1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4fa64d7f58e2a448d79a0201bc10a951f7ee05b0ab11ed97552340a60a7a484c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa64d7f58e2a448d79a0201bc10a951f7ee05b0ab11ed97552340a60a7a484c->enter($__internal_4fa64d7f58e2a448d79a0201bc10a951f7ee05b0ab11ed97552340a60a7a484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7b98d5709d2077fe0aa2e6a7a4822ce8b6e92c882e397b762c2c8af4f1f1ce->leave($__internal_bb7b98d5709d2077fe0aa2e6a7a4822ce8b6e92c882e397b762c2c8af4f1f1ce_prof);

        
        $__internal_4fa64d7f58e2a448d79a0201bc10a951f7ee05b0ab11ed97552340a60a7a484c->leave($__internal_4fa64d7f58e2a448d79a0201bc10a951f7ee05b0ab11ed97552340a60a7a484c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f73e123926a41d29f39dab8f2b488ea61f6dab944a94ec223bf8af392d46eb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73e123926a41d29f39dab8f2b488ea61f6dab944a94ec223bf8af392d46eb02->enter($__internal_f73e123926a41d29f39dab8f2b488ea61f6dab944a94ec223bf8af392d46eb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_491df0133d235b7873023628ce9ae5f126886e71b1d3bc004ceb10ed72bd434a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491df0133d235b7873023628ce9ae5f126886e71b1d3bc004ceb10ed72bd434a->enter($__internal_491df0133d235b7873023628ce9ae5f126886e71b1d3bc004ceb10ed72bd434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_491df0133d235b7873023628ce9ae5f126886e71b1d3bc004ceb10ed72bd434a->leave($__internal_491df0133d235b7873023628ce9ae5f126886e71b1d3bc004ceb10ed72bd434a_prof);

        
        $__internal_f73e123926a41d29f39dab8f2b488ea61f6dab944a94ec223bf8af392d46eb02->leave($__internal_f73e123926a41d29f39dab8f2b488ea61f6dab944a94ec223bf8af392d46eb02_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6738ead9dacc5c7680d9d327248de466f418d0305b80f8bcb5ce7fbf0a727aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6738ead9dacc5c7680d9d327248de466f418d0305b80f8bcb5ce7fbf0a727aad->enter($__internal_6738ead9dacc5c7680d9d327248de466f418d0305b80f8bcb5ce7fbf0a727aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3914bfdf3887de7e46dbf27e262a203628db62e29d0d0397a24685afe6e35a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3914bfdf3887de7e46dbf27e262a203628db62e29d0d0397a24685afe6e35a4e->enter($__internal_3914bfdf3887de7e46dbf27e262a203628db62e29d0d0397a24685afe6e35a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3914bfdf3887de7e46dbf27e262a203628db62e29d0d0397a24685afe6e35a4e->leave($__internal_3914bfdf3887de7e46dbf27e262a203628db62e29d0d0397a24685afe6e35a4e_prof);

        
        $__internal_6738ead9dacc5c7680d9d327248de466f418d0305b80f8bcb5ce7fbf0a727aad->leave($__internal_6738ead9dacc5c7680d9d327248de466f418d0305b80f8bcb5ce7fbf0a727aad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a6e6ab6f86f1acc223009c4aab5b1e5af61118c3f7fa9aa196251a0acafc6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6e6ab6f86f1acc223009c4aab5b1e5af61118c3f7fa9aa196251a0acafc6c7->enter($__internal_5a6e6ab6f86f1acc223009c4aab5b1e5af61118c3f7fa9aa196251a0acafc6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e88eae663ea092b761a5d034e9bdbaab471126954eea81f28eeb415cdc15353d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88eae663ea092b761a5d034e9bdbaab471126954eea81f28eeb415cdc15353d->enter($__internal_e88eae663ea092b761a5d034e9bdbaab471126954eea81f28eeb415cdc15353d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e88eae663ea092b761a5d034e9bdbaab471126954eea81f28eeb415cdc15353d->leave($__internal_e88eae663ea092b761a5d034e9bdbaab471126954eea81f28eeb415cdc15353d_prof);

        
        $__internal_5a6e6ab6f86f1acc223009c4aab5b1e5af61118c3f7fa9aa196251a0acafc6c7->leave($__internal_5a6e6ab6f86f1acc223009c4aab5b1e5af61118c3f7fa9aa196251a0acafc6c7_prof);

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
