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
            'aliBar' => [$this, 'block_aliBar'],
            'content' => [$this, 'block_content'],
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


    <!-- favicon
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
        // line 237
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
        // line 301
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
        // line 414
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
        // line 1062
        $this->displayBlock('content', $context, $blocks);
        // line 1075
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
        // line 1090
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- wow JS
        ============================================ -->
    <script src=\"";
        // line 1096
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery-price-slider.js"), "html", null, true);
        echo "\"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src=\"";
        // line 1102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery.meanmenu.js"), "html", null, true);
        echo "\"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src=\"";
        // line 1105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <!-- sticky JS
        ============================================ -->
    <script src=\"";
        // line 1108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
    <!-- counterup JS
        ============================================ -->
    <script src=\"";
        // line 1114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/counterup/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/counterup/counterup-active.js"), "html", null, true);
        echo "\"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/scrollbar/mCustomScrollbar-active.js"), "html", null, true);
        echo "\"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src=\"";
        // line 1123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/metisMenu/metisMenu-active.js"), "html", null, true);
        echo "\"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src=\"";
        // line 1127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/morrisjs/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/morrisjs/morris.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/morrisjs/morris-active.js"), "html", null, true);
        echo "\"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src=\"";
        // line 1132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/sparkline/jquery.charts-sparkline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/sparkline/sparkline-active.js"), "html", null, true);
        echo "\"></script>
    <!-- calendar JS
        ============================================ -->
    <script src=\"";
        // line 1137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/calendar/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/calendar/fullcalendar-active.js"), "html", null, true);
        echo "\"></script>
    <!-- plugins JS
        ============================================ -->
    <script src=\"";
        // line 1142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <!-- main JS
        ============================================ -->
    <script src=\"";
        // line 1145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src=\"";
        // line 1148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/js/tawk-chat.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">Registration</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">appointment</span></a></li>
                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">registration</span></a></li>

                        </ul>
                    </li>

                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">recruitment</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">appointment</span></a></li>
                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">recruitement</span></a></li>

                        </ul>
                    </li>

                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">clubs</span></a>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">teacher</span></a>
                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">student</span></a>
                    </li>

                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">complaints</span></a>

                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">chatbox</span></a>

                    </li>
                    <li>
                        <a title=\"Landing Page\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/events.html"), "html", null, true);
        echo "\" aria-expanded=\"false\"><span class=\"educate-icon educate-event icon-wrap sub-icon-mg\" aria-hidden=\"true\"></span> <span class=\"mini-click-non\">module</span></a>

                    </li>


                    <li class=\" \">
                        <a class=\"has-arrow\" href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Classes</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classes_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 172
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classes_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Classrooms</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classrooms_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classrooms_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>
                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-department icon-wrap\"></span>
                            <span class=\"mini-click-non\">Equipments</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipement_new");
        echo "\"><span class=\"mini-sub-pro\">Add</span></a></li>
                            <li><a title=\"Dashboard v.2\" href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipement_index");
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                        </ul>
                    </li>


                <!-- event issou -->


                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-star icon-wrap\"></span>
                            <i class=\"fas fa-camera\"></i>
                            <span class=\"fas fa-camera\"></span>
                            <span class=\"mini-click-non\">Events</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"browse_event\" href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                            <li><a title=\"create_event\" href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Add new</span></a></li>

                        </ul>
                    </li>

                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\">
                            <span class=\"educate-icon educate-star icon-wrap\"></span>
                            <span class=\"mini-click-non\">Clubs</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"browse_event\" href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Browse</span></a></li>
                            <li><a title=\"create_event\" href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("kiaalap-master/kiaalap-master/index-1.html"), "html", null, true);
        echo "\"><span class=\"mini-sub-pro\">Add new</span></a></li>
                            <li><a title=\"browse_club_event\" href=\"";
        // line 226
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

    // line 1062
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 1063
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
        return array (  1493 => 1063,  1484 => 1062,  1463 => 226,  1459 => 225,  1455 => 224,  1446 => 218,  1437 => 212,  1433 => 211,  1422 => 203,  1410 => 194,  1406 => 193,  1397 => 187,  1390 => 183,  1386 => 182,  1377 => 176,  1370 => 172,  1366 => 171,  1357 => 165,  1348 => 159,  1341 => 155,  1334 => 151,  1327 => 147,  1321 => 144,  1315 => 141,  1306 => 135,  1302 => 134,  1293 => 128,  1284 => 122,  1280 => 121,  1271 => 115,  1263 => 110,  1259 => 109,  1250 => 103,  1243 => 99,  1239 => 98,  1235 => 97,  1231 => 96,  1227 => 95,  1218 => 89,  1213 => 86,  1204 => 85,  1189 => 1148,  1183 => 1145,  1177 => 1142,  1171 => 1139,  1167 => 1138,  1163 => 1137,  1157 => 1134,  1153 => 1133,  1149 => 1132,  1143 => 1129,  1139 => 1128,  1135 => 1127,  1129 => 1124,  1125 => 1123,  1119 => 1120,  1115 => 1119,  1109 => 1116,  1105 => 1115,  1101 => 1114,  1095 => 1111,  1089 => 1108,  1083 => 1105,  1077 => 1102,  1071 => 1099,  1065 => 1096,  1059 => 1093,  1053 => 1090,  1036 => 1075,  1034 => 1062,  383 => 414,  267 => 301,  201 => 237,  199 => 85,  193 => 82,  189 => 81,  185 => 80,  181 => 79,  167 => 68,  161 => 65,  155 => 62,  149 => 59,  145 => 58,  139 => 55,  135 => 54,  129 => 51,  123 => 48,  117 => 45,  111 => 42,  105 => 39,  99 => 36,  93 => 33,  87 => 30,  83 => 29,  79 => 28,  73 => 25,  67 => 22,  58 => 16,  50 => 11,  38 => 1,);
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
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">Registration</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">appointment</span></a></li>
                            <li><a title=\"Dashboard v.1\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">registration</span></a></li>

                        </ul>
                    </li>

                    <li class=\"\">
                        <a class=\"has-arrow\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\">
                            <span class=\"educate-icon educate-home icon-wrap\"></span>
                            <span class=\"mini-click-non\">recruitment</span>
                        </a>
                        <ul class=\"submenu-angle\" aria-expanded=\"true\">

                            <li><a title=\"Dashboard v.1\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">appointment</span></a></li>
                            <li><a title=\"Dashboard v.1\" href=\"{{ asset('kiaalap-master/kiaalap-master/index.html')}}\"><span class=\"mini-sub-pro\">recruitement</span></a></li>

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
</body>

</html>
", "backAdmin.html.twig", "D:\\wamp64\\www\\PIDEV2020_ELIT_3A17\\app\\Resources\\views\\backAdmin.html.twig");
    }
}
