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
<body background="desk.jpeg">

<ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../cv/cv_page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></a></li>
  <li><a href="shophome.html">E-Business Homepage</a></li>
</ul>

    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        
               <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <center><h4>Please enter your payment details below</h4></center>
        
            <br/>
            
            <form method = "POST" action = "Ebus3.php">
                
                <center><label for="user_name">
                     Name:
                </label>
                
                <input type="text" id="user_name" placeholder="Joe Bloggs" maxlength="30"></center>
                
                <br/>
                
                <center><label for="user_email">
                     Email:
                </label>
                
                <input type="email" id="user_email" placeholder="joebloggs@ucc.ie"></center>
                
                <br/>
            
                <center><label for="user_pin">
                     PIN:
                </label>
                
                <input type="password" id="user_pin" placeholder="****" maxlength="4"></center>
                    
                <center><button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button></center>
                
            </form>
            
            <br />
            
            <center><button onClick="validateDetails()"> Validate </button></center>
            
            <script type="text/javascript" src="ebus2_validator.js"></script>
            
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
            
      
        
    </body>
</html>