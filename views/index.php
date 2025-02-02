<?php
//$content='dati provenienti dal database';
$db= new PDO('mysql:host=localhost;dbname=itis','root','',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);//:: sto andato a prendere una constante
$query='SELECT * From studenti';
try{
    $stm=$db->prepare($query);
    $stm->execute();
    ob_start();
    while($studente=$stm->fetch()){
        echo 'Matricola: '.$studente->matricola_studente.'<br>';
        echo 'Nome: '.$studente->nome.'<br>';
        echo 'Cognome '.$studente->cognome.'<br>';
        echo 'Media: '.$studente->media.'<br>';
        echo 'Data iscrizione: '.$studente->data_iscrizione.'<br>';
        echo '<hr>';
    }
    $content=ob_get_contents();
    ob_end_clean();
    $stm->closeCursor();
}catch (Exception $e){
//echo  $e->getMessage();
    logError($e);
}
require 'header.php';
?>
<div>
    <p>Buongiorno</p>
    <p><?=/**@var $content*/$content?></p>


</div>
<?php
require 'footer.php';
?>