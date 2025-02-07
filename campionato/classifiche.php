<?php
require 'function.php';
function Piloti($db)
{
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

        // Controlla se ci sono risultati
        if ($stm->rowCount() > 0) {
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
        } else {
            $content = '<tr><td colspan="5" class="text-danger">Nessun dato disponibile.</td></tr>';
        }

        $stm->closeCursor();
    } catch (Exception $e) {
        logError($e);
        $content = '<tr><td colspan="5" class="text-danger">Errore durante il caricamento dei dati.</td></tr>';
    }

    return $content;
}
?>
