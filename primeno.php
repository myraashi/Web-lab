<!DOCTYPE html>
<html>

<head>
    <title>Prime Number Checker</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }
        input {
      display: block;
      margin: 10px 0px;
      border: none;
      width: 75%;
      border-bottom: solid black 1px;
      background-color: rgb(253, 233, 255);
      padding: 5px;
      border-radius: 4px;
    }
    button {
      display: inline-block;
      padding: 0.5rem 2rem;
      background-color: cornsilk;
      border: solid 1px cornsilk;
      border-radius: 8px;
    }

    </style>
</head>

<body>
    <form method="POST" action="primeno.php">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    <?php
    // Function to check if a number is prime
    function isPrime($number)
    {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the user input number
        $userNumber = $_POST['number'];

        // Check if the user input number is prime or not
        if (is_numeric($userNumber) && $userNumber > 0 && is_int($userNumber + 0)) {
            if (isPrime($userNumber)) {
                echo $userNumber . " is a prime number.";
            } else {
                echo $userNumber . " is not a prime number.";
            }
        } else {
            echo "Please enter a valid positive integer.";
        }
    }
    ?>
</body>

</html>