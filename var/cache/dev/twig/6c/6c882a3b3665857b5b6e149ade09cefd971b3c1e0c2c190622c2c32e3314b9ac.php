<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5a4a98caf8686541014c99dc7f196f0148a568adb6fbf50dd8f44593814b227f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_352316f6146722c30cf0aab041beb8764d1037f7d859182b1881f5e40c6921a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352316f6146722c30cf0aab041beb8764d1037f7d859182b1881f5e40c6921a9->enter($__internal_352316f6146722c30cf0aab041beb8764d1037f7d859182b1881f5e40c6921a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0e770265b4ed0f48e3a4d72b2609adf969ca8208bec708263d79213f5f44af0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e770265b4ed0f48e3a4d72b2609adf969ca8208bec708263d79213f5f44af0a->enter($__internal_0e770265b4ed0f48e3a4d72b2609adf969ca8208bec708263d79213f5f44af0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352316f6146722c30cf0aab041beb8764d1037f7d859182b1881f5e40c6921a9->leave($__internal_352316f6146722c30cf0aab041beb8764d1037f7d859182b1881f5e40c6921a9_prof);

        
        $__internal_0e770265b4ed0f48e3a4d72b2609adf969ca8208bec708263d79213f5f44af0a->leave($__internal_0e770265b4ed0f48e3a4d72b2609adf969ca8208bec708263d79213f5f44af0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10fa37b233b8e8a9973b7e99c7778e9505bdb88bd604d8721f8c31194d2eb82e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10fa37b233b8e8a9973b7e99c7778e9505bdb88bd604d8721f8c31194d2eb82e->enter($__internal_10fa37b233b8e8a9973b7e99c7778e9505bdb88bd604d8721f8c31194d2eb82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_017e45746814c0978503088d8ebd6a4f71c165d234f5cf0f8ceeb39b384d2066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017e45746814c0978503088d8ebd6a4f71c165d234f5cf0f8ceeb39b384d2066->enter($__internal_017e45746814c0978503088d8ebd6a4f71c165d234f5cf0f8ceeb39b384d2066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_017e45746814c0978503088d8ebd6a4f71c165d234f5cf0f8ceeb39b384d2066->leave($__internal_017e45746814c0978503088d8ebd6a4f71c165d234f5cf0f8ceeb39b384d2066_prof);

        
        $__internal_10fa37b233b8e8a9973b7e99c7778e9505bdb88bd604d8721f8c31194d2eb82e->leave($__internal_10fa37b233b8e8a9973b7e99c7778e9505bdb88bd604d8721f8c31194d2eb82e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
