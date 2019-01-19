<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAPAS KELAS 1 TANGERANG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
  <?php
    include 'include/navbar.php';
  ?>

    <section class="ftco-cover" style="background-image: url(assets/images/bg_1.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Download File</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up" data-aos-delay="600"><i>"File yang dapat di download dari Lapas Kelas 1 Tangerang"</i></h2>    
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section">
      <div class="container">
          <div class="col-md-12" data-aos="fade-up">
            <?php
              $r = $con->query("SELECT * FROM tipe_file WHERE tipe_file <> 'Gambar'");
              while ($rr = $r->fetch_array()) {
                $id_tipe_file = $rr['id_tipe_file'];
            ?>
            <span style="text-align: justify; display:block; font-weight: bold;" class="ftco-heading heading-thin mb-3"><?php echo $rr['tipe_file'];?></span>
            <ol class="mb-5">
              <?php
                $s = $con->query("SELECT * FROM `file` WHERE id_tipe_file='$id_tipe_file'");
                while ($ss = $s->fetch_array()) {
              ?>
              <li><a target="_blank" href="file?link=<?php echo $ss['link_file'];?>&id=<?php echo $ss['id_file'];?>"><?php echo $ss['judul_file'];?></a> (Hit: <?php echo $ss['download_hit'];?>)</li>
              <?php
                }
              ?>
            </ol>
            <?php
              }
            ?>
          </div>
      </div>
    </section>

    <?php
      include 'include/footer.php';
    ?>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
  </body>
</html>