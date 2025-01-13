<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo DBMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="risultati.php" method="post">
    <h1>Modulo DBMS</h1>

    <h2>Dati dell'Utente</h2>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="cognome">Cognome:</label>
    <input type="text" id="cognome" name="cognome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <h2>Domande sui DBMS</h2>

    <label>1. Quale tra questi è un DBMS?</label><br>
    <input type="radio" id="mysql" name="domanda1" value="MySQL" required>
    <label for="mysql">MySQL</label><br>
    <input type="radio" id="oracle" name="domanda1" value="Oracle">
    <label for="oracle">Oracle</label><br>
    <input type="radio" id="excel" name="domanda1" value="Excel">
    <label for="excel">Excel</label><br>

    <label>2. Quali di questi sono DBMS? (puoi selezionare più opzioni)</label><br>
    <input type="checkbox" id="postgres" name="domanda2[]" value="PostgreSQL">
    <label for="postgres">PostgreSQL</label><br>
    <input type="checkbox" id="mssql" name="domanda2[]" value="SQL Server">
    <label for="mssql">SQL Server</label><br>
    <input type="checkbox" id="sqlite" name="domanda2[]" value="SQLite">
    <label for="sqlite">SQLite</label><br>

    <label>3. Spiega brevemente cos'è un DBMS:</label><br>
    <textarea id="domanda3" name="domanda3" rows="4" cols="50" required></textarea><br>

    <label>4. Qual è la principale funzione di un DBMS?</label><br>
    <textarea id="domanda4" name="domanda4" rows="4" cols="50" required></textarea><br>

    <label>5. Quali sono i vantaggi di utilizzare un DBMS rispetto a un sistema di file tradizionale?</label><br>
    <select id="domanda5" name="domanda5" required>
        <option value="">Seleziona un'opzione</option>
        <option value="sicurezza">Maggiore sicurezza dei dati</option>
        <option value="ridondanza">Riduzione della ridondanza</option>
        <option value="gestione">Facilità di gestione</option>
    </select><br>

    <input type="submit" value="Invia">
</form>
<script src="scripts.js"></script>
</body>
</html>
