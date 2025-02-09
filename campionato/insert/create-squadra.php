<?php
require '../header.php';
require '../DBcon.php';
$config = require '../database.php';
$db = Dbcon::getDb($config);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $colore_livrea = $_POST['colore_livrea'];
    $query = '
                    INSERT INTO campionato.casa_automobilistica (nome, colore_livrea)
                    VALUES (:nome, :colore_livrea)
                ';
    try {
        $stm = $db->prepare($query);
        $stm->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stm->bindParam(':colore_livrea', $colore_livrea, PDO::PARAM_STR);
        $stm->execute();
        echo "Record inserted successfully";
    } catch (Exception $e) {
        echo "Error inserting record: " . $e->getMessage();
    }
}
?>
    <div class="container">
        <div class="ct_create">
            <form method="post" action="create%20squadra.php">
                <h1>Create</h1>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="colore_livrea">Colore livrea:</label>
                    <input type="text" name="colore_livrea" id="colore_livrea" required>
                </div>
                <button class="fs-5" type="submit">Carica</button>
            </form>
        </div>
    </div>
<?php require 'footer.php'; ?>