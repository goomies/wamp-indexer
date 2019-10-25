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
                            <a href="#" class="filter all">
                                <i class="bg zmdi zmdi-view-list-alt zmdi-hc-fw"></i>
                                <small>All</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="filter folders">
                                <i class="bg zmdi zmdi-folder-outline zmdi-hc-fw"></i>
                                <small>Folders</small>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="filter files">
                                <i class="bg zmdi zmdi-file zmdi-hc-fw"></i>
                                <small>Files</small>
                            </a>
                        </li> 
                        <li>
                            <a href="#" class="filter sites">
                                <i class="bg zmdi zmdi-desktop-windows zmdi-hc-fw"></i>
                                <small>Sites</small>
                            </a>
                        </li> 
                        <li>
                            <a href="#" class="filter emails">
                                <i class="bg zmdi zmdi-email zmdi-hc-fw"></i>
                                <small>Emails</small>
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
