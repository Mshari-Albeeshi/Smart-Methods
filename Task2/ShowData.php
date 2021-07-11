<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
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
        
        $sql="SELECT Forward, Back, Right0, Left0, Stop FROM robotbase";

        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $result = $conn->query($sql);
        $colomn = $result->fetch_assoc();

        if($colomn['Forward'] == 1){
            echo "Movement: Forward";
        }
        if($colomn['Back'] == 1){
            echo "Movement: Backward";
        }
        if($colomn['Right0'] == 1){
            echo "Movement: Right Move";
        }
        if($colomn['Left0'] == 1){
            echo "Movement: Left Move";
        }
        if($colomn['Stop'] == 1){
            echo "Movement: Stop";
        }
        

        $conn->close();
    ?>

</body>
</html>