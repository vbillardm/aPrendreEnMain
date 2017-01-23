<?php

/* members/show.html.twig */
class __TwigTemplate_381f921237399c7bf9cbcc63a59c0e92033cf0b273b07cecb4125ebee0f02676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "members/show.html.twig", 1);
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
        $__internal_8fd5322504c399fd36ed017694b85d9dd5d59b8d7063634bfb4760bda0bc511d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd5322504c399fd36ed017694b85d9dd5d59b8d7063634bfb4760bda0bc511d->enter($__internal_8fd5322504c399fd36ed017694b85d9dd5d59b8d7063634bfb4760bda0bc511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "members/show.html.twig"));

        $__internal_ebd73f92b327add8e55ea155462b5ca80352e47b22e383b6fad6a53e642021f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd73f92b327add8e55ea155462b5ca80352e47b22e383b6fad6a53e642021f0->enter($__internal_ebd73f92b327add8e55ea155462b5ca80352e47b22e383b6fad6a53e642021f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "members/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fd5322504c399fd36ed017694b85d9dd5d59b8d7063634bfb4760bda0bc511d->leave($__internal_8fd5322504c399fd36ed017694b85d9dd5d59b8d7063634bfb4760bda0bc511d_prof);

        
        $__internal_ebd73f92b327add8e55ea155462b5ca80352e47b22e383b6fad6a53e642021f0->leave($__internal_ebd73f92b327add8e55ea155462b5ca80352e47b22e383b6fad6a53e642021f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29ff3768c6515bad64e395af828b45d150c2c84252fddb0fde6ad662749b80f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ff3768c6515bad64e395af828b45d150c2c84252fddb0fde6ad662749b80f5->enter($__internal_29ff3768c6515bad64e395af828b45d150c2c84252fddb0fde6ad662749b80f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_587c563895b6f65a182017a48e3d67738f1c076193b523fde7ce04764b1e9387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587c563895b6f65a182017a48e3d67738f1c076193b523fde7ce04764b1e9387->enter($__internal_587c563895b6f65a182017a48e3d67738f1c076193b523fde7ce04764b1e9387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Member</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poste</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "poste", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_edit", array("id" => $this->getAttribute(($context["member"] ?? $this->getContext($context, "member")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_587c563895b6f65a182017a48e3d67738f1c076193b523fde7ce04764b1e9387->leave($__internal_587c563895b6f65a182017a48e3d67738f1c076193b523fde7ce04764b1e9387_prof);

        
        $__internal_29ff3768c6515bad64e395af828b45d150c2c84252fddb0fde6ad662749b80f5->leave($__internal_29ff3768c6515bad64e395af828b45d150c2c84252fddb0fde6ad662749b80f5_prof);

    }

    public function getTemplateName()
    {
        return "members/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Member</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ member.id }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ member.lastName }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ member.firstName }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ member.description }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ member.email }}</td>
            </tr>
            <tr>
                <th>Poste</th>
                <td>{{ member.poste }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('members_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('members_edit', { 'id': member.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "members/show.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/members/show.html.twig");
    }
}
