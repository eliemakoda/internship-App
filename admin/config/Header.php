<?php
if (!isset($_SESSION['IdAdmin'])) {
  header("./index.php");
}
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote-cakephp/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 13:07:23 GMT -->

<head>

  <meta charset="utf-8" />
  <title>ENEO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="../images/eneo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="../images/eneo.png">

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="../images/eneo.png">

  <!-- select2 css -->
  <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

  <!-- dropzone css -->
  <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <style>
    .icon {
      display: inline-block;
      width: 30px;
      height: 30px;
      line-height: 30px;
      /* Center the icon vertically */
      border-radius: 50%;
      /* Make the icon circular */
      text-align: center;
      color: white;
    }

    .icon.fa-check {
      background-color: green;
    }

    .icon.fa-ban {
      background-color: red;
    }
  </style>
</head>

<body data-sidebar="dark">

  <!-- <body data-layout="horizontal" data-topbar="dark"> -->

  <!-- Begin page -->
  <div id="layout-wrapper">


    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="Accueil.php" class="logo logo-dark">
              <span class="logo-sm">
                <img src="../images/eneo.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="../images/eneo.png" alt="" height="17">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="../images/eneo.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="../images/eneo.png" alt="" height="19"> <!--logo de l'ese-->
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
          </button>

          <!-- App Search-->
          <form class="app-search d-none d-lg-block">
            <div class="position-relative">
              <!-- <input type="text" class="form-control" placeholder="Search..."> -->
              <!-- <span class="bx bx-search-alt"></span> -->
            </div>
          </form>


        </div>

        <div class="d-flex">

          <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

              <form class="p-3">
                <div class="form-group m-0">
                  <div class="input-group">
                    <!-- <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username"> -->
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>


        </div>





        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar"> -->
            <!-- <span class="d-none d-xl-inline-block ms-1" key="t-henry">< echo $_SESSION['nomAdmin'] ?></span> -->
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end">

            <div class="dropdown-divider">...</div>
            <a class="dropdown-item text-danger" href="./logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Se deconnecter</span></a>
          </div>
        </div>


      </div>
  </div>
  </header>

  <div class="vertical-menu">

    <div data-simplebar class="h-100">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
          <li class="menu-title" key="t-menu">Menu</li>

          <li>
            <a href="./ListeDemande.php" class="waves-effect">
              <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
              <span key="t-dashboards">Accueil</span>
            </a>

          </li>


          <li class="menu-title" key="t-apps">Mes Menus</li>

          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
              <i class="fa fa-users"></i>
              <span key="t-crypto">Administrateurs </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
              <li><a href="./addAdmin.php" key="t-wallet">AJouter un Admin </a></li>
              <li><a href="./accueil.php" key="t-buy">Liste Admin </a></li>
            </ul>
          </li>
          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
              <i class="fa fa-podcast"></i>
              <span key="t-crypto">Blog </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
              <li><a href="./blog.php" key="t-wallet">ListBlog </a></li>
              <li><a href="./Addpub.php" key="t-buy">Ajouter  </a></li>
            </ul>
          </li>

          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
              <i class="fa fa-users"></i>
              <span key="t-crypto">utilisateurs </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
              <li><a href="./listeUtilisateur.php" key="t-buy">Liste Utilisateur </a></li>
            </ul>
          </li>

          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
              <i class="fa fa-tasks"></i>
              <span key="t-crypto">Stage </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
              <li><a href="./listeStage.php" key="t-buy">Liste Stage </a></li>
              <li><a href="./ADDStage.php" key="t-buy">Ajouter Stage </a></li>

            </ul>
          </li>
        </ul>
        </li>


</li>
        </ul>
      </div>
      <!-- Sidebar -->
    </div>
  </div>
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">