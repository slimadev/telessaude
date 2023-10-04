$(document).ready(function(){
  let STEP_FOUR_TEXT_INDEX = 0


  const STEP_FOUR_TEXTS = [
    {
      texts:['Se a criança ja consegue pedir para urinar, pecalhe para urinar antes de defecar',
             'As fezes não devem se misturarar com a urina'
            ],
      img:'TB_colheita_amostra_step1.png',
      step:'01',
      notes:''
    },
    {
      texts:['Peça a criança para defecar num pinico limpo',
             'Se não tiver um pinico, coloque um plastico limpo no chão, e peça a criança para defecar sobre o plastico.'
            ],
      img:'TB_colheita_amostra_step2.png',
      step:'02',
      notes:'Se a criança ainda usa fralda, colha as fezes a partir da fralda, preferencialmente as fezes que estiverem em menor contacto com a fralda e que sejam e que sejam menos misturadas com a urina',
      notes_img:'TB_colheita_amostra_nota.png'
    },
    {
      texts:['Coloque as quantidade de fezes (sólidas ou líquidas) que equivale a uma colher de chá ou metade de frasco, se o frasco que lhe foi fornecido não tiver colher',
             'As fezes não devem se misturarar com a urina'
            ],
      img:'TB_colheita_amostra_step3.png',
      step:'03',
      notes:''
    },
    {
      texts:['Feche bem a tampa do frasco.',
            ],
      img:'TB_colheita_amostra_step4.png',
      step:'04',
      notes:''
    },
    {
      texts:['Retire as luvas e descarte-as no balde de lixo infecioso e lave as mãos com água, sabão e ou cinza',
            ],
      img:'TB_colheita_amostra_step5.png',
      step:'05',
      notes:''
    },
    {
      texts:['Leve a amostra até ao laboratório da Unidade Sanitária',
             'Escreva a data e hora da colheta no frasco (se não foi escrito no inicio do procedimento)'
            ],
      img:'TB_colheita_amostra_step6.png',
      step:'06',
      notes:''
    },
    {
      texts:['Condicione a amostra apropriadamente e leve ao laboratório o mais rápido possível no laboratório da Unidade ao abrigo do sol',
            ],
      img:'TB_colheita_amostra_step7.png',
      step:'07',
      notes:''
    }

  ]

  $("#btnST4Next").click(function(e){
    e.preventDefault()
    if(STEP_FOUR_TEXTS.length > STEP_FOUR_TEXT_INDEX+1){
      STEP_FOUR_TEXT_INDEX = STEP_FOUR_TEXT_INDEX +1
      $('#ST4_TEXT').empty()
      $('#ST4_STEP').empty()
      $('#ST4_IMG').empty()

      STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].texts.forEach(text => {
        $('#ST4_TEXT').append(`<li>${text}</li>`)
      });

      $('#ST4_STEP').append(STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].step)
      $('#ST4_IMG').append(`<img src="assets/img/${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].img}"  alt="" width="200" height="200"/>`)
      
    }
   });

   $("#btnST4Back").click(function(e){
    e.preventDefault()
    if(STEP_FOUR_TEXT_INDEX > 0){
      STEP_FOUR_TEXT_INDEX = STEP_FOUR_TEXT_INDEX -1
      $('#ST4_TEXT').empty()
      $('#ST4_STEP').empty()
      $('#ST4_IMG').empty()

      STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].texts.forEach(text => {
        $('#ST4_TEXT').append(`<li>${text}</li>`)
      });

      $('#ST4_STEP').append(STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].step)
      $('#ST4_IMG').append(`<img src="assets/img/${STEP_FOUR_TEXTS[STEP_FOUR_TEXT_INDEX].img}"  alt="" width="200" height="200"/>`)
      
      
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

