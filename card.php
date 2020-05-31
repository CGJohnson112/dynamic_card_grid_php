<!-- Card -->
<?php
require 'functions.php';
$artists = getArtists();


?>
<?php foreach ($artists as $artist): ?>
<div class="item">
<div class="card booking-card">


  <!-- Card image -->
  <div class="view overlay">
    <img src="images/artist_images/<?php echo $artist['artist_image']?>" style="width:300px";/>
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <img src="images/artist_logos/<?php echo $artist['artist_logo']?>" style="height:25px" />
    <h4 class="card-title font-weight-bold"><a><?php echo $artist['artist_name'] ?></a></h4>
    <!-- Data -->
    <ul class="list-unstyled list-inline rating mb-0">
      <li class="list-inline-item mr-0"><i class="fa fa-star amber-text"> </i></li>
      <li class="list-inline-item mr-0"><i class="fa fa-star amber-text"></i></li>
      <li class="list-inline-item mr-0"><i class="fa fa-star amber-text"></i></li>
      <li class="list-inline-item mr-0"><i class="fa fa-star amber-text"></i></li>
      <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
      <li class="list-inline-item"><p class="text-muted"><?php echo $artist['rating'] ?></p></li>
    </ul>
    <p class="mb-2">$ • American, Restaurant</p>
    <!-- Text -->
    <p class="card-text"><?php echo $artist['music_played'] ?></p>
    <hr class="my-4">
    <p class="lead"><strong>Tonight's availability</strong></p>
    <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
      <li class="list-inline-item mr-0">
        <div class="chip mr-0">5:30PM</div>
      </li>
      <li class="list-inline-item mr-0">
        <div class="chip deep-purple white-text mr-0">7:30PM</div>
      </li>
      <li class="list-inline-item mr-0">
        <div class="chip mr-0">8:00PM</div>
      </li>
      <li class="list-inline-item mr-0">
        <div class="chip mr-0">9:00PM</div>
      </li>
    </ul>
    <!-- Button -->
    <a href="#" class="btn btn-primary p-1 mx-0 mb-0">Button</a>

  </div>

</div>
</div>
<?php endforeach;;?>
<!-- Card -->