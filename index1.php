<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL App</title>
</head>
<body>
    <h1>PHP MySQL App</h1>

    <?php
    $servername = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query
    $sql = "SELECT message FROM greetings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<p>Message from Database: " . $row["message"] . "</p>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>
</html>
