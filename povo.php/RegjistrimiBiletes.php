<?php
include_once 'Bileta.php';
include_once 'BiletaRepository.php';

session_start();

if (!isset($_SESSION['emri'])) {
    header("location: loginprovo.php");
    exit;
}

function isBiletaNameUnique($biletaRepository, $emri) {
    return $biletaRepository->isBiletaNameUnique($emri);
}

if (isset($_POST['submitBtn'])) {
    $biletaRepository = new BiletaRepository();

    $emri = isset($_POST['emri']) ? htmlspecialchars($_POST['emri']) : null;
    $vendiNisjes = isset($_POST['vendiNisjes']) ? htmlspecialchars($_POST['vendiNisjes']) : null;
    $vendiMberritjes = isset($_POST['vendiMberritjes']) ? htmlspecialchars($_POST['vendiMberritjes']) : null;
    $kohaQendrimit = isset($_POST['kohaQendrimit']) ? htmlspecialchars($_POST['kohaQendrimit']) : null;
    $qmimi = isset($_POST['qmimi']) ? htmlspecialchars($_POST['qmimi']) : null;
    $nrPersona = isset($_POST['nrPersona']) ? htmlspecialchars($_POST['nrPersona']) : null;
    $img = $_FILES['img']['name'];
    $tempImgPath = $_FILES['img']['tmp_name'];

    if (!isBiletaNameUnique($biletaRepository, $emri)) {
        echo "<script>alert('Bileta me kete emer ekziston. Zgjidhni nje emer të ndryshem.')</script>";
    } else {
        $bileta = new Bileta(null, $emri, $vendiNisjes, $kohaQendrimit, $qmimi, $nrPersona, $img,$vendiMberritjes);
    
       

        $biletaRepository->insertBileta($bileta);
        echo "<script>alert('Bileta u regjistrua me sukses.')</script>";
        header("location:indexdemo.php");
        exit();
    }
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
            background-color: lightseagreen;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    
        <label for="emri">Emri i biletës:</label>
        <input type="text" name="emri" required>

        <label for="vendiNisjes">Vendi i nisjes:</label>
        <input type="text" name="vendiNisjes" required>

        <label for="vendiMberritjes">Vendi i mbërritjes:</label>
        <input type="text" name="vendiMberritjes" required>

        <label for="kohaQendrimit">Koha e qëndrimit:</label>
        <input type="text" name="kohaQendrimit" required>

        <label for="qmimi">Qmimi:</label>
        <input type="text" name="qmimi" required>

        <label for="nrPersona">Numri i personave:</label>
        <input type="text" name="nrPersona" required>

        <label for="img">Ngarko imazhin:</label>
        <input type="file" name="img">

        <input type="submit" name="submitBtn" value="Shto Bilet">
    </form>
</body>
</html>
