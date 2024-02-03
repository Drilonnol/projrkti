
<?php
session_start();
include_once 'Rezervo.php';
include_once 'RezervimReposidory.php';

if (!isset($_SESSION['emri'])) {
    header("location: loginprovo.php");
    exit;
}

if (isset($_POST['submitBtn'])) {
    $rezervimRepository = new ReservationsRepository();

    $emri = isset($_POST['emri']) ? htmlspecialchars($_POST['emri']) : null;
    $mbiemri = isset($_POST['mbiemri']) ? htmlspecialchars($_POST['mbiemri']) : null;
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $nrTelefoni = isset($_POST['nrTelefoni']) ? htmlspecialchars($_POST['nrTelefoni']) : null;
    $adresa = isset($_POST['adresa']) ? htmlspecialchars($_POST['adresa']) : null;
    $hotelId = isset($_POST['hotelId']) ? htmlspecialchars($_POST['hotelId']) : null;

    $rezervim = new Rezervimi(null, $emri, $mbiemri, $email, $adresa, $nrTelefoni, $hotelId);

    $rezervimRepository->insertReservation($rezervim);

    echo "<script>alert('Rezervimi u regjistrua me sukses.')</script>";
    header("location: njoftim.php");
    exit();
}

$id = isset($_GET['id']) ? $_GET['id'] : null;
$hotelIdDefault = htmlspecialchars($id);
$strep = new ReservationsRepository();
$rezerv = $strep->getRezervById($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma e Rezervimit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightseagreen;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: 20px auto;
            border-style: none;
            padding:2% 4% 2% 4%;
            border-radius: 20px;
            background-color: burlywood;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 20px;
            height: 40px;
            background-color: lightgray;
            border: none;
        }

        button {
            background-color: purple;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: lightslategray;
        }
   
    </style>
</head>
<body>

<h2>Forma e Rezervimit</h2>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <label for="emri">Emri:</label>
    <input type="text" name="emri" required>
    <br>
    <label for="mbiemri">Mbiemri:</label>
    <input type="text" name="mbiemri" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="nrTelefoni">Nr. Telefonit:</label>
    <input type="text" name="nrTelefoni" required>
    <br>
    <label for="adresa">Adresa:</label>
    <input type="text" name="adresa" required>
    <br>
    <label for="hotelId">Hotel ID:</label>
    <input type="text" name="hotelId" required value="<?php echo $hotelIdDefault; ?>">
    <br>
    <button type="submit" name="submitBtn">Rezervo</button>
</form>

</body>
</html>