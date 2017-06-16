<!-- Main content -->
      <div class="row">
        <div class="col-md-9">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Classification strategique PNDS</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
        <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#national" data-toggle="tab">Objectifs/axe national</a></li>
        <li><a href="#ministeriel" data-toggle="tab">Objectifs/axe Ministeriel</a></li>
      </ul>
      <div class="tab-content">
              <!-- titre -->
      <div class="active tab-pane" id="national">
          <div class="box">
      <!-- /.box-header -->
            <div class="box-body">
              <div class="box-body">

              <form class="form-horizontal row-border">
              <div class="form-group">
                <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                <div class="col-md-6">
                  <input id="national_Code" type="number" required="true" name="national_Code"  class="form-control required fonction" placeholder="Code objectif strategique national"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                <div class="col-md-6">
                <textarea class="form-control" name="national_intitule" id="national_intitule" rows="3" placeholder="Intitulé objectif strategique national"></textarea>
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
        <div class="tab-pane" id="ministeriel">
          <div class="box">
      <!-- /.box-header -->
            <div class="box-body">
              <div class="box-body">

              <form class="form-horizontal row-border">
                <div class="form-group">
                <label class="col-md-3 control-label">Selectionnez l'axe strategique nationale <span class="required">*</span></label>
                <div class="col-md-6">
                  <select required="true"id="ministreAxNat" name='ministreAxNat' class="form-control">
                    <!--<option value="">Choissisez l'agence</option>-->
                    <option value='-1'>Selectionnez l'axe strategique nationale</option>
                    <option>Promotion</option>
                    <option>..............</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                <div class="col-md-6">
                  <input id="national_Code" type="number" required="true" name="national_Code"  class="form-control required fonction" placeholder="Code objectif strategique ministériel"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                <div class="col-md-6">
                <textarea class="form-control" name="national_intitule" id="national_intitule" rows="3" placeholder="Intitulé objectif strategique ministériel"></textarea>
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
        </div>
        <!-- /.tab-pane -->

      <!-- /.tab-content -->
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
