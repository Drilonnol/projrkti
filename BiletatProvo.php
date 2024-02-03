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
        $query = "SELECT * FROM biletateshtypura";
        $merr = $conn->query($query);

        $biletat = $merr->fetchAll(PDO::FETCH_ASSOC);
        echo"<h1>Biletat qe shtypen ne Projekt</h1>";
        // tabela
        echo "<table border='1'>";
        echo"</thead><th>id</th>";
        echo"<th>Bileta</th>";
        echo"<th>Nga</th>";
        echo"<th>Deri</th>";
        echo "<th>Data</th>";
        echo"<th>Nr-Biletave</th></thead>";
        foreach ($biletat as $bileta) {
            echo "<tr><td>{$bileta['id']}</td>";
            echo"<td>{$bileta['Bileta']}</td>";
            echo"<td>{$bileta['Nga']}</td>";
            echo"<td>{$bileta['Deri']}</td>";
            echo"<td>{$bileta['Data']}</td>";
            echo"<td>{$bileta['Nr_Biletave']}</td>";

        }
        echo "</tbody></table>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Connection failed!";
}
?>