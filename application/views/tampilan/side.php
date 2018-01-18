<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>template/dist/img/aki-kun.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>RaidShadowFox</p>
          <a href="#"><i class="fa fa-circle text-success"></i> AFK</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Controller</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('index.php/firstcontroller') ?>"><i class="fa fa-circle-o"></i>First Controller</a></li>
            <li><a href="<?php echo base_url('index.php/secondcontroller') ?>"><i class="fa fa-circle-o"></i>Second Controller</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>