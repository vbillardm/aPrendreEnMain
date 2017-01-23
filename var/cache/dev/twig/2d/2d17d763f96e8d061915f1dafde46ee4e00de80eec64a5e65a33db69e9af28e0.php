<?php

/* post/index.html.twig */
class __TwigTemplate_cd62367570b9a68288df94cf9e62cf207a0b909361c4cbfdc5f6687fc2e07540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_1cd33aed36c0dfb20ed7a082153edcf13c1e4a737aa196afc971d65301f4da2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd33aed36c0dfb20ed7a082153edcf13c1e4a737aa196afc971d65301f4da2b->enter($__internal_1cd33aed36c0dfb20ed7a082153edcf13c1e4a737aa196afc971d65301f4da2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_f6f1c6e9a42ca9067153a5a6a17cf59a0efdf9a81c36605a8d4c262a20b5eac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f1c6e9a42ca9067153a5a6a17cf59a0efdf9a81c36605a8d4c262a20b5eac0->enter($__internal_f6f1c6e9a42ca9067153a5a6a17cf59a0efdf9a81c36605a8d4c262a20b5eac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cd33aed36c0dfb20ed7a082153edcf13c1e4a737aa196afc971d65301f4da2b->leave($__internal_1cd33aed36c0dfb20ed7a082153edcf13c1e4a737aa196afc971d65301f4da2b_prof);

        
        $__internal_f6f1c6e9a42ca9067153a5a6a17cf59a0efdf9a81c36605a8d4c262a20b5eac0->leave($__internal_f6f1c6e9a42ca9067153a5a6a17cf59a0efdf9a81c36605a8d4c262a20b5eac0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b83a4f785966edbe6cd7f89018659b46ea8f2b62e9566012aa446af023d097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b83a4f785966edbe6cd7f89018659b46ea8f2b62e9566012aa446af023d097->enter($__internal_e5b83a4f785966edbe6cd7f89018659b46ea8f2b62e9566012aa446af023d097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_518c9ab3b602e4b110c634aeb960d19d5a8fa4ee6587efaf8e135ee450b36b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518c9ab3b602e4b110c634aeb960d19d5a8fa4ee6587efaf8e135ee450b36b8c->enter($__internal_518c9ab3b602e4b110c634aeb960d19d5a8fa4ee6587efaf8e135ee450b36b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Contenu</th>
                <th>Path</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "path", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_518c9ab3b602e4b110c634aeb960d19d5a8fa4ee6587efaf8e135ee450b36b8c->leave($__internal_518c9ab3b602e4b110c634aeb960d19d5a8fa4ee6587efaf8e135ee450b36b8c_prof);

        
        $__internal_e5b83a4f785966edbe6cd7f89018659b46ea8f2b62e9566012aa446af023d097->leave($__internal_e5b83a4f785966edbe6cd7f89018659b46ea8f2b62e9566012aa446af023d097_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Contenu</th>
                <th>Path</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.description }}</td>
                <td>{{ post.author }}</td>
                <td>{{ post.contenu }}</td>
                <td>{{ post.path }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "post/index.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/post/index.html.twig");
    }
}
