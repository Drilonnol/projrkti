<?php
include_once 'demolog.php';
include_once 'demoRepository.php';

$conn = new DatabaseConnectionii;
$connection = $conn->startConnection();

// Kontrolloni nëse lidhja është krijuar me sukses
if (!$connection) {
    die("Connection failed!");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $emri = $_POST["emri"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Përdorimi i parametrave në vend të konkatenimit të stringjeve
    $sql = $connection->prepare("SELECT * FROM logindemo WHERE Email = :email AND Password = :password");
    $sql->bindParam(':email', $email);
    $sql->bindParam(':password', $password);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        // Përdoruesi është gjetur, dërgoni tek tabela.php
        header("location:demos.php");
        exit;  // Ndërprit ekzekutimin
    } else {
        echo "Invalid admin credentials. Please check your username and password.";
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
        <input type="text" id="emri" name="emri" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="submitbtn" value="Submit">
    </form>
</body>
</html>
