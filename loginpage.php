<?php 

$title = 'Login Page';

require_once 'includes/header.php';
require_once 'db/conn.php';




?>


<br>

<h2 class="text-center">Welcome to the Jamaica Music Registry.</h2><br>


<div class="bd-example h-50">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner mw-100" style="max-width:100%">
      <div class="carousel-item active " >
        <img src="uploads/slide1.jpg" class="d-block w-100 p-3" alt="max-width 100%" >
        <div class="carousel-caption d-none d-md-block">
          <h5>Recording</h5>
          <p>Get paid for your professional recordings and mastered music.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="uploads/slide2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Music Being Played</h5>
          <p>Music creators should be compensated for their music being played in public.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="uploads/slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Protect Your Music</h5>
          <p class="">Register with the Jamaica Music Registry to protect your intellectual property and for other services.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="uploads/slide4.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Performance</h5>
          <p>Get properly rewarded for your live shows.</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div>
    
</div>
</div><br>

        <p class="text-center">Please click the button below and fill out the form to register for our services.</p><br>
        <a class="btn btn-success btn-block" href="register.php" role="button">Register</a>








































<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php require_once 'includes/footer.php'; ?>