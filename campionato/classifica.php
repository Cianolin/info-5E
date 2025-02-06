<?php
$title = 'Classifica';
require 'header.php';
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
    while ($pilota = $stm->fetch(PDO::FETCH_OBJ)) {
        // Crea le righe della tabella
        echo "<tr>";
        echo "<td>" . htmlspecialchars($pilota->nome) . "</td>";
        echo "<td>" . htmlspecialchars($pilota->cognome) . "</td>";
        echo "<td>" . htmlspecialchars($pilota->nazionalita) . "</td>";
        echo "<td>" . htmlspecialchars($pilota->numero) . "</td>";
        echo "<td>" . htmlspecialchars($pilota->totale_punti) . "</td>";
        echo "</tr>";
    }
    $content = ob_get_contents();
    ob_end_clean();

    $stm->closeCursor();
} catch (Exception $e) {
    logError($e);
    $content = '<tr><td colspan="5" class="text-danger">Errore durante il caricamento dei dati.</td></tr>';
}
?>
<div>
    <div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Gare</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Piloti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Squadre</a>
            </li>
        </ul>
    </div>
    <div class="">
        <div class="text-center">
            <h1 class="text-success"><strong>Classifica Piloti</strong></h1>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Nazionalità</th>
                        <th>Numero</th>
                        <th>Punti Totali</th>
                    </tr>
                </thead>
                <tbody>
                <?= $content; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require 'footer.php';
?>
