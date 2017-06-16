<!-- Main content -->
      <div class="row">
        <div class="col-md-9">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Dévise</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
        <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#titres" data-toggle="tab"> Devise</a></li>
      </ul>
      <div class="tab-content">
              <!-- titre -->
        <div class="active tab-pane" id="titres">
        <div class="box">
      <!-- /.box-header -->
          <div class="box-body">
              <div class="box-body">

              <form class="form-horizontal row-border">

              <div class="form-group">
                <label class="col-md-3 control-label">Code <span class="required">*</span></label>
                <div class="col-md-6">
                  <input id="Code" type="number" required="true" name="Code" placeholder="Code activite"  class="form-control required fonction">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Abreviation <span class="required">*</span></label>
                <div class="col-md-6">
                  <input id="Code" type="text" required="true"  placeholder="Abreviaton activité"name="Code"  class="form-control required fonction">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Date <span class="required">*</span></label>
                <div class="col-md-6">
                  <input id="date" type="Date" required="true" name="date"  class="form-control required fonction">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Taux <span class="required">*</span></label>
                <div class="col-md-6">
                  <input id="taux" type="number" required="true" name="taux" placeholder="0" class="form-control required fonction">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                <div class="col-md-6">
                <textarea class="form-control " id="intitule" rows="3" placeholder="Intitulé de la devise"></textarea>
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
      <!-- /.tab-content -->
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
