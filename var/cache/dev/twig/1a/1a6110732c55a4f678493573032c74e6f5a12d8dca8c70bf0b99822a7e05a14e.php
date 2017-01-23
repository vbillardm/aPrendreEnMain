<?php

/* post/new.html.twig */
class __TwigTemplate_5a042c1b76eb8a4821b31c5d6a962b35fb2bb924b36fdf56680edcd71e1358e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8e877a263aa4674d73f8ab3ee072df51f6ca7ede301b5d2779bf7f4de62e38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e877a263aa4674d73f8ab3ee072df51f6ca7ede301b5d2779bf7f4de62e38e->enter($__internal_c8e877a263aa4674d73f8ab3ee072df51f6ca7ede301b5d2779bf7f4de62e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_fb328fd1880ce011325ae40b6aa2b37cc6a89e9d3e6ec0e03f490e24a92f9a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb328fd1880ce011325ae40b6aa2b37cc6a89e9d3e6ec0e03f490e24a92f9a6a->enter($__internal_fb328fd1880ce011325ae40b6aa2b37cc6a89e9d3e6ec0e03f490e24a92f9a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e877a263aa4674d73f8ab3ee072df51f6ca7ede301b5d2779bf7f4de62e38e->leave($__internal_c8e877a263aa4674d73f8ab3ee072df51f6ca7ede301b5d2779bf7f4de62e38e_prof);

        
        $__internal_fb328fd1880ce011325ae40b6aa2b37cc6a89e9d3e6ec0e03f490e24a92f9a6a->leave($__internal_fb328fd1880ce011325ae40b6aa2b37cc6a89e9d3e6ec0e03f490e24a92f9a6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78358ac07fcf536f4239870ee2096be9c4561e92db5a9cd134cbbfe7893748aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78358ac07fcf536f4239870ee2096be9c4561e92db5a9cd134cbbfe7893748aa->enter($__internal_78358ac07fcf536f4239870ee2096be9c4561e92db5a9cd134cbbfe7893748aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6da4f4de2bc3c4399acbca37f60b1fd6365b57d87829f3191ff7975309353afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da4f4de2bc3c4399acbca37f60b1fd6365b57d87829f3191ff7975309353afa->enter($__internal_6da4f4de2bc3c4399acbca37f60b1fd6365b57d87829f3191ff7975309353afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6da4f4de2bc3c4399acbca37f60b1fd6365b57d87829f3191ff7975309353afa->leave($__internal_6da4f4de2bc3c4399acbca37f60b1fd6365b57d87829f3191ff7975309353afa_prof);

        
        $__internal_78358ac07fcf536f4239870ee2096be9c4561e92db5a9cd134cbbfe7893748aa->leave($__internal_78358ac07fcf536f4239870ee2096be9c4561e92db5a9cd134cbbfe7893748aa_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "post/new.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/post/new.html.twig");
    }
}
