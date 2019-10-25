<?php require "_wampindexer/src/app.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wamp | localhost</title>
    <!-- Vendor CSS -->
    <link href="_wampindexer/web/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="_wampindexer/web/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="_wampindexer/web/css/style.css" rel="stylesheet">
    <!-- FAVICON -->
    <link href="_wampindexer/web/img/favicon.ico" rel="icon"/>
</head>
    <body data-ma-header="teal">

        <!-- [START] PAGE LOADER -->
        <div class="page-loader bg">
            <div class="preloader pl-xl pls-white">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20"/>
                </svg>
            </div>
        </div>
        <!-- [END] PAGE LOADER -->

        <!-- [START] HEADER -->
        <header id="header" class="media">

            <!-- [START] LOGO | TITLE -->
            <div class="pull-left h-logo">
                <a href="/">
                    Localhost
                    <small><span class="nbProjet"></span> Repositories</small>
                </a>
            </div>
            <!-- [END] LOGO | TITLE -->

            <!-- [START] MENU -->
            <ul class="pull-right h-menu">

                <!-- [START] SEARCHBAR FOR MOBILE -->
                <li class="hm-search-trigger">
                    <a href="" data-ma-action="search-open">
                        <i class="hm-icon zmdi zmdi-search"></i>
                    </a>
                </li>
                <!-- [END] SEARCHBAR FOR MOBILE -->

                <!-- [START] SHIT U NEED -->
                <li class="dropdown h-apps">
                    <a data-toggle="dropdown" href="">
                        <i class="hm-icon zmdi zmdi-apps"></i>
                    </a>

                    <ul class="dropdown-menu wampindexMenu pull-right">
                      <div class="gb_wb"></div>
                      <div class="gb_vb"></div>
                        <li>
                            <a href="#" class="filter-sites">
                                <i class="bg zmdi zmdi-email zmdi-hc-fw"></i>
                                <small>Sites</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://calendar.google.com/" target="_blank">
                                <i class="bg zmdi zmdi-calendar zmdi-hc-fw"></i>
                                <small>Agenda</small>
                            </a>
                        </li> 
                        <li>
                            <a href="https://drive.google.com/" target="_blank">
                                <i class="bg zmdi zmdi-google-drive zmdi-hc-fw"></i>
                                <small>Drive</small>
                            </a>
                        </li> 
                        <li>
                            <a href="https://github.com/" target="_blank">
                                <i class="bg zmdi zmdi-github zmdi-hc-fw"></i>
                                <small>Github</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://gitlab.com/" target="_blank">
                                <i class="bg zmdi zmdi-share zmdi-hc-fw"></i>
                                <small>Gitlab</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/" target="_blank">
                                <i class="bg zmdi zmdi-stack-overflow zmdi-hc-fw"></i>
                                <small>Stack</small>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://www.ovh.com/auth/" target="_blank">
                                <i class="bg zmdi zmdi-cloud-outline-alt zmdi-hc-fw"></i>
                                <small>OVH</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.messenger.com" target="_blank">
                                <i class="bg zmdi zmdi-comments zmdi-hc-fw"></i>
                                <small>Messenger</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="bg zmdi zmdi-facebook zmdi-hc-fw"></i>
                                <small>Facebook</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="bg zmdi zmdi-instagram zmdi-hc-fw"></i>
                                <small>Instagram</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="bg zmdi zmdi-tv-play zmdi-hc-fw"></i>
                                <small>Youtube</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.fr/" target="_blank">
                                <i class="bg zmdi zmdi-pinterest-box zmdi-hc-fw"></i>
                                <small>Pinterest</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/" target="_blank">
                                <i class="bg zmdi zmdi-linkedin-box zmdi-hc-fw"></i>
                                <small>Linkedin</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="bg zmdi zmdi-twitter zmdi-hc-fw"></i>
                                <small>Twitter</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- [END] SHIT U NEED -->

                <!-- [START] SUBMENU TOOLS & PROFIL IMG -->
                <li class="dropdown hm-profile">
                    
                    <!-- [START] PROFIL IMG -->
                    <a data-toggle="dropdown" href=""><img src="_wampindexer/web/img/profile.png" alt=""></a>
                    <!-- [END] PROFIL IMG -->

                    <!-- [START] SUBMENU TOOLS -->
                    <ul class="dropdown-menu wampindexTools dm-icon pull-right">
                        <div class="gb_wb"></div>
                        <div class="gb_vb"></div>
                        <li>
                            <a href="http://devdocs.io/" target="_blank"><i class="zmdi zmdi-plaster"></i> Devdocs</a>
                        </li>
                        <li>
                            <a href="phpmyadmin/" target="_blank"><i class="zmdi zmdi-dns"></i> phpMyAdmin</a>
                        </li>
                        <li>
                            <a href="phpsysinfo/index.php?disp=dynamic" target="_blank"><i class="zmdi zmdi-comment-list"></i> phpsysinfo</a>
                        </li>
                    </ul>
                    <!-- [END] SUBMENU TOOLS -->

                </li>
                <!-- [END] SUBMENU TOOLS & PROFIL IMG -->

            </ul>
            <!-- [END] MENU -->

            <!-- [START] SEARCHBAR -->
            <div class="media-body h-search">
                <form class="p-relative">
                    <input type="text" class="hs-input" id="myInput" placeholder="Find some gucci ...">
                    <i class="zmdi zmdi-search hs-reset" data-ma-action="search-clear"></i>
                </form>
            </div>
            <!-- [END] SEARCHBAR -->

        </header>
        <!-- [END] HEADER -->

        <!-- [START] REPOSITORIES SECTION -->
        <section id="main">
            <section id="content">
                <div class="container">
                    <div class="c-header">
                        <h2><?php echo $wampConfig; ?></h2>
                    </div>
                    <div class="row myGrid">
                      <?php echo $repositories; ?>
                    </div>
                </div>
            </section>
        </section>
        <!-- [END] REPOSITORIES SECTION -->

        <!-- Vendors JS -->
        <script src="_wampindexer/web/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="_wampindexer/web/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="_wampindexer/web/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="_wampindexer/web/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <!-- Custom JS -->
        <script src="_wampindexer/web/js/app.js"></script>
    </body>
  </html>
