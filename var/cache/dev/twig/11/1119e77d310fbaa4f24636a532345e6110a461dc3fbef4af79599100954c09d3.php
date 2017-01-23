<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_71904bd48f890b43211fd428960caeb30288a22fbe9febde8d73bcb426d07a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c5154739ab124d8b4d2344eed25b01c5bd31c6a1d3d6d89e61ec18d38fda68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c5154739ab124d8b4d2344eed25b01c5bd31c6a1d3d6d89e61ec18d38fda68->enter($__internal_77c5154739ab124d8b4d2344eed25b01c5bd31c6a1d3d6d89e61ec18d38fda68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_39533a82383b441d028b5619143893d7c141221ebeef5b91b38726112ecc82b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39533a82383b441d028b5619143893d7c141221ebeef5b91b38726112ecc82b2->enter($__internal_39533a82383b441d028b5619143893d7c141221ebeef5b91b38726112ecc82b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_77c5154739ab124d8b4d2344eed25b01c5bd31c6a1d3d6d89e61ec18d38fda68->leave($__internal_77c5154739ab124d8b4d2344eed25b01c5bd31c6a1d3d6d89e61ec18d38fda68_prof);

        
        $__internal_39533a82383b441d028b5619143893d7c141221ebeef5b91b38726112ecc82b2->leave($__internal_39533a82383b441d028b5619143893d7c141221ebeef5b91b38726112ecc82b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/VBM/projects_web/a_prendre_en_main/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
