$(document).ready(function(){
  let CRIANCA_TEXT_INDEX = 0
  let ADOLESCENTE_TEXT_INDEX = 0
  let STEP_TWO_TEXT_INDEX = 0
  let STEP_THREE_TEXT_INDEX = 0

  const CRIANCA_TEXTS = [
    'Tosse há >= 2 semanas?',
    'Febre há >= 2 semanas?',
    'Perda de peso ou falência de crescimento?',
    'Tem história de contacto com TB nos últimos 2 anos ou morte recente na família?',
    'Fadiga?',
    'Adenopatias cervicais?'
  ]

  const ADOLESCENTE_TEXTS = [
    'Febre há mais de 2 semanas?',
    'Emagrecimento?',
    'Sudorese nocturna?',
    'Tosse há mais de 2 semanas?',
    'Astenia?',
    'Tem história de contacto com TB nos últimos 2 anos ou morte recente na família?',
  ]

  const STEP_TWO_TEXTS = [
    'Tosse há mais de 2 semanas? ',
    'Febre há mais de 2 semanas? ',
    'Perda de peso?',
    'Falência de crescimento/perda ponderal?',
    'Fadiga?',
    'Adenomegalia',
  ]

  const STEP_THREE_TEXTS = [
    '* ALGORITMO DE TESTAGEM COM RECURSO AO GENEXPERT ',
    '* Interpretação dos resultados do Xpert/MTB/RIF'
  ]

  $("#btnST3Next").click(function(e){
    e.preventDefault()
    if(STEP_THREE_TEXTS.length > STEP_THREE_TEXT_INDEX+1){
      STEP_THREE_TEXT_INDEX = STEP_THREE_TEXT_INDEX +1
      $('#st32Text').empty()
      $('#st32Text').append(`${STEP_THREE_TEXTS[STEP_THREE_TEXT_INDEX]}`)
      console.log("Entrou...",$("#imgst31pag"))
      $("#imgst31pag").css("display", "none");
      $("#imgst32").css("display", "");
    }
   });

   $("#btnST3Back").click(function(e){
    e.preventDefault()
    if(STEP_THREE_TEXT_INDEX > 0){

      STEP_THREE_TEXT_INDEX = STEP_THREE_TEXT_INDEX -1
      $('#st32Text').empty()
      $('#st32Text').append(`${STEP_THREE_TEXTS[STEP_THREE_TEXT_INDEX]}`)
      $("#imgst31pag").css("display", "");
      $("#imgst32").css("display", "none");
      
    }
   });


  $("#btnCriancaNextNext").click(function(e){
    e.preventDefault()
    if(CRIANCA_TEXTS.length > CRIANCA_TEXT_INDEX+1){
      CRIANCA_TEXT_INDEX = CRIANCA_TEXT_INDEX +1
      $('#tuberculoseCriancaText').empty()
      $('#tuberculoseCriancaText').append(`<strong>${CRIANCA_TEXTS[CRIANCA_TEXT_INDEX]}</strong>`)
    }
    
    
   });

   $("#btnCriancaNextBack").click(function(e){
    e.preventDefault()
    if(CRIANCA_TEXT_INDEX > 0){
      CRIANCA_TEXT_INDEX = CRIANCA_TEXT_INDEX -1
      $('#tuberculoseCriancaText').empty()
      $('#tuberculoseCriancaText').append(`<strong>${CRIANCA_TEXTS[CRIANCA_TEXT_INDEX]}</strong>`)
    }
   });

   $("#btnAdolescenteNext").click(function(e){
    e.preventDefault()
    if(ADOLESCENTE_TEXTS.length > ADOLESCENTE_TEXT_INDEX+1){
      ADOLESCENTE_TEXT_INDEX = ADOLESCENTE_TEXT_INDEX +1
      $('#tuberculoseAdolescenteText').empty()
      $('#tuberculoseAdolescenteText').append(`<strong>${ADOLESCENTE_TEXTS[ADOLESCENTE_TEXT_INDEX]}</strong>`)
    }
    
    
   });

   $("#btnAdolescenteBack").click(function(e){
    e.preventDefault()
    if(ADOLESCENTE_TEXT_INDEX > 0){
      ADOLESCENTE_TEXT_INDEX = ADOLESCENTE_TEXT_INDEX -1
      $('#tuberculoseAdolescenteText').empty()
      $('#tuberculoseAdolescenteText').append(`<strong>${ADOLESCENTE_TEXTS[ADOLESCENTE_TEXT_INDEX]}</strong>`)
    }
   });

   $("#btnStepTwoDataNext").click(function(e){
    e.preventDefault()
    if(STEP_TWO_TEXTS.length > STEP_TWO_TEXT_INDEX+1){
      STEP_TWO_TEXT_INDEX = STEP_TWO_TEXT_INDEX +1
      $('#stepTwoDataText').empty()
      $('#stepTwoDataText').append(`<strong>${STEP_TWO_TEXTS[STEP_TWO_TEXT_INDEX]}</strong>`)
    }
    
    
   });

   $("#btnStepTwoDataBack").click(function(e){
    e.preventDefault()
    if(STEP_TWO_TEXT_INDEX > 0){
      STEP_TWO_TEXT_INDEX = STEP_TWO_TEXT_INDEX -1
      $('#tuberculoseCriancastepTwoDataTextText').empty()
      $('#stepTwoDataText').append(`<strong>${STEP_TWO_TEXTS[STEP_TWO_TEXT_INDEX]}</strong>`)
    }
   });


  $("#btnStepOne").click(function(e){
    e.preventDefault()
    console.log("btnStepOne")
    $("#dvStepOne").css("display", "none");
    $("#dvStepTwo").css("display", "");
    
   });

   $("#btnStepTwo").click(function(e){
    e.preventDefault()
    $("#dvStepTwo").css("display", "none");
    $("#dvStepTree").css("display", "");
    
   });

   $("#btnStepOneBack").click(function(e){
      $("#dvStepOne").css("display", "");
      $("#dvStepTwo").css("display", "none");
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
    $("#dvStepTree").css("display", "");
    $("#dvStepTwoOne").css("display", "none");
   });

   $("#btnStepTwoOneBack").click(function(e){
    $("#dvStepTwo").css("display", "");
    $("#dvStepTwoOne").css("display", "none");
   });


   $("#btnStepTreeBack").click(function(e){
    $("#dvStepOne").css("display", "");
    $("#dvStepTree").css("display", "none");
    
   });

   $("#btnStepTree").click(function(e){
    console.log("Alo mundo...")
    $("#dvStepFour").css("display", "");
    $("#dvStepTree").css("display", "none");
   });

   $("#btnStepFourBack").click(function(e){
    $("#dvStepTree").css("display", "");
    $("#dvStepFour").css("display", "none");
    
   });

   $("#btnStepFour").click(function(e){
    $("#dvStepFive").css("display", "");
    $("#dvStepFour").css("display", "none");

    console.log("AQUI:...")
    fetch(`/tuberculose_dashboard`)
          .then((response) => response.json())
          .then((json_data) => {
            console.log(json_data)

    });

    
   });

   $("#btnStepFiveBack").click(function(e){
    console.log('CLiCOU...')
    $("#dvStepFour").css("display", "");
    $("#dvStepFive").css("display", "none");
    
   });

});

