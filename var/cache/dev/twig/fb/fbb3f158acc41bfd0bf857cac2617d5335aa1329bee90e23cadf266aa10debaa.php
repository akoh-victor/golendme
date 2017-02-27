<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9cf4bb194f31c17a55ab04b3dc0a79e8edf21d514fcf785b74320ca01cdcd203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4db4fe32bd350dd0a4d3236a6c8d81d15e5dfad814148d2dd0bf93b433831d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4db4fe32bd350dd0a4d3236a6c8d81d15e5dfad814148d2dd0bf93b433831d2->enter($__internal_a4db4fe32bd350dd0a4d3236a6c8d81d15e5dfad814148d2dd0bf93b433831d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4db4fe32bd350dd0a4d3236a6c8d81d15e5dfad814148d2dd0bf93b433831d2->leave($__internal_a4db4fe32bd350dd0a4d3236a6c8d81d15e5dfad814148d2dd0bf93b433831d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04dab9c4e601d14c9a0c2edbf39aac28f11a69ed1c50b473854eae4fc9493b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dab9c4e601d14c9a0c2edbf39aac28f11a69ed1c50b473854eae4fc9493b16->enter($__internal_04dab9c4e601d14c9a0c2edbf39aac28f11a69ed1c50b473854eae4fc9493b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04dab9c4e601d14c9a0c2edbf39aac28f11a69ed1c50b473854eae4fc9493b16->leave($__internal_04dab9c4e601d14c9a0c2edbf39aac28f11a69ed1c50b473854eae4fc9493b16_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e74b079fa27ab36f8d12ab80ca995b284a2196a3c1465fb727fd6d0cc8733e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74b079fa27ab36f8d12ab80ca995b284a2196a3c1465fb727fd6d0cc8733e36->enter($__internal_e74b079fa27ab36f8d12ab80ca995b284a2196a3c1465fb727fd6d0cc8733e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e74b079fa27ab36f8d12ab80ca995b284a2196a3c1465fb727fd6d0cc8733e36->leave($__internal_e74b079fa27ab36f8d12ab80ca995b284a2196a3c1465fb727fd6d0cc8733e36_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bb60bd967a7cc0486e70ccec3896b90a1dd27340a5299a8719d72819cbd17a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb60bd967a7cc0486e70ccec3896b90a1dd27340a5299a8719d72819cbd17a0->enter($__internal_1bb60bd967a7cc0486e70ccec3896b90a1dd27340a5299a8719d72819cbd17a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1bb60bd967a7cc0486e70ccec3896b90a1dd27340a5299a8719d72819cbd17a0->leave($__internal_1bb60bd967a7cc0486e70ccec3896b90a1dd27340a5299a8719d72819cbd17a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/golendme/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
