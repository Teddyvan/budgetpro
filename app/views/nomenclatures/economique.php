<link rel="stylesheet" href="<?=SERVER?>/dist/treeview/default/style.min.css">
   <!-- Main content -->
          <div class="row">
            <div class="col-md-9">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Classification économique</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
            <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#titres" data-toggle="tab">  Titres</a></li>
            <li><a href="#articles" data-toggle="tab">Articles</a></li>
            <li><a href="#paragraphes" data-toggle="tab"> Paragraphes</a></li>
            <li><a href="#rubrique" data-toggle="tab"> Rubrique</a></li>
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
                    <label class="col-md-3 control-label">Nature du titre <span class="required">*</span></label>
                    <div class="col-md-6">
                      <select required="true" id="natTitre" name='natTitre' class="form-control">
                        <!--<option value="">Choissisez l'agence</option>-->
                        <option value='-1'>Selectionnez la nature du titre</option>
                        <option>Depense</option>
                        <option>Recette</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Code titre <span class="required">*</span></label>
                    <div class="col-md-3">
                      <input id="CodeTitre" type="number" required="true" name="CodeTitre"  class="form-control required fonction">
                    </div>
                    <div class="col-md-3">
                      <input id="CodeTitre" type="number" required="true" name="CodeTitre" placeholder="de I à XX "  class="form-control required fonction">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Code comptable <span class="required">*</span></label>
                    <div class="col-md-6">
                      <input id="CodeComptable" type="number" required="true" name="CodeComptable"  class="form-control required fonction">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Intitulé <span class="required">*</span></label>
                    <div class="col-md-6">
                    <textarea class="form-control " id="intitule" rows="3" placeholder=""></textarea>
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
            <div class="tab-pane" id="articles">
              <div class="box">
            <!-- /.box-header -->
                <div class="box-body">
                    <div class="box-body">

                    <form class="form-horizontal row-border">
                      <div class="form-group">
                      <label class="col-md-3 control-label">Intitulé du titre <span class="required">*</span></label>
                      <div class="col-md-6">
                        <select required="true" id="ar_intituleTitre" name='ar_intituleTitre' class="form-control">
                          <!--<option value="">Choissisez l'agence</option>-->
                          <option value='-1'>Selectionnez la nature du titre</option>
                          <option>Depense de bien et service</option>
                          <option>Dépense de transfert</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code titre <span class="required">*</span></label>
                      <div class="col-md-3">
                        <input id="ar_CodeTitre" type="number" required="true" name="ar_CodeTitre"  class="form-control required fonction">
                      </div>
                      <div class="col-md-3">
                        <input id="ar_libCodeTitre" type="number" required="true" name="ar_libCodeTitre" placeholder="de I à XX "  class="form-control required fonction">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code comptable <span class="required">*</span></label>
                      <div class="col-md-6">
                        <input id="ar_CodeComptable" type="number" required="true" name="CodeComptable"  class="form-control required fonction">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Intitulé de l'article<span class="required">*</span></label>
                      <div class="col-md-6">
                      <textarea class="form-control" id="intitule" rows="3" placeholder=""></textarea>
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
            <!--paragraphes-->
             <div class="tab-pane" id="paragraphes">
               <div class="box">
                 <!-- /.box-header -->
                 <div class="box-body">
                     <div class="box-body">

                     <form class="form-horizontal row-border">
                       <div class="form-group">
                       <label class="col-md-3 control-label">Intitulé de l'article <span class="required">*</span></label>
                       <div class="col-md-6">
                         <select required="true" id="parag_intituleArticle" name='parag_intituleArticle' class="form-control">
                           <!--<option value="">Choissisez l'agence</option>-->
                           <option value='-1'>Selectionnez la nature du titre</option>
                           <option>Depense de bien et service</option>
                           <option>Dépense de transfert</option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label">Code de l'article <span class="required">*</span></label>
                       <div class="col-md-6">
                         <input id="parag_codeArticle" type="number" required="true" name="parag_codeArticle"  class="form-control required fonction">
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label">Code du paragraphe <span class="required">*</span></label>
                       <div class="col-md-6">
                         <input id="parag_codeParagraphe" type="number" required="true" name="parag_codeParagraphe"  class="form-control required fonction">
                       </div>
                     </div>
                     <div class="form-group">
                       <label class="col-md-3 control-label">Intitulé paragraphe<span class="required">*</span></label>
                       <div class="col-md-6">
                       <textarea class="form-control" id="intitule" rows="3" placeholder=""></textarea>
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

            <!-- rubrique -->
            <div class="tab-pane" id="rubrique">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box-body">

                    <form class="form-horizontal row-border">
                      <div class="form-group">
                      <label class="col-md-3 control-label">Intitulé paragraphe <span class="required">*</span></label>
                      <div class="col-md-6">
                        <select required="true" id="rub_intituleParagraphe" name='rub_intituleParagraphe' class="form-control">
                          <option value='-1'>Selectionnez l'intitule du paragraphe</option>
                          <option>Intérêts des comptes courants et des dépôts</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code du paragraphe<span class="required">*</span></label>
                      <div class="col-md-6">
                        <input id="parag_codeParagraphe" type="number" placeholder="0" required="true" name="parag_codeParagraphe"  class="form-control required fonction">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Code de la rubrique<span class="required">*</span></label>
                      <div class="col-md-6">
                        <input id="parag_codeRurbrique" type="number" placeholder="0" required="true" name="parag_codeRurbrique"  class="form-control required fonction">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Intitulé de la rubrique<span class="required">*</span></label>
                      <div class="col-md-6">
                      <textarea class="form-control" id="parag_intituleRubrique" name="parag_intituleRubrique" rows="3" placeholder="Intitulé de la rubrique"></textarea>
                      </div>
                    </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right pull-right">Enregistrer</button>
                  </div>
                  </form>
                </div>
                <!-- /.box-body -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.tab-content -->
        </div>
                      </div>

                    </div>
                  </div>
                      <!-- menu de droite -->
                  <div class="col-md-3">
                      <div class="box box-warning">
                      <div class="box-header with-border">
                         <h3 class="box-title">Content</h3>

                         <div class="box-tools pull-right">
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                         </div>
                         <!-- /.box-tools -->
                       </div>
                       <!-- /.box-header -->

                       <div class="box-body">
                         <section class="sidebar">
					<div id="evts" class="demo"></div>
                        
                       </section>
                       </div>

                       <!-- /.box-body -->
                     </div>
                  </div>
                     <!-- Fin menu de droite -->
          </div>
<script src="<?=SERVER?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?=SERVER?>/dist/treeview/jstree.min.js"></script>

<script type="text/javascript">
	// interaction and events
	$('#evts')	
		.on("click",function(){
			jQuery.ajax({
				url: '<?=SERVER?>/dist/treeview/root.json',
				type: "GET",
				dataType: 'json',
				success: function (data) {
					alert("reponse du get");
					if(data.length != 0)
					{
						for(var i = 0 ;i < data.length ; i++)
							alert(data[i].text);
					}
				},
				error: function (jqxr, status) {
					alert(jqxr.responseText+"<br />"+status) ;
					}
			});
		})
		.jstree({
			'core' : {
				'multiple' : false,
				'data' : [
					{ "text" : "Root node", "children" : [
							{ "text" : "act 1", "id" : 1 },
							{ "text" : "act 2","id" : 3 }
					]},
					{ "text" : "Root node 2", "children" : [
							{ "text" : "act 3", "id" : 1 },
							{ "text" : "act 4","id" : 3 }
					]}
				]
			}
		});
</script>