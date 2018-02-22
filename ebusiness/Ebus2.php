<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #FFD1DC;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../cv/cv_page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></a></li>
  <li><a href="ebusiness/Ebus1.php">E-Business</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:#DFECFF;height:1500px;">
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="user_name">
                     Name
                </label>
                
                <input type="name" id="user_name" placeholder="Full Name" maxlength="30">
                
                <br/>
                
                <label for="user_pin">
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br />
            
            <button onClick="validateDetails()"> Validate </button>
            
            <script type="text/javascript" src="ebus2_validator.js"></script>
            
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            </div>
        
    </body>
</html>