<?php
include_once('BiletaRepozitory.php');

$id = $_GET['Id'];
$strep = new BiletaRepository();
$demo = $strep->getAllBileta();


$id_error = $emri_error = $email_error = $password_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validimi i ID
    if (empty($_POST['id'])) {
        $id_error = "ID .";
    } elseif (!ctype_digit($_POST['id'])) {
        $id_error = "ID duhet te permbaje vetem numra.";
    } else {
        $id = $_POST['id'];
    }

    // Validimi i emrit
    if (empty($_POST['emriBiletes'])) {
        $emri_error = "emriBiletes ";
    } elseif (!ctype_alpha($_POST['emriBiletes'])) {
        $emri_error = "Emri duhet te permbaje vetem shkronja.";
    } else {
        $emri = $_POST['emriBiletes'];
    }

    // Validimi i email-it
    if (empty($_POST['nga'])) {
        $email_error = "nga.";
    } elseif (!filter_var($_POST['nga'], FILTER_VALIDATE_EMAIL)) {
        $email_error = "nga nuk ka nje forma.";
    } elseif (!strpos($_POST['nga'], '.com')) {
        $email_error = "Email-i duhet të përmbaje .com në fund.";
    } else {
        $email = $_POST['nga'];
    }

    // Validimi i password-it
    if (empty($_POST['deri'])) {
        $password_error = "deri .";
    } else {
        $password = $_POST['deri'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h3>Edit Bileta</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <label for="ID">ID</label>
            <input type="text" name="id" required value="<?php echo isset($demo['id']) ? $demo['id'] : '';  ?>">
            <span style="color: red;"><?php echo $id_error; ?></span>
        </div>
        <div>
            <label for="name">Emri</label>
            <input type="text" name="emriBiletes" required value="<?php echo isset($demo['emriBiletes']) ? $demo['emriBiletes'] : ''; ?>">
            <span style="color: red;"><?php echo $emri_error; ?></span>
        </div>
        <div>
            <label for="Email">Nga</label>
            <input type="text" name="nga" required value="<?php echo isset($demo['nga']) ? $demo['nga'] : ''; ?>">
         
        </div>
        <div>
            <label for="Password">Deri</label>
            <input type="text" name="deri" required value="<?php echo isset($demo['deri']) ? $demo['deri'] : ''; ?>">
            <span style="color: red;"><?php echo $password_error; ?></span>
        </div>
        <div>
            <label for="Password">data</label>
            <input type="text" name="dataa" required value="<?php echo isset($demo['dataa']) ? $demo['dataa'] : ''; ?>">
            <span style="color: red;"><?php echo $password_error; ?></span>
        </div>
        <div>
            <label for="Password">Nr Pasagjerve</label>
            <input type="text" name="NrPasagjerve" required value="<?php echo isset($demo['NrPasagjerve']) ? $demo['NrPasagjerve'] : ''; ?>">
            <span style="color: red;"><?php echo $password_error; ?></span>
        </div>
        
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
</body>
</html>