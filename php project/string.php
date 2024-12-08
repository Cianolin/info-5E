<?php
/*
strlen()
substr()
substr_replace()
trim()
ltrim()
rtrim()
stripslashes()
str_pad()
strpos()
strrpos()
stripos()
str_contains()
str_starts_with()
str_ends_with()
strToUpper()
strToLower()
ucfirst()
ucwords()
strrev()
str_shuffle()
str_repeat()
str_replace()
strcmp()
strcasecmp()
strnatcmp()
explode()
implode()
chr() - ord()
*/
$stringa= "Hello World";
echo $stringa."<br>";
// return the length of the string
echo strlen($stringa);
echo "<br>";
// return a part of the string
//the first number indicates the characters to skip
//the second number indicates the characters to print
echo substr($stringa, 4,5);
echo "<br>";
//replace am part of the string
echo substr_replace($stringa, "a", 1, 5);
echo "<br>";
//remove excess spaces from start to end
echo trim("         Hello Wor          ld    ");
echo "<br>";
//remove excess spaces
echo ltrim("  Hello, World         !           ");
echo "ciao";
echo "<br>";
//
echo rtrim("  Hello, World!  ");
echo "<br>";
// "Removes backslashes (\)
echo "Hello, \\ World!";
echo "<br>";
echo stripslashes("Hello, \\World!");
echo "<br>";
//Pads a string to a certain length with another string.
//if the sum if the two strings is longer than the length, print only a part
echo str_pad("Hello", 6, "World");
echo "<br>";
echo str_pad("Hello", 10, "World");
echo "<br>";
// print the position from which the search string starts
echo strpos("Hello, World!", "World");
echo "<br>";
//print the last position which the search string starts
echo strrpos("Hello, World! World!", "World");
echo "<br>";
// print the position from which the search string starts, the search isn't case-sensitive
echo stripos("Hello, World!World?", "world");
echo "<br>";
// Checks if a string contains a substring
echo str_contains("Hello,World!,World", "World");
echo "<br>";
// Checks if a string starts with a specified substring
echo str_starts_with("Hello, World!", "Hello");
echo "<br>";
// Checks if a string end with a specified substring
echo str_ends_with("Hello, World!", "World!");
echo "<br>";
//trasform the characters in the string in capital letters
echo strtoupper("Hello, World!");
echo "<br>";
//trasform the characters in the string in lower case letters
echo strtolower("Hello, World!");
echo "<br>";
//trasform the first letter in the string in a capital letter
echo ucfirst("hello, world!");
echo "<br>";
// trasform the first letter each word in the string
echo ucwords("hello, world!"); // Output: "Hello, World!"
echo "<br>";
//invert the string
echo strrev("Hello, World!");
echo "<br>";
//mix the letter in the string randomly
echo str_shuffle("Hello, World!");
echo "<br>";
// repeat the word for a certain number of times
echo str_repeat("Hello! ", 3);
echo "<br>";
//replace a word in your string with another word
//first string is which word you want to replace
//second string is the word replace that replace
echo str_replace("World", "PHP", "Hello, World!"); // Output: "Hello, PHP!"
echo "<br>";
//Comparres two stirng case-sensitive
echo strcmp("Hello", "hello");
echo "<br>";
//Comparres two stirng case-insensitive
echo strcasecmp("Hello", "hello");
echo "<br>";
//Comparres two stirng
echo strnatcmp("hello", "Hello");
echo "<br>";
//plits a string into an array based on a delimiter
print_r(explode(", ", "Hello, World, PHP"));
echo "<br>";
//merge an array into a string
echo implode(", ", ["Hello", "World", "PHP"]);
echo "<br>";
//Converts the number to letter, using the  ASCII table
echo chr(65);
echo "<br>";
//Converts the letter to number, using the  ASCII table
echo ord("A"); // Output: 65
echo "<br>";
