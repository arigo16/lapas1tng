<?php
  session_start();

  if (empty($_SESSION['username'])) {
    header("location:login.php");
  }else{
  if (isset($_SESSION['username'])) {
    $user = trim($_SESSION['username']);
  }
  if (isset($_SESSION['otorisasi'])) {
    $otorisasi = trim($_SESSION['otorisasi']);
  }
  require_once('include/config.php');
  $base_url = ('http://'.$_SERVER['HTTP_HOST'].'/mart212/index.php');

  isset ($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Menu Utama</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="assets/vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="assets/vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/vendors/tags/css/bootstrap-tags.css" rel="stylesheet">
    <link href="assets/css/forms.css" rel="stylesheet">

  </head>
  <body>
  	<?php include 'include/header.php' ?>

    <div class="page-content">
    	<div class="row">
				<?php include 'include/sidebar.php' ?>
				<div class="col-md-10">
          <?php

            if(isset($_SESSION['pesan'])){echo $_SESSION['pesan']; unset($_SESSION['pesan']);}

            if(file_exists('page/'.$page.'.php')){
              include ('page/'.$page.'.php');
            }else{
              include ('page/error-404.php');
            }

          ?>
				</div>
			</div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>
    <script src="assets/vendors/select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/tags/js/bootstrap-tags.min.js"></script>
    <script src="assets/vendors/mask/jquery.maskedinput.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
    <link href="assets/vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
    <script src="assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <link href="assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <script src="assets/vendors/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="assets/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script src="assets/vendors/ckeditor/ckeditor.js"></script>
    <script src="assets/vendors/ckeditor/adapters/jquery.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/forms.js"></script>
    <script src="assets/js/tables.js"></script>
    <script src="assets/js/editors.js"></script>
  </body>
</html>

<?php
    }
?>