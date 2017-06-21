<!-- Main content -->
<section class="content">
        <div class="row">
                <div class="col-md-9">
                    <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Actions </h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="box-body">
                      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#secteur" data-toggle="tab">DONNEES DE BASE</a></li>
          <li><a href="#principale" data-toggle="tab">DONNEES DE SUIVI</a></li>
          <li><a href="#secondaire" data-toggle="tab">VISUALISATION</a></li>

        </ul>



        <div class="tab-content">
                <!-- titre -->
          <div class="active tab-pane" id="secteur">
            <div class="box">
            <div class="box-body">
              <form class="form-horizontal">
                <div class="box-body">

                  <div class="form-group">
                      <label class="col-md-3 control-label">Programmes <span class="required">*</span></label>
                      <div class="col-md-6">
                          <select data-nana-rules="require" id="programme" name="programme" class="form-control">
                              <option value="-1">Selectionnez un programme</option>
                              <option>Interieur</option>
                              <option>exterieur</option>
                          </select>
                      </div>
                </div>
                <div class="form-group">
                      <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                      <div class="col-md-3">
                           <input id="Secteur_Code" type="text" name="prog_code" placeholder="CODE ACTION" class="form-control required fonction">
                      </div>
                      <label class="col-md-3 control-label">Sigle/ Abréviation <span class="required">*</span></label>
                      <div class="col-md-3">
                           <input id="Secteur_Code" type="text" name="sigle_abrev"  class="form-control required fonction">
                      </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                    <div class="col-md-6">
                        <textarea class="form-control " id="intitule" rows="3" placeholder="Intitulé de l'action"></textarea>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Resp. Action <span class="required">*</span></label>
                  <div class="col-md-6">
                    <select required="true" id="resp_programme" name='resp_programme' class="form-control">
                        <option value='-1'>Pesponsable action</option>
                        <option>Interieur</option>
                        <option>exterieur</option>
                    </select>
                  </div>
                </div>
                <div class="box-footer">
                  <div class="col-md-4">
                      <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
                  </div>
                  <div class="col-md-4">
                      <button type="submit" class="btn btn-primary pull-right">Nouveau</button>
                  </div>
                  <div class="col-md-4">
                      <button type="reset" class="btn btn-primary pull-right">Fermer</button>
                  </div>
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
                          <div class="box-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Objectif : <span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <textarea class="form-control " id="intitule" rows="3" placeholder="Entrez l'intitulé de la fonctions principales"></textarea>
                                    </div>
                                        <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                                </div>
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
