<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Motors</title>
</head>
<body>

    <?php
        $servername = "localhost";
        $username = "user1";
        $password = "123456";
        $dbname = "engines";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $sql="SELECT Motor1, Motor2, Motor3, Motor4, Motor5, Motor6 FROM controlpanel";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $result = $conn->query($sql);
        $colomn = $result->fetch_assoc();

        echo "Motor1: " . $colomn['Motor1'] . "<br>";
        echo "Motor2: " . $colomn['Motor2'] . "<br>";
        echo "Motor3: " . $colomn['Motor3'] . "<br>";
        echo "Motor4: " . $colomn['Motor4'] . "<br>";
        echo "Motor5: " . $colomn['Motor5'] . "<br>";
        echo "Motor6: " . $colomn['Motor6'] . "<br>";

        $conn->close();
    ?>

</body>
</html>