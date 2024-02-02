<?php
include_once 'Fluturimet.php';
include_once 'FluturimetRepozitory.php';

if (isset($_POST['submitBtn'])) {
    $id = isset($_POST['idFluturimit']) ? htmlspecialchars($_POST['idFluturimit']) : null;
    $emri = isset($_POST['emri']) ? htmlspecialchars($_POST['emri']) : null;
    $destinacioni = isset($_POST['destinacioni']) ? htmlspecialchars($_POST['destinacioni']) : null;
    $data = isset($_POST['data']) ? htmlspecialchars($_POST['data']) : null;


 
    $fluturimi = new Fluturimet($id, $emri, $destinacioni, $data);

    $fluturimiRepository = new FluturimetRepository();
    $fluturimiRepository->insertFluturimet($fluturimi);

    header("location:fluturimi.php");
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

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <label for="biletaid">Id e fluturimit:</label>
        <input type="text" name="idFluturimit" required>
    
        <label for="emri">Emri i fluturimit:</label>
        <input type="text" name="emri" required>

        <label for="vendi">Destinacioni:</label>
        <input type="text" name="destinacioni" required>

        <label for="kohaQendrimit">data:</label>
        <input type="date" name="data" required>

        <input type="submit" name="submitBtn" value="Shto Fluturimin">
    </form>
</body>
</html>