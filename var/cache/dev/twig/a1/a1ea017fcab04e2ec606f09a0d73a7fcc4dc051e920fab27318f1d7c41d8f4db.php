<?php

/* post/show.html.twig */
class __TwigTemplate_ccb18f072b420cc9e858f0fd3ae4b636976218727562f256fe2bc1ce05d54163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_bd1781c7cf4cc8b7b0aa56592f58624adb9efabbce2248aa89e906261c02d9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1781c7cf4cc8b7b0aa56592f58624adb9efabbce2248aa89e906261c02d9e0->enter($__internal_bd1781c7cf4cc8b7b0aa56592f58624adb9efabbce2248aa89e906261c02d9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_8a8181c8d7321e1007c94573e4119ad4b9475140c1f487772977f0801648dd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8181c8d7321e1007c94573e4119ad4b9475140c1f487772977f0801648dd0c->enter($__internal_8a8181c8d7321e1007c94573e4119ad4b9475140c1f487772977f0801648dd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1781c7cf4cc8b7b0aa56592f58624adb9efabbce2248aa89e906261c02d9e0->leave($__internal_bd1781c7cf4cc8b7b0aa56592f58624adb9efabbce2248aa89e906261c02d9e0_prof);

        
        $__internal_8a8181c8d7321e1007c94573e4119ad4b9475140c1f487772977f0801648dd0c->leave($__internal_8a8181c8d7321e1007c94573e4119ad4b9475140c1f487772977f0801648dd0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55425c494aa7ebd2e64183acb78ef3ffe3ba74fcd5d317201d95054da7e2a28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55425c494aa7ebd2e64183acb78ef3ffe3ba74fcd5d317201d95054da7e2a28a->enter($__internal_55425c494aa7ebd2e64183acb78ef3ffe3ba74fcd5d317201d95054da7e2a28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fed49a066386f04ff27f95d0fb10a07aa071cd0032d4ebed1ad8b2d7ad42b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fed49a066386f04ff27f95d0fb10a07aa071cd0032d4ebed1ad8b2d7ad42b92->enter($__internal_6fed49a066386f04ff27f95d0fb10a07aa071cd0032d4ebed1ad8b2d7ad42b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "author", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
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
        
        $__internal_6fed49a066386f04ff27f95d0fb10a07aa071cd0032d4ebed1ad8b2d7ad42b92->leave($__internal_6fed49a066386f04ff27f95d0fb10a07aa071cd0032d4ebed1ad8b2d7ad42b92_prof);

        
        $__internal_55425c494aa7ebd2e64183acb78ef3ffe3ba74fcd5d317201d95054da7e2a28a->leave($__internal_55425c494aa7ebd2e64183acb78ef3ffe3ba74fcd5d317201d95054da7e2a28a_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
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
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ post.description }}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>{{ post.author }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ post.contenu }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ post.path }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/show.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/post/show.html.twig");
    }
}
