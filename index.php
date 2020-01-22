<?php
  include("library/function.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tréninkový deník - běhy</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
    <?php
    include ("template/title.html");
    include ("template/form.html");
    include ("template/controlPanel.html");

    if (isset($_GET["AllRecords"])){
      include ("template/listAllRecords.php");
    }

    if (isset($_GET["time"])){
      $time = $_GET["time"];
      $km = $_GET["km"];
      writeDataToFile($km,$time,"data/zaznamBehy.txt");
    }





     ?>
  </body>
</html>
