<?php
require 'conectionnew.php';


$query = "SELECT * FROM Hotelet";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    ?>
    <html>
    <head>
        <title>Hotel Dashboard</title>
    </head>
    <body>
        <h2>Hotel Bookings</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Email</th>
                <th>Telefoni</th>
                <th>Data Fillimit</th>
                <th>Data Mbarimit</th>
                <th>Tipi Dhomes</th>
                <th>Zgjedh Hotelin</th>
                <th>Qmimi</th>
            </tr>
            <?php
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['ID']}</td>";
                echo "<td>{$row['emri']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['telefoni']}</td>";
                echo "<td>{$row['datafillimit']}</td>";
                echo "<td>{$row['datambarimit']}</td>";
                echo "<td>{$row['tipi_dhomes']}</td>";
                echo "<td>{$row['zgjedhehotelin']}</td>";
                echo "<td>{$row['qmimi']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
    </html>
    <?php
} else {
    echo "No data found in the database.";
}


mysqli_close($conn);
?>