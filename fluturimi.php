<?php
include_once 'LidhjaBileta.php';
include_once 'FluturimetRepozitory.php';

$dbConnection = new DatabaseConnectionii();
$conn = $dbConnection->startConnection();

$fluturimiRepository = new FluturimetRepository();
$fluturimet = $fluturimiRepository->getAllFluturimet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluturimet</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }

        .titulli{
            color: #555;
        
            font-size: 2.2em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
        }
        #fluturimet {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .fluturim {
            flex-wrap: wrap;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 4%;
            margin: 1%;
            max-width: 800px;
        }

        .fluturim h2 {
            color: #333;
        }

        .fluturim p {
            margin: 0.5em 0;
            color: #666;
        }

       
    </style>
</head>
<body>

<h2 class="titulli">FLUTUEIMET JAVORE</h2>

<div id="fluturimet">
    <?php foreach ($fluturimet as $fluturimi) { ?>
        <div class="fluturim">
            <h2><?= $fluturimi['Emri'] ?></h2>
            <p>Destinacioni: <?= $fluturimi['Destinacioni'] ?></p>
            <p>Data: <?= $fluturimi['Data'] ?></p>
           
        </div>
    <?php } ?>
</div>

</body>
</html>