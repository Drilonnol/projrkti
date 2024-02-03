<?php
include_once 'lidhjaHotel.php';
include_once 'hotelsRepozitory.php';
session_start();
$dbConnection = new DatabaseConnectionii();
$conn = $dbConnection->startConnection();

$hotelsRepository = new HotelsRepository();
$hotels = $hotelsRepository->getAllHotels();




if (!isset($_SESSION['emri']) && !isset($_SESSION['email'])) {
    header("location: loginprovo.php");
    exit;
}

$isAdmin = ($_SESSION['email'] == 'drilo2020@gmail.com');
$isUser = ($_SESSION['email'] != 'drilo2020@gmail.com');
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
            justify-content: space-around;
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
        <?php if (!empty($hotel['img']) && file_exists($hotel['img'])) { ?>
            <img class="hotel-image" src="<?= $hotel['img'] ?>" alt="<?= htmlspecialchars($hotel['Emri']) ?>">
        <?php } else { ?>
            <p>Fotografia e disponueshme</p>
        <?php } ?>
        <h3><?= htmlspecialchars($hotel['Emri']) ?></h3>
        <p>Vendi: <?= htmlspecialchars($hotel['Vendi']) ?></p>
        <p>Koha Qendrimit: <?= htmlspecialchars($hotel['kohaQendrimit']) ?></p>
        <p>Qmimi: <?= htmlspecialchars($hotel['Qmimi']) ?></p>
        <p>Numri i Personave: <?= htmlspecialchars($hotel['Nrpersona']) ?></p>
          <?php if($isUser) {?>
            <button>Rezervo</button>
            <?php } ?>
        <?php if ($isAdmin) { ?>
            <a href='edithotel.php?id=<?php echo $hotel['id'] ?>'>EditHote</a>
            <a href='deletehotel.php?id=<?php echo $hotel['id'] ?>'>Delete</a>
        <?php } ?>
    </div>
<?php } ?>
</div>

</body>
</html>