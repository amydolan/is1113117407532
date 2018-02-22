<?php
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
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previus page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        </div>
    </body>
</html>