<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skilex-Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/icheck/skins/all.css"> -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.png" />
  <script   src="<?php echo base_url(); ?>assets/admin/js/jquery.js"></script>
  <script src="<?php echo base_url();  ?>assets/admin/js/main.js" ></script>
  <!-- <script src="<?php echo base_url();  ?>assets/admin/js/data-table.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/admin/js/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/additional-methods.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/swal.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/datatable.css"/>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/datatable.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/tether.js"></script>


  <!-- <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
      <div class="container d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top">
          <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url(); ?>assets/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo base_url(); ?>dashboard"><img src="<?php echo base_url(); ?>assets/logo.png" alt="logo"/></a>
        </div>

      </div>
      <div class="nav-bottom">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>dashboard" class="nav-link"><i class="link-icon mdi mdi-television"></i><span class="menu-title">DASHBOARD</span></a>
            </li>

            <li class="nav-item mega-menu">
              <a href="#" class="nav-link"><i class="link-icon mdi mdi-android-studio"></i><span class="menu-title">Main Menu</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                   <div class="col-group col-md-2 col-md-offset-1">
                     <p class="category-heading">Master Creation</p>
                     <ul class="submenu-item">
                       <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>masters/create_city">City </a></li> -->
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>masters/create_category">Category </a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>masters/banner_list">Banners </a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url();  ?>offers">Offers </a></li>

                     </ul>
                   </div>
                  <div class="col-group col-md-2">
                    <p class="category-heading">Staff</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>home/create_staff">Create staff</a></li>
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>home/get_all_staff">Staff list</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-2">
                    <p class="category-heading">Verify Providers</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>verifyprocess/get_vendor_verify_list">Provider list </a></li>


                    </ul>
                  </div>
                  <div class="col-group col-md-2">
                    <p class="category-heading">Service Provider</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>home/get_all_provider_list">List of Provider </a></li>


                    </ul>
                  </div>
                  <div class="col-group col-md-2">
                    <p class="category-heading">Service Person</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>home/get_all_person_list">List of Service person </a></li>

                    </ul>
                  </div>
                  <div class="col-group col-md-2">
                    <p class="category-heading">Customers</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>home/get_all_customer_details">List of Customers </a></li>

                    </ul>
                  </div>
                </div>
              </div>
            </li>



            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon mdi mdi-asterisk"></i><span class="menu-title">Service Orders</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>service_orders/pending_orders">Pending Orders</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>service_orders/ongoing_orders">OnGoing Orders</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>service_orders/completed_orders">Completed Orders</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>service_orders/cancelled_orders">Rejected  Orders</a></li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon mdi mdi-asterisk"></i><span class="menu-title">Transaction</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>transaction/daily_transaction">Daily transaction</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>transaction/from_date_and_to_date_transactions">From & To date </a></li> -->
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>transaction/provider_based_transaction">Provider transactions</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>transaction/online_payment_history">Online Payment History</a></li>

                </li>

                </ul>
              </div>



            <li class="nav-item">
              <a href="#" class="nav-link"><i class="link-icon mdi mdi-asterisk"></i><span class="menu-title">Setting</span><i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">

                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>profile">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>change_password">Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>logout">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
