<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Risultati</h1>
<?php
$risposte_corrette = [
    'domanda1' => 'MySQL',
    'domanda2' => ['PostgreSQL', 'SQL Server', 'SQLite'],
    'domanda5' => [
        'Maggiore sicurezza dei dati',
        'Riduzione della ridondanza',
        'Facilità di gestione'
    ]
];

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$domanda1 = $_POST['domanda1'];
$domanda2 = $_POST['domanda2'] ?? [];
$domanda3 = $_POST['domanda3'];
$domanda4 = $_POST['domanda4'];
$domanda5 = $_POST['domanda5'];

echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Cognome:</strong> $cognome</p>";
echo "<p><strong>Email:</strong> $email</p>";

echo "<h2>Domande sui DBMS</h2>";

// Domanda 1
echo "<p>1. Quale tra questi è un DBMS?</p>";
if ($domanda1 == $risposte_corrette['domanda1']) {
    echo "<p style='color:green;'>$domanda1 ✓</p>";
} else {
    echo "<p style='color:red;'>$domanda1 ✗</p>";
}

// Domanda 2
echo "<p>2. Quali di questi sono DBMS?</p>";
$corretti = $risposte_corrette['domanda2'];
foreach ($domanda2 as $risposta) {
    if (in_array($risposta, $corretti)) {
        echo "<p style='color:green;'>$risposta ✓</p>";
    } else {
        echo "<p style='color:red;'>$risposta ✗</p>";
    }
}

// Domanda 3
echo "<p>3. Spiega brevemente cos'è un DBMS:</p>";
echo "<p>$domanda3</p>";

// Domanda 4
echo "<p>4. Qual è la principale funzione di un DBMS?</p>";
echo "<p>$domanda4</p>";

// Domanda 5
echo "<p>5. Quali sono i vantaggi di utilizzare un DBMS rispetto a un sistema di file tradizionale?</p>";
if (in_array($domanda5, $risposte_corrette['domanda5'])) {
    echo "<p style='color:green;'>$domanda5 ✓</p>";
} else {
    echo "<p style='color:red;'>$domanda5 ✗</p>";
    echo "<p><strong>Risposta corretta:</strong> " . implode(', ', $risposte_corrette['domanda5']) . "</p>";
}

// Analisi del testo
$analizzaTesto = function($testo) {
    return [
        'parole' => str_word_count($testo),
        'caratteri' => strlen($testo),
        'vocali' => preg_match_all('/[aeiouAEIOUàèéìòù]/', $testo),
        'consonanti' => strlen(preg_replace('/[^bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', '', $testo)),
        'numeri' => preg_match_all('/[0-9]/', $testo)
    ];
};

$analisi3 = $analizzaTesto($domanda3);
echo "<p>Analisi del testo della risposta aperta (Domanda 3):</p>";