<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $nazionalita = $_POST['nazionalita'];
    $numero = $_POST['numero'];
    $nome_casa = $_POST['nome_casa'];
    $query = '
    INSERT INTO campionato.pilota (nome, cognome, nazionalita, numero, nome_casa)
    VALUES (:nome, :cognome, :nazionalita, :numero, :nome_casa)
';
    try {
        $stm = $db->prepare($query);
        $stm->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stm->bindParam(':cognome', $cognome, PDO::PARAM_STR);
        $stm->bindParam(':nazionalita', $nazionalita, PDO::PARAM_STR);
        $stm->bindParam(':numero', $numero, PDO::PARAM_INT);
        $stm->bindParam(':nome_casa', $nome_casa, PDO::PARAM_STR);
        $stm->execute();
        echo "Record inserted successfully";
    } catch (Exception $e) {
        echo "Error inserting record: " . $e->getMessage();
    }
}
?>
<div class="container">
    <div class="ct_create">
        <form method="post" action="create_pilota.php">
            <h1>Create</h1>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="cognome">Cognome:</label>
                <input type="text" name="cognome" id="cognome" required>
            </div>
            <div>
                <label for="nazionalita">Nazionalità:</label>
                <input type="text" name="nazionalita" id="nazionalita" required>
            </div>
            <div>
                <label for="numero">Numero:</label>
                <input type="number" name="numero" id="numero" required>
            </div>
            <div>
                <label for="nome_casa">Nome Casa:</label>
                <input type="text" name="nome_casa" id="nome_casa" required>
            </div>
            <button class="fs-5" type="submit">Carica</button>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?>