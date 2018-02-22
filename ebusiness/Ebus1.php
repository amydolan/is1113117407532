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
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method ="POST" action ="Ebus2.php">
            
            <label for="salesforce">
                <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
             <label for="c9">
                <input type ="radio" id="c9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
            </br>
            
            <label for="aws">
                <input type ="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300 
            </label>
            
            </br>
            
            <label for="gmail">
                <input type ="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="vat">
                VAT @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total (- Discount, + VAT)
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
        
            <br/>
            
            <button type ="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
       
        </div>
        
    </body>
    
</html>