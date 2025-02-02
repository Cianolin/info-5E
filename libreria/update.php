<?php
//$content='dati provenienti dal database';
require 'db.php';
require 'header.php';
$title='Update';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titolo = $_POST['titolo'];
    $prezzo = $_POST['prezzo'];
    try {
        $query='UPDATE libri SET prezzo=:prezzo where titolo=:titolo';
        $stm=$db->prepare($query);
        $stm->bindValue(':titolo',$titolo);
        $stm->bindValue(':prezzo',$prezzo);
        $stm->execute();
        $stm->closeCursor();
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
    header( 'Location: confirm.html');
}
?>
    <div class="container">
        <div class="ct_create">
            <form method="post" action="update.php">
                <h1>Update</h1>
                <div>
                    <label for="titolo">Titolo:</label>
                    <input type="text" name="titolo" id="titolo" required>
                </div>
                <div>
                    <label for="prezzo">Prezzo:</label>
                    <input type="text" name="prezzo" id="prezzo">
                </div>
                <button type="submit">Carica</button>
            </form>
        </div>
    </div>
<?php
require 'footer.php';
?><?php
