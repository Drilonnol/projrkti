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
    background-color: white;
    margin: 20px;
    color: white;
}

h2 {
    text-align: center;
}

.bileta-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    text-align: center;
}

img {
    height: 130px;
    width: 280px;
    position: relative;
    filter: blur(0.7px);
    z-index: -1;
    border-radius: 30px;
}

.bileta-card {
    padding-top: 1%;
    border: 2px ridge grey;
    border-radius: 30px;
    height: 170px;
    width: 350px;
    text-align: center;
    margin-bottom: 1%;
    background-color: grey;
    z-index: 1;
    margin-bottom: 4%;
}

.p {
    text-align: start;
    margin-left: 1.4%;
    position: sticky;
    margin-top: -35%;
}

button {
    width: 75px;
    height: 30px;
    border-radius: 20px;
    background-color: blue;
   
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
                        <img  src="<?= $bileta['img'] ?>" alt="<?= htmlspecialchars($bileta['Emri']) ?>">
                    <?php } else { ?>
                        <p>Fotografia e disponueshme</p>
                    <?php } ?>
                    <div class="p">
                    <h3><?= htmlspecialchars($bileta['Emri']) ?></h3>
                    <p>Vendi Nisjes: <?= isset($bileta['Vendinis']) ? htmlspecialchars($bileta['Vendinis']) : "N/A" ?></p>
                    <p>Vendi Mberritjes: <?= isset($bileta['Vendimb']) ? htmlspecialchars($bileta['Vendimb']) : "N/A" ?></p>
                    <p>Koha e Udhetimit: <?= isset($bileta['Kohezgjatja']) ? htmlspecialchars($bileta['Kohezgjatja']) : "N/A" ?></p>
                    <p>Qmimi: <?= isset($bileta['Qmimi']) ? htmlspecialchars($bileta['Qmimi']) : "0" ?></p>
                    <p>Numri i Personave: <?= isset($bileta['Nrpersonav']) ? htmlspecialchars($bileta['Nrpersonav']) : "N/A" ?></p>
                    </div>
                    <?php if ($isUser) { ?>
                        <button>Rezervo</button>
                    <?php } ?>
                    <?php if ($isAdmin) { ?>
                        <br><br>
                       <button><a href='editbilrta.php?id=<?= isset($bileta['id']) ? $bileta['id'] : "" ?>'>EditBilete</a></button>
                        <button><a href='deletebileta.php?id=<?= isset($bileta['id']) ? $bileta['id'] : "" ?>'>Delete</a></button>
                      <button><a href='RegjistrimiBiletes.php?id=<?= isset($bileta['id']) ? $bileta['id'] : "" ?>'>ShtoBiletat</a></button>
                        <br><br>
                        
                    <?php } ?>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No tickets available.</p>
        <?php } ?>
    </div>

</body>

</html>
