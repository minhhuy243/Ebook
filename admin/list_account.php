<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ebook - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/ebook-logo.ico">

        <!-- plugin css -->
        <link href="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets\css\app.min.css" rel="stylesheet" type="text/css">
        

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="d-none d-sm-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
        
                    
                    <!-- setting user -->
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="assets\images\users\user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Marcia J. <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0 text-white">
                                    Welcome !
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>



                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.php" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets\images\ebook.png" alt="" height="24">
                            <!-- <span class="logo-lg-text-light">Upvex</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets\images\ebook-logo.ico" alt="" height="28">
                        </span>
                    </a>
                </div>

                
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Dashboards</li>

                            <!-- Quản lý tài khoản -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-user"></i>
                                    <span> Account </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="./list_account.php">Show All</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Account</a>
                                    </li>

                                </ul>
                            </li>


                            <!-- Quản lý NXB -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-university"></i>
                                    <span> Publishing CO</span>
                                    <span class="menu-arrow"></span>
                                    
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">All Publishing</a>
                                    </li>   
                                    <li>
                                        <a href="#">Add Publishing</a>
                                    </li>

                                </ul>
                                
                            </li>

                            <!-- Quản Lý Loại sản phẩm -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" la la-th-large"></i>
                                    <span> Category </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">All Category</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Category</a>
                                    </li>

                                </ul>
                            </li>
                

                            <!-- Quản lý sản phẩm -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-book"></i>
                                    <span> Product </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="#">All Product</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Product</a>
                                    </li>

                                </ul>
                            </li>


                            <!-- Quản lý đơn hàng -->
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" la la-money"></i>
                                    <span> Purchase </span>
                                    <span class="menu-arrow"></span>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ebook</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                            <li class="breadcrumb-item active">Account</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Account</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        
                        <table>
                            <tr style="text-align: center">
                                <th width="70">User Id</th>
                                <th width="100">User role</th>
                                <th width="200">Email</th>
                                <th width="150">Password</th>
                                <th width="200"> Display name</th>
                                <th width="150">Phone number</th>
                                <th width="100">Thao tác</th>
                            </tr>
                            <?php
                                include('../DBConnect.php');
                                $sql = "SELECT u.*, r.role_name FROM user u, user_role r WHERE u.User_Role = r.Role_Id";
                                $bang = DataProvider::ExecuteQuery($sql);
                                while($row = mysqli_fetch_array($bang))
                                {
                                    ?>
                                        <tr style="text-align: center;"> 
                                            <td><?php echo $row["User_Id"]; ?></td>
                                            <td><?php echo $row["role_name"]; ?></td>
                                            <td><?php echo $row["Email"]; ?></td>
                                            <td><?php echo md5($row["Password"]); ?></td>
                                            <td><?php echo $row["Display_Name"]; ?></td>
                                            <td><?php echo $row["Phonenumber"]; ?></td>
                                            <td>
                                                <a href="#">
                                                    <i class="far fa-edit"></i>
                                                    <span>Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            ?>	
                        </table>

                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <!-- Vendor js -->
        <script src="assets\js\vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="assets\libs\peity\jquery.peity.min.js"></script>
        <script src="assets\libs\apexcharts\apexcharts.min.js"></script>
        <script src="assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets\libs\jquery-vectormap\jquery-jvectormap-us-merc-en.js"></script>

        <!-- Dashboard init -->
        <script src="assets\js\pages\dashboard-1.init.js"></script>

        <!-- App js -->
        <script src="assets\js\app.min.js"></script>
        
    </body>
</html>