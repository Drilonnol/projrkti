<?php
include_once 'lidhjaHotel.php';
include_once 'hotelsRepozitory.php';

$dbConnection = new DatabaseConnectionii();
$conn = $dbConnection->startConnection();

$hotelsRepository = new HotelsRepository();
$hotels = $hotelsRepository->getAllHotels();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista e Hoteleve</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        .hotel-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .hotel-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: 200px;
            text-align: center;
        }

        .hotel-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2>Lista e Hoteleve</h2>

<div class="hotel-container">
    <?php foreach ($hotels as $hotel) { ?>
        <div class="hotel-card">
            <img class="hotel-image" src="<?= $hotel['img'] ?>" alt="<?= $hotel['Emri'] ?>">
            <h3><?= $hotel['Emri'] ?></h3>
            <p>Vendi: <?= $hotel['Vendi'] ?></p>
            <p>Koha Qendrimit: <?= $hotel['kohaQendrimit'] ?></p>
            <p>Qmimi: <?= $hotel['Qmimi'] ?></p>
            <p>Numri i Personave: <?= $hotel['Nrpersona'] ?></p>
           
        </div>
    <?php } ?>
</div>

</body>
</html>