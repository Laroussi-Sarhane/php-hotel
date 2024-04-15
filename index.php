<?php
$hotels = [

  [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
  ],
  [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
  ],
  [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
  ],
  [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
  ],
  [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
  ],

]; 


foreach($hotels as $key=> $hotel){
  $name= $hotel['name'];
  $description= $hotel['description'];
  $parking= $hotel['parking'];
  $vote= $hotel['vote'];
  $distance_to_center= $hotel['distance_to_center'];
  echo "<h2> $name $description $parking $vote  $distance_to_center  </h2>";


};


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<div class="container mb-2 p-2 ">

  <div class="row row-cols-3 flex-wrap  ">
    <?php foreach($hotels as $hotel) {?>
  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> nome hotel:<?php echo  $hotel['name']  ?>  </h5>
    <p class="card-text"> descrizone hotel:<?php echo $hotel['description'] ?></p>
    <p class="card-text"> voto hotel:<?php echo $hotel['vote'] ?></p>
    <p class="card-text"> distanza dal centro storico:<?php echo $hotel['distance_to_center'] ?> M</p>
    
  </div>
  <?php  } ?>
</div>

  </div>

</div>


  
</body>
</html>