<?php
//$content='dati provenienti dal database';
require 'db.php';
require 'header.php';
$title='Delete';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titolo = $_POST['titolo'];

    try {
        $query='Delete from libri where titolo=:titolo';
        $stm=$db->prepare($query);
        $stm->bindValue(':titolo',$titolo);
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
            <form method="post" action="delete.php">
                <h1>Delete</h1>
                <div>
                    <label for="titolo">Titolo:</label>
                    <input type="text" name="titolo" id="titolo">
                </div>
                <div>
                    <label for="autore">Autore:</label>
                    <input type="text" name="autore" id="autore">
                </div>
                <button type="submit">Carica</button>
            </form>
        </div>
    </div>
<?php
require 'footer.php';
?>