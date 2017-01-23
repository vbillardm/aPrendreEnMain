<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
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
        $__internal_a44032a9e397ddbfde5ad8cd42fe7907b424bb86b8d36e4311a2d41c38d01190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44032a9e397ddbfde5ad8cd42fe7907b424bb86b8d36e4311a2d41c38d01190->enter($__internal_a44032a9e397ddbfde5ad8cd42fe7907b424bb86b8d36e4311a2d41c38d01190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b670f591bd586feee3b03394b413779286157b7e61a464743f4e32b0f8fd8596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b670f591bd586feee3b03394b413779286157b7e61a464743f4e32b0f8fd8596->enter($__internal_b670f591bd586feee3b03394b413779286157b7e61a464743f4e32b0f8fd8596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a44032a9e397ddbfde5ad8cd42fe7907b424bb86b8d36e4311a2d41c38d01190->leave($__internal_a44032a9e397ddbfde5ad8cd42fe7907b424bb86b8d36e4311a2d41c38d01190_prof);

        
        $__internal_b670f591bd586feee3b03394b413779286157b7e61a464743f4e32b0f8fd8596->leave($__internal_b670f591bd586feee3b03394b413779286157b7e61a464743f4e32b0f8fd8596_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18c08b14e3b14af1110f868006ff66799ba1f6355c1d8a51109510b6739dfac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c08b14e3b14af1110f868006ff66799ba1f6355c1d8a51109510b6739dfac1->enter($__internal_18c08b14e3b14af1110f868006ff66799ba1f6355c1d8a51109510b6739dfac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84660d6a0a8a189f98d0a63d6d2abb2bf20e7f5f8798f6f6118d701cfdc00581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84660d6a0a8a189f98d0a63d6d2abb2bf20e7f5f8798f6f6118d701cfdc00581->enter($__internal_84660d6a0a8a189f98d0a63d6d2abb2bf20e7f5f8798f6f6118d701cfdc00581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_84660d6a0a8a189f98d0a63d6d2abb2bf20e7f5f8798f6f6118d701cfdc00581->leave($__internal_84660d6a0a8a189f98d0a63d6d2abb2bf20e7f5f8798f6f6118d701cfdc00581_prof);

        
        $__internal_18c08b14e3b14af1110f868006ff66799ba1f6355c1d8a51109510b6739dfac1->leave($__internal_18c08b14e3b14af1110f868006ff66799ba1f6355c1d8a51109510b6739dfac1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b3d88e87b64ddd1f0a59b953642d3593f937f73bb012b88351ab8d2b56ef6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3d88e87b64ddd1f0a59b953642d3593f937f73bb012b88351ab8d2b56ef6ca->enter($__internal_1b3d88e87b64ddd1f0a59b953642d3593f937f73bb012b88351ab8d2b56ef6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15cc4df71a8ca55396390e0b6cec3035ee81e801d3286d2b77415fa338e14477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cc4df71a8ca55396390e0b6cec3035ee81e801d3286d2b77415fa338e14477->enter($__internal_15cc4df71a8ca55396390e0b6cec3035ee81e801d3286d2b77415fa338e14477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15cc4df71a8ca55396390e0b6cec3035ee81e801d3286d2b77415fa338e14477->leave($__internal_15cc4df71a8ca55396390e0b6cec3035ee81e801d3286d2b77415fa338e14477_prof);

        
        $__internal_1b3d88e87b64ddd1f0a59b953642d3593f937f73bb012b88351ab8d2b56ef6ca->leave($__internal_1b3d88e87b64ddd1f0a59b953642d3593f937f73bb012b88351ab8d2b56ef6ca_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aeaaf48d9a3b82c69ab13762e05bfdea939c02e76cb6a8579c0ca00e1477475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aeaaf48d9a3b82c69ab13762e05bfdea939c02e76cb6a8579c0ca00e1477475->enter($__internal_1aeaaf48d9a3b82c69ab13762e05bfdea939c02e76cb6a8579c0ca00e1477475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6976e0dae5a9ed46233221eaee16c59a16ebae13d1bbca75efaa1c900aba9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6976e0dae5a9ed46233221eaee16c59a16ebae13d1bbca75efaa1c900aba9ff->enter($__internal_d6976e0dae5a9ed46233221eaee16c59a16ebae13d1bbca75efaa1c900aba9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d6976e0dae5a9ed46233221eaee16c59a16ebae13d1bbca75efaa1c900aba9ff->leave($__internal_d6976e0dae5a9ed46233221eaee16c59a16ebae13d1bbca75efaa1c900aba9ff_prof);

        
        $__internal_1aeaaf48d9a3b82c69ab13762e05bfdea939c02e76cb6a8579c0ca00e1477475->leave($__internal_1aeaaf48d9a3b82c69ab13762e05bfdea939c02e76cb6a8579c0ca00e1477475_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
