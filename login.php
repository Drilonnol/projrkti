<?php
include_once 'LidhjaBileta.php';
session_start();

$conn = new DatabaseConnectionii;
$connection = $conn->startConnection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["username"];
    $password = $_POST["password"];

  
    $stmt = $connection->prepare("SELECT * FROM tb_data3 WHERE Email = :email AND Pass = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['Email'] = $email;
        $_SESSION['Pass'] = $password;
        header("location: piloti.php");
        exit;
    } else {
        echo "<script>alert('Nuk funksionoj');</script>";
    }
}
  
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 5px;
    }

    .login-container h2 {
      text-align: center;
      color: #333;
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input {
      padding: 8px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px;
      font-size: 16px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>