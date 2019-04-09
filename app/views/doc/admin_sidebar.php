<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <div id="profilna-sidebar-div"></div>
      </div>
      <div class="pull-left info">
        <p><?php echo $data['ime_korisnika']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Navigacija</li>
      <li class=""> <!-- active treeview menu-open -->
        <a href="<?php echo URLROOT; ?>/admin">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      
      <li class=""> <!-- active treeview menu-open -->
        <a href="<?php echo URLROOT; ?>/proizvodi">
          <i class="fa fa-cubes"></i> <span>Proizvodi</span>
        </a>
      </li>

      <li class=""> <!-- active treeview menu-open -->
        <a href="<?php echo URLROOT; ?>/blog">
          <i class="fa fa-tasks"></i> <span>Blog</span>
        </a>
      </li>

      <li class=""> <!-- active treeview menu-open -->
        <a href="<?php echo URLROOT; ?>/karijera">
          <i class="fa fa-suitcase"></i> <span>Karijera</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>