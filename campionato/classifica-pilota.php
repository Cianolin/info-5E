<?php
require 'classifica.php';
require 'DBcon.php';
$config = require 'database.php';
$db = Dbcon::getDb($config);

$query = '
   SELECT
        p.nome,
        p.cognome,
        p.nazionalita,
        p.numero,
        SUM(g.punteggio) AS totale_punti
    FROM
        campionato.pilota p
    LEFT JOIN
        campionato.gareggia g ON p.numero = g.n_pilota
    GROUP BY
        p.nome,
        p.cognome,
        p.nazionalita,
        p.numero
    ORDER BY
        totale_punti DESC
';

try {
    $stm = $db->prepare($query);
    $stm->execute();

    ob_start();
    echo '<thead class="table-dark">';
    echo '<tr>';
    echo '<th>Nome</th>';
    echo '<th>Cognome</th>';
    echo '<th>Nazionalità</th>';
    echo '<th>Numero</th>';
    echo '<th>Punti Totali</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($pilota = $stm->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($pilota['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($pilota['cognome']) . "</td>";
        echo "<td>" . htmlspecialchars($pilota['nazionalita']) . "</td>";
        echo "<td>" . htmlspecialchars($pilota['numero']) . "</td>";
        echo "<td>" . htmlspecialchars($pilota['totale_punti']) . "</td>";
        echo "</tr>";
    }
    echo '</tbody>';
    $content = ob_get_contents();
    ob_end_clean();
    $stm->closeCursor();
} catch (Exception $e) {
    $content = '<tr><td colspan="5" class="text-danger">Errore durante il caricamento dei dati: ' . htmlspecialchars($e->getMessage()) . '</td></tr>';
}
?>
<?=/**@var $content*/ $content; ?>
</table>
</div>
</div>
</div>
<?php
require 'footer.php';
?>
