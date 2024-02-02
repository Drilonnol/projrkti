<?php
require 'conectionnew.php';
$query_rezervime = "SELECT * FROM Hotelet";
$result_rezervime = mysqli_query($conn, $query_rezervime);





$query_rezervime = "SELECT * FROM Hotelet";
$result_rezervime = mysqli_query($conn, $query_rezervime);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rezervimet</title>
    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


<div class="rezervimet">
    <h3>Rezervimet</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Email</th>
            <th>Telefoni</th>
            <th>Data e Fillimit</th>
            <th>Data e Mbarimit</th>
            <th>Tipi i Dhomes</th>
            <th>Hotel</th>
            <th>Qmimi</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result_rezervime)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['Emri']}</td>";
            echo "<td>{$row['Email']}</td>";
            echo "<td>{$row['Telefoni']}</td>";
            echo "<td>{$row['Data_Fillimit']}</td>";
            echo "<td>{$row['Data_Mbarimit']}</td>";
            echo "<td>{$row['Tipi_i_Dhomes']}</td>";
            echo "<td>{$row['Vendi-HOTELI']}</td>";
            echo "<td>{$row['Cmimi-i-Zgjedhur']}</td>";


            echo "</tr>";
        }
       
        ?>

    </table>
</div>

</body>
</html>