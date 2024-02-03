<?php
include_once 'lidhjaHotel.php';
include_once 'hotelsRepozitory.php';
session_start();
if (!isset($_SESSION['emri'])) {
   
    header("location: loginprovo.php");
    exit;
}
if (isset($_POST['editBtn'])) {
    $hotelId = $_POST['hotelId'];
    $hotelName = $_POST['hotelName'];
    $location = $_POST['vendi'];
    $checkInTime = $_POST['kohaQendrimit'];
    $price = $_POST['qmimi'];
    $capacity = $_POST['nrPersona'];

    
    $newImagePath = null;

    if ($_FILES['img']['size'] > 0) {
        $targetDirectory = 'uploads/'; 
        $newImagePath = $targetDirectory . basename($_FILES['img']['name']);
        
        if (move_uploaded_file($_FILES['img']['tmp_name'], $newImagePath)) {
            echo "<script>alert('Imazhi u ngarkua me sukses.')</script>";
        } else {
            echo "<script>alert('Gabim gjatë ngarkimit të imazhit.')</script>";
        }
    }

    $hotelRepo = new HotelsRepository();
    $hotelRepo->updateHotelUsingQuery($hotelId, $hotelName, $location, $checkInTime, $price, $capacity, $newImagePath);

    
    header("Location: hotelet.php");
    exit();
}
$id = $_GET['id'];
$strep = new HotelsRepository();
$hotel = $strep->getHotelById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hotel</title>
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
            margin-bottom: 3px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 1%;
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
            padding: 10px;
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
    <h3>Edit Hotel</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="hotelId">Hotel ID</label>
            <input type="text" name="hotelId" required value="<?php echo isset($hotel['id']) ? $hotel['id'] : ''; ?>">
           </div>
        <div>
            <label for="hotelName">Emri</label>
            <input type="text" name="hotelName" required value="<?php echo isset($hotel['Emri']) ? $hotel['Emri'] : ''; ?>">
        </div>
        <div>
            <label for="vendi">Vendi</label>
            <input type="text" name="vendi" required value="<?php echo isset($hotel['Vendi']) ? $hotel['Vendi'] : ''; ?>">
        </div>
        <div>
            <label for="kohaQendrimit">Koha Qendrimit</label>
            <input type="text" name="kohaQendrimit" required value="<?php echo isset($hotel['kohaQendrimit']) ? $hotel['kohaQendrimit'] : ''; ?>">
        </div>
        <div>
            <label for="qmimi">Qmimi</label>
            <input type="text" name="qmimi" required value="<?php echo isset($hotel['Qmimi']) ? $hotel['Qmimi'] : ''; ?>">
        </div>
        <div>
            <label for="nrPersona">Nr persona</label>
            <input type="text" name="nrPersona" required value="<?php echo isset($hotel['Nrpersona']) ? $hotel['Nrpersona'] : ''; ?>">
        </div>
        <div>
            <label for="img">Ngarko imazhin (line te zbrazet nese nuk doni ta ndryshoni)</label>
            <input type="file" name="img">
        </div>
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
    
</body>
</html>