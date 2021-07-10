<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <style>

        *{
            text-decoration: none;
            margin: 0;
        }
        div{
            padding: 50px 50px 0px 50px;
        }

    </style>
</head>
<body>
    
    <div>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>Motor 1</p> <input name="m1" type="range" min="0" max="100" step="1" onchange="updateTextInput1(this.value)">
            <p style="display: inline;" id="result1">50</p>

            <p>Motor 2</p> <input name="m2" type="range" min="0" max="100" step="1" onchange="updateTextInput2(this.value)">
            <p style="display: inline;" id="result2">50</p>

            <p>Motor 3</p> <input name="m3" type="range" min="0" max="100" step="1" onchange="updateTextInput3(this.value)">
            <p style="display: inline;" id="result3">50</p>

            <p>Motor 4</p> <input name="m4" type="range" min="0" max="100" step="1" onchange="updateTextInput4(this.value)">
            <p style="display: inline;" id="result4">50</p>

            <p>Motor 5</p> <input name="m5" type="range" min="0" max="100" step="1" onchange="updateTextInput5(this.value)">
            <p style="display: inline;" id="result5">50</p>

            <p>Motor 6</p> <input name="m6" type="range" min="0" max="100" step="1" onchange="updateTextInput6(this.value)">
            <p style="display: inline;" id="result6">50</p>

            <br>
            <button type="submit">Save</button>
            
        </form>

        <form action="StartMotors.php">
            <br>
            <button type="submit" style="display: inline;">Start</button>
        </form>

        <script type="text/JavaScript">
            function updateTextInput1(val) {
                document.getElementById('result1').innerHTML = val;
                motor1 = val;
            }
            function updateTextInput2(val) {
                document.getElementById('result2').innerHTML = val;
                motor2 = val;
            }
            function updateTextInput3(val) {
                document.getElementById('result3').innerHTML = val;
                motor3 = val;
            }
            function updateTextInput4(val) {
                document.getElementById('result4').innerHTML = val;
                motor4 = val;
            }
            function updateTextInput5(val) {
                document.getElementById('result5').innerHTML = val;
                motor5 = val;
            }
            function updateTextInput6(val) {
                document.getElementById('result6').innerHTML = val;
                motor6 = val;
            }
        </script>

        <?php
            $servername = "localhost";
            $username = "user1";
            $password = "123456";
            $dbname = "engines";

            $motor1 = $_POST['m1'];
            $motor2 = $_POST['m2'];
            $motor3 = $_POST['m3'];
            $motor4 = $_POST['m4'];
            $motor5 = $_POST['m5'];
            $motor6 = $_POST['m6'];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            $sql="UPDATE controlpanel SET motor1=$motor1, motor2=$motor2, motor3=$motor3, motor4=$motor4, motor5=$motor5, motor6=$motor6";

            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        ?>
        
    </div>
    
</body>
</html>