<?php
include_once 'demolog.php';
include_once 'demoRepository.php';


$conn = new DatabaseConnectionii;
$connection = $conn->startConnection();


$emri_error = $email_error = $password_error = $login_error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emri = $_POST["emri"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    if (empty($emri)) {
        $emri_error = "Emri .";
    } elseif (strlen($emri) < 3) {
        $emri_error = "Emri duhet të kete te pakten 3 shkronja.";
    }

    
    if (empty($email)) {
        $email_error = "Email eshte i detyrueshem.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Format i pasakte i email-it.";
    } elseif (!preg_match('/@.*\.com$/', $email)) {
        $email_error = "Email-i duhet te kete formatin e duhur (user@example.com).";
    }


    if (empty($password)) {
        $password_error = "Password  i detyrueshem.";
    } elseif (strlen($password) < 8 && !preg_match('/[a-zA-Z]/', $password) && !preg_match('/\d/', $password)) {
        $password_error = "password duhet te kete 8 karaktere dhe te kete shkronja me numra.";
    }

    if (empty($emri_error) && empty($email_error) && empty($password_error)) {
        $sql = $connection->prepare("SELECT * FROM logindemo WHERE Email = :email AND Password = :password");
        $sql->bindParam(':email', $email);
        $sql->bindParam(':password', $password);
        $sql->execute();

        if ($sql->rowCount() > 0) {
          
            header("location:demos.php");
            exit;  
        } else {
            $login_error = "Te dhenat nuk jane te sakta .";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <br><br>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
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
    <?php include('footer.php'); ?>
</body>
</html>