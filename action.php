<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <?php

        // DON'T forget to create you're database-info.php file.
        include 'database-info.php';

        // Create connection
        $conn = mysqli_connect($host, $user, $password, $database);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $word = $_POST['word'];
        $meaning = $_POST['meaning'];
        $example = $_POST['example'];

        $sql = "INSERT INTO words (name, meaning, example)
        VALUES ('$word', '$meaning', '$example')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>

</body>
</html>