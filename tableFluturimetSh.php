<?php
include_once 'LidhjaBileta.php';

// keti krijohet nje  instance të Lidhjes me databasen
$db = new DatabaseConnectionii();
$conn = $db->startConnection();

// Kontrollojm a ekzisotn lidha
if ($conn) {
    echo "Connection successful!<br>";

    try {
        // i marrim te dhenat nga tablea e databasess
        $query = "SELECT * FROM fluturimet";
        $stmt = $conn->query($query);

        $pilotet = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // tabela
        echo "<table border='1'>";
        echo"</thead><th>id</th>";
        echo"<th>Emri</th>";
        echo"<th>Destinacioni</th>";
        echo "<th>Data</th></thead>";
        foreach ($pilotet as $piloti) {
            echo "<tr><td>{$piloti['id']}</td>";
            echo"<td>{$piloti['Emri']}</td>";
            echo"<td>{$piloti['Destinacioni']}</td>";
            echo"<td>{$piloti['Data']}</td>";

        }
        echo "</tbody></table>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Connection failed!";
}
?>