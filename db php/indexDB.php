<?php
$db= new PDO('mysql:host=localhost;dbname=itis','root','',
    [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]);//:: sto andato a prendere una constante
//var_dump($db);
//echo $db->getAttribute(PDO::ATTR_DRIVER_NAME);

//read

$query='SELECT * From studenti';
try{
    $stm=$db->prepare($query);
    $stm->execute();
    while($studente=$stm->fetch()){
        echo 'Matricola: '.$studente->matricola_studente.'<br>';
        echo 'Nome: '.$studente->nome.'<br>';
        echo 'Cognome '.$studente->cognome.'<br>';
        echo 'Media: '.$studente->media.'<br>';
        echo 'Data iscrizione: '.$studente->data_iscrizione.'<br>';
        echo '<hr>';
    }
    $stm->closeCursor();
}catch (Exception $e){
//echo  $e->getMessage();
    logError($e);
}
//READ
/*
$query='SELECT media,cognome From studenti where nome=:name';
try{
    $stm=$db->prepare($query);
    $stm->bindValue(':name','Antonella');
    $stm->execute();
    while($studente=$stm->fetch()){
        echo 'Cognome '.$studente->cognome.'<br>';
        echo 'Media: '.$studente->media.'<br>';
        echo '<hr>';
    }
    $stm->closeCursor();
}catch (Exception $e){
//echo  $e->getMessage();
    logError($e);
}
*/
//create
/*
$query='INSERT INTO studenti(matricola_studente , nome, cognome, media, data_iscrizione) VALUES(:matricola_studente ,:nome,:cognome,:media,NOW())';
try{
$stm=$db->prepare($query);
$stm->bindValue(':matricola_studente', '00010');
$stm->bindValue(':nome','Lucy');
$stm->bindValue(':cognome','Taylor');
$stm->bindValue(':media',8);
if($stm->execute())
    $stm->closeCursor();
else
    throw new PDOException('Errore nella query');
}catch (Exception $e){
    logError($e);
}
*/
//update
/*
$query='UPDATE studenti SET media=:media where =:nome';
try{
    $stm=$db->prepare($query);
    $stm->bindValue(':nome','Lucy');
    $stm->bindValue(':media',10);
    if($stm->execute())
        $stm->closeCursor();
    else
        throw new PDOException('Errore nella query');
}catch (Exception $e){
    logError($e);
}
*/
//delete
$query='Delete from studenti where nome=:nome';
try{
    $stm=$db->prepare($query);
    $stm->bindValue(':nome','Lucy');
    if($stm->execute())
        $stm->closeCursor();
    else
        throw new PDOException('Errore nella query');
}catch (Exception $e){
    logError($e);
}
function logError(Exception $e){
    error_log($e->getMessage().'----'.date('Y-m-d H-i-s'."\n"),3,'log/database_log');
    echo 'DB error occured. Please try again';
}