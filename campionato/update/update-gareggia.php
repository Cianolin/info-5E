<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n_pilota = $_POST['n_pilota'];
    $circuito = $_POST['circuito'];
    $data_gara = $_POST['data_gara'];
    $punteggio = $_POST['punteggio'];
    $tempo_migliore = $_POST['tempo_migliore'];
    $query = '
    UPDATE campionato.gareggia
    SET punteggio = :punteggio, tempo_migliore = :tempo_migliore
    WHERE n_pilota = :n_pilota AND circuito = :circuito AND data_gara = :data_gara
';
    try {
        $stm = $db->prepare($query);
        $stm->bindParam(':n_pilota', $n_pilota, PDO::PARAM_INT);
        $stm->bindParam(':circuito', $circuito, PDO::PARAM_STR);
        $stm->bindParam(':data_gara', $data_gara, PDO::PARAM_STR);
        $stm->bindParam(':punteggio', $punteggio, PDO::PARAM_INT);
        $stm->bindParam(':tempo_migliore', '00:'.$tempo_migliore, PDO::PARAM_STR);
        $stm->execute();
        echo "Record updated successfully";
    } catch (Exception $e) {
        echo "Error updating record: " . $e->getMessage();
    }
}
?>
<div class="container">
    <div class="ct_update">
        <form method="post" action="update_gareggia.php">
            <h1>Update Gareggia</h1>
            <div>
                <label for="n_pilota">Numero Pilota:</label>
                <input type="number" name="n_pilota" id="n_pilota" required>
            </div>
            <div>
                <label for="circuito">Circuito:</label>
                <input type="text" name="circuito" id="circuito" required>
            </div>
            <div>
                <label for="data_gara">Data Gara:</label>
                <input type="date" name="data_gara" id="data_gara" required>
            </div>
            <div>
                <label for="punteggio">Punteggio:</label>
                <input type="number" name="punteggio" id="punteggio" required>
            </div>
            <div>
                <label for="tempo_migliore">Tempo Migliore:</label>
                <input type="text" pattern="[0-5][0-9]:[0-5][0-9]\.?([0-9]){0-3}"  name="tempo_migliore" id="tempo_migliore" required>
            </div>
            <button class="fs-5" type="submit">Aggiorna</button>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>