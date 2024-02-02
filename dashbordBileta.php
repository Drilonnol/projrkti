<?php
include_once 'BiletaRepozitory.php';

$strep = new BiletaRepository();
$demos = $strep->getAllBileta();

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th> <!-- Add ID column -->
                <th>Emri</th>
                <th>Nga</th>
                <th>Deri</th>
                <th>Data</th>
                <th>NrPasagjerve</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($demos as $demo) { ?>
            <tr>
                <td><?php echo isset($demo['id']) ? $demo['id'] : ''; ?></td>
                <td><?php echo isset($demo['Bileta']) ? $demo['Bileta'] : ''; ?></td>
                <td><?php echo isset($demo['Nga']) ? $demo['Nga'] : ''; ?></td>
                <td><?php echo isset($demo['Deri']) ? $demo['Deri'] : ''; ?></td>
                <td><?php echo isset($demo['Data']) ? $demo['Data'] : ''; ?></td>
                <td><?php echo isset($demo['Nr_Biletave']) ? $demo['Nr_Biletave'] : ''; ?></td>
                <td><a href='editdemo.php?id=<?php echo $demo['id'] ?>'>Edit</a></td>
                <td><a href='deletedemo.php?id=<?php echo $demo['id'] ?>'>Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>