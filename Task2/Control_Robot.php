<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conrol Panel</title>
    <style>

        *{
            text-decoration: none;
            margin: 0;
        }
        div#container{
            height: 700px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        div#group1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-bottom: 25px;
        }
        div#group2{
            height: 300px;
            display: inline;
            flex-direction: column;
            justify-content: space-around;
            padding: 0 100px 0 100px;
        }
        div#group3{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 25px;
        }
        button#button1{
            width: 100px;
            height: 50px;
        }
        button#button2, #button3, #button4{
            width: 100px;
            height: 50px;
            
        }
        button#button5{
            width: 100px;
            height: 50px;
            
        }
        button#button6{
            width: 100px;
            height: 50px;
            
        }
        html,body
        {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
        }
        main
        {
            padding: 0 10rem 0 10rem;
        }
    </style>
</head>
<body>
    
    <div id="container">

        <div class="item">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <div id="group1"><button id="button1" name="b1" value= "1" type= "submit" >Forward</button></div>
            <div id="group2">
                <button id="button2" name="b4" value= "1" type= "submit" >Left</button>
                <button id="button3" name="b5" value= "1" type= "submit" >Stop</button>
                <button id="button4" name="b3" value= "1" type= "submit" >Right</button>
            </div>
            <div id="group3"><button id="button5" name="b2" value= "1" type= "submit" >Backward</button></div>
           
        </form>
        </div>
        <form action="ShowData.php">
            <div class="item">
                <br><button id="button6" type="submit" style="display: inline;">Show Data</button>
            </div>
        </form>

        <?php
            $servername = "localhost";
            $username = "user1";
            $password = "123456";
            $dbname = "engines";

            $Forward = $_POST['b1'] ??"0";
            $Backward = $_POST['b2'] ??"0";
            $Right = $_POST['b3'] ??"0";
            $Left = $_POST['b4'] ??"0";
            $Stop = $_POST['b5'] ??"0";
            

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            
            $sql="UPDATE robotbase SET Forward=$Forward, Back=$Backward, Right0=$Right, Left0=$Left, Stop=$Stop";
            
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        ?>
        
    </div>
    
</body>
</html>