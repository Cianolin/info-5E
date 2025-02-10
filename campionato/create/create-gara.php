<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $circuito = $_POST['circuito'];
    $data_gara = $_POST['data_gara'];
    $query = '
    INSERT INTO campionato.gara (circuito, data_gara)
    VALUES (:circuito, :data_gara)
';
    try {
        $stm = $db->prepare($query);
        $stm->bindParam(':circuito', $circuito, PDO::PARAM_STR);
        $stm->bindParam(':data_gara', $data_gara, PDO::PARAM_STR);
        $stm->execute();
        echo "Record inserted successfully";
    } catch (Exception $e) {
        echo "Error inserting record: " . $e->getMessage();
    }
}
?>
<div class="container">
    <div class="ct_create">
        <form method="post" action="create_gara.php">
            <h1>Create Gara</h1>
            <div>
                <label for="circuito">Circuito:</label>
                <input type="text" name="circuito" id="circuito" required>
            </div>
            <div>
                <label for="data_gara">Data Gara:</label>
                <input type="date" name="data_gara" id="data_gara" required>
            </div>
            <button class="fs-5" type="submit">Carica</button>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>