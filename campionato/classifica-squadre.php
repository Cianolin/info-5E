<?php
require 'classifica.php';
require 'DBcon.php';
$config = require 'database.php';
$db = Dbcon::getDb($config);
    $query = '
    SELECT
        s.nome,
        s.colore_livrea,
        SUM(g.punteggio) AS totale_punti
    FROM
        campionato.casa_automobilistica s
    JOIN
        campionato.pilota p ON s.nome = p.nome_casa
    JOIN
        campionato.gareggia g ON p.numero = g.n_pilota
    GROUP BY
        s.nome,
        s.colore_livrea
    ORDER BY
        totale_punti DESC
';
try {
    $stm = $db->prepare($query);
    $stm->execute();
    // Controlla se ci sono risultati
    ob_start();
    echo '<thead class="table-dark">';
    echo '<tr>';
    echo '<th>Nome Squadra</th>';
    echo '<th>Colore Livrea</th>';
    echo '<th>Punti Totali</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($squadra = $stm->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($squadra['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($squadra['colore_livrea']) . "</td>";
        echo "<td>" . htmlspecialchars($squadra['totale_punti']) . "</td>";
        echo "</tr>";
    }
    echo '</tbody>';
    $content = ob_get_contents();
    ob_end_clean();
    $stm->closeCursor();
} catch (Exception $e) {
    $content = '<tr><td colspan="3" class="text-danger">Errore durante il caricamento dei dati.</td></tr>';
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