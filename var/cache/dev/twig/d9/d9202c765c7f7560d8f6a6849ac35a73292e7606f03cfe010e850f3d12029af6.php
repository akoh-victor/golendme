<?php

/* base2.html.twig */
class __TwigTemplate_510291eb72c9f2d106073a2367ec58c153ebaac7ead8007854f161200cf6c1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'navItems' => array($this, 'block_navItems'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_763868fe7bf5d378421dec19e87eee0e9acfdea094354a78e1b6fd2d53e3762e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763868fe7bf5d378421dec19e87eee0e9acfdea094354a78e1b6fd2d53e3762e->enter($__internal_763868fe7bf5d378421dec19e87eee0e9acfdea094354a78e1b6fd2d53e3762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
        // line 48
        echo "</head>
    <body>
    ";
        // line 50
        $this->displayBlock('navigation', $context, $blocks);
        // line 117
        echo "
    ";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "



    ";
        // line 133
        $this->displayBlock('footer', $context, $blocks);
        // line 167
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 196
        echo "    </body>
</html>
";
        
        $__internal_763868fe7bf5d378421dec19e87eee0e9acfdea094354a78e1b6fd2d53e3762e->leave($__internal_763868fe7bf5d378421dec19e87eee0e9acfdea094354a78e1b6fd2d53e3762e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_93707209b8cf7ad71ec33428e83d51c797b4cd11d3410f8039960340c7d6358d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93707209b8cf7ad71ec33428e83d51c797b4cd11d3410f8039960340c7d6358d->enter($__internal_93707209b8cf7ad71ec33428e83d51c797b4cd11d3410f8039960340c7d6358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Golendme";
        
        $__internal_93707209b8cf7ad71ec33428e83d51c797b4cd11d3410f8039960340c7d6358d->leave($__internal_93707209b8cf7ad71ec33428e83d51c797b4cd11d3410f8039960340c7d6358d_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_996d594d3396a091c5210720efada8ac229c209d85ce2194034a4c3cb11c6e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996d594d3396a091c5210720efada8ac229c209d85ce2194034a4c3cb11c6e39->enter($__internal_996d594d3396a091c5210720efada8ac229c209d85ce2194034a4c3cb11c6e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4e60b51_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_bootstrap.min_1.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_font-awesome.min_2.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_animate_3.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_owl.carousel_4.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_owl.theme_5.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_owl.transitions_6.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_responsive_7.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "4e60b51_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app_style_8.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "4e60b51"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4e60b51") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/app.css");
            // line 32
            echo "
            <link rel=\"stylesheet\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 35
        echo "
            <!-- Colors CSS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color/green.css"), "html", null, true);
        echo "\">



        ";
        // line 43
        echo "



        ";
        
        $__internal_996d594d3396a091c5210720efada8ac229c209d85ce2194034a4c3cb11c6e39->leave($__internal_996d594d3396a091c5210720efada8ac229c209d85ce2194034a4c3cb11c6e39_prof);

    }

    // line 50
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6002163fb693d08aae85d48a47eac41fe61ddf9149e9486cc40f5d4bfe9dcfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6002163fb693d08aae85d48a47eac41fe61ddf9149e9486cc40f5d4bfe9dcfe8->enter($__internal_6002163fb693d08aae85d48a47eac41fe61ddf9149e9486cc40f5d4bfe9dcfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 51
        echo "        <nav style=\"background-color: #3D3D3D;color: white;font-weight: bolder;\" class=\"navbar navbar-default navbar-fixed-top\">

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
        // line 66
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
                            <a class=\"page-scroll\" href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
                        </li>
                        ";
        // line 82
        $this->displayBlock('navItems', $context, $blocks);
        // line 96
        echo "                        <li>
                            ";
        // line 97
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 98
            echo "                                <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    <i class=\"\" aria-hidden=\"true\"></i>
                                    Logout
                                </a>
                            ";
        } else {
            // line 103
            echo "                                <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">
                                    <i class=\"\" aria-hidden=\"true\"></i>
                                    Login
                                </a>
                            ";
        }
        // line 108
        echo "                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

    ";
        
        $__internal_6002163fb693d08aae85d48a47eac41fe61ddf9149e9486cc40f5d4bfe9dcfe8->leave($__internal_6002163fb693d08aae85d48a47eac41fe61ddf9149e9486cc40f5d4bfe9dcfe8_prof);

    }

    // line 82
    public function block_navItems($context, array $blocks = array())
    {
        $__internal_4b47aa8265e64a6e65942cba4c99fd8a53b41c3ff8fc3e3ab38fbe9daca7c42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b47aa8265e64a6e65942cba4c99fd8a53b41c3ff8fc3e3ab38fbe9daca7c42c->enter($__internal_4b47aa8265e64a6e65942cba4c99fd8a53b41c3ff8fc3e3ab38fbe9daca7c42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navItems"));

        // line 83
        echo "                            <li>
                                <a href= \"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\"><i class=\"\" aria-hidden=\"true\"></i>Dashboard</a>
                            </li>
                            <li>
                                <a class=\"page-scroll\" href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receive-dashboard");
        echo "\">Reciever</a>
                            </li>
                            <li>
                                <a class=\"page-scroll\" href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("donate-dashboard");
        echo "\">Donate</a>
                            </li>
                            <li>
                                <a class=\"page-scroll\" href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("raise-ticket");
        echo "\">Support</a>
                            </li>
                        ";
        
        $__internal_4b47aa8265e64a6e65942cba4c99fd8a53b41c3ff8fc3e3ab38fbe9daca7c42c->leave($__internal_4b47aa8265e64a6e65942cba4c99fd8a53b41c3ff8fc3e3ab38fbe9daca7c42c_prof);

    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
        $__internal_43a4f2993f8b83bd24939fc243d7a1ede4d071c04b83f109d6f559c25eb89201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a4f2993f8b83bd24939fc243d7a1ede4d071c04b83f109d6f559c25eb89201->enter($__internal_43a4f2993f8b83bd24939fc243d7a1ede4d071c04b83f109d6f559c25eb89201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 119
        echo "

        <div style=\"margin-top: 11em; padding: 4em\" class=\"container\">
            <div class=\"row\">
            ";
        // line 123
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "            </div>
        </div>
    ";
        
        $__internal_43a4f2993f8b83bd24939fc243d7a1ede4d071c04b83f109d6f559c25eb89201->leave($__internal_43a4f2993f8b83bd24939fc243d7a1ede4d071c04b83f109d6f559c25eb89201_prof);

    }

    // line 123
    public function block_content($context, array $blocks = array())
    {
        $__internal_3659389220074373d80477e4f14f8de6b421f079ddd9c94f889c5b6e4f315f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3659389220074373d80477e4f14f8de6b421f079ddd9c94f889c5b6e4f315f9a->enter($__internal_3659389220074373d80477e4f14f8de6b421f079ddd9c94f889c5b6e4f315f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 124
        echo "
            ";
        
        $__internal_3659389220074373d80477e4f14f8de6b421f079ddd9c94f889c5b6e4f315f9a->leave($__internal_3659389220074373d80477e4f14f8de6b421f079ddd9c94f889c5b6e4f315f9a_prof);

    }

    // line 133
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3521647ee639e1e7601370d502984ca6130e7ebac04df9acd3a1ba5bcd0850c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3521647ee639e1e7601370d502984ca6130e7ebac04df9acd3a1ba5bcd0850c4->enter($__internal_3521647ee639e1e7601370d502984ca6130e7ebac04df9acd3a1ba5bcd0850c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 134
        echo "    <footer class=\"style-1\">

            <div class=\"row\">

                <div class=\"col-md-4 col-xs-12\">

                    <span><a href=\"#\">support@golendme.org</a></span>
                    <span class=\"copyright\">Copyright &copy; <a href=\"\">golendme</a> 2017</span>

                </div>
                <div class=\"col-md-4 col-xs-12\">
                        <div class=\"footer-social text-center\">
                            <ul>
                                <li><a href=\"https://twitter.com/golendme_org\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://web.facebook.com/golendme.org/\"><i class=\"fa fa-facebook\"></i></a></li>

                            </ul>
                        </div>
                </div>
                    <div class=\"col-md-4 col-xs-12\">
                        <div class=\"footer-link\">
                            <ul class=\"pull-right\">
                                <li><a href=\"#\">Privacy Policy</a>
                                </li>

                                <li><a href=\"#\">Powered By golendme</a></li>
                            </ul>
                        </div>
                    </div>
        </div>

        </footer>
    ";
        
        $__internal_3521647ee639e1e7601370d502984ca6130e7ebac04df9acd3a1ba5bcd0850c4->leave($__internal_3521647ee639e1e7601370d502984ca6130e7ebac04df9acd3a1ba5bcd0850c4_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dffab09052d799b7ff8c585fc9b3dd0a77d0df95c8b3419b7edd4eb76abaeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dffab09052d799b7ff8c585fc9b3dd0a77d0df95c8b3419b7edd4eb76abaeb0->enter($__internal_4dffab09052d799b7ff8c585fc9b3dd0a77d0df95c8b3419b7edd4eb76abaeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
        echo "
            <!-- jQuery Version 2.1.1 -->
            <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Plugin JavaScript -->

        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/count-to.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/cbpAnimatedHeader.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/styleswitcher.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>


            <script src=\"https://use.fontawesome.com/9c59445dbc.js\"></script>
            <!-- Contact Form JavaScript -->



            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_4dffab09052d799b7ff8c585fc9b3dd0a77d0df95c8b3419b7edd4eb76abaeb0->leave($__internal_4dffab09052d799b7ff8c585fc9b3dd0a77d0df95c8b3419b7edd4eb76abaeb0_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 194,  472 => 185,  467 => 183,  463 => 182,  459 => 181,  455 => 180,  451 => 179,  447 => 178,  443 => 177,  439 => 176,  435 => 175,  429 => 172,  424 => 170,  420 => 168,  414 => 167,  375 => 134,  369 => 133,  361 => 124,  355 => 123,  346 => 126,  344 => 123,  338 => 119,  332 => 118,  322 => 93,  316 => 90,  310 => 87,  304 => 84,  301 => 83,  295 => 82,  280 => 108,  271 => 103,  262 => 98,  260 => 97,  257 => 96,  255 => 82,  250 => 80,  233 => 66,  216 => 51,  210 => 50,  199 => 43,  192 => 37,  188 => 35,  182 => 33,  179 => 32,  172 => 33,  169 => 32,  163 => 33,  160 => 32,  154 => 33,  151 => 32,  145 => 33,  142 => 32,  136 => 33,  133 => 32,  127 => 33,  124 => 32,  118 => 33,  115 => 32,  109 => 33,  106 => 32,  101 => 14,  95 => 13,  83 => 9,  74 => 196,  71 => 167,  69 => 133,  63 => 129,  61 => 118,  58 => 117,  56 => 50,  52 => 48,  50 => 13,  45 => 11,  40 => 9,  30 => 1,);
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
        <title>{% block title %}Golendme{% endblock %}</title>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        {% block stylesheets %}
            {% stylesheets  filter='scssphp' output=\"css/app.css\"

            \"assets/css/bootstrap.min.css\"
            \"assets/css/font-awesome.min.css\"
            \"assets/css/animate.css\"
            \"assets/css/owl.carousel.css\"




            \"assets/css/owl.theme.css\"
            \"assets/css/owl.transitions.css\"


            \"assets/css/responsive.css\"
            \"assets/css/style.css\"

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
        <nav style=\"background-color: #3D3D3D;color: white;font-weight: bolder;\" class=\"navbar navbar-default navbar-fixed-top\">

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
                            <a class=\"page-scroll\" href=\"{{ path('home') }}\">Home</a>
                        </li>
                        {% block navItems %}
                            <li>
                                <a href= \"{{ path('dashboard') }}\"><i class=\"\" aria-hidden=\"true\"></i>Dashboard</a>
                            </li>
                            <li>
                                <a class=\"page-scroll\" href=\"{{ path('receive-dashboard') }}\">Reciever</a>
                            </li>
                            <li>
                                <a class=\"page-scroll\" href=\"{{ path('donate-dashboard') }}\">Donate</a>
                            </li>
                            <li>
                                <a class=\"page-scroll\" href=\"{{ path('raise-ticket') }}\">Support</a>
                            </li>
                        {% endblock %}
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


        <div style=\"margin-top: 11em; padding: 4em\" class=\"container\">
            <div class=\"row\">
            {% block content %}

            {% endblock %}
            </div>
        </div>
    {% endblock %}




    {% block footer %}
    <footer class=\"style-1\">

            <div class=\"row\">

                <div class=\"col-md-4 col-xs-12\">

                    <span><a href=\"#\">support@golendme.org</a></span>
                    <span class=\"copyright\">Copyright &copy; <a href=\"\">golendme</a> 2017</span>

                </div>
                <div class=\"col-md-4 col-xs-12\">
                        <div class=\"footer-social text-center\">
                            <ul>
                                <li><a href=\"https://twitter.com/golendme_org\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://web.facebook.com/golendme.org/\"><i class=\"fa fa-facebook\"></i></a></li>

                            </ul>
                        </div>
                </div>
                    <div class=\"col-md-4 col-xs-12\">
                        <div class=\"footer-link\">
                            <ul class=\"pull-right\">
                                <li><a href=\"#\">Privacy Policy</a>
                                </li>

                                <li><a href=\"#\">Powered By golendme</a></li>
                            </ul>
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

        <script src=\"{{ asset('assets/js/sb-admin-2.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.easing.1.3.js') }}\"></script>
            <script src=\"{{ asset('assets/js/classie.js') }}\"></script>
            <script src=\"{{ asset('assets/js/count-to.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.appear.js') }}\"></script>
            <script src=\"{{ asset('assets/js/cbpAnimatedHeader.js') }}\"></script>
            <script src=\"{{ asset('assets/js/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.fitvids.js') }}\"></script>
            <script src=\"{{ asset('assets/js/styleswitcher.js') }}\"></script>

        <script src=\"{{ asset('assets/js/custom.js') }}\"></script>


            <script src=\"https://use.fontawesome.com/9c59445dbc.js\"></script>
            <!-- Contact Form JavaScript -->



            <!-- Custom Theme JavaScript -->
            <script src=\"{{ asset('assets/js/script.js') }}\"></script>
    {% endblock %}
    </body>
</html>
", "base2.html.twig", "/opt/lampp/htdocs/golendme/app/Resources/views/base2.html.twig");
    }
}
