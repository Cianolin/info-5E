<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero = $_POST['numero'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $nazionalita = $_POST['nazionalita'];
    $nome_casa = $_POST['nome_casa'];

    $query = 'UPDATE campionato.pilota SET ';
    $params = [];
    if (!empty($nome)) {
        $query .= 'nome = :nome';
        $params[':nome'] = $nome;
    }
    if (!empty($cognome)) {
        if (!empty($nome)) {
            $query .= ', ';
        }
        $query .= 'cognome = :cognome';
        $params[':cognome'] = $cognome;
    }
    if (!empty($nazionalita)) {
        if (!empty($nome) || !empty($cognome)) {
            $query .= ', ';
        }
        $query .= 'nazionalita = :nazionalita';
        $params[':nazionalita'] = $nazionalita;
    }
    if (!empty($nome_casa)) {
        if (!empty($nome) || !empty($cognome) || !empty($nazionalita)) {
            $query .= ', ';
        }
        $query .= 'nome_casa = :nome_casa';
        $params[':nome_casa'] = $nome_casa;
    }
    $query .= ' WHERE numero = :numero';
    $params[':numero'] = $numero;

    try {
        $stm = $db->prepare($query);
        foreach ($params as $key => $value) {
            $stm->bindValue($key, $value);
        }
        $stm->execute();
        echo "Record updated successfully";
    } catch (Exception $e) {
        echo "Error updating record: " . $e->getMessage();
    }
}
?>
<div class="container">
    <div class="ct_update">
        <form method="post" action="update_piloti.php">
            <h1>Update Pilota</h1>
            <div>
                <label for="numero">Numero (current):</label>
                <input type="number" name="numero" id="numero" required>
            </div>
            <div>
                <label for="nome">New Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="cognome">New Cognome:</label>
                <input type="text" name="cognome" id="cognome">
            </div>
            <div>
                <label for="nazionalita">New Nazionalità:</label>
                <input type="text" name="nazionalita" id="nazionalita">
            </div>
            <div>
                <label for="nome_casa">New Nome Casa:</label>
                <input type="text" name="nome_casa" id="nome_casa">
            </div>
            <button class="fs-5" type="submit">Update</button>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?><?php
