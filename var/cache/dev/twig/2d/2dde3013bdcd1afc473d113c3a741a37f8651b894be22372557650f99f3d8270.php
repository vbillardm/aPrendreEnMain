<?php

/* members/new.html.twig */
class __TwigTemplate_e947870f0079aa29a9eee82b3f614b7cf6aab23a872d4b66756d72b785304de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "members/new.html.twig", 1);
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
        $__internal_cee8d32278a271a84aee60a41f7a7e4438c9e5d527b8dc70e17b1bde0b9a0a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee8d32278a271a84aee60a41f7a7e4438c9e5d527b8dc70e17b1bde0b9a0a8d->enter($__internal_cee8d32278a271a84aee60a41f7a7e4438c9e5d527b8dc70e17b1bde0b9a0a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "members/new.html.twig"));

        $__internal_d13e1664bd204aa0e0d70403d7f8c6f3cc6b0741b847785bfd967fabfa79859d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d13e1664bd204aa0e0d70403d7f8c6f3cc6b0741b847785bfd967fabfa79859d->enter($__internal_d13e1664bd204aa0e0d70403d7f8c6f3cc6b0741b847785bfd967fabfa79859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "members/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee8d32278a271a84aee60a41f7a7e4438c9e5d527b8dc70e17b1bde0b9a0a8d->leave($__internal_cee8d32278a271a84aee60a41f7a7e4438c9e5d527b8dc70e17b1bde0b9a0a8d_prof);

        
        $__internal_d13e1664bd204aa0e0d70403d7f8c6f3cc6b0741b847785bfd967fabfa79859d->leave($__internal_d13e1664bd204aa0e0d70403d7f8c6f3cc6b0741b847785bfd967fabfa79859d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e37ce5643703033a8c64ab3863ab06b1b5393eb1117a45621cb45907992ecb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37ce5643703033a8c64ab3863ab06b1b5393eb1117a45621cb45907992ecb06->enter($__internal_e37ce5643703033a8c64ab3863ab06b1b5393eb1117a45621cb45907992ecb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8192d80a6943c4a9664d5aa32007e6ad564bf918f965b49f99e73104568981ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8192d80a6943c4a9664d5aa32007e6ad564bf918f965b49f99e73104568981ec->enter($__internal_8192d80a6943c4a9664d5aa32007e6ad564bf918f965b49f99e73104568981ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Member creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8192d80a6943c4a9664d5aa32007e6ad564bf918f965b49f99e73104568981ec->leave($__internal_8192d80a6943c4a9664d5aa32007e6ad564bf918f965b49f99e73104568981ec_prof);

        
        $__internal_e37ce5643703033a8c64ab3863ab06b1b5393eb1117a45621cb45907992ecb06->leave($__internal_e37ce5643703033a8c64ab3863ab06b1b5393eb1117a45621cb45907992ecb06_prof);

    }

    public function getTemplateName()
    {
        return "members/new.html.twig";
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
    <h1>Member creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('members_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "members/new.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/members/new.html.twig");
    }
}
