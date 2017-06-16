<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Budget</b>Programme</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Connexion</p>

    <form action="<?=SERVER?>/index.php?p=utilisateur/index" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" required = "true" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" required = "true" placeholder="mot de passe">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-long btn-primary btn-block btn-flat">Connexion</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">Mot de passe oublié</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
