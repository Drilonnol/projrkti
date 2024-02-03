<?php
include_once 'Pilotet.php';
include_once 'PilotetRepozitory.php';

if (isset($_POST['kliko'])) {
    
    $id = uniqid();

    $emri = isset($_POST['emri']) ? htmlspecialchars($_POST['emri']) : null;
    $mbimeri = isset($_POST['mbiemri']) ? htmlspecialchars($_POST['mbiemri']) : null;
    $vitiLindjes = isset($_POST['vitilindjes']) ? htmlspecialchars($_POST['vitilindjes']) : null;

    $img = $_FILES['img']['name'];
    $tempImgPath = $_FILES['img']['tmp_name'];

    $pilotet = new Pilotet($id, $emri, $mbimeri, $vitiLindjes,$img);

    $pilotetRepozitory = new PilotetRepository();
    $pilotetRepozitory->insertPilotet($pilotet);

    header("location:piloti.php");
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

        <label for="emri">Emri i Pilotit:</label>
        <input type="text" name="emri" required>

        <label for="mbimeri">Mbiemri i Pilotit:</label>
        <input type="text" name="mbimeri" required>

        <label for="kohaQendrimit">VitiLindjes:</label>
        <input type="date" name="vitilindjes" required>

        <label for="img">Ngarko foton e Pilotit:</label>
        <input type="file" name="img">

        <input type="submit" name="kliko" value="Posto Pilotin">
    </form>
</body>
</html>