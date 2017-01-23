<?php

/* AcceuilBundle:Default:index.html.twig */
class __TwigTemplate_ccb8759a56c179ac7edecda5b702d89157fe825ff06563915e48cc844b0b4a5a extends Twig_Template
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
        $__internal_12c2657fd9a980a2fddf09c48a2b32d536d56e55bd9838cc6a7ba6ec9ac422a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c2657fd9a980a2fddf09c48a2b32d536d56e55bd9838cc6a7ba6ec9ac422a2->enter($__internal_12c2657fd9a980a2fddf09c48a2b32d536d56e55bd9838cc6a7ba6ec9ac422a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcceuilBundle:Default:index.html.twig"));

        $__internal_c1d52a5d631c140baa5fb3f2a654d17a70d0f31169c3477632fcb2386b5a7151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d52a5d631c140baa5fb3f2a654d17a70d0f31169c3477632fcb2386b5a7151->enter($__internal_c1d52a5d631c140baa5fb3f2a654d17a70d0f31169c3477632fcb2386b5a7151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcceuilBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_12c2657fd9a980a2fddf09c48a2b32d536d56e55bd9838cc6a7ba6ec9ac422a2->leave($__internal_12c2657fd9a980a2fddf09c48a2b32d536d56e55bd9838cc6a7ba6ec9ac422a2_prof);

        
        $__internal_c1d52a5d631c140baa5fb3f2a654d17a70d0f31169c3477632fcb2386b5a7151->leave($__internal_c1d52a5d631c140baa5fb3f2a654d17a70d0f31169c3477632fcb2386b5a7151_prof);

    }

    public function getTemplateName()
    {
        return "AcceuilBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AcceuilBundle:Default:index.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/src/AcceuilBundle/Resources/views/Default/index.html.twig");
    }
}
