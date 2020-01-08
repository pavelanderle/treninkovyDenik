<?php
  $time = $_GET["time"];
  $km = $_GET["km"];

  $dateToday = date("d.m.Y"); //výpočet aktuálního data
  $seconds = strtotime("1970-01-01 $time UTC"); // Převod času na sekundy
  $speed = $km/($seconds/3600); // výpočet průměrné rychlosti běhu
  $timePerKm=($seconds/$km)/60; // výpočet průměrného času na Km
  $zapis="$dateToday|$km|$time|$speed|$timePerKm"; // sestavení řetězce pro zápis
  $fp=fopen("zaznamBehy.txt","a"); //otevření souboru pro zápis (přidání)
  fwrite($fp,$zapis.PHP_EOL); // zápis PHP_EOL - vloží konec řádku
  fclose($fp); // uzavření souboru
 ?>
