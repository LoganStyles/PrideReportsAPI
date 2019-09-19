
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/circular-std-style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/libs-style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/fontawesome-all.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/flag-icon.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/datepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/inputmask.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/form_styles.css" rel="stylesheet" type="text/css" />

        <style>
        .requiredfield:after {
            content: " *";
            font-weight: bold;
            color: red;
        }

        table.clientList {
            table-layout: fixed;
            width: 100%;
        }

            table.clientList td {
                width: 25%;
            }

        table.cardView {
            table-layout: fixed;
            width: 50%;
            background-color: white;
        }

        table .blue_background {
            background-color: blue;
            font-size: 1.5em;
            font-weight: 800;
            text-align: center;
        }

        table .blue_background_footer {
            background-color: blue;
            font-size: 1em;
            color: white;
            font-weight: 600;
            text-align: center;
        }

        table.card_head td {
            width: 50%;
        }

        table td.card_detail {
            font-weight: 600;
        }
    </style>
        </head>
    <!-- END HEAD -->

    <body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="">Pride - Reports</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                    <input class="form-control" type="text" placeholder="Search..">
                                </div>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            
                                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                        <div class="nav-user-info">
                                            <h5 class="mb-0 text-white nav-user-name"> </h5>
                                            <span class="status"></span><span class="ml-2">Available</span>
                                        </div>
                                        
                                        <a class="dropdown-item" href="javascript:document.getElementById('logoutForm').submit()"><i class="fas fa-power-off mr-2"></i>Logout</a>

                                        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                            <a class="dropdown-item" href=""><i class="fas fa-power-off mr-2"></i>Logout</a>
                                    </div>
                           
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">Menu</li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-home"></i>Hotel <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a href="<?php echo base_url() . 'arrival'; ?>" class = "nav-link">Arrivals</a></li>
                                        <li class="nav-item"><a href="<?php echo base_url() . 'departure'; ?>" class = "nav-link">Departures</a></li>
                                        <li class="nav-item"><a href="<?php echo base_url() . 'stayingGuests'; ?>" class = "nav-link">Staying Guests</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-book"></i>POS</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a href="#" class = "nav-link">MMP01</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->