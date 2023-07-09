<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .login-form {
            display: inline-block;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .login-form input {
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Read the stored credentials from the file
    $file = 'form_data.txt';
    $storedCredentials = file_get_contents($file);
    $storedCredentials = explode(',', $storedCredentials);
    $storedUsername = trim($storedCredentials[0]);
    $storedPassword = trim($storedCredentials[1]);

    // Validate the entered credentials
    if ($username === $storedUsername && $password === $storedPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
?> -->

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $uname = $_POST["username"];
      $pass = $_POST["password"];
      $user_data = fopen("form_data.txt", "r");
      $contents = fread($user_data, filesize("form_data.txt"));
      fclose($user_data);
      if (strpos($contents, $uname . ":" . $pass) !== false) {
        echo "<p>Access granted!</p>";
      } else {
        echo "<p>Access denied!</p>";
      }
    }
    ?>

</body>
</html>
