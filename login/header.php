<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen toko | home Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <style>
    /* Custom Header Styles */
    .custom-header {
      background-color: #3498db;
      color: #fff;
      padding: 15px;
      text-align: center;
    }

    /* Breadcrumb Styles */
    .breadcrumb {
      background-color: #ecf0f5;
      padding: 10px;
      border-radius: 5px;
    }

    /* Navbar Styles */
    .navbar {
      background-color: #3498db;
    }

    .navbar-light .navbar-nav .nav-link {
      color: #fff;
    }

    /* Sidebar Styles */
    .main-sidebar {
      background-color: #2c3e50;
      color: #ecf0f5;
    }

    .main-sidebar .brand-link {
      border-bottom: 1px solid #ecf0f5;
    }

    .main-sidebar .brand-link:hover {
      background-color: #23344d;
    }

    .main-sidebar .nav-sidebar .nav-item a {
      color: #ecf0f5;
    }

    .main-sidebar .nav-sidebar .nav-item a:hover {
      background-color: #23344d;
    }

    /* Content Wrapper Styles */
    .content-wrapper {
      background-color: #ecf0f5;
      padding: 15px;
      border-radius: 5px;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="../assets/AdminLTE-3.2.0/index3.html" class="nav-link">Home</a>
      </li>-->  
      <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="../login/login.php" class="nav-link">contact</a>
      </li>-->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="nav-link">login</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="?page=home" class="brand-link">
      <img src="../assets/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UNDANGAN BUKBER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../WOW.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">TAMU</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-table"></i>
              <p>
                data master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="nav-link">
                  <i class="far fa-star nav-icon"></i>
                  <p>nyari apalu?</p>
                </a>
              </li>
              <!--<li class="nav-item">
                <a href="?page=prodi" class="nav-link">
                  <i class="far fa-star nav-icon"></i>
                  <p>prodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=laboratorium" class="nav-link">
                  <i class="far fa-star nav-icon"></i>
                  <p>laboratoirum</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?page=laboratorium" class="nav-link">
                  <i class="far fa-star nav-icon"></i>
                  <p>mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>-->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UNDANGAN BUKBER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
