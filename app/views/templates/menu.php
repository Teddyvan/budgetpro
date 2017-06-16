
<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=SERVER?>/dist/img/ivan.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Ivan Bessin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
        </div>
      </div>


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Administration</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">7</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=SERVERS?>Utilisateur/index" title="Ajouter/modifier des utilisateurs"><i class="fa fa-users"></i>Profil utilisateur</a></li>
            <li><a href="<?=SERVERS?>Sauvegarde/index"><i class="fa fa-circle-o"></i> Sauvegarde et restauration</a></li>
            <li><a href="<?=SERVERS?>mail/index"><i class="fa fa-circle-o"></i>Mailing</a></li>
            <li><a href="<?=SERVERS?>ged/index"><i class="fa fa-circle-o"></i>GED</a></li>
            <li><a href="<?=SERVERS?>fichier/index"><i class="fa fa-circle-o"></i>Import et export de fichier</a></li>
            <li><a href="<?=SERVERS?>compte/index"><i class="fa fa-circle-o"></i> Creation compte ministere</a></li>
            <li><a href="<?=SERVERS?>annee/index"><i class="fa fa-circle-o"></i> Ouverture et cloture d'année</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Reporting</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">5</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=SERVERS?>rplanification/index" title=""><i class="fa fa-circle-o"></i>Planification</a></li>
            <li><a href="<?=SERVERS?>rpip/index" title=""><i class="fa fa-circle-o"></i>PIP</a></li>
            <li><a href="<?=SERVERS?>rcdmt/index" title=""><i class="fa fa-circle-o"></i>CDMT</a></li>
            <li><a href="<?=SERVERS?>rbudget/index" title=""><i class="fa fa-circle-o"></i>Budgetisation</a></li>
            <li><a href="<?=SERVERS?>rsuivi/index" title=""><i class="fa fa-circle-o"></i>Suivi</a></li>
           </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Gestion</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=SERVERS?>gplanification/index" title=""><i class="fa fa-circle-o"></i>Planification</a></li>
            <li><a href="<?=SERVERS?>gpip/index" title=""><i class="fa fa-circle-o"></i>PIP</a></li>
            <li><a href="<?=SERVERS?>gcdmt/index" title=""><i class="fa fa-circle-o"></i>CDMT</a></li>
            <li><a href="<?=SERVERS?>gbudget/index" title=""><i class="fa fa-circle-o"></i>Budgetisation</a></li>
            <li><a href="<?=SERVERS?>gsuivi/index" title=""><i class="fa fa-circle-o"></i>Suivi</a></li>
          </ul>
        </li>
        <li class="header">REFERENTIEL</li>
         <li  class="treeview">
        <a href="#" >
            <i class="fa fa-th"></i>
            <span>nomenclature</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul  class="treeview-menu ">
            <li><a href="<?=SERVERS?>nomenclature/strategique"><i class="fa fa-circle-o"></i>Classification Stratégique PNDS</a></li>
            <li><a href="<?=SERVERS?>nomenclature/economique"><i class="fa fa-circle-o"></i>Classification Economique</a></li>
            <li><a href="<?=SERVERS?>nomenclature/fonctionnelle"><i class="fa fa-circle-o"></i>Classification Fonctionnelle</a></li>
            <li><a href="<?=SERVERS?>nomenclature/NUASR" title="nomenclature UNIFIE ET HARMONISE DES ACTIVITE DU SECTEUR RURAL"><i class="fa fa-circle-o"></i>Classification NUASR</a></li>
            <li><a href="<?=SERVERS?>nomenclature/geographique"><i class="fa fa-circle-o"></i>Classification Géographique</a></li>
            <li><a href="<?=SERVERS?>nomenclature/administrative"><i class="fa fa-circle-o"></i>Classification Administrative</a></li>
          </ul>
        </li>
        <li  class="treeview">
       <a href="#" >
           <i class="fa fa-th"></i>
           <span>Repertoire</span>
           <span class="pull-right-container">
             <span class="label label-primary pull-right">4</span>
           </span>
         </a>
         <ul  class="treeview-menu ">
           <li><a href="<?=SERVERS?>nomenclature/bailleurs"><i class="fa fa-circle-o"></i>Repertoire des bailleurs</a></li>
           <li><a href="<?=SERVERS?>nomenclature/radministration"><i class="fa fa-circle-o"></i>Répertoire administrations</a></li>
           <li><a href="<?=SERVERS?>nomenclature/section"><i class="fa fa-circle-o"></i>Répertoire section et chapitre</a></li>
           <li><a href="<?=SERVERS?>nomenclature/personnel" title="Profile & Personnel par administrations"><i class="fa fa-circle-o"></i>Repertoire fonction et personnel </a></li>
         </ul>
       </li>

       <li  class="treeview">
      <a href="#" >
          <i class="fa fa-th"></i>
          <span>Autre codification</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">11</span>
          </span>
        </a>
        <ul  class="treeview-menu ">
          <li><a href="<?=SERVERS?>nomenclature/variable"><i class="fa fa-circle-o"></i>Dictionnaire de variable</a></li>
          <li><a href="<?=SERVERS?>nomenclature/partenaire"><i class="fa fa-circle-o"></i>Partenaires et agence</a></li>
          <li><a href="<?=SERVERS?>nomenclature/devise"><i class="fa fa-circle-o"></i>Devises</a></li>
        </ul>
      </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
