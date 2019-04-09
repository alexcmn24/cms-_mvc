<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo URLROOT; ?>/admin" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>CMS</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>CMS Projekat</b></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="">
          <a href="<?php echo URLROOT; ?>">
            <span class="hidden-xs">Home</span>
          </a>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a id="profilna-navbar-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><?php echo $data['ime_korisnika']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <div id="profilna-i-link-navbar">
                
              </div>
              <p>
                <a class="ime-link" href="<?php echo URLROOT; ?>/profil">
                  <?php echo $data['ime_korisnika']; ?>
                </a>
                <small>Member since <?php echo $data['datum_registracije']; ?></small>
              </p>
            </li>
            <!-- Menu Footer -->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo URLROOT; ?>/profil" class="btn btn-default btn-flat">Profil</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo URLROOT ?>/users/logout" class="btn btn-default btn-flat">Logout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->