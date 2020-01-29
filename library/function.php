<?php
function writeDataToFile ($km, $time, $file){
  $dateToday = date("d.m.Y"); //výpočet aktuálního data
  $seconds = strtotime("1970-01-01 $time UTC"); // Převod času na sekundy
  $speed = $km/($seconds/3600); // výpočet průměrné rychlosti běhu
  $timePerKm=($seconds/$km)/60; // výpočet průměrného času na Km
  $zapis="$dateToday|$km|$time|$speed|$timePerKm"; // sestavení řetězce pro zápis
  $fp=fopen($file,"a"); //otevření souboru pro zápis (přidání)
  fwrite($fp,$zapis.PHP_EOL); // zápis PHP_EOL - vloží konec řádku
  fclose($fp); // uzavření souboru
}

function listAllRecords($file){
  $rows = file($file);
  foreach ($rows as $value) {
    $result[] = explode("|",$value);
  }
  return $result;
}

function listByDate($file, $date){
  $dateCz = date("d.m.Y", strtotime($date));
  $data = listAllRecords($file);
  foreach ($data as $value) {
    if ($value[0]==$dateCz){
      $result[]=$value;
    }
  }
  return $result;
}

 ?>
