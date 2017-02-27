<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c4a0f20c2fbdf3230f1c314d9e452b2f0c2b2ee6cfb8b8d60c4860f1a8ca91b4 extends Twig_Template
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
        $__internal_ddf0442cc2372ffc5720d917adb45e0b3f2d8bb25f017112b283185aadd7e5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf0442cc2372ffc5720d917adb45e0b3f2d8bb25f017112b283185aadd7e5f0->enter($__internal_ddf0442cc2372ffc5720d917adb45e0b3f2d8bb25f017112b283185aadd7e5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf0442cc2372ffc5720d917adb45e0b3f2d8bb25f017112b283185aadd7e5f0->leave($__internal_ddf0442cc2372ffc5720d917adb45e0b3f2d8bb25f017112b283185aadd7e5f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff6fbf5e39c82c31c51e398070ce3f03f6129b152d321a7e8bd72e87b2fb5b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6fbf5e39c82c31c51e398070ce3f03f6129b152d321a7e8bd72e87b2fb5b67->enter($__internal_ff6fbf5e39c82c31c51e398070ce3f03f6129b152d321a7e8bd72e87b2fb5b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ff6fbf5e39c82c31c51e398070ce3f03f6129b152d321a7e8bd72e87b2fb5b67->leave($__internal_ff6fbf5e39c82c31c51e398070ce3f03f6129b152d321a7e8bd72e87b2fb5b67_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6c0dc6bc662be966b682ae010e81be98a7dd9fde099a60665809d5ca6b17edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c0dc6bc662be966b682ae010e81be98a7dd9fde099a60665809d5ca6b17edc->enter($__internal_b6c0dc6bc662be966b682ae010e81be98a7dd9fde099a60665809d5ca6b17edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b6c0dc6bc662be966b682ae010e81be98a7dd9fde099a60665809d5ca6b17edc->leave($__internal_b6c0dc6bc662be966b682ae010e81be98a7dd9fde099a60665809d5ca6b17edc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_139468f9ba86d1d2dab6d5b4cc61537ee558d579fc9594e493af664f7daf0629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139468f9ba86d1d2dab6d5b4cc61537ee558d579fc9594e493af664f7daf0629->enter($__internal_139468f9ba86d1d2dab6d5b4cc61537ee558d579fc9594e493af664f7daf0629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_139468f9ba86d1d2dab6d5b4cc61537ee558d579fc9594e493af664f7daf0629->leave($__internal_139468f9ba86d1d2dab6d5b4cc61537ee558d579fc9594e493af664f7daf0629_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/deploy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
