<?php
require 'classifica.php';
require 'DBcon.php';
$config = require 'database.php';
$db = Dbcon::getDb($config);
/*$query = '
    SELECT
        p.nome,
        p.cognome,
        p.numero,
        p.nome_casa AS squadra,
        g.tempo_migliore,
        g.punteggio
    FROM
        campionato.pilota p
    JOIN
        campionato.gareggia g ON p.numero = g.n_pilota
    WHERE
        g.circuito = :circuito AND g.data_gara = :data_gara
    ORDER BY
        g.punteggio DESC
    ';
try {
    $stm = $db->prepare($query);
    $stm->bindParam(':circuito', $circuito);
    $stm->bindParam(':data_gara', $data_gara);
    $stm->execute();
    // Controlla se ci sono risultati
    if ($stm->rowCount() > 0) {
        ob_start();
        echo '<thead class="table-dark">';
        echo '<tr>';
        echo '<th>Nome</th>';
        echo '<th>Cognome</th>';
        echo '<th>Numero Pilota</th>';
        echo '<th>Squadra</th>';
        echo '<th>Tempo Gara</th>';
        echo '<th>Punti Guadagnati</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($pilota = $stm->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($pilota['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($pilota['cognome']) . "</td>";
            echo "<td>" . htmlspecialchars($pilota['numero']) . "</td>";
            echo "<td>" . htmlspecialchars($pilota['squadra']) . "</td>";
            echo "<td>" . htmlspecialchars($pilota['tempo_migliore']) . "</td>";
            echo "<td>" . htmlspecialchars($pilota['punteggio']) . "</td>";
            echo "</tr>";
        }
        echo '</tbody>';
        $content = ob_get_contents();
        ob_end_clean();
    } else {
        $content = '<tr><td colspan="6" class="text-danger">Nessun dato disponibile.</td></tr>';
    }
        $stm->closeCursor();
} catch (Exception $e) {
        logError($e);
        $content = '<tr><td colspan="6" class="text-danger">Errore durante il caricamento dei dati.</td></tr>';
}*/

?>
<?=$content?>
</table>
</div>
</div>
</div>
<?php
require 'footer.php';
?>
