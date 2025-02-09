<?php
require '../DBcon.php'; // Include the database connection file
$config = require '../database.php'; // Load the database configuration
$db = Dbcon::getDb($config); // Get the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    $query = 'DELETE FROM campionato.casa_automobilistica WHERE nome = :nome';
    try {
        $stm = $db->prepare($query); // Prepare the SQL statement
        $stm->bindParam(':nome', $nome, PDO::PARAM_STR); // Bind the parameter
        $stm->execute(); // Execute the SQL statement

        if ($stm->rowCount() > 0) {
            $message = "Casa automobilistica eliminata con successo.";
        } else {
            $message = "Nessuna casa automobilistica trovata con il nome specificato.";
        }
    } catch (Exception $e) {
        $message = "Errore durante l'eliminazione della casa automobilistica: " . $e->getMessage();
    }
} else {
    $message = "Nome casa automobilistica non specificato.";
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elimina Casa Automobilistica</title>
</head>
<body>
    <h1>Elimina Casa Automobilistica</h1>
    <form method="post" action="">
        <label for="nome">Nome Casa Automobilistica:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Elimina</button>
    </form>
    <?php if (isset($message)): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
</body>
</html>