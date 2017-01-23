<?php

/* members/index.html.twig */
class __TwigTemplate_b64f97f3b2e4876d1a50ce059e152907db2dc27163b4f0a31deb46e4ebea07c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "members/index.html.twig", 1);
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
        $__internal_82b50ae1793a10c2abcf6708686fed1e786ce1c8c1430424bbb72643cee0b926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b50ae1793a10c2abcf6708686fed1e786ce1c8c1430424bbb72643cee0b926->enter($__internal_82b50ae1793a10c2abcf6708686fed1e786ce1c8c1430424bbb72643cee0b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "members/index.html.twig"));

        $__internal_139e78899372b7850ca15451a349e1db579ec64e470a34173ca8986deaf72fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139e78899372b7850ca15451a349e1db579ec64e470a34173ca8986deaf72fe5->enter($__internal_139e78899372b7850ca15451a349e1db579ec64e470a34173ca8986deaf72fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "members/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b50ae1793a10c2abcf6708686fed1e786ce1c8c1430424bbb72643cee0b926->leave($__internal_82b50ae1793a10c2abcf6708686fed1e786ce1c8c1430424bbb72643cee0b926_prof);

        
        $__internal_139e78899372b7850ca15451a349e1db579ec64e470a34173ca8986deaf72fe5->leave($__internal_139e78899372b7850ca15451a349e1db579ec64e470a34173ca8986deaf72fe5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78f51acdb017c225defacaf40a7a5c9a6b2fea4b5c77db16c87d137ef72002ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f51acdb017c225defacaf40a7a5c9a6b2fea4b5c77db16c87d137ef72002ac->enter($__internal_78f51acdb017c225defacaf40a7a5c9a6b2fea4b5c77db16c87d137ef72002ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9392d4d61ad29bebf3ac540bd5b246b7de72a59cb36f6327de2cc535754c0de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9392d4d61ad29bebf3ac540bd5b246b7de72a59cb36f6327de2cc535754c0de0->enter($__internal_9392d4d61ad29bebf3ac540bd5b246b7de72a59cb36f6327de2cc535754c0de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Members list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Description</th>
                <th>Email</th>
                <th>Poste</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["members"] ?? $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_show", array("id" => $this->getAttribute($context["member"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "poste", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_show", array("id" => $this->getAttribute($context["member"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_edit", array("id" => $this->getAttribute($context["member"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("members_new");
        echo "\">Create a new member</a>
        </li>
    </ul>
";
        
        $__internal_9392d4d61ad29bebf3ac540bd5b246b7de72a59cb36f6327de2cc535754c0de0->leave($__internal_9392d4d61ad29bebf3ac540bd5b246b7de72a59cb36f6327de2cc535754c0de0_prof);

        
        $__internal_78f51acdb017c225defacaf40a7a5c9a6b2fea4b5c77db16c87d137ef72002ac->leave($__internal_78f51acdb017c225defacaf40a7a5c9a6b2fea4b5c77db16c87d137ef72002ac_prof);

    }

    public function getTemplateName()
    {
        return "members/index.html.twig";
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
    <h1>Members list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Description</th>
                <th>Email</th>
                <th>Poste</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for member in members %}
            <tr>
                <td><a href=\"{{ path('members_show', { 'id': member.id }) }}\">{{ member.id }}</a></td>
                <td>{{ member.lastName }}</td>
                <td>{{ member.firstName }}</td>
                <td>{{ member.description }}</td>
                <td>{{ member.email }}</td>
                <td>{{ member.poste }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('members_show', { 'id': member.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('members_edit', { 'id': member.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('members_new') }}\">Create a new member</a>
        </li>
    </ul>
{% endblock %}
", "members/index.html.twig", "/Users/VBM/projects_web/a_prendre_en_main/app/Resources/views/members/index.html.twig");
    }
}
