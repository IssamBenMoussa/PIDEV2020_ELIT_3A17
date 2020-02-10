<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backAdmin.html.twig */
class __TwigTemplate_473fb4be778660256307987f4ab539eb013e083a7a24d81018222b87016620be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'aliBar' => [$this, 'block_aliBar'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backAdmin.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Dashboard ELIT</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- icons fontawesome -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fontawesome-free-5.12.0-web/css/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <!-- favicon
\t\t============================================ -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Google Fonts
\t\t============================================ -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900\" rel=\"stylesheet\">
    <!-- Bootstrap CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- owl.carousel CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/owl.theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/owl.transitions.css"), "html", null, true);
        echo "\">
    <!-- animate CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/animate.css"), "html", null, true);
        echo "\">
    <!-- normalize CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/normalize.css"), "html", null, true);
        echo "\">
    <!-- meanmenu icon CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/meanmenu.min.css"), "html", null, true);
        echo "\">
    <!-- main CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/main.css"), "html", null, true);
        echo "\">
    <!-- educate icon CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/educate-custon-icon.css"), "html", null, true);
        echo "\">
    <!-- morrisjs CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/morrisjs/morris.css"), "html", null, true);
        echo "\">
    <!-- mCustomScrollbar CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css"), "html", null, true);
        echo "\">
    <!-- metisMenu CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/metisMenu/metisMenu-vertical.css"), "html", null, true);
        echo "\">
    <!-- calendar CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/calendar/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/calendar/fullcalendar.print.min.css"), "html", null, true);
        echo "\">
    <!-- style CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/style.css"), "html", null, true);
        echo "\">
    <!-- responsive CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/css/responsive.css"), "html", null, true);
        echo "\">
    <!-- modernizr JS
\t\t============================================ -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/vendor/modernizr-2.8.3.min.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class=\"left-sidebar-pro\">
    <nav id=\"sidebar\" class=\"\">
        <div class=\"sidebar-header\">
            <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><img class=\"main-logo\"
                                                                                  src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/img/logo/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
            <strong><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/img/logo/logosn.png"), "html", null, true);
        echo "\" alt=\"\" /></a></strong>
        </div>
        <div class=\"left-custom-menu-adp-wrap comment-scrollbar\">
            ";
        // line 85
        $this->displayBlock('aliBar', $context, $blocks);
        // line 234
        echo "
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class=\"all-content-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"logo-pro\">
                    <a href=\"index.html\"><img class=\"main-logo\" src=\"img/logo/logo.png\" alt=\"\" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-advance-area\">
        <div class=\"header-top-area\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"header-top-wraper\">
                            <div class=\"row\">
                                <div class=\"col-lg-1 col-md-0 col-sm-1 col-xs-12\">
                                    <div class=\"menu-switcher-pro\">
                                        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn bar-button-pro header-drl-controller-btn btn-info navbar-btn\">
                                            <i class=\"educate-icon educate-nav\"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-7 col-sm-6 col-xs-12\">
                                    <div class=\"header-top-menu tabl-d-n\">
                                        <ul class=\"nav navbar-nav mai-top-nav\">
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Home</a>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">About</a>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Services</a>
                                            </li>
                                            <li class=\"nav-item dropdown res-dis-nn\">
                                                <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\">Project <span class=\"angle-down-topmenu\"><i class=\"fa fa-angle-down\"></i></span></a>
                                                <div role=\"menu\" class=\"dropdown-menu animated zoomIn\">
                                                    <a href=\"#\" class=\"dropdown-item\">Documentation</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Expert Backend</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Expert FrontEnd</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Contact Support</a>
                                                </div>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"header-right-info\">
                                        <ul class=\"nav navbar-nav mai-top-nav header-right-menu\">
                                            <li class=\"nav-item dropdown\">
                                                <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><i class=\"educate-icon educate-message edu-chat-pro\" aria-hidden=\"true\"></i><span class=\"indicator-ms\"></span></a>
                                                <div role=\"menu\" class=\"author-message-top dropdown-menu animated zoomIn\">
                                                    <div class=\"message-single-top\">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class=\"message-menu\">
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/img/contact/1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"img/contact/4.jpg\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"img/contact/3.jpg\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"img/contact/2.jpg\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"message-view\">
                                                        <a href=\"#\">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><i class=\"educate-icon educate-bell\" aria-hidden=\"true\"></i><span class=\"indicator-nt\"></span></a>
                                                <div role=\"menu\" class=\"notification-author dropdown-menu animated zoomIn\">
                                                    <div class=\"notification-single-top\">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class=\"notification-menu\">
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"educate-icon educate-checked edu-checked-pro admin-check-pro\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"fa fa-cloud edu-cloud-computing-down\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"fa fa-eraser edu-shield\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"fa fa-line-chart edu-analytics-arrow\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"notification-view\">
                                                        <a href=\"#\">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\">
                                                    <img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/img/product/pro4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <span class=\"admin-name\">Prof.Anderson</span>
                                                    <i class=\"fa fa-angle-down edu-icon edu-down-arrow\"></i>
                                                </a>
                                                <ul role=\"menu\" class=\"dropdown-header-top author-log dropdown-menu animated zoomIn\">
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-home-admin author-log-ic\"></span>My Account</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-user-rounded author-log-ic\"></span>My Profile</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-money author-log-ic\"></span>User Billing</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-settings author-log-ic\"></span>Settings</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-locked author-log-ic\"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"nav-item nav-setting-open\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><i class=\"educate-icon educate-menu\"></i></a>

                                                <div role=\"menu\" class=\"admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn\">
                                                    <ul class=\"nav nav-tabs custon-set-tab\">
                                                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#Notes\">Notes</a>
                                                        </li>
                                                        <li><a data-toggle=\"tab\" href=\"#Projects\">Projects</a>
                                                        </li>
                                                        <li><a data-toggle=\"tab\" href=\"#Settings\">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class=\"tab-content custom-bdr-nt\">
                                                        <div id=\"Notes\" class=\"tab-pane fade in active\">
                                                            <div class=\"notes-area-wrap\">
                                                                <div class=\"note-heading-indicate\">
                                                                    <h2><i class=\"fa fa-comments-o\"></i> Latest Notes</h2>
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class=\"notes-list-area notes-menu-scrollbar\">
                                                                    <ul class=\"notes-menu-list\">
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/4.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/1.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/2.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/3.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/4.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/1.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/2.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/1.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/2.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/3.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=\"Projects\" class=\"tab-pane fade\">
                                                            <div class=\"projects-settings-wrap\">
                                                                <div class=\"note-heading-indicate\">
                                                                    <h2><i class=\"fa fa-cube\"></i> Latest projects</h2>
                                                                    <p> You have 20 projects. 5 not completed.</p>
                                                                </div>
                                                                <div class=\"project-st-list-area project-st-menu-scrollbar\">
                                                                    <ul class=\"projects-st-menu-list\">
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Web Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">1 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 28%;\" class=\"progress-bar progress-bar-danger hd-tp-1\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Software Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">2 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl\">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 68%;\" class=\"progress-bar hd-tp-2\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Graphic Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">3 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 78%;\" class=\"progress-bar hd-tp-3\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Web Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">4 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl2\">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 38%;\" class=\"progress-bar progress-bar-danger hd-tp-4\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Business Card</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">5 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 28%;\" class=\"progress-bar progress-bar-danger hd-tp-5\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Ecommerce Business</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">6 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl\">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 68%;\" class=\"progress-bar hd-tp-6\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Woocommerce Plugin</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">7 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 78%;\" class=\"progress-bar\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Wordpress Theme</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">9 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl2\">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 38%;\" class=\"progress-bar progress-bar-danger\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=\"Settings\" class=\"tab-pane fade\">
                                                            <div class=\"setting-panel-area\">
                                                                <div class=\"note-heading-indicate\">
                                                                    <h2><i class=\"fa fa-gears\"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class=\"setting-panel-list\">
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Show notifications</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example3\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example3\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Enable history</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example4\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example4\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Show charts</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example7\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example7\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Update everyday</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" checked=\"\" class=\"onoffswitch-checkbox\" id=\"example2\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example2\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Global search</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" checked=\"\" class=\"onoffswitch-checkbox\" id=\"example6\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example6\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Offline users</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" checked=\"\" class=\"onoffswitch-checkbox\" id=\"example5\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example5\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start <div class=\"mobile-menu-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"mobile-menu\">
                            <nav id=\"dropdown\">
                                <ul class=\"mobile-menu-nav\">
                                    <li><a data-toggle=\"collapse\" data-target=\"#Charts\" href=\"#\">Home <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul class=\"collapse dropdown-header-top\">
                                            <li><a href=\"index.html\">Dashboard v.1</a></li>
                                            <li><a href=\"index-1.html\">Dashboard v.2</a></li>
                                            <li><a href=\"index-3.html\">Dashboard v.3</a></li>
                                            <li><a href=\"analytics.html\">Analytics</a></li>
                                            <li><a href=\"widgets.html\">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"events.html\">Event</a></li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demoevent\" href=\"#\">Professors <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demoevent\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"all-professors.html\">All Professors</a>
                                            </li>
                                            <li><a href=\"add-professor.html\">Add Professor</a>
                                            </li>
                                            <li><a href=\"edit-professor.html\">Edit Professor</a>
                                            </li>
                                            <li><a href=\"professor-profile.html\">Professor Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demopro\" href=\"#\">Students <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demopro\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"all-students.html\">All Students</a>
                                            </li>
                                            <li><a href=\"add-student.html\">Add Student</a>
                                            </li>
                                            <li><a href=\"edit-student.html\">Edit Student</a>
                                            </li>
                                            <li><a href=\"student-profile.html\">Student Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#democrou\" href=\"#\">Courses <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"democrou\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"all-courses.html\">All Courses</a>
                                            </li>
                                            <li><a href=\"add-course.html\">Add Course</a>
                                            </li>
                                            <li><a href=\"edit-course.html\">Edit Course</a>
                                            </li>
                                            <li><a href=\"course-profile.html\">Courses Info</a>
                                            </li>
                                            <li><a href=\"course-payment.html\">Courses Payment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demolibra\" href=\"#\">Library <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demolibra\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"library-assets.html\">Library Assets</a>
                                            </li>
                                            <li><a href=\"add-library-assets.html\">Add Library Asset</a>
                                            </li>
                                            <li><a href=\"edit-library-assets.html\">Edit Library Asset</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demodepart\" href=\"#\">Departments <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demodepart\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"departments.html\">Departments List</a>
                                            </li>
                                            <li><a href=\"add-department.html\">Add Departments</a>
                                            </li>
                                            <li><a href=\"edit-department.html\">Edit Departments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demo\" href=\"#\">Mailbox <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demo\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"mailbox.html\">Inbox</a>
                                            </li>
                                            <li><a href=\"mailbox-view.html\">View Mail</a>
                                            </li>
                                            <li><a href=\"mailbox-compose.html\">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Miscellaneousmob\" href=\"#\">Interface <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Miscellaneousmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"google-map.html\">Google Map</a>
                                            </li>
                                            <li><a href=\"data-maps.html\">Data Maps</a>
                                            </li>
                                            <li><a href=\"pdf-viewer.html\">Pdf Viewer</a>
                                            </li>
                                            <li><a href=\"x-editable.html\">X-Editable</a>
                                            </li>
                                            <li><a href=\"code-editor.html\">Code Editor</a>
                                            </li>
                                            <li><a href=\"tree-view.html\">Tree View</a>
                                            </li>
                                            <li><a href=\"preloader.html\">Preloader</a>
                                            </li>
                                            <li><a href=\"images-cropper.html\">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Chartsmob\" href=\"#\">Charts <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Chartsmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"bar-charts.html\">Bar Charts</a>
                                            </li>
                                            <li><a href=\"line-charts.html\">Line Charts</a>
                                            </li>
                                            <li><a href=\"area-charts.html\">Area Charts</a>
                                            </li>
                                            <li><a href=\"rounded-chart.html\">Rounded Charts</a>
                                            </li>
                                            <li><a href=\"c3.html\">C3 Charts</a>
                                            </li>
                                            <li><a href=\"sparkline.html\">Sparkline Charts</a>
                                            </li>
                                            <li><a href=\"peity.html\">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Tablesmob\" href=\"#\">Tables <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Tablesmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"static-table.html\">Static Table</a>
                                            </li>
                                            <li><a href=\"data-table.html\">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#formsmob\" href=\"#\">Forms <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"formsmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"basic-form-element.html\">Basic Form Elements</a>
                                            </li>
                                            <li><a href=\"advance-form-element.html\">Advanced Form Elements</a>
                                            </li>
                                            <li><a href=\"password-meter.html\">Password Meter</a>
                                            </li>
                                            <li><a href=\"multi-upload.html\">Multi Upload</a>
                                            </li>
                                            <li><a href=\"tinymc.html\">Text Editor</a>
                                            </li>
                                            <li><a href=\"dual-list-box.html\">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Appviewsmob\" href=\"#\">App views <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Appviewsmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"basic-form-element.html\">Basic Form Elements</a>
                                            </li>
                                            <li><a href=\"advance-form-element.html\">Advanced Form Elements</a>
                                            </li>
                                            <li><a href=\"password-meter.html\">Password Meter</a>
                                            </li>
                                            <li><a href=\"multi-upload.html\">Multi Upload</a>
                                            </li>
                                            <li><a href=\"tinymc.html\">Text Editor</a>
                                            </li>
                                            <li><a href=\"dual-list-box.html\">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Pagemob\" href=\"#\">Pages <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Pagemob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"login.html\">Login</a>
                                            </li>
                                            <li><a href=\"register.html\">Register</a>
                                            </li>
                                            <li><a href=\"lock.html\">Lock</a>
                                            </li>
                                            <li><a href=\"password-recovery.html\">Password Recovery</a>
                                            </li>
                                            <li><a href=\"404.html\">404 Page</a></li>
                                            <li><a href=\"500.html\">500 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Mobile Menu end -->
        ";
        // line 1059
        $this->displayBlock('content', $context, $blocks);
        // line 1072
        echo "        <div class=\"footer-copyright-area\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer-copy-right\">
                            <p>Copyright © 2018. All rights reserved. Template by <a href=\"https://colorlib.com/wp/templates/\">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src=\"";
        // line 1090
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- wow JS
        ============================================ -->
    <script src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src=\"";
        // line 1096
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery-price-slider.js"), "html", null, true);
        echo "\"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src=\"";
        // line 1102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- sticky JS
        ============================================ -->
    <script src=\"";
        // line 1105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
    <!-- counterup JS
        ============================================ -->
    <script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/counterup/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/counterup/counterup-active.js"), "html", null, true);
        echo "\"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src=\"";
        // line 1116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/scrollbar/mCustomScrollbar-active.js"), "html", null, true);
        echo "\"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/metisMenu/metisMenu-active.js"), "html", null, true);
        echo "\"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/morrisjs/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/morrisjs/morris-active.js"), "html", null, true);
        echo "\"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/sparkline/jquery.charts-sparkline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/sparkline/sparkline-active.js"), "html", null, true);
        echo "\"></script>
    <!-- calendar JS
        ============================================ -->
    <script src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/calendar/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/calendar/fullcalendar-active.js"), "html", null, true);
        echo "\"></script>
    <!-- plugins JS
        ============================================ -->
    <script src=\"";
        // line 1139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- main JS
        ============================================ -->
    <script src=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src=\"";
        // line 1145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/tawk-chat.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 1146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1147
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_aliBar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aliBar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aliBar"));

        // line 86
        echo "            <nav class=\"sidebar-nav left-sidebar-menu-pro\">
                <ul class=\"metismenu\" id=\"menu1\">
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">logistics</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Dashboard v.1</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Dashboard v.2</span></a></li>
                            <li><a title=\"Dashboard v.3\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-2.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Dashboard v.3</span></a></li>
                            <li><a title=\"Analytics\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/analytics.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Analytics</span></a></li>
                            <li><a title=\"Widgets\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/widgets.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Widgets</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">complaints</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">respond list</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">inbox</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\"> appointment</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rendez_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rendez_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>

                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">application</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">clubs</span></a>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">teacher</span></a>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">student</span></a>
                    </li>

                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">complaints</span></a>

                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">chatbox</span></a>

                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">module</span></a>

                    </li>


                    <li class=\" \">
                        <a class=\"has-arrow\" href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Classes</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classes_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classes_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Classrooms</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classrooms_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classrooms_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Equipments</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipement_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipement_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>


                <!-- event issou -->


                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-star icon-wrap\"></span>
                            <i class=\"fas fa-camera\"></i>
                            <span class=\"fas fa-camera\"></span>
                            <span class=\"mini-click-non\">Events</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"browse_event\" href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                            <li><a title=\"create_event\" href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Add new</span></a></li>

                        </ul>
                    </li>

                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-star icon-wrap\"></span>
                            <span class=\"mini-click-non\">Clubs</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"browse_event\" href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                            <li><a title=\"create_event\" href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Add new</span></a></li>
                            <li><a title=\"browse_club_event\" href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Browse Club Events</span></a></li>

                        </ul>
                    </li>

                <!--event -->
                </ul>
            </nav>
        </div>
    </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1059
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 1060
        echo "            <H2>SeTART</H2>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h2>ssssssssss</h2>
                    </div>
                </div>
            </div>


            <H2>EeND</H2>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1146
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1537 => 1146,  1516 => 1060,  1507 => 1059,  1486 => 223,  1482 => 222,  1478 => 221,  1469 => 215,  1460 => 209,  1456 => 208,  1445 => 200,  1433 => 191,  1429 => 190,  1420 => 184,  1413 => 180,  1409 => 179,  1400 => 173,  1393 => 169,  1389 => 168,  1380 => 162,  1371 => 156,  1364 => 152,  1357 => 148,  1350 => 144,  1344 => 141,  1338 => 138,  1330 => 133,  1326 => 132,  1317 => 126,  1309 => 121,  1305 => 120,  1296 => 114,  1289 => 110,  1285 => 109,  1276 => 103,  1269 => 99,  1265 => 98,  1261 => 97,  1257 => 96,  1253 => 95,  1244 => 89,  1239 => 86,  1230 => 85,  1213 => 13,  1200 => 1147,  1198 => 1146,  1194 => 1145,  1188 => 1142,  1182 => 1139,  1176 => 1136,  1172 => 1135,  1168 => 1134,  1162 => 1131,  1158 => 1130,  1154 => 1129,  1148 => 1126,  1144 => 1125,  1140 => 1124,  1134 => 1121,  1130 => 1120,  1124 => 1117,  1120 => 1116,  1114 => 1113,  1110 => 1112,  1106 => 1111,  1100 => 1108,  1094 => 1105,  1088 => 1102,  1082 => 1099,  1076 => 1096,  1070 => 1093,  1064 => 1090,  1058 => 1087,  1041 => 1072,  1039 => 1059,  388 => 411,  272 => 298,  206 => 234,  204 => 85,  198 => 82,  194 => 81,  190 => 80,  186 => 79,  172 => 68,  166 => 65,  160 => 62,  154 => 59,  150 => 58,  144 => 55,  140 => 54,  134 => 51,  128 => 48,  122 => 45,  116 => 42,  110 => 39,  104 => 36,  98 => 33,  92 => 30,  88 => 29,  84 => 28,  78 => 25,  72 => 22,  63 => 16,  59 => 14,  57 => 13,  52 => 11,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Dashboard ELIT</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!-- icons fontawesome -->
    <link href=\"{{ asset('fontawesome-free-5.12.0-web/css/all.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}{% endblock %}
    <!-- favicon
\t\t============================================ -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.ico') }}\">
    <!-- Google Fonts
\t\t============================================ -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900\" rel=\"stylesheet\">
    <!-- Bootstrap CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/bootstrap.min.css') }}\">
    <!-- Bootstrap CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/font-awesome.min.css') }}\">
    <!-- owl.carousel CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/owl.theme.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/owl.transitions.css')}}\">
    <!-- animate CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/animate.css')}}\">
    <!-- normalize CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/normalize.css')}}\">
    <!-- meanmenu icon CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/meanmenu.min.css')}}\">
    <!-- main CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/main.css')}}\">
    <!-- educate icon CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/educate-custon-icon.css')}}\">
    <!-- morrisjs CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/morrisjs/morris.css')}}\">
    <!-- mCustomScrollbar CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css')}}\">
    <!-- metisMenu CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/metisMenu/metisMenu.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/metisMenu/metisMenu-vertical.css')}}\">
    <!-- calendar CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/calendar/fullcalendar.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/calendar/fullcalendar.print.min.css')}}\">
    <!-- style CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/style.css')}}\">
    <!-- responsive CSS
\t\t============================================ -->
    <link rel=\"stylesheet\" href=\"{{ asset('kiaalap-master/kiaalap-master/css/responsive.css')}}\">
    <!-- modernizr JS
\t\t============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/vendor/modernizr-2.8.3.min.js')}}\"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class=\"left-sidebar-pro\">
    <nav id=\"sidebar\" class=\"\">
        <div class=\"sidebar-header\">
            <a href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><img class=\"main-logo\"
                                                                                  src=\"{{ asset('kiaalap-master/kiaalap-master/img/logo/logo.png')}}\" alt=\"\" /></a>
            <strong><a href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                    <img src=\"{{ asset('kiaalap-master/kiaalap-master/img/logo/logosn.png')}}\" alt=\"\" /></a></strong>
        </div>
        <div class=\"left-custom-menu-adp-wrap comment-scrollbar\">
            {% block aliBar %}
            <nav class=\"sidebar-nav left-sidebar-menu-pro\">
                <ul class=\"metismenu\" id=\"menu1\">
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">logistics</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">Dashboard v.1</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{ asset('kiaalap-master/kiaalap-master/index-1.html')}}\"><span class=\"mini-sub-pro\">Dashboard v.2</span></a></li>
                            <li><a title=\"Dashboard v.3\" href=\"{{ asset('kiaalap-master/kiaalap-master/index-2.html')}}\"><span class=\"mini-sub-pro\">Dashboard v.3</span></a></li>
                            <li><a title=\"Analytics\" href=\"{{ asset('kiaalap-master/kiaalap-master/analytics.html')}}\"><span class=\"mini-sub-pro\">Analytics</span></a></li>
                            <li><a title=\"Widgets\" href=\"{{ asset('kiaalap-master/kiaalap-master/widgets.html')}}\"><span class=\"mini-sub-pro\">Widgets</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">complaints</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">respond list</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{ asset('kiaalap-master/kiaalap-master/index-1.html')}}\"><span class=\"mini-sub-pro\">inbox</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\"> appointment</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ path('rendez_new')}}\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{ path('rendez_index')}}\"><span class=\"mini-sub-pro\">Browse</span></a></li>

                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">application</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ path('application_new')}}\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{ path('application_index')}}\"><span class=\"mini-sub-pro\">Browse</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"{{ asset('kiaalap-master/kiaalap-master/events.html')}}\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">clubs</span></a>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"{{ asset('kiaalap-master/kiaalap-master/events.html')}}\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">teacher</span></a>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"{{ asset('kiaalap-master/kiaalap-master/events.html')}}\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">student</span></a>
                    </li>

                    <li>
                        <a title=\"Landing Page\" href=\"{{ asset('kiaalap-master/kiaalap-master/events.html')}}\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">complaints</span></a>

                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"{{ asset('kiaalap-master/kiaalap-master/events.html')}}\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">chatbox</span></a>

                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"{{ asset('kiaalap-master/kiaalap-master/events.html')}}\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">module</span></a>

                    </li>


                    <li class=\" \">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Classes</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ path('classes_new') }}\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{ path('classes_index') }}\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Classrooms</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ path('classrooms_new')}}\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{ path('classrooms_index')}}\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Equipments</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{path('equipement_new')}}\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"{{path('equipement_index')}}\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>


                <!-- event issou -->


                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-star icon-wrap\"></span>
                            <i class=\"fas fa-camera\"></i>
                            <span class=\"fas fa-camera\"></span>
                            <span class=\"mini-click-non\">Events</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"browse_event\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                            <li><a title=\"create_event\" href=\"{{ asset('kiaalap-master/kiaalap-master/index-1.html')}}\"><span class=\"mini-sub-pro\">Add new</span></a></li>

                        </ul>
                    </li>

                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-star icon-wrap\"></span>
                            <span class=\"mini-click-non\">Clubs</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"browse_event\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                            <li><a title=\"create_event\" href=\"{{ asset('kiaalap-master/kiaalap-master/index-1.html')}}\"><span class=\"mini-sub-pro\">Add new</span></a></li>
                            <li><a title=\"browse_club_event\" href=\"{{ asset('kiaalap-master/kiaalap-master/index-1.html')}}\"><span class=\"mini-sub-pro\">Browse Club Events</span></a></li>

                        </ul>
                    </li>

                <!--event -->
                </ul>
            </nav>
        </div>
    </nav>
    {% endblock %}

</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class=\"all-content-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"logo-pro\">
                    <a href=\"index.html\"><img class=\"main-logo\" src=\"img/logo/logo.png\" alt=\"\" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-advance-area\">
        <div class=\"header-top-area\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"header-top-wraper\">
                            <div class=\"row\">
                                <div class=\"col-lg-1 col-md-0 col-sm-1 col-xs-12\">
                                    <div class=\"menu-switcher-pro\">
                                        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn bar-button-pro header-drl-controller-btn btn-info navbar-btn\">
                                            <i class=\"educate-icon educate-nav\"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-7 col-sm-6 col-xs-12\">
                                    <div class=\"header-top-menu tabl-d-n\">
                                        <ul class=\"nav navbar-nav mai-top-nav\">
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Home</a>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">About</a>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Services</a>
                                            </li>
                                            <li class=\"nav-item dropdown res-dis-nn\">
                                                <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\">Project <span class=\"angle-down-topmenu\"><i class=\"fa fa-angle-down\"></i></span></a>
                                                <div role=\"menu\" class=\"dropdown-menu animated zoomIn\">
                                                    <a href=\"#\" class=\"dropdown-item\">Documentation</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Expert Backend</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Expert FrontEnd</a>
                                                    <a href=\"#\" class=\"dropdown-item\">Contact Support</a>
                                                </div>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12\">
                                    <div class=\"header-right-info\">
                                        <ul class=\"nav navbar-nav mai-top-nav header-right-menu\">
                                            <li class=\"nav-item dropdown\">
                                                <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><i class=\"educate-icon educate-message edu-chat-pro\" aria-hidden=\"true\"></i><span class=\"indicator-ms\"></span></a>
                                                <div role=\"menu\" class=\"author-message-top dropdown-menu animated zoomIn\">
                                                    <div class=\"message-single-top\">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class=\"message-menu\">
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"{{ asset('kiaalap-master/kiaalap-master/img/contact/1.jpg')}}\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"img/contact/4.jpg\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"img/contact/3.jpg\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"message-img\">
                                                                    <img src=\"img/contact/2.jpg\" alt=\"\">
                                                                </div>
                                                                <div class=\"message-content\">
                                                                    <span class=\"message-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"message-view\">
                                                        <a href=\"#\">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"nav-item\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><i class=\"educate-icon educate-bell\" aria-hidden=\"true\"></i><span class=\"indicator-nt\"></span></a>
                                                <div role=\"menu\" class=\"notification-author dropdown-menu animated zoomIn\">
                                                    <div class=\"notification-single-top\">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class=\"notification-menu\">
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"educate-icon educate-checked edu-checked-pro admin-check-pro\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"fa fa-cloud edu-cloud-computing-down\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"fa fa-eraser edu-shield\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href=\"#\">
                                                                <div class=\"notification-icon\">
                                                                    <i class=\"fa fa-line-chart edu-analytics-arrow\" aria-hidden=\"true\"></i>
                                                                </div>
                                                                <div class=\"notification-content\">
                                                                    <span class=\"notification-date\">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class=\"notification-view\">
                                                        <a href=\"#\">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\">
                                                    <img src=\"{{ asset('kiaalap-master/kiaalap-master/img/product/pro4.jpg') }}\" alt=\"\" />
                                                    <span class=\"admin-name\">Prof.Anderson</span>
                                                    <i class=\"fa fa-angle-down edu-icon edu-down-arrow\"></i>
                                                </a>
                                                <ul role=\"menu\" class=\"dropdown-header-top author-log dropdown-menu animated zoomIn\">
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-home-admin author-log-ic\"></span>My Account</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-user-rounded author-log-ic\"></span>My Profile</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-money author-log-ic\"></span>User Billing</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-settings author-log-ic\"></span>Settings</a>
                                                    </li>
                                                    <li><a href=\"#\"><span class=\"edu-icon edu-locked author-log-ic\"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"nav-item nav-setting-open\"><a href=\"#\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" class=\"nav-link dropdown-toggle\"><i class=\"educate-icon educate-menu\"></i></a>

                                                <div role=\"menu\" class=\"admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn\">
                                                    <ul class=\"nav nav-tabs custon-set-tab\">
                                                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#Notes\">Notes</a>
                                                        </li>
                                                        <li><a data-toggle=\"tab\" href=\"#Projects\">Projects</a>
                                                        </li>
                                                        <li><a data-toggle=\"tab\" href=\"#Settings\">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class=\"tab-content custom-bdr-nt\">
                                                        <div id=\"Notes\" class=\"tab-pane fade in active\">
                                                            <div class=\"notes-area-wrap\">
                                                                <div class=\"note-heading-indicate\">
                                                                    <h2><i class=\"fa fa-comments-o\"></i> Latest Notes</h2>
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class=\"notes-list-area notes-menu-scrollbar\">
                                                                    <ul class=\"notes-menu-list\">
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/4.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/1.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/2.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/3.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/4.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/1.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/2.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/1.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/2.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"notes-list-flow\">
                                                                                    <div class=\"notes-img\">
                                                                                        <img src=\"img/contact/3.jpg\" alt=\"\" />
                                                                                    </div>
                                                                                    <div class=\"notes-content\">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=\"Projects\" class=\"tab-pane fade\">
                                                            <div class=\"projects-settings-wrap\">
                                                                <div class=\"note-heading-indicate\">
                                                                    <h2><i class=\"fa fa-cube\"></i> Latest projects</h2>
                                                                    <p> You have 20 projects. 5 not completed.</p>
                                                                </div>
                                                                <div class=\"project-st-list-area project-st-menu-scrollbar\">
                                                                    <ul class=\"projects-st-menu-list\">
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Web Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">1 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 28%;\" class=\"progress-bar progress-bar-danger hd-tp-1\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Software Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">2 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl\">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 68%;\" class=\"progress-bar hd-tp-2\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Graphic Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">3 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 78%;\" class=\"progress-bar hd-tp-3\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Web Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">4 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl2\">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 38%;\" class=\"progress-bar progress-bar-danger hd-tp-4\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Business Card</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">5 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 28%;\" class=\"progress-bar progress-bar-danger hd-tp-5\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Ecommerce Business</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">6 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl\">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 68%;\" class=\"progress-bar hd-tp-6\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Woocommerce Plugin</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">7 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content\">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 78%;\" class=\"progress-bar\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href=\"#\">
                                                                                <div class=\"project-list-flow\">
                                                                                    <div class=\"projects-st-heading\">
                                                                                        <h2>Wordpress Theme</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class=\"project-st-time\">9 hours ago</span>
                                                                                    </div>
                                                                                    <div class=\"projects-st-content project-rating-cl2\">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class=\"progress progress-mini\">
                                                                                            <div style=\"width: 38%;\" class=\"progress-bar progress-bar-danger\"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id=\"Settings\" class=\"tab-pane fade\">
                                                            <div class=\"setting-panel-area\">
                                                                <div class=\"note-heading-indicate\">
                                                                    <h2><i class=\"fa fa-gears\"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class=\"setting-panel-list\">
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Show notifications</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example3\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example3\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Enable history</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example4\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example4\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Show charts</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" class=\"onoffswitch-checkbox\" id=\"example7\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example7\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Update everyday</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" checked=\"\" class=\"onoffswitch-checkbox\" id=\"example2\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example2\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Global search</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" checked=\"\" class=\"onoffswitch-checkbox\" id=\"example6\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example6\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class=\"checkbox-setting-pro\">
                                                                            <div class=\"checkbox-title-pro\">
                                                                                <h2>Offline users</h2>
                                                                                <div class=\"ts-custom-check\">
                                                                                    <div class=\"onoffswitch\">
                                                                                        <input type=\"checkbox\" name=\"collapsemenu\" checked=\"\" class=\"onoffswitch-checkbox\" id=\"example5\">
                                                                                        <label class=\"onoffswitch-label\" for=\"example5\">
                                                                                            <span class=\"onoffswitch-inner\"></span>
                                                                                            <span class=\"onoffswitch-switch\"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start <div class=\"mobile-menu-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <div class=\"mobile-menu\">
                            <nav id=\"dropdown\">
                                <ul class=\"mobile-menu-nav\">
                                    <li><a data-toggle=\"collapse\" data-target=\"#Charts\" href=\"#\">Home <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul class=\"collapse dropdown-header-top\">
                                            <li><a href=\"index.html\">Dashboard v.1</a></li>
                                            <li><a href=\"index-1.html\">Dashboard v.2</a></li>
                                            <li><a href=\"index-3.html\">Dashboard v.3</a></li>
                                            <li><a href=\"analytics.html\">Analytics</a></li>
                                            <li><a href=\"widgets.html\">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"events.html\">Event</a></li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demoevent\" href=\"#\">Professors <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demoevent\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"all-professors.html\">All Professors</a>
                                            </li>
                                            <li><a href=\"add-professor.html\">Add Professor</a>
                                            </li>
                                            <li><a href=\"edit-professor.html\">Edit Professor</a>
                                            </li>
                                            <li><a href=\"professor-profile.html\">Professor Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demopro\" href=\"#\">Students <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demopro\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"all-students.html\">All Students</a>
                                            </li>
                                            <li><a href=\"add-student.html\">Add Student</a>
                                            </li>
                                            <li><a href=\"edit-student.html\">Edit Student</a>
                                            </li>
                                            <li><a href=\"student-profile.html\">Student Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#democrou\" href=\"#\">Courses <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"democrou\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"all-courses.html\">All Courses</a>
                                            </li>
                                            <li><a href=\"add-course.html\">Add Course</a>
                                            </li>
                                            <li><a href=\"edit-course.html\">Edit Course</a>
                                            </li>
                                            <li><a href=\"course-profile.html\">Courses Info</a>
                                            </li>
                                            <li><a href=\"course-payment.html\">Courses Payment</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demolibra\" href=\"#\">Library <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demolibra\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"library-assets.html\">Library Assets</a>
                                            </li>
                                            <li><a href=\"add-library-assets.html\">Add Library Asset</a>
                                            </li>
                                            <li><a href=\"edit-library-assets.html\">Edit Library Asset</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demodepart\" href=\"#\">Departments <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demodepart\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"departments.html\">Departments List</a>
                                            </li>
                                            <li><a href=\"add-department.html\">Add Departments</a>
                                            </li>
                                            <li><a href=\"edit-department.html\">Edit Departments</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#demo\" href=\"#\">Mailbox <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"demo\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"mailbox.html\">Inbox</a>
                                            </li>
                                            <li><a href=\"mailbox-view.html\">View Mail</a>
                                            </li>
                                            <li><a href=\"mailbox-compose.html\">Compose Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Miscellaneousmob\" href=\"#\">Interface <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Miscellaneousmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"google-map.html\">Google Map</a>
                                            </li>
                                            <li><a href=\"data-maps.html\">Data Maps</a>
                                            </li>
                                            <li><a href=\"pdf-viewer.html\">Pdf Viewer</a>
                                            </li>
                                            <li><a href=\"x-editable.html\">X-Editable</a>
                                            </li>
                                            <li><a href=\"code-editor.html\">Code Editor</a>
                                            </li>
                                            <li><a href=\"tree-view.html\">Tree View</a>
                                            </li>
                                            <li><a href=\"preloader.html\">Preloader</a>
                                            </li>
                                            <li><a href=\"images-cropper.html\">Images Cropper</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Chartsmob\" href=\"#\">Charts <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Chartsmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"bar-charts.html\">Bar Charts</a>
                                            </li>
                                            <li><a href=\"line-charts.html\">Line Charts</a>
                                            </li>
                                            <li><a href=\"area-charts.html\">Area Charts</a>
                                            </li>
                                            <li><a href=\"rounded-chart.html\">Rounded Charts</a>
                                            </li>
                                            <li><a href=\"c3.html\">C3 Charts</a>
                                            </li>
                                            <li><a href=\"sparkline.html\">Sparkline Charts</a>
                                            </li>
                                            <li><a href=\"peity.html\">Peity Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Tablesmob\" href=\"#\">Tables <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Tablesmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"static-table.html\">Static Table</a>
                                            </li>
                                            <li><a href=\"data-table.html\">Data Table</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#formsmob\" href=\"#\">Forms <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"formsmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"basic-form-element.html\">Basic Form Elements</a>
                                            </li>
                                            <li><a href=\"advance-form-element.html\">Advanced Form Elements</a>
                                            </li>
                                            <li><a href=\"password-meter.html\">Password Meter</a>
                                            </li>
                                            <li><a href=\"multi-upload.html\">Multi Upload</a>
                                            </li>
                                            <li><a href=\"tinymc.html\">Text Editor</a>
                                            </li>
                                            <li><a href=\"dual-list-box.html\">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Appviewsmob\" href=\"#\">App views <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Appviewsmob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"basic-form-element.html\">Basic Form Elements</a>
                                            </li>
                                            <li><a href=\"advance-form-element.html\">Advanced Form Elements</a>
                                            </li>
                                            <li><a href=\"password-meter.html\">Password Meter</a>
                                            </li>
                                            <li><a href=\"multi-upload.html\">Multi Upload</a>
                                            </li>
                                            <li><a href=\"tinymc.html\">Text Editor</a>
                                            </li>
                                            <li><a href=\"dual-list-box.html\">Dual List Box</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle=\"collapse\" data-target=\"#Pagemob\" href=\"#\">Pages <span class=\"admin-project-icon edu-icon edu-down-arrow\"></span></a>
                                        <ul id=\"Pagemob\" class=\"collapse dropdown-header-top\">
                                            <li><a href=\"login.html\">Login</a>
                                            </li>
                                            <li><a href=\"register.html\">Register</a>
                                            </li>
                                            <li><a href=\"lock.html\">Lock</a>
                                            </li>
                                            <li><a href=\"password-recovery.html\">Password Recovery</a>
                                            </li>
                                            <li><a href=\"404.html\">404 Page</a></li>
                                            <li><a href=\"500.html\">500 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Mobile Menu end -->
        {% block content %}
            <H2>SeTART</H2>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <h2>ssssssssss</h2>
                    </div>
                </div>
            </div>


            <H2>EeND</H2>
        {% endblock %}
        <div class=\"footer-copyright-area\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"footer-copy-right\">
                            <p>Copyright © 2018. All rights reserved. Template by <a href=\"https://colorlib.com/wp/templates/\">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/vendor/jquery-1.12.4.min.js')}}\"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/bootstrap.min.js')}}\"></script>
    <!-- wow JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/wow.min.js')}}\"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/jquery-price-slider.js')}}\"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/jquery.meanmenu.js')}}\"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/owl.carousel.min.js')}}\"></script>
    <!-- sticky JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/jquery.sticky.js')}}\"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/jquery.scrollUp.min.js')}}\"></script>
    <!-- counterup JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/counterup/jquery.counterup.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/counterup/waypoints.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/counterup/counterup-active.js')}}\"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/scrollbar/mCustomScrollbar-active.js')}}\"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/metisMenu/metisMenu.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/metisMenu/metisMenu-active.js')}}\"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/morrisjs/raphael-min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/morrisjs/morris.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/morrisjs/morris-active.js')}}\"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/sparkline/jquery.sparkline.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/sparkline/jquery.charts-sparkline.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/sparkline/sparkline-active.js')}}\"></script>
    <!-- calendar JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/calendar/moment.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/calendar/fullcalendar.min.js')}}\"></script>
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/calendar/fullcalendar-active.js')}}\"></script>
    <!-- plugins JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/plugins.js')}}\"></script>
    <!-- main JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/main.js')}}\"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src=\"{{ asset('kiaalap-master/kiaalap-master/js/tawk-chat.js')}}\"></script>
    {% block javascripts %}{% endblock %}
</body>

</html>
", "backAdmin.html.twig", "D:\\wamp64\\www\\PIDEV2020_ELIT_3A17\\app\\Resources\\views\\backAdmin.html.twig");
    }
}
