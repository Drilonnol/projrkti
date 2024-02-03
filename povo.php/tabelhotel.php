<?php
session_start();
if (!isset($_SESSION['emri'])) {
    header("location: loginprovo.php");
    exit;
}
include_once 'hotelsRepozitory.php';

$strep = new HotelsRepository();
$hotel = $strep->getAllHotels();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table</title>
    <style>
    body {
            background-color: white;
            margin: 20px;
            font-family: Arial, sans-serif;
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

    div {
        margin-top: 20px;
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

    <div>
        <table>
            <thead>
                <tr class="button">
                    <th>ID</th>
                    <th>Emri</th>
                    <th>Vendi</th>
                    <th>Koha Qendrimit</th>
                    <th>Qmimi</th>
                    <th>Nr persona</th>
                    <th>Imazhi</th>
                    <th>Edit</th>
                    <th>Shtoje</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotel as $hote) { ?>
                    <tr class="button">
                        <td><?php echo isset($hote['id']) ? $hote['id'] : ''; ?></td>
                        <td><?php echo isset($hote['Emri']) ? $hote['Emri'] : ''; ?></td>
                        <td><?php echo isset($hote['Vendi']) ? $hote['Vendi'] : ''; ?></td>
                        <td><?php echo isset($hote['kohaQendrimit']) ? $hote['kohaQendrimit'] : ''; ?></td>
                        <td><?php echo isset($hote['Qmimi']) ? $hote['Qmimi'] : ''; ?></td>
                        <td><?php echo isset($hote['Nrpersona']) ? $hote['Nrpersona'] : ''; ?></td>
                        <td><?php echo isset($hote['img']) ? $hote['img'] : ''; ?></td>
                        <td><a href='edithotel.php?id=<?php echo $hote['id'] ?>'>EditHotel</a></td>
                        <td><a href="regjistrimihotelit.php?page=regjistrimihotelit">ShtoHotel</a></td>
                        <td><a href='deletehotel.php?id=<?php echo $hote['id'] ?>'>Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
