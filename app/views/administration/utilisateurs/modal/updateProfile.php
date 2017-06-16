        <div class="example-modal">
        <div class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mise a jour profile </h4>
              </div>
              <div class="modal-body">
                  <form class="form-horizontal" enctype="multipart/form-data" >
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
                              <label class="col-md-3 control-label">Nom <span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input id="nom" type="text" required="true" name="nom" placeholder="Nom" class="form-control required fonction">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Prénom <span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input id="prenom" type="text" required="true" name="prenom" placeholder="Prénom" class="form-control required fonction">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Téléphone <span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input id="tel" type="tel" required="true" name="tel" placeholder="70XXXXXX" class="form-control required fonction">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Email <span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input id="email" type="email" required="true" name="email" placeholder="XX@example.com" class="form-control required fonction">
                              </div>
                          </div>
                      </fieldset>
                      <fieldset>
                          <legend>Informations supplementaires</legend>
                          <div class="form-group">
                              <label class="col-md-3 control-label">Identifiant <span class="required">*</span></label>
                              <div class="col-md-6">
                                  <input id="identifiant" type="text" required="true" name="identifiant" placeholder="Identifiant" class="form-control required fonction">
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
                                  <input id="photo" type="file" required="true" name="photo"  class="form-control required fonction">
                              </div>
                          </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                          </div>
                      </fieldset>
                  </form>
              </div>
           <!--   <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
             /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
