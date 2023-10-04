$(document).ready(function(){
  let STEP_FOUR_TEXT_INDEX = 0


  const STEP_FOUR_TEXTS = [
    {
      parent:' Monitoria do Tratamento de TB Sensível ',
      child:'',
      tb:'st5tb1'
    },
    {
      parent:'Calendário de Seguimento da Criança em TAT para TB-S ',
      child:'',
      tb:'st5tb2'
    },
    {
      parent:'Falência do Tratamento de TB-S', 
      child:'Conduta para crianças e adolescentes com falência de tratamento de TB sensível',
      tb:'st5tb3'
    },
    {
      parent:'Tratamento para casos de recaida e Pós queda de seguimento', 
      child:'Conducta para os casos de recaídas e pacientes pós perda de seguimento',
      tb:'st5tb4'
    }
  ]

  $("#btnST5Next").click(function(e){
    e.preventDefault()
    if(STEP_FOUR_TEXTS.length > STEP_FOUR_TEXT_INDEX+1){
      const currentStep = STEP_FOUR_TEXT_INDEX
      STEP_FOUR_TEXT_INDEX = STEP_FOUR_TEXT_INDEX +1

      $('#st51Text').empty()
      $('#st51Text').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].parent}`)


      $('#st51SubText').empty()
      $('#st51SubText').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].child}`)
      
     $(`#${STEP_FOUR_TEXTS[currentStep].tb}`).css("display", "none");
     $(`#${STEP_FOUR_TEXTS[currentStep+1].tb}`).css("display", "");
    }
   });

   $("#btnST5Back").click(function(e){
    e.preventDefault()
    if(STEP_FOUR_TEXT_INDEX > 0){
      const currentStep = STEP_FOUR_TEXT_INDEX
      STEP_FOUR_TEXT_INDEX = STEP_FOUR_TEXT_INDEX -1
      
      $('#st51Text').empty()
      $('#st51Text').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].parent}`)


      $('#st51SubText').empty()
      $('#st51SubText').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].child}`)

      $(`#${STEP_FOUR_TEXTS[currentStep].tb}`).css("display", "none");
      $(`#${STEP_FOUR_TEXTS[currentStep-1].tb}`).css("display", "");
      
    }
   });

   /*

   $("#imgst32").css("display", "none");
      $("#imgst31").css("display", "");

   
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

   $("#btnStepThree").click(function(e){
    $("#dvResultado").css("display", "");
    $("#dvStepThree").css("display", "none");
    
   });
   */

});

