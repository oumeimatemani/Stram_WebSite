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

/* base.html.twig */
class __TwigTemplate_6e6b8f3e2012d1f531a432f25485f835 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t\t\t\t\t\t\t\t    <li><a href=\"/projets\">Liste des services</li>                        
                                  \t<li><a href=\"/ajouterProjet/{id}\">Nouveau service</a></li>                        
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-blog\"></i><span> Gestion Projets </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t    <li><a href=\"/projets\">Liste de Pojets</a></li>                        
                                  \t<li><a href=\"/ajouterProjet/{id}\">Nouveau Projet</a></li>                        
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-graph-pie\"></i><span> Gestion Clients </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste de clients</a></li>     
\t\t\t\t\t\t\t\t  <li><a href=\"/ajouterClient\">Nouveau client</a></li>                                           
                                </ul>
                            </li>

\t\t\t\t\t\t\t<li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-graph-pie\"></i><span> Gestion des métiers </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste des métiers</a></li>     
\t\t\t\t\t\t\t\t  <li><a href=\"/ajouterClient\">Nouveau métier</a></li>                                           
                                   
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-trophy\"></i> <span> Gestion Carriére </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste des Carriéres</a></li>     
\t\t\t\t\t\t\t\t  <li><a href=\"/ajouterClient\">Nouveau Carriére</a></li>                                           
                                   
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
                                    <li><a href=\"tables-basic.html\">Acceuil</a></li>
                                    <li><a href=\"tables-datatable.html\">STRAM</a></li>                                  
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-copy\"></i><span> Pages</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                             
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
                                                                <p class=\"mb-0 font-12 text-muted\">Active Tasks</p>   
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
                                                                <p class=\"mb-0 font-12 text-muted\">Project</p>
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
                                                                <p class=\"mb-0 font-12 text-muted\">Teams</p>    
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
                                                                <p class=\"mb-0 font-12 text-muted\">Budget</p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>                                             
                                    </div> 
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"btn-group btn-group-toggle float-right\" data-toggle=\"buttons\">
                                                <label class=\"btn btn-primary btn-sm active\">
                                                    <input type=\"radio\" name=\"options\" id=\"option1\" checked=\"\"> This Week
                                                </label>
                                                <label class=\"btn btn-primary btn-sm\">
                                                    <input type=\"radio\" name=\"options\" id=\"option2\"> Last Month
                                                </label>                                                
                                            </div>
                                            <h5 class=\"header-title mb-4 mt-0\">Weekly Record</h5>
                                            <canvas id=\"lineChart\" height=\"82\"></canvas>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class=\"col-lg-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"dropdown d-inline-block float-right\">
                                                <a class=\"nav-link dropdown-toggle arrow-none\" id=\"dLabel4\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                                    <i class=\"fas fa-ellipsis-v font-20 text-muted\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dLabel4\">
                                                    <a class=\"dropdown-item\" href=\"#\">Create Project</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Open Project</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Tasks Details</a>
                                                </div>
                                            </div>
                                            <h5 class=\"header-title mb-4 mt-0\">Activity</h5>
                                            <div>
                                                <canvas id=\"dash-doughnut\" height=\"200\"></canvas>
                                            </div>
                                            <ul class=\"list-unstyled list-inline text-center mb-0 mt-3\">
                                                <li class=\"mb-2 list-inline-item text-muted font-13\"><i class=\"mdi mdi-label text-success mr-2\"></i>Active</li>
                                                <li class=\"mb-2 list-inline-item text-muted font-13\"><i class=\"mdi mdi-label text-danger mr-2\"></i>Complete</li>
                                                <li class=\"mb-2 list-inline-item text-muted font-13\"><i class=\"mdi mdi-label text-warning mr-2\"></i>Panding</li>
                                            </ul>
                                        </div>                               
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row mb-3\">
                                                <div class=\"col-sm-6\">
                                                    <p class=\"mb-0 text-muted font-13\"><i class=\"mdi mdi-album mr-2 text-warning\"></i>New Leads</p>                            
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <p class=\"mb-0 text-muted font-13\"><i class=\"mdi mdi-album mr-2 text-danger\"></i>New Leads Target</p>
                                                </div>
                                            </div>
                                            <div class=\"progress bg-gradient1 mb-3\" style=\"height:5px;\">
                                                <div class=\"progress-bar bg-gradient3\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <a class=\"btn btn-primary btn-sm btn-block text-white\">Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class=\"row\">
                                
                                <div class=\"col-xl-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"dropdown d-inline-block float-right\">
                                                <a class=\"nav-link dropdown-toggle arrow-none\" id=\"dLabel5\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                                    <i class=\"fas fa-ellipsis-v font-20 text-muted\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dLabel5\">
                                                    <a class=\"dropdown-item\" href=\"#\">New Messages</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Open Messages</a>
                                                </div>
                                            </div>
                                            <h5 class=\"header-title pb-3 mt-0\">New Clients</h5>
                                            <div class=\"table-responsive boxscroll\" style=\"overflow: hidden; outline: none;\">
                                                <table class=\"table mb-0\">                                                                
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"border-top-0\">
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-2.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Roy Saunders <span class=\"badge badge-soft-danger\">USA</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of facebook</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"border-top-0 text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>      
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-3.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Tiger Nixon <span class=\"badge badge-soft-info\">UK</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of WhatsApp</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td>  
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>      
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-4.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Ashton Cox <span class=\"badge badge-soft-pink\">USA</span></p>
                                                                        <span class=\"font-12 text-muted\">founder of Google</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>      
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-5.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Cedric Kelly <span class=\"badge badge-soft-purple\">Canada</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of Paypal</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td>  
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>  
                                                        <tr>
                                                            <td class=\"\">
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-2.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Garry Pearson <span class=\"badge badge-soft-info\">India</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of facebook</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr> 
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-4.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Ashton Cox <span class=\"badge badge-soft-pink\">Africa</span></p>
                                                                        <span class=\"font-12 text-muted\">founder of Google</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>               
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Roy Saunders <span class=\"badge badge-soft-success\">USA</span></p>
                                                                        <span class=\"font-12 text-muted\">Manager of Bank</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td>  
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr> 
                                                                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-4 col-lg-6\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <a href=\"#\" class=\"btn btn-outline-success float-right\">Withdraw Monthly</a>
                                            <h5 class=\"header-title mb-4 mt-0\">Monthly Revenue</h5>
                                            <h4 class=\"mb-4\">\$15,421.50</h4>
                                            <p class=\"font-14 text-muted mb-4\">
                                                <i class=\"mdi mdi-message-reply text-danger mr-2 font-18\"></i>
                                                \$ 1500 when an unknown printer took a galley.
                                            </p>                                        
                                            <canvas id=\"bar-data\" height=\"132\"></canvas> 
                                        </div>                         
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"d-sm-flex align-self-center\">
                                                    <img src=\"assets1/images/widgets/code.svg\" alt=\"\" class=\"\" height=\"100\">
                                                <div class=\"media-body ml-3\">
                                                    <h6>Code Confirmed</h6>
                                                    <p class=\"text-muted font-13 \">Contrary to popular belief, generators on  Lorem Ipsum is not simply random text.</p>
                                                    <a href=\"#\" class=\"btn btn-gradient-secondary\">Confirm</a>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-4  col-lg-6\">
                                    <div class=\"card timeline-card\">
                                        <div class=\"card-body p-0\">                               
                                            <div class=\"bg-gradient2 text-white text-center py-3 mb-4\">
                                                <p class=\"mb-0 font-18\"><i class=\"mdi mdi-clock-outline font-20\"></i> This Week's Activity</p>                                       
                                            </div>
                                        </div>
                                        <div class=\"card-body boxscroll\">
                                            <div class=\"timeline\">
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>10/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p>There are many variations of passages of  Lorem Ipsum available.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>9/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p>All the Lorem Ipsum generators on the  predefined chunks as necessary.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>8/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>7/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p class=\"pb-1\">Many desktop publishing packages and web page editors now.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div> 
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>6/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p class=\"pb-1 mb-0\">All the Lorem Ipsum generators on the  predefined chunks as necessary.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>                                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xl-12\">
                                    <div class=\"card\">                                
                                        <div class=\"card-body\">
                                            <h5 class=\"header-title pb-3 mt-0\">Payments</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover mb-0\">
                                                    <thead>
                                                        <tr class=\"align-self-center\">
                                                            <th>Project Name</th>
                                                            <th>Client Name</th>
                                                            <th>Payment Type</th>
                                                            <th>Paid Date</th>
                                                            <th>Amount</th>
                                                            <th>Transaction</th>                                                                                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Kevin Heal
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>5/8/2018</td>
                                                            <td>\$15,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-warning\">panding</span></td>                                                                        
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-2.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>15/7/2018</td> 
                                                            <td>\$35,000</td> 
                                                            <td><span class=\"badge badge-boxed  badge-soft-primary\">Success</span></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Market Research</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-3.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Angelo Butler
                                                            </td>
                                                            <td>Pioneer</td>
                                                            <td>30/9/2018</td>                                                                        
                                                            <td>\$45,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-warning\">Panding</span></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-4.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Phillip Morse
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>2/6/2018</td>
                                                            <td>\$70,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-warning\">Success</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-5.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Kevin Heal
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>5/8/2018</td>
                                                            <td>\$15,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-primary\">panding</span></td>                                                                        
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-6.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>15/7/2018</td> 
                                                            <td>\$35,000</td> 
                                                            <td><span class=\"badge badge-boxed  badge-soft-primary\">Success</span></td>
                                                        </tr>                                                                        
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
                    <p class=\"copyright-text\">Copyright @ 2023 Site developed by
\t\t\t\t\t\t<a href=\"http://www.sbc.tn\" target=\"_blank\">Smart Business Challenge</a>
\t\t\t     \t</p>              
\t\t\t    </footer>


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
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
\t\t\t\t\t\t\t\t    <li><a href=\"/projets\">Liste des services</li>                        
                                  \t<li><a href=\"/ajouterProjet/{id}\">Nouveau service</a></li>                        
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-blog\"></i><span> Gestion Projets </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t    <li><a href=\"/projets\">Liste de Pojets</a></li>                        
                                  \t<li><a href=\"/ajouterProjet/{id}\">Nouveau Projet</a></li>                        
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-graph-pie\"></i><span> Gestion Clients </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste de clients</a></li>     
\t\t\t\t\t\t\t\t  <li><a href=\"/ajouterClient\">Nouveau client</a></li>                                           
                                </ul>
                            </li>

\t\t\t\t\t\t\t<li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-graph-pie\"></i><span> Gestion des métiers </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste des métiers</a></li>     
\t\t\t\t\t\t\t\t  <li><a href=\"/ajouterClient\">Nouveau métier</a></li>                                           
                                   
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-trophy\"></i> <span> Gestion Carriére </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">        
\t\t\t\t\t\t\t\t    <li><a href=\"/clientsAdmin\">Liste des Carriéres</a></li>     
\t\t\t\t\t\t\t\t  <li><a href=\"/ajouterClient\">Nouveau Carriére</a></li>                                           
                                   
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
                                    <li><a href=\"tables-basic.html\">Acceuil</a></li>
                                    <li><a href=\"tables-datatable.html\">STRAM</a></li>                                  
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"dripicons-copy\"></i><span> Pages</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                             
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
                                                                <p class=\"mb-0 font-12 text-muted\">Active Tasks</p>   
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
                                                                <p class=\"mb-0 font-12 text-muted\">Project</p>
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
                                                                <p class=\"mb-0 font-12 text-muted\">Teams</p>    
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
                                                                <p class=\"mb-0 font-12 text-muted\">Budget</p>    
                                                            </div>
                                                        </div>                                                        
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>                                             
                                    </div> 
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"btn-group btn-group-toggle float-right\" data-toggle=\"buttons\">
                                                <label class=\"btn btn-primary btn-sm active\">
                                                    <input type=\"radio\" name=\"options\" id=\"option1\" checked=\"\"> This Week
                                                </label>
                                                <label class=\"btn btn-primary btn-sm\">
                                                    <input type=\"radio\" name=\"options\" id=\"option2\"> Last Month
                                                </label>                                                
                                            </div>
                                            <h5 class=\"header-title mb-4 mt-0\">Weekly Record</h5>
                                            <canvas id=\"lineChart\" height=\"82\"></canvas>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class=\"col-lg-3\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"dropdown d-inline-block float-right\">
                                                <a class=\"nav-link dropdown-toggle arrow-none\" id=\"dLabel4\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                                    <i class=\"fas fa-ellipsis-v font-20 text-muted\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dLabel4\">
                                                    <a class=\"dropdown-item\" href=\"#\">Create Project</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Open Project</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Tasks Details</a>
                                                </div>
                                            </div>
                                            <h5 class=\"header-title mb-4 mt-0\">Activity</h5>
                                            <div>
                                                <canvas id=\"dash-doughnut\" height=\"200\"></canvas>
                                            </div>
                                            <ul class=\"list-unstyled list-inline text-center mb-0 mt-3\">
                                                <li class=\"mb-2 list-inline-item text-muted font-13\"><i class=\"mdi mdi-label text-success mr-2\"></i>Active</li>
                                                <li class=\"mb-2 list-inline-item text-muted font-13\"><i class=\"mdi mdi-label text-danger mr-2\"></i>Complete</li>
                                                <li class=\"mb-2 list-inline-item text-muted font-13\"><i class=\"mdi mdi-label text-warning mr-2\"></i>Panding</li>
                                            </ul>
                                        </div>                               
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"row mb-3\">
                                                <div class=\"col-sm-6\">
                                                    <p class=\"mb-0 text-muted font-13\"><i class=\"mdi mdi-album mr-2 text-warning\"></i>New Leads</p>                            
                                                </div>
                                                <div class=\"col-sm-6\">
                                                    <p class=\"mb-0 text-muted font-13\"><i class=\"mdi mdi-album mr-2 text-danger\"></i>New Leads Target</p>
                                                </div>
                                            </div>
                                            <div class=\"progress bg-gradient1 mb-3\" style=\"height:5px;\">
                                                <div class=\"progress-bar bg-gradient3\" role=\"progressbar\" style=\"width: 65%\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                            </div>
                                            <a class=\"btn btn-primary btn-sm btn-block text-white\">Read More</a>
                                        </div>
                                        
                                    </div>
                                </div>                                
                            </div>
                            <div class=\"row\">
                                
                                <div class=\"col-xl-4\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"dropdown d-inline-block float-right\">
                                                <a class=\"nav-link dropdown-toggle arrow-none\" id=\"dLabel5\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"false\" aria-expanded=\"false\">
                                                    <i class=\"fas fa-ellipsis-v font-20 text-muted\"></i>
                                                </a>
                                                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dLabel5\">
                                                    <a class=\"dropdown-item\" href=\"#\">New Messages</a>
                                                    <a class=\"dropdown-item\" href=\"#\">Open Messages</a>
                                                </div>
                                            </div>
                                            <h5 class=\"header-title pb-3 mt-0\">New Clients</h5>
                                            <div class=\"table-responsive boxscroll\" style=\"overflow: hidden; outline: none;\">
                                                <table class=\"table mb-0\">                                                                
                                                    <tbody>
                                                        <tr>
                                                            <td class=\"border-top-0\">
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-2.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Roy Saunders <span class=\"badge badge-soft-danger\">USA</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of facebook</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"border-top-0 text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>      
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-3.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Tiger Nixon <span class=\"badge badge-soft-info\">UK</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of WhatsApp</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td>  
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>      
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-4.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Ashton Cox <span class=\"badge badge-soft-pink\">USA</span></p>
                                                                        <span class=\"font-12 text-muted\">founder of Google</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>      
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-5.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Cedric Kelly <span class=\"badge badge-soft-purple\">Canada</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of Paypal</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td>  
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>  
                                                        <tr>
                                                            <td class=\"\">
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-2.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Garry Pearson <span class=\"badge badge-soft-info\">India</span></p>
                                                                        <span class=\"font-12 text-muted\">CEO of facebook</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr> 
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-4.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Ashton Cox <span class=\"badge badge-soft-pink\">Africa</span></p>
                                                                        <span class=\"font-12 text-muted\">founder of Google</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td> 
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr>               
                                                        <tr>
                                                            <td>
                                                                <div class=\"media\">
                                                                    <img src=\"assets1/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-md rounded-circle\"> 
                                                                    <div class=\"media-body ml-2\">
                                                                        <p class=\"mb-0\">Roy Saunders <span class=\"badge badge-soft-success\">USA</span></p>
                                                                        <span class=\"font-12 text-muted\">Manager of Bank</span>
                                                                    </div>
                                                                </div>                                                                            
                                                            </td>  
                                                            <td class=\"text-right\">
                                                                <a href=\"#\" class=\"btn btn-light btn-sm\"><i class=\"far fa-comments mr-2 text-success\"></i>Chat</a>
                                                            </td>                                                                        
                                                        </tr> 
                                                                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-4 col-lg-6\">
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <a href=\"#\" class=\"btn btn-outline-success float-right\">Withdraw Monthly</a>
                                            <h5 class=\"header-title mb-4 mt-0\">Monthly Revenue</h5>
                                            <h4 class=\"mb-4\">\$15,421.50</h4>
                                            <p class=\"font-14 text-muted mb-4\">
                                                <i class=\"mdi mdi-message-reply text-danger mr-2 font-18\"></i>
                                                \$ 1500 when an unknown printer took a galley.
                                            </p>                                        
                                            <canvas id=\"bar-data\" height=\"132\"></canvas> 
                                        </div>                         
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-body\">
                                            <div class=\"d-sm-flex align-self-center\">
                                                    <img src=\"assets1/images/widgets/code.svg\" alt=\"\" class=\"\" height=\"100\">
                                                <div class=\"media-body ml-3\">
                                                    <h6>Code Confirmed</h6>
                                                    <p class=\"text-muted font-13 \">Contrary to popular belief, generators on  Lorem Ipsum is not simply random text.</p>
                                                    <a href=\"#\" class=\"btn btn-gradient-secondary\">Confirm</a>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-xl-4  col-lg-6\">
                                    <div class=\"card timeline-card\">
                                        <div class=\"card-body p-0\">                               
                                            <div class=\"bg-gradient2 text-white text-center py-3 mb-4\">
                                                <p class=\"mb-0 font-18\"><i class=\"mdi mdi-clock-outline font-20\"></i> This Week's Activity</p>                                       
                                            </div>
                                        </div>
                                        <div class=\"card-body boxscroll\">
                                            <div class=\"timeline\">
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>10/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p>There are many variations of passages of  Lorem Ipsum available.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>9/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p>All the Lorem Ipsum generators on the  predefined chunks as necessary.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>8/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>7/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p class=\"pb-1\">Many desktop publishing packages and web page editors now.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div> 
                                                <div class=\"entry\">
                                                    <div class=\"title\">
                                                        <h6>6/ Oct</h6>
                                                    </div>
                                                    <div class=\"body\">
                                                        <p class=\"pb-1 mb-0\">All the Lorem Ipsum generators on the  predefined chunks as necessary.....<a href=\"#\" class=\"text-primary\"> Read More</a></p>                                                                
                                                    </div>
                                                </div>                                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xl-12\">
                                    <div class=\"card\">                                
                                        <div class=\"card-body\">
                                            <h5 class=\"header-title pb-3 mt-0\">Payments</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover mb-0\">
                                                    <thead>
                                                        <tr class=\"align-self-center\">
                                                            <th>Project Name</th>
                                                            <th>Client Name</th>
                                                            <th>Payment Type</th>
                                                            <th>Paid Date</th>
                                                            <th>Amount</th>
                                                            <th>Transaction</th>                                                                                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-1.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Kevin Heal
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>5/8/2018</td>
                                                            <td>\$15,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-warning\">panding</span></td>                                                                        
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-2.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>15/7/2018</td> 
                                                            <td>\$35,000</td> 
                                                            <td><span class=\"badge badge-boxed  badge-soft-primary\">Success</span></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Market Research</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-3.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Angelo Butler
                                                            </td>
                                                            <td>Pioneer</td>
                                                            <td>30/9/2018</td>                                                                        
                                                            <td>\$45,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-warning\">Panding</span></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Website &amp; Blog</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-4.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Phillip Morse
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>2/6/2018</td>
                                                            <td>\$70,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-warning\">Success</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Product Devlopment</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-5.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Kevin Heal
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>5/8/2018</td>
                                                            <td>\$15,000</td>
                                                            <td><span class=\"badge badge-boxed  badge-soft-primary\">panding</span></td>                                                                        
                                                        </tr>
                                                        <tr>
                                                            <td>New Office Building</td>
                                                            <td>
                                                                <img src=\"assets1/images/users/avatar-6.jpg\" alt=\"\" class=\"thumb-sm rounded-circle mr-2\">
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>15/7/2018</td> 
                                                            <td>\$35,000</td> 
                                                            <td><span class=\"badge badge-boxed  badge-soft-primary\">Success</span></td>
                                                        </tr>                                                                        
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
                    <p class=\"copyright-text\">Copyright @ 2023 Site developed by
\t\t\t\t\t\t<a href=\"http://www.sbc.tn\" target=\"_blank\">Smart Business Challenge</a>
\t\t\t     \t</p>              
\t\t\t    </footer>


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
</html>", "base.html.twig", "C:\\Users\\oumei\\OneDrive\\Bureau\\Stram_WebSite\\templates\\base.html.twig");
    }
}
