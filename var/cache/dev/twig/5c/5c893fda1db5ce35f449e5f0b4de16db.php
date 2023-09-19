<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* clients/clientBack.html.twig */
class __TwigTemplate_522b96872b2e181d021f90398024d505 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/clientBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "clients/clientBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title>Stram - Admin Dashboard</title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"assets1/images/favicon.ico\">

        <link href=\"assets1/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"assets1/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"assets1/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    </head>


    <body class=\"fixed-left\">

        <!-- Loader -->
        <div id=\"preloader\"><div id=\"status\"><div class=\"spinner\"></div></div></div>

        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <button type=\"button\" class=\"button-menu-mobile button-menu-mobile-topbar open-left waves-effect\">
                    <i class=\"ion-close\"></i>
                </button>

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center bg-logo\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-bowling text-warning\"></i> Stram</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets1/images/stram.png\" height=\"24\" alt=\"logo\"></a> -->
                    </div>
                </div>
                <div class=\"sidebar-user\">
                    <img src=\"assets1/images/users/avatar-6.jpg\" alt=\"user\" class=\"rounded-circle img-thumbnail mb-1\">
                    <h6 class=\"\">Mr. Michael Hill </h6> 
                    <p class=\" online-icon text-dark\"><i class=\"mdi mdi-record text-success\"></i>online</p>                    
                    <ul class=\"list-unstyled list-inline mb-0 mt-2\">
                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Profile\"><i class=\"dripicons-user text-purple\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\"><i class=\"dripicons-gear text-dark\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Log out\"><i class=\"dripicons-power text-danger\"></i></a>
                        </li>
                    </ul>           
                </div>

                <div class=\"sidebar-inner slimscrollleft\">

                    <div id=\"sidebar-menu\">
                        <ul>
                            <li class=\"menu-title\">Main</li>

                            <li>
                                <a href=\"/admin\" class=\"waves-effect\">
                                    <i class=\"dripicons-device-desktop\"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/\" class=\"waves-effect\"><i class=\"dripicons-to-do\"></i><span> Stram </span></a>
                            </li>

                            <li class=\"menu-title\">Components</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-jewel\"></i> <span> Gestion Services</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-alerts.html\">Alerts</a></li>
                                    <li><a href=\"ui-alertify.html\">Alertify</a></li>
                                    <li><a href=\"ui-badge.html\">Badge</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-carousel.html\">Carousel</a></li>                                   
                                    <li><a href=\"ui-cards.html\">Cards</a></li>
                                    <li><a href=\"ui-dropdowns.html\">Dropdowns</a></li>
                                    <li><a href=\"ui-grid.html\">Grid</a></li>
                                    <li><a href=\"ui-images.html\">Images</a></li>
                                    <li><a href=\"ui-lightbox.html\">Lightbox</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-navs.html\">Navs</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-pagination.html\">Pagination</a></li>
                                    <li><a href=\"ui-popover-tooltips.html\">Popover & Tooltips</a></li>
                                    <li><a href=\"ui-rating.html\">Rating</a></li>                                    
                                    <li><a href=\"ui-rangeslider.html\">Range Slider</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>                                    
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-video.html\">Video</a></li>                                    
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-blog\"></i><span> Gestion Projets </span> </a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-advanced.html\">Form Advanced</a></li>
                                    <li><a href=\"form-elements.html\">Form Elements</a></li>
                                    <li><a href=\"form-editors.html\">Form Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Form File Upload</a></li>
                                    <li><a href=\"form-mask.html\">Form Mask</a></li>
                                    <li><a href=\"form-summernote.html\">Summernote</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>                                    
                                    <li><a href=\"form-xeditable.html\">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-graph-pie\"></i><span> Gestion Clients </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste de clients</a></li>                        
                                    <li><a href=\"charts-chartist.html\">Chartist Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs Chart</a></li>
                                    <li><a href=\"charts-c3.html\">C3 Chart</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-other.html\">Jquery Knob Chart</a></li>
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-trophy\"></i> <span> Gestion Carriére </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">                                   
                                    <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font Awesome</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-themify.html\">Themify Icons</a></li>
                                    <li><a href=\"icons-typicons.html\">Typicons Icons</a></li>
                                </ul>
                            </li>


                            <li class=\"menu-title\">Extra</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-map\"></i><span> Contact </span> </a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

\t\t\t\t\t\t\t
                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-card\"></i><span> Gestion Affichage  </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>                                    
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-copy\"></i><span> Pages</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-404.html\">Error 404</a></li>
                                    <li><a href=\"pages-500.html\">Error 500</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class=\"clearfix\"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">

                    <!-- Top Bar Start -->
                    <div class=\"topbar\">

                        <nav class=\"navbar-custom\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        Français <img src=\"assets1/images/flags/french_flag.jpg\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/italy_flag.jpg\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/french_flag.jpg\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/spain_flag.jpg\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/russia_flag.jpg\" alt=\"\" height=\"16\"/><span> Russian </span></a>
                                    </div>
                                </li>
                             


                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <img src=\"assets1/images/users/avatar-6.jpg\" alt=\"user\" class=\"rounded-circle\">
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                        <!-- item-->
                                        <div class=\"dropdown-item noti-title\">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-account-circle m-r-5 text-muted\"></i> Profile</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-wallet m-r-5 text-muted\"></i> My Wallet</a>
                                        <a class=\"dropdown-item\" href=\"#\"><span class=\"badge badge-success float-right\">5</span><i class=\"mdi mdi-settings m-r-5 text-muted\"></i> Settings</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i> Lock screen</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class=\"list-inline menu-left mb-0\">
                                <li class=\"float-left\">
                                    <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                        <i class=\"mdi mdi-menu\"></i>
                                    </button>
                                </li>
                                <li class=\"hide-phone app-search\">
                                    <form role=\"search\" class=\"\">
                                        <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                                        <a href=\"\"><i class=\"fas fa-search\"></i></a>
                                    </form>
                                </li>
                            </ul>

                            <div class=\"clearfix\"></div>
                        </nav>
                    </div>
                    <!-- Top Bar End -->

                    <div class=\"page-content-wrapper \">

                        <div class=\"container-fluid\">

                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"page-title-box\">
                                        <div class=\"btn-group float-right\">
                                            <ol class=\"breadcrumb hide-phone p-0 m-0\">
                                                <li class=\"breadcrumb-item\"><a href=\"/\">Stram</a></li>
                                                <li class=\"breadcrumb-item active\">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class=\"row\">
                                <div class=\"col-lg-9\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"fas fa-tasks text-gradient-success\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">190</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">Nombre de Clients</p>   
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <div class=\"card\">
                                                <div class=\"card-body justify-content-center\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"far fa-gem text-gradient-danger\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">62</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">Nombre de Secteurs</p>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"fas fa-users text-gradient-warning\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">14</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">nombre de services</p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <div class=\"card \">
                                                <div class=\"card-body\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"fas fa-database text-gradient-primary\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">\$15562</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">nombre de projets </p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>                                             
                                    </div> 
                                                               
                                </div>
                                <div class=\"col-lg-3\">
                                    <div class=\"card\">
                                      
                                    </div>
                                    <div class=\"card\">
                                        
                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class=\"row\">
                                
                                <div class=\"col-xl-4\">
                                 
                                </div>
                                <div class=\"col-xl-4 col-lg-6\">
                                   

                                </div>
                                <div class=\"col-xl-4  col-lg-6\">
                                   
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xl-12\">
                                    <div class=\"card\">                                
                                        <div class=\"card-body\">
                                            <h5 class=\"header-title pb-3 mt-0\">Nos Clients</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover mb-0\">
                                                    <thead>
                                                        <tr class=\"align-self-center\">
                                                            <th>Nom Client</th>
                                                            <th>Secteur</th>
                                                            <th>Service </th>
                                                            <th>Logo </th>
                                                            <th></th>                                                                                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 384
        if ((twig_length_filter($this->env, (isset($context["listC"]) || array_key_exists("listC", $context) ? $context["listC"] : (function () { throw new RuntimeError('Variable "listC" does not exist.', 384, $this->source); })())) == 0)) {
            // line 385
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 387
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t   </tr>
\t\t\t\t\t\t\t\t\t                   ";
        // line 388
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listC"]) || array_key_exists("listC", $context) ? $context["listC"] : (function () { throw new RuntimeError('Variable "listC" does not exist.', 388, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 389
            echo "                                                            <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 390
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getNom", [], "any", false, false, false, 390), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 391
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getSecteur", [], "any", false, false, false, 391), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 392
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getService", [], "any", false, false, false, 392), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 393
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getLogo", [], "any", false, false, false, 393), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 395
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierClient", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 395)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 401
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppressionClient", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 401)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "                                                                     
                                                    </tbody>
                                                </table>
                                            </div><!--end table-responsive-->
                                            <div class=\"pt-3 border-top text-right\">
                                                <a href=\"#\" class=\"text-primary\">View all <i class=\"mdi mdi-arrow-right\"></i></a>
                                            </div> 
                                        </div>
                                    </div>                                                                   
                                </div> 
                            </div>
                            <!-- end row -->
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class=\"footer\">
                    © 2022 Zoogler by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src=\"assets1/js/jquery.min.js\"></script>
        <script src=\"assets1/js/popper.min.js\"></script>
        <script src=\"assets1/js/bootstrap.min.js\"></script>
        <script src=\"assets1/js/modernizr.min.js\"></script>
        <script src=\"assets1/js/detect.js\"></script>
        <script src=\"assets1/js/fastclick.js\"></script>
        <script src=\"assets1/js/jquery.slimscroll.js\"></script>
        <script src=\"assets1/js/jquery.blockUI.js\"></script>
        <script src=\"assets1/js/waves.js\"></script>
        <script src=\"assets1/js/jquery.nicescroll.js\"></script>
        <script src=\"assets1/js/jquery.scrollTo.min.js\"></script>

        <script src=\"assets1/plugins/chart.js/chart.min.js\"></script>
        <script src=\"assets1/pages/dashboard.js\"></script>

        <!-- App js -->
        <script src=\"assets1/js/app.js\"></script>
        

    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "clients/clientBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 409,  470 => 401,  461 => 395,  456 => 393,  452 => 392,  448 => 391,  444 => 390,  441 => 389,  437 => 388,  434 => 387,  430 => 385,  428 => 384,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title>Stram - Admin Dashboard</title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"assets1/images/favicon.ico\">

        <link href=\"assets1/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"assets1/css/icons.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"assets1/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    </head>


    <body class=\"fixed-left\">

        <!-- Loader -->
        <div id=\"preloader\"><div id=\"status\"><div class=\"spinner\"></div></div></div>

        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <button type=\"button\" class=\"button-menu-mobile button-menu-mobile-topbar open-left waves-effect\">
                    <i class=\"ion-close\"></i>
                </button>

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center bg-logo\">
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-bowling text-warning\"></i> Stram</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets1/images/stram.png\" height=\"24\" alt=\"logo\"></a> -->
                    </div>
                </div>
                <div class=\"sidebar-user\">
                    <img src=\"assets1/images/users/avatar-6.jpg\" alt=\"user\" class=\"rounded-circle img-thumbnail mb-1\">
                    <h6 class=\"\">Mr. Michael Hill </h6> 
                    <p class=\" online-icon text-dark\"><i class=\"mdi mdi-record text-success\"></i>online</p>                    
                    <ul class=\"list-unstyled list-inline mb-0 mt-2\">
                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Profile\"><i class=\"dripicons-user text-purple\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\"><i class=\"dripicons-gear text-dark\"></i></a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Log out\"><i class=\"dripicons-power text-danger\"></i></a>
                        </li>
                    </ul>           
                </div>

                <div class=\"sidebar-inner slimscrollleft\">

                    <div id=\"sidebar-menu\">
                        <ul>
                            <li class=\"menu-title\">Main</li>

                            <li>
                                <a href=\"/admin\" class=\"waves-effect\">
                                    <i class=\"dripicons-device-desktop\"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"/\" class=\"waves-effect\"><i class=\"dripicons-to-do\"></i><span> Stram </span></a>
                            </li>

                            <li class=\"menu-title\">Components</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-jewel\"></i> <span> Gestion Services</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-alerts.html\">Alerts</a></li>
                                    <li><a href=\"ui-alertify.html\">Alertify</a></li>
                                    <li><a href=\"ui-badge.html\">Badge</a></li>
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-carousel.html\">Carousel</a></li>                                   
                                    <li><a href=\"ui-cards.html\">Cards</a></li>
                                    <li><a href=\"ui-dropdowns.html\">Dropdowns</a></li>
                                    <li><a href=\"ui-grid.html\">Grid</a></li>
                                    <li><a href=\"ui-images.html\">Images</a></li>
                                    <li><a href=\"ui-lightbox.html\">Lightbox</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-navs.html\">Navs</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-pagination.html\">Pagination</a></li>
                                    <li><a href=\"ui-popover-tooltips.html\">Popover & Tooltips</a></li>
                                    <li><a href=\"ui-rating.html\">Rating</a></li>                                    
                                    <li><a href=\"ui-rangeslider.html\">Range Slider</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>                                    
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-video.html\">Video</a></li>                                    
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-blog\"></i><span> Gestion Projets </span> </a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"form-advanced.html\">Form Advanced</a></li>
                                    <li><a href=\"form-elements.html\">Form Elements</a></li>
                                    <li><a href=\"form-editors.html\">Form Editors</a></li>
                                    <li><a href=\"form-uploads.html\">Form File Upload</a></li>
                                    <li><a href=\"form-mask.html\">Form Mask</a></li>
                                    <li><a href=\"form-summernote.html\">Summernote</a></li>
                                    <li><a href=\"form-validation.html\">Form Validation</a></li>                                    
                                    <li><a href=\"form-xeditable.html\">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-graph-pie\"></i><span> Gestion Clients </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste de clients</a></li>                        
                                    <li><a href=\"charts-chartist.html\">Chartist Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs Chart</a></li>
                                    <li><a href=\"charts-c3.html\">C3 Chart</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-other.html\">Jquery Knob Chart</a></li>
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-trophy\"></i> <span> Gestion Carriére </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">                                   
                                    <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font Awesome</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-themify.html\">Themify Icons</a></li>
                                    <li><a href=\"icons-typicons.html\">Typicons Icons</a></li>
                                </ul>
                            </li>


                            <li class=\"menu-title\">Extra</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-map\"></i><span> Contact </span> </a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

\t\t\t\t\t\t\t
                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-card\"></i><span> Gestion Affichage  </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>                                    
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-copy\"></i><span> Pages</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-404.html\">Error 404</a></li>
                                    <li><a href=\"pages-500.html\">Error 500</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class=\"clearfix\"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">

                    <!-- Top Bar Start -->
                    <div class=\"topbar\">

                        <nav class=\"navbar-custom\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        Français <img src=\"assets1/images/flags/french_flag.jpg\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/italy_flag.jpg\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/french_flag.jpg\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/spain_flag.jpg\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets1/images/flags/russia_flag.jpg\" alt=\"\" height=\"16\"/><span> Russian </span></a>
                                    </div>
                                </li>
                             


                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <img src=\"assets1/images/users/avatar-6.jpg\" alt=\"user\" class=\"rounded-circle\">
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                        <!-- item-->
                                        <div class=\"dropdown-item noti-title\">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-account-circle m-r-5 text-muted\"></i> Profile</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-wallet m-r-5 text-muted\"></i> My Wallet</a>
                                        <a class=\"dropdown-item\" href=\"#\"><span class=\"badge badge-success float-right\">5</span><i class=\"mdi mdi-settings m-r-5 text-muted\"></i> Settings</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i> Lock screen</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class=\"list-inline menu-left mb-0\">
                                <li class=\"float-left\">
                                    <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                        <i class=\"mdi mdi-menu\"></i>
                                    </button>
                                </li>
                                <li class=\"hide-phone app-search\">
                                    <form role=\"search\" class=\"\">
                                        <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                                        <a href=\"\"><i class=\"fas fa-search\"></i></a>
                                    </form>
                                </li>
                            </ul>

                            <div class=\"clearfix\"></div>
                        </nav>
                    </div>
                    <!-- Top Bar End -->

                    <div class=\"page-content-wrapper \">

                        <div class=\"container-fluid\">

                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"page-title-box\">
                                        <div class=\"btn-group float-right\">
                                            <ol class=\"breadcrumb hide-phone p-0 m-0\">
                                                <li class=\"breadcrumb-item\"><a href=\"/\">Stram</a></li>
                                                <li class=\"breadcrumb-item active\">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class=\"row\">
                                <div class=\"col-lg-9\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-3\">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"fas fa-tasks text-gradient-success\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">190</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">Nombre de Clients</p>   
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <div class=\"card\">
                                                <div class=\"card-body justify-content-center\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"far fa-gem text-gradient-danger\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">62</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">Nombre de Secteurs</p>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <div class=\"card\">
                                                <div class=\"card-body\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"fas fa-users text-gradient-warning\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">14</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">nombre de services</p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3\">
                                            <div class=\"card \">
                                                <div class=\"card-body\">
                                                    <div class=\"icon-contain\">
                                                        <div class=\"row\">
                                                            <div class=\"col-2 align-self-center\">
                                                                <i class=\"fas fa-database text-gradient-primary\"></i>
                                                            </div>
                                                            <div class=\"col-10 text-right\">
                                                                <h5 class=\"mt-0 mb-1\">\$15562</h5>
                                                                <p class=\"mb-0 font-12 text-muted\">nombre de projets </p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>                                             
                                    </div> 
                                                               
                                </div>
                                <div class=\"col-lg-3\">
                                    <div class=\"card\">
                                      
                                    </div>
                                    <div class=\"card\">
                                        
                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class=\"row\">
                                
                                <div class=\"col-xl-4\">
                                 
                                </div>
                                <div class=\"col-xl-4 col-lg-6\">
                                   

                                </div>
                                <div class=\"col-xl-4  col-lg-6\">
                                   
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xl-12\">
                                    <div class=\"card\">                                
                                        <div class=\"card-body\">
                                            <h5 class=\"header-title pb-3 mt-0\">Nos Clients</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover mb-0\">
                                                    <thead>
                                                        <tr class=\"align-self-center\">
                                                            <th>Nom Client</th>
                                                            <th>Secteur</th>
                                                            <th>Service </th>
                                                            <th>Logo </th>
                                                            <th></th>                                                                                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if listC | length == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center\">Liste vide</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t   </tr>
\t\t\t\t\t\t\t\t\t                   {% for c in listC  %}
                                                            <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{c.getNom}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{c.getSecteur}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{c.getService}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{c.getLogo}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('modifierClient',{id:c.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pen\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('suppressionClient',{id:c.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\" style=\"color:#DEE9F3\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
                                                                     
                                                    </tbody>
                                                </table>
                                            </div><!--end table-responsive-->
                                            <div class=\"pt-3 border-top text-right\">
                                                <a href=\"#\" class=\"text-primary\">View all <i class=\"mdi mdi-arrow-right\"></i></a>
                                            </div> 
                                        </div>
                                    </div>                                                                   
                                </div> 
                            </div>
                            <!-- end row -->
                            
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class=\"footer\">
                    © 2022 Zoogler by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src=\"assets1/js/jquery.min.js\"></script>
        <script src=\"assets1/js/popper.min.js\"></script>
        <script src=\"assets1/js/bootstrap.min.js\"></script>
        <script src=\"assets1/js/modernizr.min.js\"></script>
        <script src=\"assets1/js/detect.js\"></script>
        <script src=\"assets1/js/fastclick.js\"></script>
        <script src=\"assets1/js/jquery.slimscroll.js\"></script>
        <script src=\"assets1/js/jquery.blockUI.js\"></script>
        <script src=\"assets1/js/waves.js\"></script>
        <script src=\"assets1/js/jquery.nicescroll.js\"></script>
        <script src=\"assets1/js/jquery.scrollTo.min.js\"></script>

        <script src=\"assets1/plugins/chart.js/chart.min.js\"></script>
        <script src=\"assets1/pages/dashboard.js\"></script>

        <!-- App js -->
        <script src=\"assets1/js/app.js\"></script>
        

    </body>
</html>", "clients/clientBack.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\clients\\clientBack.html.twig");
    }
}
