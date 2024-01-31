<?php
include_once('demoRepository.php');

$id = $_GET['id'];
$strep = new demoRepository();
$demo = $strep->getdeomoById($id);


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
    if (empty($_POST['emri'])) {
        $emri_error = "Emri ";
    } elseif (!ctype_alpha($_POST['emri'])) {
        $emri_error = "Emri duhet te permbaje vetem shkronja.";
    } else {
        $emri = $_POST['emri'];
    }

    // Validimi i email-it
    if (empty($_POST['emaili'])) {
        $email_error = "Email.";
    } elseif (!filter_var($_POST['emaili'], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email-i nuk ka nje forma.";
    } elseif (!strpos($_POST['emaili'], '.com')) {
        $email_error = "Email-i duhet të përmbaje .com në fund.";
    } else {
        $email = $_POST['emaili'];
    }

    // Validimi i password-it
    if (empty($_POST['password'])) {
        $password_error = "Password .";
    } else {
        $password = $_POST['password'];
    }

    if (empty($id_error) && empty($emri_error) && empty($email_error) && empty($password_error)) {
        $strep->editdemo($id, $emri, $email, $password);
        header("location:demos.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h3>Edit Student</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <div>
            <label for="ID">ID</label>
            <input type="text" name="id" required value="<?php echo isset($demo['id']) ? $demo['id'] : '';  ?>">
            <span style="color: red;"><?php echo $id_error; ?></span>
        </div>
        <div>
            <label for="name">Emri</label>
            <input type="text" name="emri" required value="<?php echo isset($demo['Emri']) ? $demo['Emri'] : ''; ?>">
            <span style="color: red;"><?php echo $emri_error; ?></span>
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="text" name="emaili" required value="<?php echo isset($demo['Emaili']) ? $demo['Emaili'] : ''; ?>">
            <span style="color: red;"><?php echo $email_error; ?></span>
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="text" name="password" required value="<?php echo isset($demo['Password']) ? $demo['Password'] : ''; ?>">
            <span style="color: red;"><?php echo $password_error; ?></span>
        </div>
        <div>
            <input type="submit" name="editBtn" value="Save">
        </div>
    </form>
</body>
</html>
