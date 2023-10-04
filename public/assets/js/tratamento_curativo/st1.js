$(document).ready(function(){
  let STEP_FOUR_TEXT_INDEX = 0


  const STEP_FOUR_TEXTS = [
    {
      parent:'Dosagem de TB Sensível para crianças, adolescentes com peso menor que 25 kg',
      child:'',
      tb:'st1tb2'
    },
    {
      parent:'Dosagem dos MATs para Tratatamento de TB-S em Crianças e Adolescentes ≤25kg (formulações Pediátricas)', 
      child:'Tratamento de TB infantil ( < 4 kgs) em regime de internamento',
      tb:'st1tb3'
    },
    {
      parent:'Dosagem dos MATs para Tratatamento de TB-S em Crianças e Adolescentes ≤25kg (formulações Pediátricas)', 
      child:'Tratamento de TB infantil ( < 4 kgs) em regime de internamento',
      tb:'st1tb4'
    },
    {
      parent:'Dosagem dos MATs para Tratatamento de TB-S em Crianças e Adolescentes ≤25kg (formulações Pediátricas)', 
      child:'Tratamento de TB infantil ( Crianças dos 4-24.9 kgs)',
      tb:'st1tb5'
    },
    {
      parent:'Dosagem dos MATs para Tratatamento de TB-S em Crianças e Adolescentes ≤25kg (formulações Pediátricas)', 
      child:'Tratamento de TB infantil ( Crianças dos 4-24.9 kgs)',
      tb:'st1tb6'
    },
    {
      parent:'Monitoria do Tratamento de TB Sensível', 
      child:'',
      tb:'st1tb7'
    },
    {
      parent:'Monitoria do Tratamento de TB Sensível', 
      child:'Calendário de Seguimento da Criança em TAT para TB-S',
      tb:'st1tb8'
    }
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
    if(STEP_TWO_TEXTS.length > STEP_FOUR_TEXT_INDEX+1){
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


});

