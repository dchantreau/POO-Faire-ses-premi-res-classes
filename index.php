<?php
require_once 'Voiture.php';
$HomersPinkSedan = new Voiture("pink",5,"Diesel");
var_dump($HomersPinkSedan);


 echo $HomersPinkSedan->start();
 echo $HomersPinkSedan->forward();
 echo '<br> Vitesse de la HomersPinkSedan : ' . $HomersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
 echo $HomersPinkSedan->break();
 echo '<br> Vitesse de la HomersPinkSedan : ' . $HomersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
 echo $HomersPinkSedan->break();




?>