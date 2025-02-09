<?php
require '../header.php'; // Include the header file
require '../DBcon.php'; // Include the database connection file
$config = require '../database.php'; // Load the database configuration
$db = Dbcon::getDb($config); // Get the database connection

// Query to select all races
$query = 'SELECT circuito, data_gara FROM campionato.gara';
try {
    $stm = $db->prepare($query); // Prepare the SQL statement
    $stm->execute(); // Execute the SQL statement
    $gare = $stm->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array
} catch (Exception $e) {
    echo "Error fetching races: " . $e->getMessage(); // Display an error message if the query fails
}
?>
<div class="container">
    <h1>Gare</h1>
    <ul>
        <?php foreach ($gare as $gara): ?>
            <!-- Create a link for each race that redirects to add_partecipanti.php with the race details as query parameters -->
            <li>
                <a href="add_partecipanti.php?circuito=<?= urlencode($gara['circuito']) ?>&data_gara=<?= urlencode($gara['data_gara']) ?>">
                    <?= htmlspecialchars($gara['circuito']) ?> - <?= htmlspecialchars($gara['data_gara']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php require 'footer.php'; // Include the footer file ?>