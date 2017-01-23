<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bdf241645c4cf382ba511a98e963ea4b256d240ae44647916e03970b85063f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f495a1117f6595bcd6c8a37880d9aad63c9c430aa5f99c22478c1687c8816f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f495a1117f6595bcd6c8a37880d9aad63c9c430aa5f99c22478c1687c8816f31->enter($__internal_f495a1117f6595bcd6c8a37880d9aad63c9c430aa5f99c22478c1687c8816f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_89d52bd585caebca21c267e57b6207808c2b9fce85bf39d46a9411117b4e0383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d52bd585caebca21c267e57b6207808c2b9fce85bf39d46a9411117b4e0383->enter($__internal_89d52bd585caebca21c267e57b6207808c2b9fce85bf39d46a9411117b4e0383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f495a1117f6595bcd6c8a37880d9aad63c9c430aa5f99c22478c1687c8816f31->leave($__internal_f495a1117f6595bcd6c8a37880d9aad63c9c430aa5f99c22478c1687c8816f31_prof);

        
        $__internal_89d52bd585caebca21c267e57b6207808c2b9fce85bf39d46a9411117b4e0383->leave($__internal_89d52bd585caebca21c267e57b6207808c2b9fce85bf39d46a9411117b4e0383_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6b24446162aea4124e920bbffe1287ae8bb79696346706206b9bb967f2cec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b24446162aea4124e920bbffe1287ae8bb79696346706206b9bb967f2cec11->enter($__internal_a6b24446162aea4124e920bbffe1287ae8bb79696346706206b9bb967f2cec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33909b1ce1a7978925fbfa3ecd7c0a8192b647ae50f1231f8ab67e752d3d084a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33909b1ce1a7978925fbfa3ecd7c0a8192b647ae50f1231f8ab67e752d3d084a->enter($__internal_33909b1ce1a7978925fbfa3ecd7c0a8192b647ae50f1231f8ab67e752d3d084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_33909b1ce1a7978925fbfa3ecd7c0a8192b647ae50f1231f8ab67e752d3d084a->leave($__internal_33909b1ce1a7978925fbfa3ecd7c0a8192b647ae50f1231f8ab67e752d3d084a_prof);

        
        $__internal_a6b24446162aea4124e920bbffe1287ae8bb79696346706206b9bb967f2cec11->leave($__internal_a6b24446162aea4124e920bbffe1287ae8bb79696346706206b9bb967f2cec11_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a252b6763718fe80a765d3d8a74dc748d26fb3fafd101a829808b31fcd1a169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a252b6763718fe80a765d3d8a74dc748d26fb3fafd101a829808b31fcd1a169->enter($__internal_4a252b6763718fe80a765d3d8a74dc748d26fb3fafd101a829808b31fcd1a169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_546c0cddca6eaf84df3f00823c345ea536bf60f13042d983b582723bf5e1f013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546c0cddca6eaf84df3f00823c345ea536bf60f13042d983b582723bf5e1f013->enter($__internal_546c0cddca6eaf84df3f00823c345ea536bf60f13042d983b582723bf5e1f013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_546c0cddca6eaf84df3f00823c345ea536bf60f13042d983b582723bf5e1f013->leave($__internal_546c0cddca6eaf84df3f00823c345ea536bf60f13042d983b582723bf5e1f013_prof);

        
        $__internal_4a252b6763718fe80a765d3d8a74dc748d26fb3fafd101a829808b31fcd1a169->leave($__internal_4a252b6763718fe80a765d3d8a74dc748d26fb3fafd101a829808b31fcd1a169_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
