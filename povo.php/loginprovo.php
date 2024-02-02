<?php
include_once 'demolog.php';
include_once 'demoRepository.php';
include_once 'validimilog.php';

$conn = new DatabaseConnectionii;
$connection = $conn->startConnection();

$emri_error = $email_error = $password_error = $login_error = '';

session_start(); 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emri = $_POST["emri"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $validimi = new ValidimiKlase($emri, $email, $password);

    if ($validimi->validimi()) {
        $demoRepository = new demoRepository();
        $sukses = $demoRepository->autentikimi($email, $password);

        if ($sukses) {
            $_SESSION['emri'] = $emri;
            $_SESSION['email'] = $email;

            header("location:indexdemo.php");
            exit;
        } else {
            $login_error = "* Te dhenat nuk jane te sakta .";
        }
    } else {
        $emri_error = $validimi->merrEmrinError();
        $email_error = $validimi->merrEmailError();
        $password_error = $validimi->merrPasswordError();
    }
}
?>
<style>
  .logins {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.logins label {
    display: block;
    margin-bottom: 8px;
}

.logins input {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    box-sizing: border-box;
    border-radius: 10px;
    border: none;
    background-color: lightgrey;
}

.logins input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

body {
    margin: 0;
    padding: 0;
}

    </style><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../provoo.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br><br>
    <div class="logins">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="login-form">
            <label for="emri">Emri:</label>
            <input type="text" id="emri" name="emri" required>
            <span style="color: red;"><?php echo $emri_error; ?></span><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span style="color: red;"><?php echo $email_error; ?></span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span style="color: red;"><?php echo $password_error; ?></span><br>

            <input type="submit" name="submitbtn" value="Submit">
            <span style="color: red;"><?php echo $login_error; ?></span>
        </form>
    </div>


</body>
</html>
<?php include_once('../footer.php'); ?>