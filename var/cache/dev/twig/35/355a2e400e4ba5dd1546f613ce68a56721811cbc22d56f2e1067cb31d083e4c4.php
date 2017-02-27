<?php

/* default/index.html.twig */
class __TwigTemplate_616cb86b4d286056ef2fc292586678b393dfe988900c336e00c494ea8c1f8a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4fc085759478accca6a74d782432cbe2b1ad27daafd506daec8a7d38bb551e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fc085759478accca6a74d782432cbe2b1ad27daafd506daec8a7d38bb551e7->enter($__internal_d4fc085759478accca6a74d782432cbe2b1ad27daafd506daec8a7d38bb551e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fc085759478accca6a74d782432cbe2b1ad27daafd506daec8a7d38bb551e7->leave($__internal_d4fc085759478accca6a74d782432cbe2b1ad27daafd506daec8a7d38bb551e7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_da0c79bd685d925ff6ef691fb508d9b514433debd0150702dae3caeb3c1737e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0c79bd685d925ff6ef691fb508d9b514433debd0150702dae3caeb3c1737e2->enter($__internal_da0c79bd685d925ff6ef691fb508d9b514433debd0150702dae3caeb3c1737e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <!-- Start Home Page Slider -->
    <section id=\"page-top\">
        <!-- Carousel -->
        <div id=\"main-slide\" class=\"carousel slide\" data-ride=\"carousel\">

            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slide\" data-slide-to=\"0\" class=\"active\"></li>

            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <img class=\"img-responsive\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/header-bg-1.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                    <div class=\"slider-content\">
                        <div class=\"col-md-12 text-center\">
                            <h1 class=\"animated3\">
                                <span>Welcome to <strong>GOLENDME</strong></span>
                            </h1>
                            <p class=\"animated2\"><br> You are not just here to double you donation but also to change someones life <br />
                                and you would get rewarded for that
                            if you donate 3 times you will get triple your capital on your next donation </p>
                            <a href=\"#pricing\" class=\"page-scroll btn btn-primary animated1\">Register Now</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->


                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#main-slide\" data-slide=\"prev\">
                <span><i class=\"fa fa-angle-left\"></i></span>
            </a>
            <a class=\"right carousel-control\" href=\"#main-slide\" data-slide=\"next\">
                <span><i class=\"fa fa-angle-right\"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


    <!-- Start Portfolio Section -->
    <section id=\"works\" class=\"portfolio-section-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-center\">
                        <h3>How It Works</h3>

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                            <ul>
                                           <li> On registration you would be presented to choose the package you want to subscribe to<br /></li>

                                           <li>On successful registration you would be presented the detail of your sponsor</li>

                                           <li> Donate to him/her, submit the donation details for approval.</li>

                                           <li>  On successful donation with approval of recipient, you will also receive
                                            similar gesture from two other different participants. Grants are offered based on
                                            package you can afford at a particular time however you can register and run multiples
                                            account simultaneously with different details.</li>

                            </ul>
                                          <hr />
                            <ul>
                                         <li><strong>-Note:</strong></li>

                                           <li><strong>- Donation packages are independent of one another, you will be rewarded base on your donation</strong></li>
                                           <li><strong>- Always call the beneficiary and have a decent conversation with him or her before making deposit or vice versa.</strong></li>
                                          <li><strong>-Donation and compensation is based on first come, first serve and personal interest through selection of desire package.</strong></li>

                                         <hr />

                                        <li class=\"alert alert-danger\">
                                       <strong> Disclaimer: Participants should understand that this platform is not an investment
                                            organization and should only participate with money they can afford to lose. For no
                                            reason or whatsoever will  grant team members or participants be liable for
                                            any loss of money resulting from downturn in the system.</strong></li>
                           </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- Start About Us Section -->
    <section  id=\"about-us\" class=\"about-us-section-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <div class=\"section-title text-center\">
                        <h3>About Us</h3>
                        <p>Get To Know Us Better</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-md-4\">
                    <div class=\"welcome-section text-center\">
                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-01.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"..\">
                        <h4>About GOLENDME</h4>
                        <div class=\"border\"></div>
                        <p>
                            We are humanitarian and financial mutual aid community that operates
                            strictly on peer to peer donation approach. We provide technical
                            platform and support which helps millions
                            of people participants globally with the sole  purpose
                            of attaining financial stability.
                        </p>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"welcome-section text-center\">
                        <img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-02.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"..\">
                        <h4>Our Mission</h4>
                        <div class=\"border\"></div>
                        <p>To give hope to the hopeless and rest of mind to a large
                            number of the populace via soft grants and collective effort.</p>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"welcome-section text-center\">
                        <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/about-03.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"..\">
                        <h4>CORE TARGETS</h4>
                        <div class=\"border\"></div>
                        <p>Non-greedy, selfless and committed people that are in dire need of help and as such have the
                            basic understanding of helping others around them in return for similar gesture.
                        </p>
                    </div>
                </div>

            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->

    <!-- Start Pricing Table Section -->
    <div id=\"pricing\"  class=\" style-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"col-md-12\">
                        <div class=\"section-title text-center\">
                            <h3>Available Plan</h3>
                            <p class=\"\">Please Choose a Package of your Choice</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">

                <div style=\"background-color: #26b99a\"  class=\"panel panel-body\">

                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Basic</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N20,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N40,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times For Basic Package to get<div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N60,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                ";
        // line 192
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 193
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                ";
        } else {
            // line 198
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant-registration");
            echo "\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                ";
        }
        // line 200
        echo "

                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Standard</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N50,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N100,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times  For Standard Package to get<div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N150,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                ";
        // line 224
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 225
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                ";
        } else {
            // line 230
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant-registration");
            echo "\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                ";
        }
        // line 232
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Premium</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N100,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N200,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times  For Standard Package to get
                                        <div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N300,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                ";
        // line 254
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 255
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                ";
        } else {
            // line 260
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant-registration");
            echo "\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                ";
        }
        // line 262
        echo "                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Silver</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N200,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N400,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times  For Standard Package to get
                                        <div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N600,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                ";
        // line 285
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 286
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                ";
        } else {
            // line 291
            echo "                                    <a href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant-registration");
            echo "\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                ";
        }
        // line 293
        echo "                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->


    <!-- Start Testimonial Section -->
    <div style=\"background-color: #e9ebee; color: #080808\" id=\"latest-news\" class=\"testimonial-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <div class=\"section-title text-center\">
                        <h3>News Update</h3>
                        <p>Get to Hear from Admin Directly</p>
                    </div>
                </div>
            </div>
            <!-- Start Testimonials Carousel -->
            <div  id=\"testimonial-carsousel\" class=\"testimonials-carousel\">
                <!-- Testimonial 1 -->
                <div class=\"testimonials item\">
                    <h4 style=\"text-transform: none\">Welcome Aboard</h4>
                    <div class=\"testimonial-content\">

                        <p style=\"color: #000;\" > We are set to launch cease this opportunity and open the
                            door of possibility. Invite friends and let change the world together </p>
                        <a href=\"#pricing\" class=\"page-scroll btn btn-primary animated1\">Let Get Started</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->




    <!-- Start FAQ Section -->
    <section id=\"partner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-center\">
                        <h3>Frequently Asked Questions and Answers</h3>
                        <p>If You Have More Question Please in the Support </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div  id=\"testimonial-carousel\" class=\"testimonials-carousel\">

                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"text-transform: none\">When am I eligible to get 300% of my donation</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > When you your total
                                donation count on the same package is 3, the next donation on that
                                package would be rewarded by 300% </p>

                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"text-transform: none\">If i donate twice on one package and switch to another package on my third donation do i still get 300%?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\"> No, but your count is still reserved, anytime you complete your third donation on that package you would get your 300%</p>

                        </div>
                    </div>

                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"text-transform: none\">How many times is a member allowed to join and get donations ?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" >  The number is unlimited. You can get assistance as many times as you like.
                                Each time you get complete
                                assistance. You donate again and wait to get 100% return on donation again. </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">What is the difference between the packages ?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" >  The different packages are designed to accommodate the specified donation amount per
                                individual. The higher your plan, the more money you can earn! </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">How long do I have to make donation after I have signed up and activated a package?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > You have until 6 hours to make donation, after which you get
                                activated and eligible to receive donation from 2 members. </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">What do i do if i contact the payer and he is not willing to pay</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > You can purge the payer and the system will match you with another person </p>
                        </div>
                    </div>
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">What if i pay and the receiver refuse to confirm</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > Contact support and you would be confirm immediately</p>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->


    ";
        // line 465
        echo "
    <section id=\"contact\" class=\"contact\">
        <div class=\"container\">


        </div>
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
                                <li><a href=\"#\">Privacy Policy</a>
                                </li>
                                <li><a href=\"#\">Powered By golendme</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


   <div id=\"loader\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>

";
        // line 511
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_da0c79bd685d925ff6ef691fb508d9b514433debd0150702dae3caeb3c1737e2->leave($__internal_da0c79bd685d925ff6ef691fb508d9b514433debd0150702dae3caeb3c1737e2_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_c1ab240d4c8072450078e3652f690b1fc704affeacb96f2f19b0b38dfe613ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ab240d4c8072450078e3652f690b1fc704affeacb96f2f19b0b38dfe613ecc->enter($__internal_c1ab240d4c8072450078e3652f690b1fc704affeacb96f2f19b0b38dfe613ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c1ab240d4c8072450078e3652f690b1fc704affeacb96f2f19b0b38dfe613ecc->leave($__internal_c1ab240d4c8072450078e3652f690b1fc704affeacb96f2f19b0b38dfe613ecc_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 511,  524 => 465,  386 => 293,  380 => 291,  371 => 286,  369 => 285,  344 => 262,  338 => 260,  329 => 255,  327 => 254,  303 => 232,  297 => 230,  288 => 225,  286 => 224,  260 => 200,  254 => 198,  245 => 193,  243 => 192,  189 => 141,  176 => 131,  158 => 116,  59 => 20,  41 => 4,  35 => 3,  11 => 1,);
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

{% block content %}

    <!-- Start Home Page Slider -->
    <section id=\"page-top\">
        <!-- Carousel -->
        <div id=\"main-slide\" class=\"carousel slide\" data-ride=\"carousel\">

            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slide\" data-slide-to=\"0\" class=\"active\"></li>

            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <img class=\"img-responsive\" src=\"{{ asset('assets/images/header-bg-1.jpg') }}\" alt=\"slider\">
                    <div class=\"slider-content\">
                        <div class=\"col-md-12 text-center\">
                            <h1 class=\"animated3\">
                                <span>Welcome to <strong>GOLENDME</strong></span>
                            </h1>
                            <p class=\"animated2\"><br> You are not just here to double you donation but also to change someones life <br />
                                and you would get rewarded for that
                            if you donate 3 times you will get triple your capital on your next donation </p>
                            <a href=\"#pricing\" class=\"page-scroll btn btn-primary animated1\">Register Now</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->


                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#main-slide\" data-slide=\"prev\">
                <span><i class=\"fa fa-angle-left\"></i></span>
            </a>
            <a class=\"right carousel-control\" href=\"#main-slide\" data-slide=\"next\">
                <span><i class=\"fa fa-angle-right\"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


    <!-- Start Portfolio Section -->
    <section id=\"works\" class=\"portfolio-section-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-center\">
                        <h3>How It Works</h3>

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                            <ul>
                                           <li> On registration you would be presented to choose the package you want to subscribe to<br /></li>

                                           <li>On successful registration you would be presented the detail of your sponsor</li>

                                           <li> Donate to him/her, submit the donation details for approval.</li>

                                           <li>  On successful donation with approval of recipient, you will also receive
                                            similar gesture from two other different participants. Grants are offered based on
                                            package you can afford at a particular time however you can register and run multiples
                                            account simultaneously with different details.</li>

                            </ul>
                                          <hr />
                            <ul>
                                         <li><strong>-Note:</strong></li>

                                           <li><strong>- Donation packages are independent of one another, you will be rewarded base on your donation</strong></li>
                                           <li><strong>- Always call the beneficiary and have a decent conversation with him or her before making deposit or vice versa.</strong></li>
                                          <li><strong>-Donation and compensation is based on first come, first serve and personal interest through selection of desire package.</strong></li>

                                         <hr />

                                        <li class=\"alert alert-danger\">
                                       <strong> Disclaimer: Participants should understand that this platform is not an investment
                                            organization and should only participate with money they can afford to lose. For no
                                            reason or whatsoever will  grant team members or participants be liable for
                                            any loss of money resulting from downturn in the system.</strong></li>
                           </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- Start About Us Section -->
    <section  id=\"about-us\" class=\"about-us-section-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <div class=\"section-title text-center\">
                        <h3>About Us</h3>
                        <p>Get To Know Us Better</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">

                <div class=\"col-md-4\">
                    <div class=\"welcome-section text-center\">
                        <img src=\"{{ asset('assets/images/about-01.jpg') }}\" class=\"img-responsive\" alt=\"..\">
                        <h4>About GOLENDME</h4>
                        <div class=\"border\"></div>
                        <p>
                            We are humanitarian and financial mutual aid community that operates
                            strictly on peer to peer donation approach. We provide technical
                            platform and support which helps millions
                            of people participants globally with the sole  purpose
                            of attaining financial stability.
                        </p>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"welcome-section text-center\">
                        <img src=\"{{ asset('assets/images/about-02.jpg') }}\" class=\"img-responsive\" alt=\"..\">
                        <h4>Our Mission</h4>
                        <div class=\"border\"></div>
                        <p>To give hope to the hopeless and rest of mind to a large
                            number of the populace via soft grants and collective effort.</p>
                    </div>
                </div>

                <div class=\"col-md-4\">
                    <div class=\"welcome-section text-center\">
                        <img src=\"{{ asset('assets/images/about-03.jpg') }}\" class=\"img-responsive\" alt=\"..\">
                        <h4>CORE TARGETS</h4>
                        <div class=\"border\"></div>
                        <p>Non-greedy, selfless and committed people that are in dire need of help and as such have the
                            basic understanding of helping others around them in return for similar gesture.
                        </p>
                    </div>
                </div>

            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->

    <!-- Start Pricing Table Section -->
    <div id=\"pricing\"  class=\" style-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"col-md-12\">
                        <div class=\"section-title text-center\">
                            <h3>Available Plan</h3>
                            <p class=\"\">Please Choose a Package of your Choice</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">

                <div style=\"background-color: #26b99a\"  class=\"panel panel-body\">

                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Basic</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N20,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N40,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times For Basic Package to get<div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N60,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <a href= \"{{ path('dashboard') }}\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                {% else %}
                                    <a href= \"{{ path('participant-registration')}}\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                {% endif %}


                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Standard</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N50,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N100,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times  For Standard Package to get<div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N150,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <a href= \"{{ path('dashboard') }}\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                {% else %}
                                    <a href= \"{{ path('participant-registration')}}\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Premium</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N100,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N200,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times  For Standard Package to get
                                        <div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N300,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <a href= \"{{ path('dashboard') }}\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                {% else %}
                                    <a href= \"{{ path('participant-registration')}}\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-3\">
                        <div class=\"pricing-table\">
                            <div class=\"plan-name\">
                                <h3>Silver</h3>
                            </div>
                            <div class=\"plan-price\">
                                <div class=\"price-value\">N200,000</div>
                                <div class=\"interval\">withen 1hr to 168hrs</div>
                            </div>
                            <div class=\"plan-list\">
                                <ul>
                                    <li> REWARD <div class=\"plan-price\"><div style=\"color: green\"  class=\"price-value\">N400,000</div></div></li>

                                    <li style=\"color: red;\">Donate 3 Times  For Standard Package to get
                                        <div class=\"plan-price\"><div style=\"color: red;\" class=\"price-value\">N600,000</div></div></li>
                                    <li>On your next donation</li>
                                </ul>
                            </div>
                            <div class=\"plan-signup\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <a href= \"{{ path('dashboard') }}\">
                                        <i class=\"\" aria-hidden=\"true\"></i>
                                        Dashboard
                                    </a>
                                {% else %}
                                    <a href= \"{{ path('participant-registration')}}\" class=\"btn-system btn-small\"><strong>Sign Up Now</strong></a>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->


    <!-- Start Testimonial Section -->
    <div style=\"background-color: #e9ebee; color: #080808\" id=\"latest-news\" class=\"testimonial-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    <div class=\"section-title text-center\">
                        <h3>News Update</h3>
                        <p>Get to Hear from Admin Directly</p>
                    </div>
                </div>
            </div>
            <!-- Start Testimonials Carousel -->
            <div  id=\"testimonial-carsousel\" class=\"testimonials-carousel\">
                <!-- Testimonial 1 -->
                <div class=\"testimonials item\">
                    <h4 style=\"text-transform: none\">Welcome Aboard</h4>
                    <div class=\"testimonial-content\">

                        <p style=\"color: #000;\" > We are set to launch cease this opportunity and open the
                            door of possibility. Invite friends and let change the world together </p>
                        <a href=\"#pricing\" class=\"page-scroll btn btn-primary animated1\">Let Get Started</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->




    <!-- Start FAQ Section -->
    <section id=\"partner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-title text-center\">
                        <h3>Frequently Asked Questions and Answers</h3>
                        <p>If You Have More Question Please in the Support </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div  id=\"testimonial-carousel\" class=\"testimonials-carousel\">

                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"text-transform: none\">When am I eligible to get 300% of my donation</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > When you your total
                                donation count on the same package is 3, the next donation on that
                                package would be rewarded by 300% </p>

                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"text-transform: none\">If i donate twice on one package and switch to another package on my third donation do i still get 300%?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\"> No, but your count is still reserved, anytime you complete your third donation on that package you would get your 300%</p>

                        </div>
                    </div>

                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"text-transform: none\">How many times is a member allowed to join and get donations ?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" >  The number is unlimited. You can get assistance as many times as you like.
                                Each time you get complete
                                assistance. You donate again and wait to get 100% return on donation again. </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">What is the difference between the packages ?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" >  The different packages are designed to accommodate the specified donation amount per
                                individual. The higher your plan, the more money you can earn! </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">How long do I have to make donation after I have signed up and activated a package?</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > You have until 6 hours to make donation, after which you get
                                activated and eligible to receive donation from 2 members. </p>
                        </div>
                    </div>
                    <!-- Testimonial 1 -->
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">What do i do if i contact the payer and he is not willing to pay</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > You can purge the payer and the system will match you with another person </p>
                        </div>
                    </div>
                    <div class=\"testimonials item\">
                        <h3 style=\"color: #869791;font-style: italic\">What if i pay and the receiver refuse to confirm</h3>
                        <div class=\"testimonial-content\">

                            <p style=\"color: #869791;font-style: italic\" > Contact support and you would be confirm immediately</p>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->


    {#    <!-- Start Fun Facts Section -->
        <section class=\"fun-facts\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-6 col-md-3\">
                        <div class=\"counter-item\">
                            <i class=\"fa fa-cloud-upload\"></i>
                            <div class=\"timer\" id=\"item1\" data-to=\"991\" data-speed=\"5000\"></div>
                            <h5>Issues Solved</h5>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-3\">
                        <div class=\"counter-item\">
                            <i class=\"fa fa-check\"></i>
                            <div class=\"timer\" id=\"item2\" data-to=\"7394\" data-speed=\"5000\"></div>
                            <h5>Total Rewards</h5>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-3\">
                        <div class=\"counter-item\">
                            <i class=\"fa fa-code\"></i>
                            <div class=\"timer\" id=\"item3\" data-to=\"145\" data-speed=\"5000\"></div>
                            <h5>Completed Transactions</h5>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-sm-6 col-md-3\">
                        <div class=\"counter-item\">
                            <i class=\"fa fa-male\"></i>
                            <div class=\"timer\" id=\"item4\" data-to=\"223\" data-speed=\"5000\"></div>
                            <h5>Happy Customers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Section -->#}

    <section id=\"contact\" class=\"contact\">
        <div class=\"container\">


        </div>
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
                                <li><a href=\"#\">Privacy Policy</a>
                                </li>
                                <li><a href=\"#\">Powered By golendme</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


   <div id=\"loader\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>

{% block  footer %}{% endblock %}
{% endblock %}", "default/index.html.twig", "/opt/lampp/htdocs/deploy/app/Resources/views/default/index.html.twig");
    }
}
