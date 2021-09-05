<!DOCTYPE html>
<html>
<head>
    <title>New Words</title>
</head>
<body>

    <form action="action.php" method="post">
    <p>Word:<br> <input type="text" name="word" /></p>
    <p>Meaning:<br> <input type="text" name="meaning" /></p>
    <p>Example phrase:<br> <input type="text" name="example" /></p>
    <p><input type="submit" /></p>
    </form>

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
            echo "<p>" . "Word: " . $row["name"]. "; " . "Meaning: " . $row["meaning"]. ".</p>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        
        mysqli_close($conn);
    ?>

</body>
</html>