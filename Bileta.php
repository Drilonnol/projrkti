<?php
include_once 'Biletat.php';
include_once 'BiletaRepozitory.php';

if (isset($_POST['submit'])) {
    $emri = isset($_POST['emriBiletes']) ? htmlspecialchars($_POST['emriBiletes']) : null;
    $nga = isset($_POST['nga']) ? htmlspecialchars($_POST['nga']) : null;
    $deri = isset($_POST['deri']) ? htmlspecialchars($_POST['deri']) : null;
    $data = isset($_POST['data']) ? htmlspecialchars($_POST['data']) : null;

    $bileta = new Biletat($emri, $nga, $deri, $data);
    $biletaRepository = new BiletaRepository();
    $biletaRepository->insertBileta($bileta);

    header("location:Bileta.php");
    exit(); 
}

$dbConnection = new DatabaseConnectionii();
$conn = $dbConnection->startConnection();

$biletaRepository = new BiletaRepository();
$biletat = $biletaRepository->getAllBileta();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista e Biletave</title>
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

        input[type="file"] {
            margin-top: 5px; 
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        
    </style>
</head>
<body>

</div>
    <h2>Forma për Bileta</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="emriBiletes">Emri i Biletës:</label>
        <input type="text" name="emriBiletes" required>

        <label for="nga">Nga:</label>
        <input type="text" name="nga" required>

        <label for="deri">Deri:</label>
        <input type="text" name="deri" required>

        <label for="data">Data:</label>
        <input type="date" name="data" required>

        <input type="submit" value="Ruaj Biletën" name="submit">
    </form>

</body>
</html>