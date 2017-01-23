<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e19a62204004eaea22cf63fc646080540585b41c62dd971512f8c4bc00dec3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19a62204004eaea22cf63fc646080540585b41c62dd971512f8c4bc00dec3ac->enter($__internal_e19a62204004eaea22cf63fc646080540585b41c62dd971512f8c4bc00dec3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_291b0c10e7bb44525dee32e2288fabe1f2348a836f98b1f30ee9c7a3067e4d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291b0c10e7bb44525dee32e2288fabe1f2348a836f98b1f30ee9c7a3067e4d12->enter($__internal_291b0c10e7bb44525dee32e2288fabe1f2348a836f98b1f30ee9c7a3067e4d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e19a62204004eaea22cf63fc646080540585b41c62dd971512f8c4bc00dec3ac->leave($__internal_e19a62204004eaea22cf63fc646080540585b41c62dd971512f8c4bc00dec3ac_prof);

        
        $__internal_291b0c10e7bb44525dee32e2288fabe1f2348a836f98b1f30ee9c7a3067e4d12->leave($__internal_291b0c10e7bb44525dee32e2288fabe1f2348a836f98b1f30ee9c7a3067e4d12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efbf0a68ed78570ab884a6638cd61a9ffd8727250682397ba482c459484e22ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbf0a68ed78570ab884a6638cd61a9ffd8727250682397ba482c459484e22ee->enter($__internal_efbf0a68ed78570ab884a6638cd61a9ffd8727250682397ba482c459484e22ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_144d1f5da78766fb4e2f2c6060880ecc9c154a2892049d6ae04c911047185311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144d1f5da78766fb4e2f2c6060880ecc9c154a2892049d6ae04c911047185311->enter($__internal_144d1f5da78766fb4e2f2c6060880ecc9c154a2892049d6ae04c911047185311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_144d1f5da78766fb4e2f2c6060880ecc9c154a2892049d6ae04c911047185311->leave($__internal_144d1f5da78766fb4e2f2c6060880ecc9c154a2892049d6ae04c911047185311_prof);

        
        $__internal_efbf0a68ed78570ab884a6638cd61a9ffd8727250682397ba482c459484e22ee->leave($__internal_efbf0a68ed78570ab884a6638cd61a9ffd8727250682397ba482c459484e22ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_632ce2815db09763fae89c946474ae01329f9a7fea0c3a9f91830a7645674579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632ce2815db09763fae89c946474ae01329f9a7fea0c3a9f91830a7645674579->enter($__internal_632ce2815db09763fae89c946474ae01329f9a7fea0c3a9f91830a7645674579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1d22aea31853c35d9f524e9ee952ff9f2e0e78a7fc7481f8733c3bb78f9df17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d22aea31853c35d9f524e9ee952ff9f2e0e78a7fc7481f8733c3bb78f9df17b->enter($__internal_1d22aea31853c35d9f524e9ee952ff9f2e0e78a7fc7481f8733c3bb78f9df17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d22aea31853c35d9f524e9ee952ff9f2e0e78a7fc7481f8733c3bb78f9df17b->leave($__internal_1d22aea31853c35d9f524e9ee952ff9f2e0e78a7fc7481f8733c3bb78f9df17b_prof);

        
        $__internal_632ce2815db09763fae89c946474ae01329f9a7fea0c3a9f91830a7645674579->leave($__internal_632ce2815db09763fae89c946474ae01329f9a7fea0c3a9f91830a7645674579_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2286b8f01a1b15332a78235b0b720baa4ae9ef9af15ace0b72822bb4c945f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2286b8f01a1b15332a78235b0b720baa4ae9ef9af15ace0b72822bb4c945f3a->enter($__internal_a2286b8f01a1b15332a78235b0b720baa4ae9ef9af15ace0b72822bb4c945f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da9407ae321db8bc15ed60d672b6d5d55e469b1185c28c109871d5f0fa998998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9407ae321db8bc15ed60d672b6d5d55e469b1185c28c109871d5f0fa998998->enter($__internal_da9407ae321db8bc15ed60d672b6d5d55e469b1185c28c109871d5f0fa998998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da9407ae321db8bc15ed60d672b6d5d55e469b1185c28c109871d5f0fa998998->leave($__internal_da9407ae321db8bc15ed60d672b6d5d55e469b1185c28c109871d5f0fa998998_prof);

        
        $__internal_a2286b8f01a1b15332a78235b0b720baa4ae9ef9af15ace0b72822bb4c945f3a->leave($__internal_a2286b8f01a1b15332a78235b0b720baa4ae9ef9af15ace0b72822bb4c945f3a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52d5a6b43974aa3d6c89d52dc34d23d785ca7b07d46acae0006b223486e45fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d5a6b43974aa3d6c89d52dc34d23d785ca7b07d46acae0006b223486e45fbc->enter($__internal_52d5a6b43974aa3d6c89d52dc34d23d785ca7b07d46acae0006b223486e45fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_074d4c449df4651f1bf1a8933d9e88f64161e667c9c5513de09a13bcb8f4d6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074d4c449df4651f1bf1a8933d9e88f64161e667c9c5513de09a13bcb8f4d6fb->enter($__internal_074d4c449df4651f1bf1a8933d9e88f64161e667c9c5513de09a13bcb8f4d6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_074d4c449df4651f1bf1a8933d9e88f64161e667c9c5513de09a13bcb8f4d6fb->leave($__internal_074d4c449df4651f1bf1a8933d9e88f64161e667c9c5513de09a13bcb8f4d6fb_prof);

        
        $__internal_52d5a6b43974aa3d6c89d52dc34d23d785ca7b07d46acae0006b223486e45fbc->leave($__internal_52d5a6b43974aa3d6c89d52dc34d23d785ca7b07d46acae0006b223486e45fbc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/base.html.twig");
    }
}
