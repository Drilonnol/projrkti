<?php
session_start();
if (!isset($_SESSION['emri'])) {
    header("location: loginprovo.php");
    exit;
}
include_once 'RezervimReposidory.php';

$reservationRepository = new ReservationsRepository();
$reservations = $reservationRepository->getAllRezervimet();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
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
                <th>Mbiemri</th>
                <th>Email</th>
                <th>Nr Telefonit</th>
                <th>Adresa</th>
                <th>Hotel ID</th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation) { ?>
                <tr class="button">
                    <td><?php echo isset($reservation['id']) ? $reservation['id'] : ''; ?></td>
                    <td><?php echo isset($reservation['Emri']) ? $reservation['Emri'] : ''; ?></td>
                    <td><?php echo isset($reservation['Mbiemri']) ? $reservation['Mbiemri'] : ''; ?></td>
                    <td><?php echo isset($reservation['Email']) ? $reservation['Email'] : ''; ?></td>
                    <td><?php echo isset($reservation['NrTel']) ? $reservation['NrTel'] : ''; ?></td>
                    <td><?php echo isset($reservation['Address']) ? $reservation['Address'] : ''; ?></td>
                    <td><?php echo isset($reservation['hotel_id']) ? $reservation['hotel_id'] : ''; ?></td>
                  
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>