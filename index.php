<!DOCTYPE html>
<html>
<head>
    <title>New Words</title>
</head>
<body>

    <?php

        // DON'T forget to create you're database-info.php file.
        include 'database-info.php';

        // The host, user, password and database variables are in the database-info.php
        $conn = mysqli_connect($host, $user, $password, $database);
        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }
        
        $sql = "SELECT id, name, meaning, example FROM words";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Word: " . $row["name"]. "; " . "Meaning: " . $row["meaning"]. ".<br>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        
        mysqli_close($conn);
    ?>

</body>
</html>