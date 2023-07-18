<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.min.css'); ?>" />
    <link href="<?php echo base_url('assets/css/bootstrap.css" rel="stylesheet'); ?>" />
    <link href="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.css" rel="stylesheet'); ?>" />
    <link href="<?php echo base_url('assets/css/style.css" rel="stylesheet'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<header class="app-header">
  <div>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
      <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
        <li>
          <?php if ($this->session->userdata('id')) : ?>
          <p><strong><?php echo $this->session->userdata('prenom') . ' ' . $this->session->userdata('nom'); ?> , <?php echo $this->session->userdata('type_utilisateur'); ?> </strong>
          <img src="<?php echo base_url('assets/images/profile/user-1.jpg'); ?>" alt="" width="35" height="35" class="rounded-circle"> 
          </p>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </nav>
  </div>
          
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
<aside class="left-sidebar">
<div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="<?php echo base_url('assets/images/logos/dark-logo.svg" width="180" alt="" '); ?>/>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
<div class="card">
        <div class="card-body">
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo base_url('home/index'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                </span>
                <span class="hide-menu">HOME</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo base_url('users/index'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Employées</span>
              </a>
            </li>
            <?php if ($this->session->userdata('type_utilisateur') == 'administrateur'): ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo base_url('users/inactive_users'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Employées inactifs</span>
              </a>
            </li>
            <?php endif; ?>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo base_url('users/profil'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Mon profil</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?php echo base_url('register/logout'); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Deconnexion</span>
              </a>
              </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
</aside>
</div>
</header>  

  <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/dataTables/dataTables.bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js"></script'); ?>"></script>

</body>
</html>
