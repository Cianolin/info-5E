<?php
// range()
$numbers = range(1, 10);
print_r($numbers);

// array_fill()
$array = array_fill(0, 5, 'foo');
print_r($array);

// array_pad()
$padded_array = array_pad([1, 2], 5, 0);
print_r($padded_array);

// array_merge()
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
$merged_array = array_merge($array1, $array2);
print_r($merged_array);

// array_slice()
$sliced_array = array_slice($merged_array, 2, 3);
print_r($sliced_array);

// array_pop()
array_pop($array1); // Rimuove l'ultimo elemento
print_r($array1);

// array_shift()
array_shift($array2); // Rimuove il primo elemento
print_r($array2);

// array_sum()
$sum = array_sum($numbers);
echo $sum;

// in_array()
$exists = in_array(3, $numbers);
echo $exists ? 'Trovato' : 'Non trovato';

// array_search()
$index = array_search('b', $array1);
echo $index !== false ? "Trovato a $index" : 'Non trovato';

// array_count_values()
$counts = array_count_values(['a', 'b', 'a', 'c', 'b', 'a']);
print_r($counts);

// sort()
sort($array1);
print_r($array1);

// rsort()
rsort($array2);
print_r($array2);

// Associative array

// asort()
$assoc_array = ['c' => 3, 'b' => 2, 'a' => 1];
asort($assoc_array);
print_r($assoc_array);

// arsort()
arsort($assoc_array);
print_r($assoc_array);

// ksort()
ksort($assoc_array);
print_r($assoc_array);

// krsort()
krsort($assoc_array);
print_r($assoc_array); 