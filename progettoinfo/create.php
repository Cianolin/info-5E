<?php
//$content='dati provenienti dal database';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $genere = $_POST['genere'];
    $prezzo = $_POST['prezzo'];
    $anno_pubblicazione = $_POST['anno_pubblicazione'];



$title='Home';
$db= new PDO('mysql:host=localhost;dbname=libreria','root','',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);//:: sto andato a prendere una constante
/*$query='SELECT * From libri';
try{
    $stm=$db->prepare($query);
    $stm->execute();
    ob_start();
    while($libri=$stm->fetch()){
        echo '<p>';
        echo 'Titolo: '.$libri->titolo.'<br>';
        echo 'Autore: '.$libri->autore.'<br>';
        echo 'Genere '.$libri->genere.'<br>';
        echo 'Prezzo: '.$libri->prezzo.'<br>';
        echo 'Anno pubblicazione: '.$libri->anno_pubblicazione.'<br>';
        echo '</p>';
        echo '<hr>';
    }
    $content=ob_get_contents();
    ob_end_clean();
    $stm->closeCursor();
}catch (Exception $e){
//echo  $e->getMessage();
    logError($e);
}*/
$query='INSERT INTO libreria.libri(titolo,autore,genere,prezzo,anno_pubblicazione) VALUES (:titolo,:autore,:genere,:prezzo,:anno_pubblicazione)';
$stm=$db->prepare($query);
$stm->bindValue(':titolo',$titolo);
$stm->bindValue(':autore',$autore);
$stm->bindValue(':genere',$genere);
$stm->bindValue(':prezzo',$prezzo);
$stm->bindValue(':anno_pubblicazione',$anno_pubblicazione);
}
require 'header.php';
?>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
            </div>
            <div class="col ct_create">
                <form method="post">
                    <p>Titolo<input type="text" name="titolo" id="titolo" required></p><br>
                    Autore: <input type="text" name="autore" id="autore" required><br>
                    Genere: <input type="text" name="genere" id="genere" required><br>
                    Prezzo: <input type="text" name="prezzo" id="prezzo"><br>
                    Anno pubblicazione: <input type="text" name="anno_pubblicazione" id="anno_pubblicazione" required><br>
                </form>
                <button>Carica</button>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <div class="container">

    </div>
<?php
require 'footer.php';
?>