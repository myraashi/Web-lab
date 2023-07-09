<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="POST" action="11.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "Name: ". $name ."<br>";
        echo "Email: ". $email ."<br>";

        $data =  "Name: ".$name ."\n" ."Email: " . $email . "\n\n";
        file_put_contents('form_data.txt',$data,FILE_APPEND);
    }
    
    ?>
</body>
</html>
