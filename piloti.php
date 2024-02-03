<?php
include_once 'LidhjaBileta.php';
include_once 'PilotetRepozitory.php';

$dbConnection = new DatabaseConnectionii();
$conn = $dbConnection->startConnection();

$pilotetRepozitory = new PilotetRepository();
$pilotet = $pilotetRepozitory->getAllPilotet();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilotet</title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 20px;
}

#pilotet {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.titulli {
    color: #555;
    font-size: 2.2em;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    text-align: center;
}

.pilotet-card {
    flex-wrap: wrap;
    border: 0.5px solid #ccc; /* Adjust the border-width to your preference */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 1%;
    margin: 1%;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.pilotet-card h3 {
    color: #333;
}

.pilotet-image {
    height: 40%;
}

.pilotet-card p {
    font-style: italic;
    margin: 5px 0;
    font-size: 28px;
}
    

       
    </style>
</head>
<body>

<h2 class="titulli"> Pilotet</h2>

<div id="pilotet">
    <?php foreach ($pilotet as $piloti) { ?>
        <div class="pilotet-card">
            <?php if (!empty($piloti['Img']) && file_exists($piloti['Img'])) { ?>
                <img class="pilotet-image" src="<?= $piloti['Img'] ?>" alt="<?= htmlspecialchars($piloti['Emri']) ?>">
            <?php } else { ?>
                <p>Fotografia e disponueshme</p>
            <?php } ?>
            <h3><?= htmlspecialchars($piloti['Emri']) ?></h3>
            <p><strong>Mbiemri:</strong><?= htmlspecialchars($piloti['Mbiemri']) ?></p>
            <p>VitiLindjes: <?= htmlspecialchars($piloti['Viti_Lindjes']) ?></p>
           
        </div>
    <?php } ?>
</div>

</body>
</html>