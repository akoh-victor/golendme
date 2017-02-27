<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82c943e1376b676735770a4dc725771b753257030253e5e8efacd7f57c461bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5de797c263ccfd47b596e1944a9d86e738ff177a412cbe767764cd351f61f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5de797c263ccfd47b596e1944a9d86e738ff177a412cbe767764cd351f61f50->enter($__internal_d5de797c263ccfd47b596e1944a9d86e738ff177a412cbe767764cd351f61f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5de797c263ccfd47b596e1944a9d86e738ff177a412cbe767764cd351f61f50->leave($__internal_d5de797c263ccfd47b596e1944a9d86e738ff177a412cbe767764cd351f61f50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f43f31eb28c34bad7b9554d8bf6c9f7e93f34e6bf6bf8feeceb1bc0d462fcb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43f31eb28c34bad7b9554d8bf6c9f7e93f34e6bf6bf8feeceb1bc0d462fcb4c->enter($__internal_f43f31eb28c34bad7b9554d8bf6c9f7e93f34e6bf6bf8feeceb1bc0d462fcb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f43f31eb28c34bad7b9554d8bf6c9f7e93f34e6bf6bf8feeceb1bc0d462fcb4c->leave($__internal_f43f31eb28c34bad7b9554d8bf6c9f7e93f34e6bf6bf8feeceb1bc0d462fcb4c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d656291e27784a2289cfd81f733ab1917a86fabedfde2ad38befad407f5b161f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d656291e27784a2289cfd81f733ab1917a86fabedfde2ad38befad407f5b161f->enter($__internal_d656291e27784a2289cfd81f733ab1917a86fabedfde2ad38befad407f5b161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d656291e27784a2289cfd81f733ab1917a86fabedfde2ad38befad407f5b161f->leave($__internal_d656291e27784a2289cfd81f733ab1917a86fabedfde2ad38befad407f5b161f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92ae46cab8af8521596b266a78f0af03ccac5ae8937018ae2d90f0deb07c2eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ae46cab8af8521596b266a78f0af03ccac5ae8937018ae2d90f0deb07c2eac->enter($__internal_92ae46cab8af8521596b266a78f0af03ccac5ae8937018ae2d90f0deb07c2eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92ae46cab8af8521596b266a78f0af03ccac5ae8937018ae2d90f0deb07c2eac->leave($__internal_92ae46cab8af8521596b266a78f0af03ccac5ae8937018ae2d90f0deb07c2eac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/golendme/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
