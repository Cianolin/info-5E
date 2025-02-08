<?php
require_once 'db.php';
$title='Read';
require 'header.php';
$query = 'SELECT * FROM libreria.libri';
try {
    $stm = $db->prepare($query);
    $stm->execute();
    ob_start();
    while ($libro = $stm->fetch(PDO::FETCH_OBJ)) {
        //creo le righe della tabella
        echo "<tr>";
        echo "<td>" . htmlspecialchars($libro->titolo) . "</td>";
        echo "<td>" . htmlspecialchars($libro->autore) . "</td>";
        echo "<td>" . htmlspecialchars($libro->genere) . "</td>";
        echo "<td>" . number_format($libro->prezzo, 2, ',', '.') . "</td>";
        echo "<td>" . htmlspecialchars($libro->anno_pubblicazione) . "</td>";
        echo "</tr>";
    }
    $content = ob_get_contents();
    ob_end_clean();

    $stm->closeCursor();
} catch (Exception $e) {

    logError($e);
    $content = '<tr><td colspan="6" class="text-danger">Errore durante il caricamento dei dati.</td></tr>';
}

?>

    <div class="">
        <div class="text-center">
            <h1 class="text-success"><strong>Libreria</strong></h1>
            <p class="lead">La libreria della Libreria</p>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered text-center">
                <thead class="table-dark">
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th>Genere</th>
                    <th>Prezzo (€)</th>
                    <th>Anno di Pubblicazione</th>
                </tr>
                </thead>
                <tbody>
                <?= $content; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
require 'footer.php';
?>