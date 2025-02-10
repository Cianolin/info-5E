<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $circuito = $_POST['circuito'];
    $nuova_data = $_POST['nuova_data'];
    $query = '
    UPDATE campionato.gara
    SET data_gara = :nuova_data
    WHERE circuito = :circuito
';
    try {
        $stm = $db->prepare($query);
        $stm->bindParam(':circuito', $circuito, PDO::PARAM_STR);
        $stm->bindParam(':nuova_data', $nuova_data, PDO::PARAM_STR);
        $stm->execute();
        echo "Record updated successfully";
    } catch (Exception $e) {
        echo "Error updating record: " . $e->getMessage();
    }
}
?>
<div class="container">
    <div class="ct_update">
        <form method="post" action="update_gara.php">
            <h1>Update Gara</h1>
            <div>
                <label for="circuito">Circuito:</label>
                <input type="text" name="circuito" id="circuito" required>
            </div>
            <div>
                <label for="nuova_data">Nuova Data:</label>
                <input type="date" name="nuova_data" id="nuova_data" required>
            </div>
            <button class="fs-5" type="submit">Aggiorna</button>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>