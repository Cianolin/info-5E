<?php
require 'classifica.php';
require 'DBcon.php';
$config = require 'database.php';
$db = Dbcon::getDb($config);

$query = '
    SELECT
        g.circuito,
        g.data_gara,
        MIN(g.tempo_migliore) AS tempo_migliore
    FROM
        campionato.gareggia g
    GROUP BY
        g.circuito, g.data_gara
    ORDER BY
        g.data_gara DESC';

try {
    $stm = $db->prepare($query);
    $stm->execute();

    if ($stm->rowCount() > 0) {
        echo '<table class="table">';
        echo '<thead class="table-dark">';
        echo '<tr>';
        echo '<th>Circuito</th>';
        echo '<th>Data Gara</th>';
        echo '<th>Tempo Migliore</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($gara = $stm->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($gara['circuito']) . "</td>";
            echo "<td>" . htmlspecialchars($gara['data_gara']) . "</td>";
            echo "<td>" . htmlspecialchars($gara['tempo_migliore']) . "</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        $content = ob_get_contents();
        ob_end_clean();
    } else {
        echo '<tr><td colspan="3" class="text-danger">Nessun dato disponibile.</td></tr>';
    }

    $stm->closeCursor();
} catch (Exception $e) {
    echo '<tr><td colspan="3" class="text-danger">Errore durante il caricamento dei dati.</td></tr>';
}
?>
<?=$content?>
</table>
</div>
</div>
</div>
<?php require 'footer.php'; ?>