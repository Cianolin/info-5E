<?php
//$content='dati provenienti dal database';
require 'db.php';
require 'header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $genere = $_POST['genere'];
    $prezzo = $_POST['prezzo'];
    $anno_pubblicazione = $_POST['anno_pubblicazione'];
$title='Home';
    try {
        $query='INSERT INTO libreria.libri(titolo,autore,genere,prezzo,anno_pubblicazione) VALUES (:titolo,:autore,:genere,:prezzo,:anno_pubblicazione)';
        $stm=$db->prepare($query);
        $stm->bindValue(':titolo',$titolo);
        $stm->bindValue(':autore',$autore);
        $stm->bindValue(':genere',$genere);
        $stm->bindValue(':prezzo',$prezzo);
        $stm->bindValue(':anno_pubblicazione',$anno_pubblicazione);
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
            <form method="post" action="create.php">
                <h1>Create</h1>
                <div>
                    <label for="titolo">Titolo:</label>
                    <input type="text" name="titolo" id="titolo" required>
                </div>
                <div>
                    <label for="autore">Autore:</label>
                    <input type="text" name="autore" id="autore" required>
                </div>
                <div>
                    <label for="prezzo">Prezzo:</label>
                    <input type="text" name="prezzo" id="prezzo">
                </div>
                <div>
                    <label for="genere">Genere:</label>
                    <input type="text" name="genere" id="genere">
                </div>
                <div>
                    <label for="anno_pubblicazione">Anno pubblicazione:</label>
                    <input type="text" name="anno_pubblicazione" id="anno_pubblicazione" required>
                </div>
                <button type="submit">Carica</button>
            </form>
        </div>
    </div>
<?php
require 'footer.php';
?>