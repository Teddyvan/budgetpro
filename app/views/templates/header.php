<header class="main-header">

    <!-- Logo -->
    <a href="<?=SERVER?>/index.php?p=utilisateur/index" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Bugt</b>Prog</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Budget Programme</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="<?=SERVERS?>Mail/index" >
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=SERVER?>/dist/img/ivan.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Ivan Bessin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=SERVER?>/dist/img/ivan.jpg" class="img-circle" alt="User Image">

                <p>
                  Ivan Bessin - Web Developer
                  <small>Depuis since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                        <a href="<?=SERVERS?>Utilisateur/profil" class="btn btn-default btn-flat">Mon profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=SERVERS?>Utilisateur/login" class="btn btn-default btn-flat">Deconnexion</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>

    </nav>
  </header>
