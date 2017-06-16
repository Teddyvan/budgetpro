    <!-- Main content -->
    <section class="content">
            <div class="row">
                    <div class="col-md-9">
                        <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Classification géographique</h3>

                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fa fa-minus"></i></button>
<!--                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                              <i class="fa fa-times"></i></button>-->
                          </div>
                        </div>
                        <div class="box-body">
                          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#typeLocalite" data-toggle="tab"> Type de localite</a></li>
              <li><a href="#cateLocalite" data-toggle="tab"> Categorie localite </a></li>
              <li><a href="#unitLocalite" data-toggle="tab"> Unite Localite</a></li>

            </ul>
            <div class="tab-content">
                    <!-- titre -->
              <div class="active tab-pane" id="typeLocalite">
                <div class="box">
                <div class="box-body">
                  <form class="form-horizontal">
                    <div class="box-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                    <div class="col-md-6">
                      <input id="Code" type="number" name="Code"  class="form-control required fonction">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Désignation <span class="required">*</span></label>
                    <div class="col-md-6">
                    <textarea class="form-control " id="designation" rows="3" placeholder="Entrez la désignation du type de la localité"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Chef lieu <span class="required">*</span></label>
                    <div class="col-md-6">
                    <textarea class="form-control " id="chefLieu" rows="3" placeholder="Entrez la désignation du chef lieu"></textarea>
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
              <div class="tab-pane" id="cateLocalite">
                <div class="box-body">
                  <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                      <label class="col-md-3 control-label">Type localite géographique <span class="required">*</span></label>
                      <div class="col-md-6">
                        <select data-nana-rules="require" id="idSecteur" name='idSecteur' class="form-control">
                          <option>Selectionnez le secteur</option>
                          <option>Secteur 1</option>
                          <option>Secteur 2</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                      <div class="col-md-6">
                        <input id="Code" type="number" name="Code"  class="form-control required fonction">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Désignation<span class="required">*</span></label>
                      <div class="col-md-6">
                      <textarea class="form-control " id="chefLieu" rows="2" placeholder="Designation"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Chef lieu <span class="required">*</span></label>
                      <div class="col-md-6">
                      <textarea class="form-control " id="chefLieu" rows="3" placeholder="Chef lieu"></textarea>
                      </div>
                    </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                  </div>
                </div>
                </form>
              </div>
              </div>
              <!-- /.tab-pane -->
              <!--paragraphes-->
               <div class="tab-pane" id="unitLocalite">
                 <div class="box-body">
                   <form class="form-horizontal">
                     <div class="box-body">
                       <div class="form-group">
                       <label class="col-md-3 control-label">categorie <span class="required">*</span></label>
                       <div class="col-md-6">
                         <select data-nana-rules="require" id="idSecteur" name='idSecteur' class="form-control">
                           <option>Selectionnez la categorie</option>
                           <option>Cat 1</option>
                           <option>Cat 2</option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                       <div class="col-md-6">
                         <input id="Code" type="number" name="Code"  class="form-control required fonction">
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label">Désignation<span class="required">*</span></label>
                       <div class="col-md-6">
                       <textarea class="form-control " id="chefLieu" rows="2" placeholder="Designation"></textarea>
                       </div>
                     </div>
                   <div class="box-footer">
                     <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                   </div>
                 </div>
                 </form>
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
