<?php require_once("entete.php")?>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 <!-- header -->
  <?php require_once ("header.php");?>

  <!-- =============================================== -->

  <!--Menu -->
  <?php  require_once("menu.php") ; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php// require_once("breadcumbs.php") ;?>

    <!-- Main content -->
    <section class="content">

     <?php echo $content ;?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- pied de page -->
  <?php require_once("footer.php");?>

</div>
<!-- ./wrapper -->
<!-- javascript -->
<?php require_once("javascript.php")?>
</body>
</html>
