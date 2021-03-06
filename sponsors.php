<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/head.php';
?>

<body>

  <?php
  include 'includes/nav.php';
  ?>

  <!-- Header for the page -->
  <header class="jumbotron hero-spacer">
    <div class="aaron">
      <img src="images/aaron.png">
    </div>
    <div class="content">
      <h1>Our Sponsors</h1>
      <p>These guys made all this happen!</p>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 col-sm-12 hero-feature">
        <div class="thumbnail" style="border: 0;">
          <div class="caption" style="cursor: pointer;" onclick="window.open('http://fsmk.org');">
            <img src="images/fsmklogo-black.png" width="15%">
            <h2 style="font-size: 18px;">FSMK</h2>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 hero-feature">
        <div class="thumbnail" style="border: 0;">
          <div class="caption" style="cursor: pointer;" onclick="window.open('http://hackerearth.com');">
            <img src="images/he-logo.png" width="17%">
            <h2 style="font-size: 18px;">HackerEarth</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
  <?php
  include 'includes/footer.php';
  ?>
  <?php
  include 'includes/js.php';
  ?>
</body>

</html>
