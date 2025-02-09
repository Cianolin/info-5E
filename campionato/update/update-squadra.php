<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $new_nome = $_POST['new_nome'];
    $colore_livrea = $_POST['colore_livrea'];

    $query = 'UPDATE campionato.casa_automobilistica SET ';
    $params = [];
    if (!empty($new_nome)) {
        $query .= 'nome = :new_nome';
        $params[':new_nome'] = $new_nome;
    }
    if (!empty($colore_livrea)) {
        if (!empty($new_nome)) {
            $query .= ', ';
        }
        $query .= 'colore_livrea = :colore_livrea';
        $params[':colore_livrea'] = $colore_livrea;
    }
    $query .= ' WHERE nome = :nome';
    $params[':nome'] = $nome;

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
        <form method="post" action="update_squadra.php">
            <h1>Update Squadra</h1>
            <div>
                <label for="nome">Nome (current):</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="new_nome">New Nome:</label>
                <input type="text" name="new_nome" id="new_nome">
            </div>
            <div>
                <label for="colore_livrea">New Colore Livrea:</label>
                <input type="text" name="colore_livrea" id="colore_livrea">
            </div>
            <button class="fs-5" type="submit">Update</button>
        </form>
    </div>
</div>
<?php require 'footer.php'; ?><?php
