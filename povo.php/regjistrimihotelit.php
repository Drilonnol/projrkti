<?php
include_once 'Hotelets.php';
include_once 'hotelsRepozitory.php';
session_start();

if (!isset($_SESSION['emri'])) {
   
    header("location: loginprovo.php");
    exit;
}

if (isset($_POST['submitBtn'])) {
    
    $hotelId = uniqid();

    $emri = isset($_POST['emri']) ? htmlspecialchars($_POST['emri']) : null;
    $vendi = isset($_POST['vendi']) ? htmlspecialchars($_POST['vendi']) : null;
    $kohaQendrimit = isset($_POST['kohaQendrimit']) ? htmlspecialchars($_POST['kohaQendrimit']) : null;
    $qmimi = isset($_POST['qmimi']) ? htmlspecialchars($_POST['qmimi']) : null;
    $nrPersona = isset($_POST['nrPersona']) ? htmlspecialchars($_POST['nrPersona']) : null;

    $img = $_FILES['img']['name'];
    $tempImgPath = $_FILES['img']['tmp_name'];

    $hotel = new Hoteles($hotelId, $emri, $vendi, $kohaQendrimit, $qmimi, $nrPersona, $img);

    $hotelsRepository = new HotelsRepository();
    $hotelsRepository->insertHotel($hotel);

    header("location:hotelet.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="file"] {
            margin-top: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: grey;
            color: white;
            cursor: pointer;
            padding: 12px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="hotelId" value="<?php echo $hotelId; ?>">

        <label for="emri">Emri i hotelit:</label>
        <input type="text" name="emri" required>

        <label for="vendi">Vendi:</label>
        <input type="text" name="vendi" required>

        <label for="kohaQendrimit">Koha e qëndrimit:</label>
        <input type="text" name="kohaQendrimit" required>

        <label for="qmimi">Qmimi:</label>
        <input type="text" name="qmimi" required>

        <label for="nrPersona">Numri i personave:</label>
        <input type="text" name="nrPersona" required>

        <label for="img">Ngarko imazhin:</label>
        <input type="file" name="img">

        <input type="submit" name="submitBtn" value="Shto Hotel">
    </form>
</body>
</html>