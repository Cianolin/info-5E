<?php
require '../DBcon.php'; // Include the database connection file
$config = require '../database.php'; // Load the database configuration
$db = Dbcon::getDb($config); // Get the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['circuito']) && isset($_POST['data_gara'])) {
    $circuito = $_POST['circuito'];
    $data_gara = $_POST['data_gara'];

    $query = 'DELETE FROM campionato.gara WHERE circuito = :circuito AND data_gara = :data_gara';
    try {
        $stm = $db->prepare($query); // Prepare the SQL statement
        $stm->bindParam(':circuito', $circuito, PDO::PARAM_STR); // Bind the circuito parameter
        $stm->bindParam(':data_gara', $data_gara, PDO::PARAM_STR); // Bind the data_gara parameter
        $stm->execute(); // Execute the SQL statement

        if ($stm->rowCount() > 0) {
            $message = "Gara eliminata con successo.";
        } else {
            $message = "Nessuna gara trovata con il circuito e la data specificati.";
        }
    } catch (Exception $e) {
        $message = "Errore durante l'eliminazione della gara: " . $e->getMessage();
    }
} else {
    $message = "Circuito o data gara non specificati.";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elimina Gara</title>
</head>
<body>
    <h1>Elimina Gara</h1>
    <form method="post" action="">
        <label for="circuito">Circuito:</label>
        <input type="text" id="circuito" name="circuito" required>
        <label for="data_gara">Data Gara:</label>
        <input type="date" id="data_gara" name="data_gara" required>
        <button type="submit">Elimina</button>
    </form>
    <?php if (isset($message)): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
</body>
</html>