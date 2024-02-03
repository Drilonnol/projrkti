<?php
include_once 'lidhjaBiletat.php';
include_once 'BiletaRepository.php';

session_start();

$dbConnection = new DatabaseConnectionii();
$conn = $dbConnection->startConnection();

$biletaRepository = new BiletaRepository();
$biletaList = $biletaRepository->getAllBileta();

if (!isset($_SESSION['emri']) && !isset($_SESSION['email'])) {
    header("location: loginprovo.php");
    exit;
}

$isAdmin = ($_SESSION['email'] == 'drilo2020@gmail.com');
$isUser = ($_SESSION['email'] != 'drilo2020@gmail.com');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista e Biletave</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }

        h2 {
            text-align: center;
        }

        .bileta-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .bileta-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            padding: 10px;
            width: 200px;
            text-align: center;
        }

        .bileta-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <h2>Lista e Biletave</h2>

    <div class="bileta-container">
        <?php if (!empty($biletaList)) { ?>
            <?php foreach ($biletaList as $bileta) { ?>
                <div class="bileta-card">
                    <?php if (!empty($bileta['img']) && file_exists($bileta['img'])) { ?>
                        <img class="bileta-image" src="<?= $bileta['img'] ?>" alt="<?= htmlspecialchars($bileta['Emri']) ?>">
                    <?php } else { ?>
                        <p>Fotografia e disponueshme</p>
                    <?php } ?>
                    <h3><?= htmlspecialchars($bileta['Emri']) ?></h3>
                    <p>Vendi Nisjes: <?= isset($bileta['Vendinis']) ? htmlspecialchars($bileta['Vendinis']) : "N/A" ?></p>
                    <p>Vendi Mberritjes: <?= isset($bileta['Vendimb']) ? htmlspecialchars($bileta['Vendimb']) : "N/A" ?></p>
                    <p>Koha e Udhetimit: <?= isset($bileta['Kohezgjatja']) ? htmlspecialchars($bileta['Kohezgjatja']) : "N/A" ?></p>
                    <p>Qmimi: <?= isset($bileta['Qmimi']) ? htmlspecialchars($bileta['Qmimi']) : "0" ?></p>
                    <p>Numri i Personave: <?= isset($bileta['Nrpersonav']) ? htmlspecialchars($bileta['Nrpersonav']) : "N/A" ?></p>
                    <?php if ($isUser) { ?>
                        <button>Rezervo</button>
                    <?php } ?>
                    <?php if ($isAdmin) { ?>
                        <a href='editbileta.php?id=<?= isset($bileta['id']) ? $bileta['id'] : "" ?>'>EditBilete</a>
                        <a href='deletebileta.php?id=<?= isset($bileta['id']) ? $bileta['id'] : "" ?>'>Delete</a>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No tickets available.</p>
        <?php } ?>
    </div>

</body>

</html>
