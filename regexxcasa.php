<?php
$patter='#^info#';
$subject='informatica';
if(preg_match($patter,$subject,$matches)) {
    echo 'match';
}
else
    echo 'not match';
$subject='infarto';
echo '<br>';
if(preg_match($patter,$subject,$matches)){
    echo 'match';
}else{
    echo 'not match';
}
echo '<br>';
$patter='#atica$#';
$subject='matematica';
if(preg_match($patter,$subject,$matches)){
    echo 'match';
}else{
    echo 'not match';
}
echo '<br>';
$patter='#[0-5]#';
$subject='fisi3ca';
if(preg_match($patter,$subject,$matches)){
    echo 'match';
}else{
    echo 'not match';
}
echo '<br>';
$patter='#[x,y,z,]#';
$subject='matematixa';
if(preg_match($patter,$subject,$matches)){
    echo 'match';
}else{
    echo 'not match';
}
echo '<br>';
$patter = '#[http,https]://www.iisviolamarchesini.edu.it/[a-zA-Z0-9]+#';
$subject='iisviolamarchesini';
if(preg_match($patter,$subject,$matches)){
    echo 'match';
}else{
    echo 'not match';
}
echo '<br>';
$subject = 'https://iisviolamarchesini.edu.it/CIAO';
if (preg_match($patter, $subject, $matches)) {
    echo 'match';
} else {
    echo 'not match';
}

echo '<br>';
$patter = '#home/index/([0-9]+)$#';
$subject = 'home/index/123';
if (preg_match($patter, $subject, $matches)) {
    echo 'match';
    var_dump($matches);
} else {
    echo 'not match';
}
echo '<br>';
$pattern='#([^/]=/){2,4}$]#';
$subject1='home/index/temp/itis/venerdi/';
$subject2='/animali/cane/gatto/';
$subject3='ora/minuto/';
$subject4='home/index/temp/itis/venerdi/ciao';
if(preg_match($pattern,$subject1,$matches)){
    echo 'match';
    var_dump($matches);
}else
    echo 'not match';
echo '<br>';
if(preg_match($pattern,$subject2,$matches)){
    echo 'match';
    var_dump($matches);
}else
    echo 'not match';
echo '<br>';
if(preg_match($pattern,$subject3,$matches)){
    echo 'match';
    var_dump($matches);
}else
    echo 'not match';
echo '<br>';
if(preg_match($pattern,$subject4,$matches)){
    echo 'match';
    var_dump($matches);
}else
    echo 'not match';
echo '<br>';