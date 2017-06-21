<div class="login-box">
    <div class="login-logo">
        <a href="#">
            <b>Budget</b>Programme
        </a>
    </div>
    <!-- /.login-logo -->
	<div style="text-align:center" id="resultat"></div>
    <?php if(isset($erreur)):?>
    <?=$erreur;?>
    <?php endif;?>
    <div class="login-box-body">
        <p class="login-box-msg">Connexion</p>

        <form id="form" action="<?=SERVERS?>Utilisateur/connect" method="post" onsubmit="return validerF(this)">
            <div class="form-group has-feedback">
                <input type="text" id="mail" name="mail" class="form-control" required="true" placeholder="Email" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="pass" name="pass" class="form-control" placeholder="mot de passe" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
             <!--       <button name="connexion" type='submit'  class="btn btn-long btn-primary btn-block btn-flat">Connexion</button>-->
			  <button name="connexion" id="btn_con" type="submit"  class="btn btn-long btn-primary btn-block btn-flat">Connexion</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="#">Mot de passe oublié</a>
        <br />

    </div>
    <!-- /.login-box-body -->
</div>
<script src="<?=SERVER?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
function validerF(frm)
		{
			var data = {};
			data.mail = frm.elements["mail"].value;
			data.pass = frm.elements["pass"].value ;
			var res = document.getElementById('resultat');
			var json = JSON.stringify(data);
			var url = '<?=URL_BASE?>compte/connexion' ;
			 res.innerHTML = "<img src='<?=SERVER?>/dist/img/wait.gif' class='img-circle' alt='Veuillez patienter'>";
			jQuery.ajax({
				url: "index.php?p=Utilisateur/connexion",
				type: "POST",
				data: data,
				dataType: 'json',
				success: function (data) {
					if(data.erreur == 1)
					{
						//il ya une erreur
						res.innerHTML = data.etat;
					}else
					{
						//il ya pas d'erreur
						res.innerHTML = data.etat ;
						window.location.href = data.lien ;
					}
				},
				error: function (jqxr, status) {
					var res = document.getElementById('resultat');
					res.innerHTML = jqxr.responseText+"<br />"+status ;
					}
			});
			return false ;

		}
</script> 