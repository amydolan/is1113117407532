/* global $ */

function validateDetails(){
    
    //validating user name details
    
      var name;
    
    name = document.getElementById("user_name").value;
    
    if (name==""){
        alert("Please enter your name");
        }
    else if (String(pin).length<5){
        alert("Please make sure you enter your full name");
        }
    else{
        enablebtnPurchase();
        }
    
    //validating user pin details
    
    var pin;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}