<?php

/* index.twig */
class __TwigTemplate_9007e0af6293c9a33c5cf93f05c4cc2cdaba637bd1fded28a49b8e6461878386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "index.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Homepage";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Homepage</h1>
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h2><!-- name in url path -->
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["u"] ?? null), "name", array()), "html", null, true);
        echo "</h2><!-- name in DB of user -->
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}Homepage{% endblock %}
{% block content %}
    <h1>Homepage</h1>
    <h2>{{name}}</h2><!-- name in url path -->
    <h2>{{u.name}}</h2><!-- name in DB of user -->
{% endblock %}
", "index.twig", "C:\\xampp\\htdocs\\slim-auth-basic\\resources\\views\\index.twig");
    }
}
