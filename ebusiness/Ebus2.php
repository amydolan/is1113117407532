<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>Enter Details
 <title> Enter Details</title>
</head>
<body>

<ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../cv/cv_page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></a></li>
  <li><a href="Ebus1.php">E-Business</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:#DFECFF;height:1500px;">
    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
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
                
                <input type="text" id="user_name" placeholder="Full Name" maxlength="30">
                
                <br/>
                
                <label for="user_email">
                     Email
                </label>
                
                <input type="email" id="user_email" placeholder="Customer Email">
                
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
            <a role="button" href="Ebus2.php">Clear Details</a>
            
            <script type="text/javascript" src="ebus2_validator.js"></script>
            
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
            
            </div>
        
    </body>
</html>