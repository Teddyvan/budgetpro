    <!-- Main content -->
    <section class="content">
            <div class="row">
                    <div class="col-md-9">
                        <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Classification NUASR</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fa fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="box-body">
                          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#secteur" data-toggle="tab">  Secteur</a></li>
              <li><a href="#principale" data-toggle="tab"> Fonctions principales</a></li>
              <li><a href="#secondaire" data-toggle="tab"> Fonctions secondaire</a></li>

            </ul>
            <div class="tab-content">
                    <!-- titre -->
              <div class="active tab-pane" id="secteur">
                <div class="box">
                <div class="box-body">
                  <form class="form-horizontal">
                    <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                    <div class="col-md-6">
                      <input id="Secteur_Code" type="number" name="Secteur_Code"  class="form-control required fonction">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Intitule <span class="required">*</span></label>
                    <div class="col-md-6">
                    <textarea class="form-control " id="intitule" rows="3" placeholder="Entrez l'intitulé du secteur"></textarea>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                  </div>
                </div>
                </form>
                </div>
                <!-- /.box-body -->
              </div>
              </div>

              <!-- /.tab-pane -->
              <!--articles-->
              <div class="tab-pane" id="principale">
                <div class="box">
              <!-- /.box-header -->
                  <div class="box-body">
                    <form class="form-horizontal">
                      <div class="box-body">
                      <div class="form-group">
                      <label class="col-md-3 control-label">Secteur <span class="required">*</span></label>
                      <div class="col-md-6">
                        <select data-nana-rules="require" id="idSecteur" name='idSecteur' class="form-control">
                          <!--<option value="">Choissisez l'agence</option>-->
                          <option>Selectionnez le secteur</option>
                          <option>Secteur 1</option>
                          <option>Secteur 2</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                      <div class="col-md-6">
                        <input id="principal_Code" type="number" name="Coprincipal_Codede"  class="form-control required fonction">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Intitule <span class="required">*</span></label>
                      <div class="col-md-6">
                      <textarea class="form-control " id="intitule" rows="3" placeholder="Entrez l'intitulé de la fonctions principales"></textarea>
                      </div>
                    </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                    </div>
                  </div>
                  </form>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.tab-pane -->
              <!--paragraphes-->
               <div class="tab-pane" id="secondaire">
                 <div class="box">
               <!-- /.box-header -->
                   <div class="box-body">
                     <form class="form-horizontal">
                       <div class="box-body">
                       <div class="form-group">
                       <label class="col-md-3 control-label">Fonction principales <span class="required">*</span></label>
                       <div class="col-md-6">
                         <select data-nana-rules="require" id="" name='' class="form-control">
                           <!--<option value="">Choissisez l'agence</option>-->
                           <option>Selectionnez la fonction principale</option>
                           <option>Service Generaux</option>
                           <option>Aide economiqus exterieur</option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                       <div class="col-md-6">
                         <input id="Secondaire_Code" type="number" name="Secondaire_Code"  class="form-control required fonction">
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label" >Intitule <span class="required">*</span></label>
                       <div class="col-md-6">
                       <textarea class="form-control " placeholder="Entrez l'intitulé de la fonction principale" id="intitule" rows="3" placeholder=""></textarea>
                       </div>
                     </div>
                     <div class="box-footer">
                       <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                     </div>
                   </div>
                   </form>
                   </div>
                   <!-- /.box-body -->
                 </div>
              </div>
            </div>
            <!-- /.tab-content -->
          </div>
                        </div>

                      </div>
                    </div>
                   <div class="col-md-3">
                             <div class="box box-warning">
                             <div class="box-header with-border">
                                <h3 class="box-title">Menu secondaire</h3>

                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                </div>
                                <!-- /.box-tools -->
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <section class="sidebar">

                                <ul class="sidebar-menu">
                                        <li><a href="#" onclick="alert('Ajouter des actions au menu secondaire');"><i class="fa fa-circle-o"></i>Lister</a></li>
                                </ul>
                              </section>
                              </div>
                              <!-- /.box-body -->
                            </div>
                    </div>
            </div>
      <!-- Default box -->

      <!-- /.box -->

    </section>
    <!-- /.content -->
