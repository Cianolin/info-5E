<?php
require '../DBcon.php'; // Include the database connection file
$config = require '../database.php'; // Load the database configuration
$db = Dbcon::getDb($config); // Get the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['n_pilota'])) {
    $n_pilota = $_POST['n_pilota'];

    $query = 'DELETE FROM campionato.pilota WHERE numero = :n_pilota';
    try {
        $stm = $db->prepare($query); // Prepare the SQL statement
        $stm->bindParam(':n_pilota', $n_pilota, PDO::PARAM_INT); // Bind the parameter
        $stm->execute(); // Execute the SQL statement

        if ($stm->rowCount() > 0) {
            $message = "Pilota eliminato con successo.";
        } else {
            $message = "Nessun pilota trovato con il numero specificato.";
        }
    } catch (Exception $e) {
        $message = "Errore durante l'eliminazione del pilota: " . $e->getMessage();
    }
} else {
    $message = "Numero pilota non specificato.";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elimina Pilota</title>
</head>
<body>
    <h1>Elimina Pilota</h1>
    <form method="post" action="">
        <label for="n_pilota">Numero Pilota:</label>
        <input type="number" id="n_pilota" name="n_pilota" required>
        <button type="submit">Elimina</button>
    </form>
    <?php if (isset($message)): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
</body>
</html>