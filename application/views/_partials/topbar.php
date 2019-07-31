<header class="main-header">
  <a href="<?php echo site_url('landingpage'); ?>" class="logo">
    <span class="logo-mini"><b>My</b></span>
    <span class="logo-lg"><b>My</b>Panel</span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../gambar/logo.png" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $this->session->userdata("username"); ?></span>
            <span class="hidden-xs"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="../gambar/logo.png" class="img-circle" alt="User Image">
              <p>
                <?php echo $this->session->userdata("nama"); ?>
                <span class="hidden-xs"> </span>
                <?php
                $nama_user = $this->session->userdata("nama");
                ?>
                
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url('admin/user'); ?>" class="btn btn-success btn-flat"><i class="fa fa-user" aria-hidden="true"></i> User</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo site_url('admin/auth/logout'); ?>" class="btn btn-warning btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>