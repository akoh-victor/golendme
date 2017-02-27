<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_802252268f10533536ae8aabfffa553fb790c0f70a7eb21ee5ebabd9a8d2312e extends Twig_Template
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
        $__internal_f4a4288b0791ca83a1feba6ce0d5d241fe740c3c66d4df610af07278f106f58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a4288b0791ca83a1feba6ce0d5d241fe740c3c66d4df610af07278f106f58c->enter($__internal_f4a4288b0791ca83a1feba6ce0d5d241fe740c3c66d4df610af07278f106f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a4288b0791ca83a1feba6ce0d5d241fe740c3c66d4df610af07278f106f58c->leave($__internal_f4a4288b0791ca83a1feba6ce0d5d241fe740c3c66d4df610af07278f106f58c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_388fc53d0f2d48bd0869e4cd3cce637a2d2b641d09bd8ab17bd7f8dcf8667a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388fc53d0f2d48bd0869e4cd3cce637a2d2b641d09bd8ab17bd7f8dcf8667a53->enter($__internal_388fc53d0f2d48bd0869e4cd3cce637a2d2b641d09bd8ab17bd7f8dcf8667a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_388fc53d0f2d48bd0869e4cd3cce637a2d2b641d09bd8ab17bd7f8dcf8667a53->leave($__internal_388fc53d0f2d48bd0869e4cd3cce637a2d2b641d09bd8ab17bd7f8dcf8667a53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84d1f24fa6d0ddde90a845aa0e1f17ed870ea2176031b0f477e9ad0d5364358c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d1f24fa6d0ddde90a845aa0e1f17ed870ea2176031b0f477e9ad0d5364358c->enter($__internal_84d1f24fa6d0ddde90a845aa0e1f17ed870ea2176031b0f477e9ad0d5364358c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84d1f24fa6d0ddde90a845aa0e1f17ed870ea2176031b0f477e9ad0d5364358c->leave($__internal_84d1f24fa6d0ddde90a845aa0e1f17ed870ea2176031b0f477e9ad0d5364358c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7bc07e9a4eb82d3229cb6df4a45dec4617f3b7c6efd0dfaf2c889dd6b695f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bc07e9a4eb82d3229cb6df4a45dec4617f3b7c6efd0dfaf2c889dd6b695f69->enter($__internal_f7bc07e9a4eb82d3229cb6df4a45dec4617f3b7c6efd0dfaf2c889dd6b695f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7bc07e9a4eb82d3229cb6df4a45dec4617f3b7c6efd0dfaf2c889dd6b695f69->leave($__internal_f7bc07e9a4eb82d3229cb6df4a45dec4617f3b7c6efd0dfaf2c889dd6b695f69_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/deploy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
