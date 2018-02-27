<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
Select Product
<title>Select Product</title>
</head>
<body>

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
        <button type="reset" href="Ebus1.php">Clear Choice</button>
       
    </body>
    
</html>