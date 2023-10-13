$(document).ready(function(){
  let STEP_FOUR_TEXT_INDEX = 0


  const STEP_FOUR_TEXTS = [
    {
      parent:'Dosagem',
      child:'',
      tb:'st1tb1'
    },
    {
      parent:'Dosagem de Piridoxina para crianças e adolescentes em TAT ou TPT', 
      child:'',
      tb:'st1tb2'
    },
    {
      parent:'Dosagem de Piridoxina para crianças <30Kg', 
      child:'',
      tb:'st1tb3'
    },
    {
      parent:'Dosagem para adolescentes e adultos >= 30Kg', 
      child:'',
      tb:'st1tb4'
    },
  ]

  $("#btnst1Next").click(function(e){
    e.preventDefault()
    if(STEP_FOUR_TEXTS.length > STEP_FOUR_TEXT_INDEX+1){
      const currentStep = STEP_FOUR_TEXT_INDEX
      STEP_FOUR_TEXT_INDEX = STEP_FOUR_TEXT_INDEX +1

      $('#st11Text').empty()
      $('#st11Text').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].parent}`)


      $('#st11SubText').empty()
      $('#st11SubText').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].child}`)
      
     $(`#${STEP_FOUR_TEXTS[currentStep].tb}`).css("display", "none");
     $(`#${STEP_FOUR_TEXTS[currentStep+1].tb}`).css("display", "");
    }
   });

   $("#btnst1Back").click(function(e){
    e.preventDefault()
    if(STEP_FOUR_TEXT_INDEX > 0){
      const currentStep = STEP_FOUR_TEXT_INDEX
      STEP_FOUR_TEXT_INDEX = STEP_FOUR_TEXT_INDEX -1
      
      $('#st11Text').empty()
      $('#st11Text').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].parent}`)


      $('#st11SubText').empty()
      $('#st11SubText').append(`${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].child}`)

      $(`#${STEP_FOUR_TEXTS[currentStep].tb}`).css("display", "none");
      $(`#${STEP_FOUR_TEXTS[currentStep-1].tb}`).css("display", "");
      
    }
   });
 
   let STEP_TWO_TEXT_INDEX = 0


  const STEP_TWO_TEXTS = [
    {
      parent:'Regimes recomendados para o tratamento de TB resistentes',
      child:'',
      tb:'st2tb1'
    },
    {
      parent:'Dosagem dos MAT do regime padronizado de tratamento de TB-MR/RR para crianças menores de 30 Kg', 
      child:'',
      tb:'st2tb2'
    },
    {
      parent:'Dosagem dos MAT do regime padronizado de tratamento de TB-MR/RR para adultos, adolescentes e crianças maiores de 30 Kg', 
      child:'',
      tb:'st2tb3'
    },
    {
      parent:'Dosagem de MATs usados para Regime individualizado de Crianças < de 30Kg', 
      child:'',
      tb:'st2tb4'
    },
    {
      parent:'Dosagem de MATs usados para o regime Individualizado de adultos, adolescentes e crianças ≥ de 30kg', 
      child:'Tratamento de TB infantil ( Crianças dos 4-24.9 kgs)',
      tb:'st2tb5'
    },
    {
      parent:'Monitoria do Tratamento de TB-R', 
      child:'',
      tb:'st2tb6'
    },
    {
      parent:'ALGORÍTIMO DE MONITORIA DO TRATAMENTO COM REGIME PADRONIZADO DE 18-20 MESES', 
      child:'',
      tb:'st2tb7'
    },
    {
      parent:'Calendário de Seguimento da Criança em TAT para TB-Resistente', 
      child:'',
      tb:'st2tb8'
    }
  ]

  $("#btnst2Next").click(function(e){
    e.preventDefault()
    if(STEP_TWO_TEXTS.length > STEP_TWO_TEXT_INDEX+1){
      const currentStep = STEP_TWO_TEXT_INDEX
      STEP_TWO_TEXT_INDEX = STEP_TWO_TEXT_INDEX +1

      $('#st21Text').empty()
      $('#st21Text').append(`${STEP_TWO_TEXTS[STEP_TWO_TEXT_INDEX].parent}`)


      $('#st21SubText').empty()
      $('#st21SubText').append(`${STEP_TWO_TEXTS[STEP_TWO_TEXT_INDEX].child}`)
      
     $(`#${STEP_TWO_TEXTS[currentStep].tb}`).css("display", "none");
     $(`#${STEP_TWO_TEXTS[currentStep+1].tb}`).css("display", "");
    }
   });

   $("#btnst2Back").click(function(e){
    e.preventDefault()
    if(STEP_TWO_TEXT_INDEX > 0){
      const currentStep = STEP_TWO_TEXT_INDEX
      STEP_TWO_TEXT_INDEX = STEP_TWO_TEXT_INDEX -1
      
      $('#st21Text').empty()
      $('#st21Text').append(`${STEP_TWO_TEXTS[STEP_TWO_TEXT_INDEX].parent}`)


      $('#st21SubText').empty()
      $('#st21SubText').append(`${STEP_TWO_TEXTS[STEP_TWO_TEXT_INDEX].child}`)

      $(`#${STEP_TWO_TEXTS[currentStep].tb}`).css("display", "none");
      $(`#${STEP_TWO_TEXTS[currentStep-1].tb}`).css("display", "");
      
    }
   });

   $("#btnStepOne").click(function(e){
    $("#dvStepOne").css("display", "none");
    $("#dvStepTwo").css("display", "");
    console.log("AQUI.... tambem")
    fetch(`/tuberculose_dashboard`)
          .then((response) => response.json())
          .then((json_data) => {
            console.log(json_data)

    });
   });

   $("#btnStepTwoBack").click(function(e){
    $("#dvStepOne").css("display", "");
    $("#dvStepTwo").css("display", "none");
    
   });


});

