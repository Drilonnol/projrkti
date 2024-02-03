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
            background-color: white;
            margin: 20px;
            font-family: Arial, sans-serif;
        }

        h2 {
            text-align: center;
        }
        p{
            text-align: start;
        }

        .hotel-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .hotel-card {
            border: 1px solid black;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: 300px;
            text-align: center;
        }

        .hotel-image {
            width: 300px;
            height:200px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        a{
            color:white;
        }
        button{
            background-color: blue;
            border-radius: 20px;
            height: 30px;
          margin-right: 30px;
          margin-left: 20px;
          width: 90px;
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
        <p>Vendi ku ndodhet hoteli eshte <?= htmlspecialchars($hotel['Vendi']) ?></p>
        <p>koha e qendrimit  <?= htmlspecialchars($hotel['kohaQendrimit']) ?> DAY</p>
        <p>Qmimi i rezervimit <?= htmlspecialchars($hotel['Qmimi']) ?>$</p>
        <p>Numri i Personave: <?= htmlspecialchars($hotel['Nrpersona']) ?></p>
          <?php if($isUser) {?>
            <form method="post" action="Regjistrimirez.php">
            <button><a href='Regjistrimirez.php?id=<?php echo $hotel['id'] ?>'>Rezervo</a></button>
            </form>
            <?php } ?>
        <?php if ($isAdmin) { ?>
            <br>
            <button><a href='edithotel.php?id=<?php echo $hotel['id'] ?>'>EditHote</a></button>
            <button><a href='deletehotel.php?id=<?php echo $hotel['id'] ?>'>Delete</a></button>
        <?php } ?>
    </div>
<?php } ?>
</div>

</body>
</html>