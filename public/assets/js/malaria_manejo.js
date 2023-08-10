$(document).ready(function(){

  $("#btnStepOne").click(function(e){
    e.preventDefault()
    console.log("btnStepOne")
    $("#dvStepOne").css("display", "none");
    $("#dvStepTwo").css("display", "");
    
   });

   $("#btnStepTwo").click(function(e){
    console.log("btnStepTwo")
    $("#dvStepThree").css("display", "");
    $("#dvStepTwo").css("display", "none");
   });

   $("#btnStepTwoBack").click(function(e){
    $("#dvStepOne").css("display", "");
    $("#dvStepTwo").css("display", "none");
   });

   $("#btnStepThreeBack").click(function(e){
    $("#dvStepTwo").css("display", "");
    $("#dvStepThree").css("display", "none");
    
   });


});

