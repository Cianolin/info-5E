<?php
$patter='#abc#';
$subject='ciao';
$subject='ciabco';
$patter='#^abc#';//gli dico che deve cominciare con abc il subject
$subject='abcdefgh';
$patter='#abc$#';//marcatore di fine
$subject='ciao abc';
$subject='ciao ab';

if(preg_match($patter,$subject))
    echo 'match';
else
    echo 'no match';
$pattern='#a[123]bc#';
$pattern='#a[123]+bc#';//puo accettare piu numeri in un'unica stringa, basta che siano i numeri ricercati
$subject='a231bc';
$pattern='#a[123]*bc#';//dice che puo anche non avere numeri;
$subject='abc';
$pattern='#a[0-9]bc#';//cercai numeri da 0 a 9 senza avere inserito i numeri di mezzo
$subject='a7bc';
$pattern='#4[a-zA-Z]7#';
$subject='4g7';
echo '<br>';
if(preg_match($pattern, $subject))
    echo 'match';
else
    echo 'no match';

$subject='home/index/product';
//$pattern='#home/index/[a-z]#';
$pattern='#home/index/[a-z]+#';// fa i  match lo stesso. Ma senza il + prendo tutto

echo '<br>';
if(preg_match($pattern, $subject, ))
    echo 'match';
else
    echo 'no match';
echo '<br>';
if(preg_match($pattern, $subject, $matches)){
    echo 'match';
    var_dump($matches);

}
else{
    echo 'no match';

}
$subject1='home/index/temp/itis/venerdi';
$subject2='animali/cane/gatto';
$subject3='ora/minuto';
$subject4='/home/index/temp/itis/venerdi/ciao';//Taglio quelli oltre i 5. Lo riconosce come match ma dopo i 5 taglia fuori l'eccesso

$pattern='#(/[a-z]+){1,5}#';
echo "<br>";
if(preg_match($pattern, $subject1, $matches)){
    echo 'match';
    var_dump($matches);

}
else{
    echo 'no match';

}
echo "<br>";
if(preg_match($pattern, $subject2, $matches)){
    echo 'match';
    var_dump($matches);

}
else{
    echo 'no match';

}
echo "<br>";
if(preg_match($pattern, $subject3, $matches)){
    echo 'match';
    var_dump($matches);

}
else{
    echo 'no match';

}
echo "<br>";
if(preg_match($pattern, $subject4, $matches)){
    echo 'match';
    var_dump($matches);
    $result= explode("/", $matches[0]);
    echo count($result);
    var_dump($result);
    var_dump($matches);


}
else{
    echo 'no match';

}

