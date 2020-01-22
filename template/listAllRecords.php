<div class="listAllRecords">

  <h2>Výpis všech záznamů o bězích</h2>
  <?php
    $records = listAllRecords("data/zaznamBehy.txt");
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
   ?>
</div>
