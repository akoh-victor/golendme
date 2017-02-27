<?php

/* base.html.twig */
class __TwigTemplate_c36cd8829642ddb094a56edec742d2c542d32941a5ebdadc192295095844f4a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada0f4445de897be871268fd2f4744617712ce9d71abeaa6cb0ad3d8283ea92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada0f4445de897be871268fd2f4744617712ce9d71abeaa6cb0ad3d8283ea92e->enter($__internal_ada0f4445de897be871268fd2f4744617712ce9d71abeaa6cb0ad3d8283ea92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"codeclicks\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "</head>
    <body>
    ";
        // line 45
        $this->displayBlock('navigation', $context, $blocks);
        // line 120
        echo "
    ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 157
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 179
        echo "    </body>
</html>
";
        
        $__internal_ada0f4445de897be871268fd2f4744617712ce9d71abeaa6cb0ad3d8283ea92e->leave($__internal_ada0f4445de897be871268fd2f4744617712ce9d71abeaa6cb0ad3d8283ea92e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f604254f029e975d909c7d15a9e3460bec360ea5de6b8f20029ccabdbf7eab5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f604254f029e975d909c7d15a9e3460bec360ea5de6b8f20029ccabdbf7eab5b->enter($__internal_f604254f029e975d909c7d15a9e3460bec360ea5de6b8f20029ccabdbf7eab5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "golendme - You can change the world";
        
        $__internal_f604254f029e975d909c7d15a9e3460bec360ea5de6b8f20029ccabdbf7eab5b->leave($__internal_f604254f029e975d909c7d15a9e3460bec360ea5de6b8f20029ccabdbf7eab5b_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00446f0ad3b7957e10733a84ffc5a1f11787ca0a2ec800d61c646629e04a4bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00446f0ad3b7957e10733a84ffc5a1f11787ca0a2ec800d61c646629e04a4bff->enter($__internal_00446f0ad3b7957e10733a84ffc5a1f11787ca0a2ec800d61c646629e04a4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d703ff6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_bootstrap.min_1.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_style_2.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_font-awesome.min_3.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_animate_4.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_owl.carousel_5.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_owl.theme_6.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_owl.transitions_7.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "d703ff6_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_responsive_8.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "d703ff6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d703ff6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app.css");
            // line 27
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "
            <!-- Colors CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color/green.css"), "html", null, true);
        echo "\">



        ";
        // line 38
        echo "



        ";
        
        $__internal_00446f0ad3b7957e10733a84ffc5a1f11787ca0a2ec800d61c646629e04a4bff->leave($__internal_00446f0ad3b7957e10733a84ffc5a1f11787ca0a2ec800d61c646629e04a4bff_prof);

    }

    // line 45
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d7c3bbe1b00928620844f338af68cf1012c00599bd3cfbe989f541df9812419b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c3bbe1b00928620844f338af68cf1012c00599bd3cfbe989f541df9812419b->enter($__internal_d7c3bbe1b00928620844f338af68cf1012c00599bd3cfbe989f541df9812419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 46
        echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <!-- logo -->
                <h1 style=\"margin-top: 0;padding: 0\" class=\"navbar-brand\">
                    <a href=\"#body\" class=\"navbar-brand page-scroll\" >
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Logo.png"), "html", null, true);
        echo "\" alt=\"mmc\" class=\"img-responsive\"
                             style=\"margin-top: -0.4em;color:white; height: auto; width: 2em\" /></a>
                </h1>
                <!-- /logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">

                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#page-top\">Home</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about-us\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#works\">How It Works</a>
                    </li>
                    <li>
                        ";
        // line 84
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 85
            echo "                            <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                <i class=\"\" aria-hidden=\"true\"></i>
                                Dashboard
                            </a>
                        ";
        } else {
            // line 90
            echo "                            <a class=\"page-scroll\" href=\"#pricing\">Register</a>
                        ";
        }
        // line 92
        echo "                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"#latest-news\">Update</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">FAQ</a>
                    </li>
                    <li>
                        ";
        // line 101
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 102
            echo "                            <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                <i class=\"\" aria-hidden=\"true\"></i>
                                Logout
                            </a>
                        ";
        } else {
            // line 107
            echo "                            <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                                <i class=\"\" aria-hidden=\"true\"></i>
                                Login
                            </a>
                        ";
        }
        // line 112
        echo "                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    ";
        
        $__internal_d7c3bbe1b00928620844f338af68cf1012c00599bd3cfbe989f541df9812419b->leave($__internal_d7c3bbe1b00928620844f338af68cf1012c00599bd3cfbe989f541df9812419b_prof);

    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba2f4b87c7b005d410386c83a3e7272d21c0d12b398c7dbcc240016112bc7340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2f4b87c7b005d410386c83a3e7272d21c0d12b398c7dbcc240016112bc7340->enter($__internal_ba2f4b87c7b005d410386c83a3e7272d21c0d12b398c7dbcc240016112bc7340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 122
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 125
        echo "        ";
        
        $__internal_ba2f4b87c7b005d410386c83a3e7272d21c0d12b398c7dbcc240016112bc7340->leave($__internal_ba2f4b87c7b005d410386c83a3e7272d21c0d12b398c7dbcc240016112bc7340_prof);

    }

    // line 122
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4b4ce42325f26bcc1cfc4c7e18839b5511f837a44bdbb2d28b922cd8bb07a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b4ce42325f26bcc1cfc4c7e18839b5511f837a44bdbb2d28b922cd8bb07a35->enter($__internal_a4b4ce42325f26bcc1cfc4c7e18839b5511f837a44bdbb2d28b922cd8bb07a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 123
        echo "
            ";
        
        $__internal_a4b4ce42325f26bcc1cfc4c7e18839b5511f837a44bdbb2d28b922cd8bb07a35->leave($__internal_a4b4ce42325f26bcc1cfc4c7e18839b5511f837a44bdbb2d28b922cd8bb07a35_prof);

    }

    // line 126
    public function block_footer($context, array $blocks = array())
    {
        $__internal_732756a94273da838e3ff0cc7d773ae410f04ab308a18e45b93e7c1a5d2752e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732756a94273da838e3ff0cc7d773ae410f04ab308a18e45b93e7c1a5d2752e8->enter($__internal_732756a94273da838e3ff0cc7d773ae410f04ab308a18e45b93e7c1a5d2752e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 127
        echo "    <footer class=\"style-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-xs-12\">
                    <span><a href=\"#\">support@golendme.org</a></span>
                    <span class=\"copyright\">Copyright &copy; <a href=\"\">golendme</a> 2017</span>

                </div>
                <div class=\"col-md-4 col-xs-12\">
        <div class=\"footer-social text-center\">
            <ul>
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"https://web.facebook.com/golendme.org/\"><i class=\"fa fa-facebook\"></i></a></li>

            </ul>
        </div>
    </div>
        <div class=\"col-md-4 col-xs-12\">
            <div class=\"footer-link\">
                <ul class=\"pull-right\">
                    <li><a href=\"#\">Privacy Policy</a></li>

                    <li><a href=\"#\">Powered By golendme</a></li>
                </ul>
            </div>
        </div>
        </div>
        </div>
        </footer>
    ";
        
        $__internal_732756a94273da838e3ff0cc7d773ae410f04ab308a18e45b93e7c1a5d2752e8->leave($__internal_732756a94273da838e3ff0cc7d773ae410f04ab308a18e45b93e7c1a5d2752e8_prof);

    }

    // line 157
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bb60af934369c8c4cbd263036a022fa20b84f608550d4604bfd922f4042d97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb60af934369c8c4cbd263036a022fa20b84f608550d4604bfd922f4042d97a->enter($__internal_9bb60af934369c8c4cbd263036a022fa20b84f608550d4604bfd922f4042d97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 158
        echo "
            <!-- jQuery Version 2.1.1 -->
            <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Plugin JavaScript -->
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/count-to.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/cbpAnimatedHeader.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/styleswitcher.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://use.fontawesome.com/9c59445dbc.js\"></script>
            <!-- Contact Form JavaScript -->
            <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/contact_me.js"), "html", null, true);
        echo "\"></script>
            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_9bb60af934369c8c4cbd263036a022fa20b84f608550d4604bfd922f4042d97a->leave($__internal_9bb60af934369c8c4cbd263036a022fa20b84f608550d4604bfd922f4042d97a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 177,  443 => 175,  439 => 174,  433 => 171,  429 => 170,  425 => 169,  421 => 168,  417 => 167,  413 => 166,  409 => 165,  405 => 164,  400 => 162,  395 => 160,  391 => 158,  385 => 157,  349 => 127,  343 => 126,  335 => 123,  329 => 122,  322 => 125,  319 => 122,  313 => 121,  299 => 112,  290 => 107,  281 => 102,  279 => 101,  268 => 92,  264 => 90,  255 => 85,  253 => 84,  227 => 61,  210 => 46,  204 => 45,  193 => 38,  186 => 32,  182 => 30,  176 => 28,  173 => 27,  166 => 28,  163 => 27,  157 => 28,  154 => 27,  148 => 28,  145 => 27,  139 => 28,  136 => 27,  130 => 28,  127 => 27,  121 => 28,  118 => 27,  112 => 28,  109 => 27,  103 => 28,  100 => 27,  95 => 14,  89 => 13,  77 => 9,  68 => 179,  65 => 157,  62 => 126,  60 => 121,  57 => 120,  55 => 45,  51 => 43,  49 => 13,  44 => 11,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"codeclicks\">
        <title>{% block title %}golendme - You can change the world{% endblock %}</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        {% block stylesheets %}
            {% stylesheets  filter='scssphp' output=\"css/app.css\"

            \"assets/css/bootstrap.min.css\"
            \"assets/css/style.css\"
            \"assets/css/font-awesome.min.css\"
            \"assets/css/animate.css\"
            \"assets/css/owl.carousel.css\"
            \"assets/css/owl.theme.css\"
            \"assets/css/owl.transitions.css\"

            \"assets/css/responsive.css\"

            %}

            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}

            <!-- Colors CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/color/green.css') }}\">



        {#    <!-- Custom Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>#}




        {% endblock %}
</head>
    <body>
    {% block navigation %}
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>

                <!-- logo -->
                <h1 style=\"margin-top: 0;padding: 0\" class=\"navbar-brand\">
                    <a href=\"#body\" class=\"navbar-brand page-scroll\" >
                        <img src=\"{{ asset('Logo.png') }}\" alt=\"mmc\" class=\"img-responsive\"
                             style=\"margin-top: -0.4em;color:white; height: auto; width: 2em\" /></a>
                </h1>
                <!-- /logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">

                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#page-top\">Home</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about-us\">About</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#works\">How It Works</a>
                    </li>
                    <li>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <a href= \"{{ path('dashboard') }}\">
                                <i class=\"\" aria-hidden=\"true\"></i>
                                Dashboard
                            </a>
                        {% else %}
                            <a class=\"page-scroll\" href=\"#pricing\">Register</a>
                        {% endif %}
                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"#latest-news\">Update</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">FAQ</a>
                    </li>
                    <li>
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <a href= \"{{ path('fos_user_security_logout') }}\">
                                <i class=\"\" aria-hidden=\"true\"></i>
                                Logout
                            </a>
                        {% else %}
                            <a href= \"{{ path('fos_user_security_login') }}\">
                                <i class=\"\" aria-hidden=\"true\"></i>
                                Login
                            </a>
                        {% endif %}
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    {% endblock %}

    {% block body %}
            {% block content %}

            {% endblock %}
        {% endblock %}
    {% block footer %}
    <footer class=\"style-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 col-xs-12\">
                    <span><a href=\"#\">support@golendme.org</a></span>
                    <span class=\"copyright\">Copyright &copy; <a href=\"\">golendme</a> 2017</span>

                </div>
                <div class=\"col-md-4 col-xs-12\">
        <div class=\"footer-social text-center\">
            <ul>
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"https://web.facebook.com/golendme.org/\"><i class=\"fa fa-facebook\"></i></a></li>

            </ul>
        </div>
    </div>
        <div class=\"col-md-4 col-xs-12\">
            <div class=\"footer-link\">
                <ul class=\"pull-right\">
                    <li><a href=\"#\">Privacy Policy</a></li>

                    <li><a href=\"#\">Powered By golendme</a></li>
                </ul>
            </div>
        </div>
        </div>
        </div>
        </footer>
    {% endblock %}
    {% block javascripts %}

            <!-- jQuery Version 2.1.1 -->
            <script src=\"{{ asset('assets/js/jquery-2.1.1.min.js') }}\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
            <!-- Plugin JavaScript -->
            <script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>
            <script src=\"{{ asset('assets/js/classie.js') }}\"></script>
            <script src=\"{{ asset('assets/js/count-to.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.appear.js') }}\"></script>
            <script src=\"{{ asset('assets/js/cbpAnimatedHeader.js') }}\"></script>
            <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.fitvids.js') }}\"></script>
            <script src=\"{{ asset('assets/js/styleswitcher.js') }}\"></script>
            <script src=\"https://use.fontawesome.com/9c59445dbc.js\"></script>
            <!-- Contact Form JavaScript -->
            <script src=\"{{ asset('assets/js/jqBootstrapValidation.js') }}\"></script>
            <script src=\"{{ asset('assets/js/contact_me.js') }}\"></script>
            <!-- Custom Theme JavaScript -->
            <script src=\"{{ asset('assets/js/script.js') }}\"></script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/golendme/app/Resources/views/base.html.twig");
    }
}
