
   <div class="row">
     <div class="col-md-3">

       <!-- Profile Image -->
       <div class="box box-primary">
         <div class="box-body box-profile">
           <img class="profile-user-img img-responsive img-circle" src="<?=SERVER?>/dist/img/ivan.jpg" alt="photo de profile">
           <h3 class="profile-username text-center"> <?=$UserInfo['username']?> </h3>
           <p class="text-muted text-center"> <?=$UserInfo['fonction']?> </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">Modifier son profile</button>
         </div>
       </div>
       <!-- /.box -->
     </div>
     <!-- /.col -->
     <div class="col-md-9">
       <div class="nav-tabs-custom">
         <ul class="nav nav-tabs">
           <li class="active"><a href="#activity" data-toggle="tab"> <i class="fa fa-users"></i> Mes utilisateurs</a></li>
           <li><a href="#settings" data-toggle="tab"><i class="fa fa-user-plus"></i> Ajouter utilisateur</a></li>
         </ul>
         <div class="tab-content">
           <div class="active tab-pane" id="activity">
            <div class="box">
         <div class="box-header">
           <h3 class="box-title">Liste des utilisateurs</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
           <table id="users" class="table table-hover table-bordered table-striped">
             <thead>
             <tr>
               <th>Nom</th>
               <th>Prénom(s)</th>
               <th>Télephone</th>
               <th>Mail</th>
               <th>Actions</th>
             </tr>
             </thead>
             <tbody>
                     <?php for($i = 0;$i <= 3;$i++):?>
             <tr>
               <td>Barro</td>
               <td>Aziz
               </td>
               <td>71325496</td>
               <td> b@gmail.com</td>
               <td> <a href="#" title="modifier"> <i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
                    <a href="#" title="Supprimer"> <i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                    <a href="#" title="Reinitialiser mot de passe"> <i class="fa fa-refresh"></i></a>&nbsp;&nbsp;
                 </td>
             </tr>
             <?php endfor;?>

             </tbody>
             <tfoot>
             <tr>
                <th>Nom</th>
               <th>Prénom(s)</th>
               <th>Télephone</th>
               <th>Mail</th>
               <th>Actions</th>
             </tr>
             </tfoot>
           </table>
         </div>
         <!-- /.box-body -->
       </div>
             <!-- /.post -->
           </div>
           <!-- /.tab-pane -->
           <div class="tab-pane" id="settings">

            <div class="box-body">
                <form class="form-horizontal" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Informations personnelles</legend>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Civilite <span class="required">*</span></label>
                            <div class="col-md-6">
                                <select required="true" id="civilite" name='civilite' class="form-control">
                                    <option>M.</option>
                                    <option>Mme/Mlle</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Matricule <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="matricule" type="text" required="true" name="matricule" placeholder="matricule" class="form-control required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nom <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="nom" type="text" required="true" name="nom" placeholder="Nom" class="form-control required ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Prénom <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="prenom" type="text" required="true" name="prenom" placeholder="Prénom" class="form-control required ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Téléphone <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="tel" type="tel" required="true" name="tel" placeholder="70XXXXXX" class="form-control required ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="email" type="email" required="true" name="email" placeholder="XX@example.com" class="form-control required ">
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Informations supplementaires</legend>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Identifiant <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="identifiant" type="text" required="true" name="identifiant" placeholder="Identifiant" class="form-control required ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mot de passe <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="password" type="password" required="true" name="password" class="form-control required fonction">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profession <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="profession" type="text" required="true" name="profession" placeholder="Profession" class="form-control required fonction">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profile<span class="required">*</span></label>
                            <div class="col-md-6">
                                <select required="true" id="natTitre" name='natTitre' class="form-control">
                                    <option value='-1'>Selectionnez le profile de l'utilsateur</option>
                                    <option>Administrateur</option>
                                    <option>pip</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Etat <span class="required">*</span></label>
                            <div class="col-md-6">
                                <select required="true" id="etat" name='etat' class="form-control">
                                    <option value='-1'>Selectionnez l'etat de l'utilsateur</option>
                                    <option>Actif </option>
                                    <option>Inactif</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">photo <span class="required">*</span></label>
                            <div class="col-md-6">
                                <input id="photo" type="file" required="true" name="photo" class="form-control required ">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                        </div>
                    </fieldset>
                </form>
           </div>
           <!-- /.tab-pane -->
         </div>
           <div class="tab-pane" id="show-picture">

           </div>
         <!-- /.tab-content -->
       </div>
       <!-- /.nav-tabs-custom -->
     </div>
     <!-- /.col -->
   </div>
   <!-- /.row -->
    <?php require_once("modal/updateProfile.php") ;?>
