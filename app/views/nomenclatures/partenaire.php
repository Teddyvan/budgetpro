<!-- Main content -->
      <div class="row">
        <div class="col-md-9">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Partenaires et agences</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
        <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#partenaire" data-toggle="tab">Partenaires Financiers</a></li>
        <li><a href="#agence" data-toggle="tab">Agences d'execution</a></li>
      </ul>
      <div class="tab-content">
              <!-- titre -->
        <div class="active tab-pane" id="partenaire">
        <div class="box">
      <!-- /.box-header -->
          <div class="box-body">
              <div class="box-body">

              <form class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="Code" type="number" required="true" name="Code"  class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Abreviations <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="abreviation" type="text" required="true" name="abreviation"  class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Désignations <span class="required">*</span></label>
                  <div class="col-md-6">
                  <textarea class="form-control " id="designation" rows="2" placeholder="Entrez la désignation"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Responsable <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="responsable" type="text" required="true" name="responsable" placeholder="Entrez le responsable" class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Contact <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="contact" type="text" required="true" name="contact" placeholder="Entrez le contact ou l'adresse" class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                <label class="col-md-3 control-label">Type de partenaire <span class="required">*</span></label>
                <div class="col-md-6">
                  <select required="true"id="natTitre" name='natTitre' class="form-control">
                    <!--<option value="">Choissisez l'agence</option>-->
                    <option value='-1'>Selectionnez le type de partenaire</option>
                    <option>Multilateral</option>
                    <option>Bilateral</option>
                    <option>Autres</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
            </div>
            </form>
          </div>
          <!-- /.box-body -->
          </div>
        </div>
        </div>
        <!-- /.tab-pane -->
        <!--articles-->
        <div class="tab-pane" id="agence">
          <div class="box">
        <!-- /.box-header -->
            <div class="box-body">
                <div class="box-body">

                <form class="form-horizontal row-border">
                  <div class="form-group">
                  <label class="col-md-3 control-label">Partenaires <span class="required">*</span></label>
                  <div class="col-md-6">
                    <select required="true"id="ar_intituleTitre" name='ar_intituleTitre' class="form-control">
                      <!--<option value="">Choissisez l'agence</option>-->
                      <option value='-1'>Selectionnez le partenaire</option>
                      <option>HAUT COMMISARIAT AUX REGFUGIES</option>
                      <option>...............t</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="ag_Code" type="number" required="true" name="ag_Code"  class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Abreviations <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="ag_abreviation" type="text" required="true" name="ag_abreviation"  class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Désignations <span class="required">*</span></label>
                  <div class="col-md-6">
                  <textarea class="form-control " id="ag_designation" rows="2" placeholder="Entrez la désignation"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Responsable <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="ag_responsable" type="text" required="true" name="ag_responsable" placeholder="Entrez le responsable" class="form-control required ">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Contact <span class="required">*</span></label>
                  <div class="col-md-6">
                    <input id="ag_contact" type="text" required="true" name="ag_contact" placeholder="Entrez le contact ou l'adresse" class="form-control required ">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        </div>
        </div>

                </div>
              </div>
              </div>
                  <!-- menu de droite -->
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
                         <li><a href="#" onclick="alert('Ajouter des actions au menu secondaire');"><i class="fa fa-list"></i>Lister</a></li>
                     </ul>
                   </section>
                   </div>

                   <!-- /.box-body -->
                 </div>
              </div>
                 <!-- Fin menu de droite -->
      </div>
