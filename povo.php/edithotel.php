

<?php
include_once('hotelsRepozitory.php');

$hotelId = $_GET['hotelId'];
$hotelRepo = new HotelsRepository();
$hotel = $hotelRepo->getHotelById($hotelId);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotelId = $_POST['hotelId'];
    $hotelName = $_POST['hotelName'];
    $location = $_POST['location'];
    $checkInTime = $_POST['checkInTime'];
    $price = $_POST['price'];
    $capacity = $_POST['capacity'];

    $hotelRepo->editHotel($hotelId, $hotelName, $location, $checkInTime, $price, $capacity);
    header("location:hotels.php");
}
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

        h3 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        span {
            color: red;
        }
    </style>
</head>
<body>
    <h3>Edit Hotel</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <label for="hotelId">Hotel ID</label>
            <input type="text" name="hotelId" required value="<?php echo isset($hotel['hotelId']) ? $hotel['hotelId'] : ''; ?>">
        </div>
        <div>
            <label for="hotelName">Emri</label>
            <input type="text" name="hotelName" required value="<?php echo isset($hotel['Emri']) ? $hotel['Emri'] : ''; ?>">
        </div>
        <div>
            <label for="location">Vendi</label>
            <input type="text" name="location" required value="<?php echo isset($hotel['Vendi']) ? $hotel['Vendi'] : ''; ?>">
        </div>
        <div>
            <label for="checkInTime">Koha Qendrimit</label>
            <input type="text" name="checkInTime" required value="<?php echo isset($hotel['kohaQendrimit']) ? $hotel['kohaQendrimit'] : ''; ?>">
        </div>
        <div>
            <label for="price">Qmimi</label>
            <input type="text" name="price" required value="<?php echo isset($hotel['Qmimi']) ? $hotel['Qmimi'] : ''; ?>">
        </div>
        <div>
            <label for="capacity">Nr persona</label>
            <input type="text" name="capacity" required value="<?php echo isset($hotel['Nrpersona']) ? $hotel['Nrpersona'] : ''; ?>">
        </div>
        <div>
            <label for="img">Imazhi</label>
            <input type="file" name="img" accept="image/*">
        </div>
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
</body>
</html>