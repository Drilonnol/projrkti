<?php
include_once 'demoRepository.php';

$demoRepository = new demoRepository();
$demos = $demoRepository->getAllDemo();
session_start();
if (!isset($_SESSION['emri'])) {
    header("location: loginprovo.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista e Demove</title>
    <style>
        body {
            background-color: white;
            margin: 20px;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid grey;
        }

        th {
            background-color: lightgrey;
        }

        tr:hover {
            background-color: lightgray;
        }

        .button a {
            padding: 5px 10px;
            border: 1px solid black;
            background-color: lightgray;
            color: black;
            border-radius: 3px;
            display: inline-block;
            margin: 5px;
        }

        @media screen and (max-width: 768px) {
            th, td {
                display: block;
                width: 100%;
               
            }

        }
    </style>

</head>

<body>
    <h2>Lista e Demove</h2>
    <table>
        <thead>
            <tr class="button">
                <th>ID</th>
                <th>Emri</th>
                <th>Emaili</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demos as $demo) : ?>
                <tr class="button">
                    <td><?= isset($demo['id']) ? $demo['id'] : ''; ?></td>
                    <td><?= isset($demo['Emri']) ? $demo['Emri'] : ''; ?></td>
                    <td><?= isset($demo['Email']) ? $demo['Email'] : ''; ?></td>
                    <td><?= isset($demo['Password']) ? $demo['Password'] : ''; ?></td>
                    <td><a href='editdemo.php?id=<?= $demo['id'] ?>'>Edit</a></td>
                    <td><a href='deletedemo.php?id=<?= $demo['id'] ?>'>Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>