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
        $__internal_f95d9913d226b5896f07fb3c0e8e8c990059fd9a7d7a795f69d1e69610d05f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95d9913d226b5896f07fb3c0e8e8c990059fd9a7d7a795f69d1e69610d05f84->enter($__internal_f95d9913d226b5896f07fb3c0e8e8c990059fd9a7d7a795f69d1e69610d05f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0ff54d5b563f24fa075c6cfe4aa2e5dbd5174334eae7abbee9659eb6bb13bfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff54d5b563f24fa075c6cfe4aa2e5dbd5174334eae7abbee9659eb6bb13bfb9->enter($__internal_0ff54d5b563f24fa075c6cfe4aa2e5dbd5174334eae7abbee9659eb6bb13bfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f95d9913d226b5896f07fb3c0e8e8c990059fd9a7d7a795f69d1e69610d05f84->leave($__internal_f95d9913d226b5896f07fb3c0e8e8c990059fd9a7d7a795f69d1e69610d05f84_prof);

        
        $__internal_0ff54d5b563f24fa075c6cfe4aa2e5dbd5174334eae7abbee9659eb6bb13bfb9->leave($__internal_0ff54d5b563f24fa075c6cfe4aa2e5dbd5174334eae7abbee9659eb6bb13bfb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60fed1ad9f8a953389032508600770e3800dd161698a6ebc28e89f45bb644e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fed1ad9f8a953389032508600770e3800dd161698a6ebc28e89f45bb644e8d->enter($__internal_60fed1ad9f8a953389032508600770e3800dd161698a6ebc28e89f45bb644e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fea567f3393b6053661b737a4dc311b07034da3fea48c005e5377dc35dbb256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fea567f3393b6053661b737a4dc311b07034da3fea48c005e5377dc35dbb256->enter($__internal_3fea567f3393b6053661b737a4dc311b07034da3fea48c005e5377dc35dbb256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fea567f3393b6053661b737a4dc311b07034da3fea48c005e5377dc35dbb256->leave($__internal_3fea567f3393b6053661b737a4dc311b07034da3fea48c005e5377dc35dbb256_prof);

        
        $__internal_60fed1ad9f8a953389032508600770e3800dd161698a6ebc28e89f45bb644e8d->leave($__internal_60fed1ad9f8a953389032508600770e3800dd161698a6ebc28e89f45bb644e8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e711d4b44cc3eb499ee5d30e77ddd4ef17f0a550be085b2742a4c74103eb9108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e711d4b44cc3eb499ee5d30e77ddd4ef17f0a550be085b2742a4c74103eb9108->enter($__internal_e711d4b44cc3eb499ee5d30e77ddd4ef17f0a550be085b2742a4c74103eb9108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_909db34a861d035badcacbb24632f16578f0c5df00057b3d56ff5febbb952821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909db34a861d035badcacbb24632f16578f0c5df00057b3d56ff5febbb952821->enter($__internal_909db34a861d035badcacbb24632f16578f0c5df00057b3d56ff5febbb952821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_909db34a861d035badcacbb24632f16578f0c5df00057b3d56ff5febbb952821->leave($__internal_909db34a861d035badcacbb24632f16578f0c5df00057b3d56ff5febbb952821_prof);

        
        $__internal_e711d4b44cc3eb499ee5d30e77ddd4ef17f0a550be085b2742a4c74103eb9108->leave($__internal_e711d4b44cc3eb499ee5d30e77ddd4ef17f0a550be085b2742a4c74103eb9108_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ee2e70c2dc4855eac6ae026e5c148c5e77a836cb689e4f7b8a3b6566fcd76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ee2e70c2dc4855eac6ae026e5c148c5e77a836cb689e4f7b8a3b6566fcd76f->enter($__internal_d4ee2e70c2dc4855eac6ae026e5c148c5e77a836cb689e4f7b8a3b6566fcd76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f42ef7012a70234ea39f0624fd219f30205fb7ac92caf1ac1b4ba8a8f67ef957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42ef7012a70234ea39f0624fd219f30205fb7ac92caf1ac1b4ba8a8f67ef957->enter($__internal_f42ef7012a70234ea39f0624fd219f30205fb7ac92caf1ac1b4ba8a8f67ef957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f42ef7012a70234ea39f0624fd219f30205fb7ac92caf1ac1b4ba8a8f67ef957->leave($__internal_f42ef7012a70234ea39f0624fd219f30205fb7ac92caf1ac1b4ba8a8f67ef957_prof);

        
        $__internal_d4ee2e70c2dc4855eac6ae026e5c148c5e77a836cb689e4f7b8a3b6566fcd76f->leave($__internal_d4ee2e70c2dc4855eac6ae026e5c148c5e77a836cb689e4f7b8a3b6566fcd76f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5189747e8103e761046e052e280053834407d6b95a646c43dfcb5f4ba4c587e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5189747e8103e761046e052e280053834407d6b95a646c43dfcb5f4ba4c587e->enter($__internal_c5189747e8103e761046e052e280053834407d6b95a646c43dfcb5f4ba4c587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b14470462303dba07f4a4f942542eabfda5eb42b879259e6836d779bb859149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b14470462303dba07f4a4f942542eabfda5eb42b879259e6836d779bb859149->enter($__internal_9b14470462303dba07f4a4f942542eabfda5eb42b879259e6836d779bb859149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9b14470462303dba07f4a4f942542eabfda5eb42b879259e6836d779bb859149->leave($__internal_9b14470462303dba07f4a4f942542eabfda5eb42b879259e6836d779bb859149_prof);

        
        $__internal_c5189747e8103e761046e052e280053834407d6b95a646c43dfcb5f4ba4c587e->leave($__internal_c5189747e8103e761046e052e280053834407d6b95a646c43dfcb5f4ba4c587e_prof);

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
