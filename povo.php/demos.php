<?php
include_once 'demoRepository.php';

$strep = new demoRepository();
$demos = $strep->getAllDemo();
session_start();

if (!isset($_SESSION['emri'])) {
   
    header("location: loginprovo.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<style>

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f4f4f4;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        margin-top: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        border-radius: 8px;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #333;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    a {
        text-decoration: none;
        color: #3498db;
        display: inline-block;
        padding: 6px 12px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    a:hover {
        background-color: #3498db;
        color: #fff;
    }
</style>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th> 
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