<?php
//Start the Session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Receipt</title>
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
<body background ="receipt.jpg">

<ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../cv/cv_page1.html">CV</a></li>
  <li><a href="../interests/sports.html">Interests</a></li>
  <li><a href="shophome.html">E-Business Homepage</a></li>
</ul>
        
        <div id="receipt" style="text-align:center">
            <br/>
            <br/>
            <h1>Receipt</h1>
            <h3>Thank you for purchasing with Amy's Cloud Store! <br/>
            Your receipt details the breakdown of costs. Please keep safely for further reference.</h3>
            <br/>
            <br/>
        
      <?php
            //Echo session variables that were set on previous page
            echo "Subtotal: &euro;". $_SESSION["subtotal"]; ?>
            <br/>
            <?php echo "Discount: &euro;". $_SESSION["discount"]; ?>
            <br/>
            <?php echo "VAT: &euro; ". $_SESSION["vat"]; ?>
            <br/>
            <?php echo "Total: &euro;". $_SESSION["total"] . "."; ?>
            <br/>
            <br/>
            <button onclick="printReceipt()">Print receipt</button>

            <script>
            function printReceipt() {
            window.print();
            }
            </script>
            </div>
     
    </body>
</html>