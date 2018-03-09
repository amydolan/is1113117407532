<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Product</title>
</head>
<br/>
    Select Product
<style>
    .button {
    background-color: #555555; /* Black */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>

<body background="desk.jpeg">
    
<!--Links for my menu bar-->
<ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../cv/cv_page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></a></li>
  <li><a href="shophome.html">E-Business Homepage</a></li>
</ul>


    <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />

        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <body>
        </br>
        <center><h3>Select a Product</h3></center>
        
        <br/>
        <!--Using radio buttons for my calculator. Labelling each product with a name and price-->
        <form method ="POST" action ="Ebus2.php">
            
            <center><label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                 SalesForce @ &euro;100
            </label></center>
            
            <br/>
            
             <center><label for="c9">
                <input type ="radio" id="c9" name="product" checked onClick="disablebtnProceed()"/>
                 Cloud 9 @ &euro;200
            </label></center>
            
            </br>
            
            <center><label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                 AWS @ &euro;300 
            </label></center>
            
            </br>
            
            <center><label for="gmail">
                <input type ="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                 Gmail @ &euro;400
            </label></center>
            
            <br/>
            <br/>
            
            <!--Read only text boxes to display purchase information-->

            <center><label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label></center>
            
            <br/>
            
            <center><label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label></center>
            
            <br/>
            
            <center><label for="vat">
                VAT @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label></center>
            
            <br/>
            
            <center><label for="total">
                Total (- Discount, + VAT)
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label></center>
        
            <br/>
            
            <!--Buttons to calculate, clear and proceed-->
            
            <center><button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button></center>
            
        </form>
        
        <br/>
        <center><button onClick="calcSub()">Calculate Cost</button></center>
        <center><a role ="button" href="Ebus1.php">Clear Choice</center>
       
    </body>
    
</html>