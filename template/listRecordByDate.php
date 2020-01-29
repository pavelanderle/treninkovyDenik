<div class="listAllRecords">
  <h2>Výpis všech záznamů o bězích ze dne <?php echo date("d.m.Y", strtotime($_GET["date"]));?></h2>
  <?php
    $records = listByDate("data/zaznamBehy.txt", $_GET["date"]);
    if(count($records)!=0){
      echo "<table>";
      echo "<tr><th>Datum</th><th>Počet Km</th><th>Čas</th><th>Průměrná rychlost</th><th>Čas/Km</th></tr>";
      foreach ($records as $row) {
          echo "<tr>";
        foreach ($row as $data) {
          echo "<td>$data</td>";
        }
          echo "</tr>";
      }
      echo "<table>";
    }
    else {
      echo "<h3>Nebyli nalezeny žádné záznamy</h3>";
    }
   ?>
</div>
