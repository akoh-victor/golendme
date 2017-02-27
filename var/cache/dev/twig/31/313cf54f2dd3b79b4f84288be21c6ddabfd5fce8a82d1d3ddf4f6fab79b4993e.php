<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d916a6c8acd3177e82719e40f9b7fbff3d2af1f9fc58f3a56a4e2049b343951c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'navItems' => array($this, 'block_navItems'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e033b7b97d0c1f791129a5d033289958ee9fe2b82b6a1be6d60e2018b7f81a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e033b7b97d0c1f791129a5d033289958ee9fe2b82b6a1be6d60e2018b7f81a68->enter($__internal_e033b7b97d0c1f791129a5d033289958ee9fe2b82b6a1be6d60e2018b7f81a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e033b7b97d0c1f791129a5d033289958ee9fe2b82b6a1be6d60e2018b7f81a68->leave($__internal_e033b7b97d0c1f791129a5d033289958ee9fe2b82b6a1be6d60e2018b7f81a68_prof);

    }

    // line 3
    public function block_navItems($context, array $blocks = array())
    {
        $__internal_df0646667b93e4bf819acb341fcbe87e4bcd821ae26f49bb5a93e345d921fe4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0646667b93e4bf819acb341fcbe87e4bcd821ae26f49bb5a93e345d921fe4f->enter($__internal_df0646667b93e4bf819acb341fcbe87e4bcd821ae26f49bb5a93e345d921fe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navItems"));

        
        $__internal_df0646667b93e4bf819acb341fcbe87e4bcd821ae26f49bb5a93e345d921fe4f->leave($__internal_df0646667b93e4bf819acb341fcbe87e4bcd821ae26f49bb5a93e345d921fe4f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_814022c318110f242cb4052e3b127120fdfdcfa42c4d1cb9ce60109eafd01d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814022c318110f242cb4052e3b127120fdfdcfa42c4d1cb9ce60109eafd01d67->enter($__internal_814022c318110f242cb4052e3b127120fdfdcfa42c4d1cb9ce60109eafd01d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <ol class=\"breadcrumb\">
        <li><strong>You are here :</strong></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
        <li class=\"active\"><a href=\"#\"><strong>Login</strong></a></li>
    </ol>
        ";
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_814022c318110f242cb4052e3b127120fdfdcfa42c4d1cb9ce60109eafd01d67->leave($__internal_814022c318110f242cb4052e3b127120fdfdcfa42c4d1cb9ce60109eafd01d67_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17475eae3a253738abd86c56210886d6090e2d00bb9dffb3ba7d0d54022f2051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17475eae3a253738abd86c56210886d6090e2d00bb9dffb3ba7d0d54022f2051->enter($__internal_17475eae3a253738abd86c56210886d6090e2d00bb9dffb3ba7d0d54022f2051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "
            <div class=\"col-sm-6 col-sm-offset-3\" >

                <div class=\"login-panel panel panel-default\">

                    ";
        // line 20
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 21
            echo "                    <div class=\"panel-danger\" xmlns=\"http://www.w3.org/1999/html\">
                        <h3 class=\"panel-heading\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            // line 24
            echo "
                        </h3>
                    </div>

                    ";
        } else {
            // line 29
            echo "                        <h3 class=\"panel-heading\"> Sign In
                        </h3>
                    ";
        }
        // line 32
        echo "                    <div class=\"panel-body\">

                        <form action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <fieldset>
                                <div class=\"form-group\">
                                    <label for=\"username\">User name</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
                                           class=\"form-control\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\">Password</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                                </div>
                                <div class=\"form-group\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"  value=\"on\" />
                                <label for=\"remember_me\">Remember Me</label>
                               ";
        // line 48
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 49
            echo "                                    <p>Did you forget your password ? <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
            echo "\">
                                           <strong> Request </strong></a> for a new one</p>
                               ";
        }
        // line 52
        echo "                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                <button type=\"submit\" class=\"btn btn-lg btn-outline btn-info btn-block\">Login</button>
                            </fieldset>
                        </form>
                    </div>
            </div>
            </div>

        ";
        
        $__internal_17475eae3a253738abd86c56210886d6090e2d00bb9dffb3ba7d0d54022f2051->leave($__internal_17475eae3a253738abd86c56210886d6090e2d00bb9dffb3ba7d0d54022f2051_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  138 => 52,  131 => 49,  129 => 48,  116 => 38,  109 => 34,  105 => 32,  100 => 29,  93 => 24,  91 => 23,  87 => 21,  85 => 20,  78 => 15,  66 => 14,  63 => 13,  57 => 9,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block navItems %}
{% endblock %}

{% block content %}
    <ol class=\"breadcrumb\">
        <li><strong>You are here :</strong></li>
        <li><a href=\"{{ path('home') }}\">Home</a></li>
        <li class=\"active\"><a href=\"#\"><strong>Login</strong></a></li>
    </ol>
        {% trans_default_domain 'FOSUserBundle' %}

        {% block fos_user_content %}

            <div class=\"col-sm-6 col-sm-offset-3\" >

                <div class=\"login-panel panel panel-default\">

                    {% if error %}
                    <div class=\"panel-danger\" xmlns=\"http://www.w3.org/1999/html\">
                        <h3 class=\"panel-heading\">
                            {{ error.messageKey|trans(error.messageData,
                            'security') }}
                        </h3>
                    </div>

                    {% else %}
                        <h3 class=\"panel-heading\"> Sign In
                        </h3>
                    {% endif %}
                    <div class=\"panel-body\">

                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                            <fieldset>
                                <div class=\"form-group\">
                                    <label for=\"username\">User name</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"
                                           class=\"form-control\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\">Password</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                                </div>
                                <div class=\"form-group\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"  value=\"on\" />
                                <label for=\"remember_me\">Remember Me</label>
                               {% if error %}
                                    <p>Did you forget your password ? <a href=\"{{ path('fos_user_resetting_request') }}\">
                                           <strong> Request </strong></a> for a new one</p>
                               {% endif %}
                                </div>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                                <button type=\"submit\" class=\"btn btn-lg btn-outline btn-info btn-block\">Login</button>
                            </fieldset>
                        </form>
                    </div>
            </div>
            </div>

        {% endblock fos_user_content %}
{% endblock %}", "FOSUserBundle:Security:login.html.twig", "/opt/lampp/htdocs/golendme/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
