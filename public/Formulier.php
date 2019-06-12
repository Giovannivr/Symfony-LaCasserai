<?php
/*
 // Deze code om contactformulier via mail te versturen met de informatie
*/

  $name = $_POST['naam'];
  $lastname = $_POST['achternaam'];
  $email= $_POST['email'];
  $adress= $_POST['adres'];
  $housenumber= $_POST['huisnummer'];
  $postcode= $_POST['postcode'];
  $place = $_POST['plaats'];
  $telefoonnummer= $_POST['telefoonnummer'];
  $comment= $_POST['commentaar'];

  $totaal = "$name $lastname . $place . $email . $adress $housenumber . $postcode . $telefoonnummer . $comment";
  $tomail = "giovannivr@live.com";

  mail($tomail, "Nieuwe vraag", $totaal);
  
?>


