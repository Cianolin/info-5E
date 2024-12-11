<?php
// Ottieni la directory corrente di lavoro
echo getcwd();

// Separatore di directory
echo DIRECTORY_SEPARATOR;

// Controlla se un file esiste
$file = 'example.txt';
if (is_file($file)) {
    echo "$file è un file";
}

// Controlla se una directory esiste
$dir = 'example_dir';
if (is_dir($dir)) {
    echo "$dir è una directory";
}

// Scansiona una directory
$files = scandir($dir);
print_r($files);

// Leggi il contenuto di un file
$content = file_get_contents($file);
echo $content;

// Scrivi contenuto in un file
file_put_contents('example.txt', 'Hello, world!');

// Copia un file
copy('example.txt', 'example_copy.txt');

// Rinomina un file
rename('example_copy.txt', 'renamed_example.txt');

// Cancella un file
unlink('renamed_example.txt');

// Elaborare grandi quantità di dati
$handle = fopen('largefile.txt', 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // Elabora la linea
        echo $line;
    }
    fclose($handle);
}

// Scrivere su un file
$handle = fopen('output.txt', 'w');
fwrite($handle, "Nuovo contenuto\n");
fclose($handle);

// Verifica della fine del file
$handle = fopen('largefile.txt', 'r');
while (!feof($handle)) {
    $line = fgets($handle);
    echo $line;
}
fclose($handle);

