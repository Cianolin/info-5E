<?php
echo "hello world";
echo '<br>';
$myvar = 'ciao';
echo $myvar;
echo '<br>';

$cout=10;
$list_price=10.5;
$first_name='Bob';
$is_valid=true;
$microwave = 3.5e-12;
echo PHP_INT_MAX;
echo '<br>';
echo PHP_INT_MIN;
echo'<br>';
const PIGRECO= '3,1415926535897';
echo PIGRECO;
echo '<br>';

$a=0;
$b='0';
if ($a===$b)// indentity operator// == conversione
    echo 'sono uguali';
else
    echo 'sono diversi';
echo '<br>';
if(null==0)
    echo 'sono uguali';
else
    echo 'sono diversi';
echo'<br>';
if(isset($mySecondvar))//se viene set a null non punta a niente
    echo 'mySecondvar is set';
else
    echo 'mySecondvar is not set';
echo '<br>';
$mySecondvar=null;
if(is_null($mySecondvar))
    echo 'mySecondvar is null';
else
    echo 'mySecondvar is not set';
echo '<br>';
$myThirdvar=5;
if(empty($myThirdvar))
    echo 'mySecondvar is empty';
else
    echo 'mySecondvar is not empty';
echo '<br>';
/*statemenrs:
interations(while, do while, for loops, break and continue)
selection(if, else, switch, match,coalescing - spaceship)*/
/*match*/
$grade='J';
$message=match($grade){
    'A'=> 'letter A',
    'B'=> 'letter B',
    'C', 'D'=> 'letter B',
    default => 'other letters'
};
echo $message;
echo '<br>';
$subtotal=250;
$total=0;
$message1=match(true){
    $subtotal<=200 => $total=$subtotal*0.9,
    $subtotal>200 =>$total*0.8,
};
echo 'il totale è: '.$total.'<br>';

//conditional operator
$num1= 1000;
$num2=200;
$num1>$num2 ? $r='ok' :$r='ko';
echo $r.'<br>';

//coalescing operator
$num0=0;
$num3= $num0 ?? $num2;//num2 è il backup di num0
echo  $num3.'<br>';

//spaceship operator
echo $num1<=>$num2;
echo '<br>';

//strings
$language= 'PHP';
$message2='welcone to $language';
echo $message2;
echo '<br>';
$message2= "welcone to $language";
echo $message2;
echo '<br>';

$count=12;
$item= 'flower';
$message3="you have $count ${item}s";
echo $message3;