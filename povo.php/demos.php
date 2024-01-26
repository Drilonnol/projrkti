<?php
include_once 'demoRepository.php';

$strep = new demoRepository();
$demos = $strep->getAllDemo();

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
                <th>Emaili</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($demos as $demo) { ?>
            <tr>
                <td><?php echo isset($demo['id']) ? $demo['id'] : ''; ?></td>
                <td><?php echo isset($demo['Emri']) ? $demo['Emri'] : ''; ?></td>
                <td><?php echo isset($demo['Email']) ? $demo['Email'] : ''; ?></td>
                <td><?php echo isset($demo['Password']) ? $demo['Password'] : ''; ?></td>
                <td><a href='editdemo.php?id=<?php echo $demo['id'] ?>'>Edit</a></td>
                <td><a href='deletedemo.php?id=<?php echo $demo['id'] ?>'>Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>