    <!-- Main content -->
    <div class="row">
        <div class="col-md-9">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Classification administrative</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="reduire">
                  <i class="fa fa-minus"></i></button>

              </div>
            </div>
            <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#uniteAdmin" data-toggle="tab">  Type unite administrative</a></li>
              <li><a href="#catAdmin" data-toggle="tab"> Categorie unite administrative </a></li>
            </ul>
          <div class="tab-content">
                    <!-- titre -->
            <div class="active tab-pane" id="uniteAdmin">
              <div class="box">
              <!-- /.box-header -->
                <div class="box-body">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Code  <span class="required">*</span></label>
                    <div class="col-md-6">
                      <input id="tua_Code" type="number" required="true" name="tua_Code"  class="form-control required fonction">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Mode de gestion <span class="required">*</span></label>
                    <div class="col-md-6">
                      <input id="tua_ModeGes" type="text" required="true" name="tua_ModeGes" placeholder="Entrez le mode de gestion" class="form-control required fonction">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                    <div class="col-md-6">
                    <textarea class="form-control " id="tua_Intitule" placeholder="Entrez l'intitulé du type de l'UA" rows="3" ></textarea>
                    </div>
                  </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
              </div>
                </form>
                </div>
              <!-- /.box-body -->
            </div>
            </div>

              <!-- /.tab-pane -->
              <!--articles-->
              <div class="tab-pane" id="catAdmin">
                <div class="active tab-pane" id="uniteAdmin">
                <div class="box">
                <!-- /.box-header -->
                  <div class="box-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                    <label class="col-md-3 control-label">Selectionnez le type de l'UA <span class="required">*</span></label>
                    <div class="col-md-6">
                      <select required="true"id="catAdminTypeUa" name='catAdminTypeUa' class="form-control">
                        <!--<option value="">Choissisez l'agence</option>-->
                        <option value='-1'>Selectionnez le type de l'UA</option>
                        <option>4  -  ADMINISTRATIONS DECONCENTREES</option>
                      </select>
                    </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                      <div class="col-md-6">
                        <input id="catAdminCode" type="number" required="true" name="catAdminCode" placeholder="0" class="form-control required fonction">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                      <div class="col-md-6">
                      <textarea class="form-control " id="catAdmin_Intitule" name="catAdmin_Intitule" placeholder="Entrez l'intitulé de la categorie de l'UA" rows="3" ></textarea>
                      </div>
                    </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                </div>
                  </form>
                  </div>
                <!-- /.box-body -->
              </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
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


                                <!-- sidebar menu: : style can be found in sidebar.less -->

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">Lister</button>

                              </section>
                              </div>
                              <!-- /.box-body -->
                            </div>
                    </div>

                    </div>

    <?php require_once("modal/administrative.php") ;?>
