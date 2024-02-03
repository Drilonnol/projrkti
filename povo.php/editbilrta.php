<?php
include_once 'lidhjaBiletat.php';
include_once 'BiletaRepository.php';

session_start();

if (!isset($_SESSION['emri'])) {
    header("location: loginprovo.php");
    exit;
}

if (isset($_POST['editBtn'])) {
    $biletaId = $_POST['biletaId'];
    $biletaName = $_POST['biletaName'];
    $vendiNisjes = $_POST['vendiNisjes'];
    $vendiMberritjes = $_POST['vendiMberritjes'];
    $kohaQendrimit = $_POST['kohaQendrimit'];
    $qmimi = $_POST['qmimi'];
    $nrPersona = $_POST['nrPersona'];

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
    $id = $_GET['id'];
    $biletaRepo = new BiletaRepository();
    $biletaRepo->updateBileta($biletaId, $biletaName, $vendiNisjes, $vendiMberritjes, $kohaQendrimit, $qmimi, $nrPersona, $newImagePath);

    header("Location: indexdemo.php");
    exit();
}

$biletaId = $_GET['id'];
$biletaRepo = new BiletaRepository();
$bileta = $biletaRepo->getBiletaById($biletaId);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bilete</title>
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
    <h3>Edit Bilete</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="biletaId">Bileta ID</label>
            <input type="text" name="biletaId" required value="<?php echo isset($bileta['id']) ? $bileta['id'] : ''; ?>">
        </div>
        <div>
            <label for="biletaName">Emri</label>
            <input type="text" name="biletaName" required value="<?php echo isset($bileta['Emri']) ? $bileta['Emri'] : ''; ?>">
        </div>
        <div>
            <label for="vendiNisjes">Vendi Nisjes</label>
            <input type="text" name="vendiNisjes" required value="<?php echo isset($bileta['Vendinis']) ? $bileta['Vendinis'] : ''; ?>">
        </div>
        <div>
            <label for="vendiMberritjes">Vendi Mberritjes</label>
            <input type="text" name="vendiMberritjes" required value="<?php echo isset($bileta['Vendimberritjes']) ? $bileta['Vendimberritjes'] : ''; ?>">
        </div>
        <div>
            <label for="kohaQendrimit">Koha Qendrimit</label>
            <input type="text" name="kohaQendrimit" required value="<?php echo isset($bileta['kohaQendrimit']) ? $bileta['kohaQendrimit'] : ''; ?>">
        </div>
        <div>
            <label for="qmimi">Qmimi</label>
            <input type="text" name="qmimi" required value="<?php echo isset($bileta['Qmimi']) ? $bileta['Qmimi'] : ''; ?>">
        </div>
        <div>
            <label for="nrPersona">Nr persona</label>
            <input type="text" name="nrPersona" required value="<?php echo isset($bileta['Nrpersonav']) ? $bileta['Nrpersonav'] : ''; ?>">
        </div>
        <div>
            <label for="img">Ngarko imazhin (lënë të zbrazët nëse nuk doni ta ndryshoni)</label>
            <input type="file" name="img">
        </div>
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
</body>
</html>