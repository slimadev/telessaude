$(document).ready(function(){
  let MALARIA_TEXT_INDEX = 0
  const MALARIA_TEXTS = [
    'Febre < 39ᵒC',
    'Cefaleia',
    'Mialgia',
    'Artralgia',
    'Frio',
    'Dor abdominal'
  ]

  $("#btnMalariaNext").click(function(e){
    e.preventDefault()
    console.log('Clicou: ',MALARIA_TEXT_INDEX)
    if(MALARIA_TEXTS.length > MALARIA_TEXT_INDEX+1){
      MALARIA_TEXT_INDEX = MALARIA_TEXT_INDEX +1
      $('#malariaStepTwoTest').empty()
      $('#malariaStepTwoTest').append(`<strong>${MALARIA_TEXTS[MALARIA_TEXT_INDEX]}</strong>`)
    }
    
    
   });

   $("#btnMalariaBack").click(function(e){
    e.preventDefault()
    if(MALARIA_TEXT_INDEX > 0){
      MALARIA_TEXT_INDEX = MALARIA_TEXT_INDEX -1
      $('#malariaStepTwoTest').empty()
      $('#malariaStepTwoTest').append(`<strong>${MALARIA_TEXTS[MALARIA_TEXT_INDEX]}</strong>`)
    }
    
   });

  $("#btnStepOne").click(function(e){
    e.preventDefault()
    console.log("btnStepOne")
    $("#dvStepOne").css("display", "none");
    $("#dvStepOneOne").css("display", "");
    
   });

   $("#btnStepOneOne").click(function(e){
    e.preventDefault()
    console.log("btnStepOne")
    $("#dvStepOneOne").css("display", "none");
    $("#dvStepTwo").css("display", "");
    
   });

   $("#btnStepOneOneBack").click(function(e){
      $("#dvStepOne").css("display", "");
      $("#dvStepOneOne").css("display", "none");
   });


   $("#btnStepTwo").click(function(e){
    console.log("btnStepTwo")
    $("#dvStepTwoOne").css("display", "");
    $("#dvStepTwo").css("display", "none");
   });

   $("#btnStepTwoBack").click(function(e){
    $("#dvStepOne").css("display", "");
    $("#dvStepTwo").css("display", "none");
   });

   
   $("#btnStepTwoOne").click(function(e){
    console.log("btnStepTwo")
    $("#dvStepThree").css("display", "");
    $("#dvStepTwoOne").css("display", "none");
   });

   $("#btnStepTwoOneBack").click(function(e){
    $("#dvStepTwo").css("display", "");
    $("#dvStepTwoOne").css("display", "none");
   });


   $("#btnStepThreeBack").click(function(e){
    $("#dvStepTwoOne").css("display", "");
    $("#dvStepThree").css("display", "none");
    
   });

});

