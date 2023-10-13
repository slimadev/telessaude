$(document).ready(function(){
  let STEP_TWO_1_INDEX = 0
  let STEP_TWO_2_INDEX = 0

  const STEP_TWO_2_TEXTS = [
    {
      texts:['Antes de dormir, beba um copo de água e durma sem almofada'
            ],
      step:'01',
    },
    {
      texts:['Ao acordar, não coma, não beba, não fume e nem escove os dentes antes de colher a amostra'
            ],
      step:'02',
    },
    {
      texts:['Siga os passos de 1 a 10 da orientação da colheta de expectoração no dia da consulta'
            ],
      step:'03',
    },
  ]

  const STEP_TWO_1_TEXTS = [
    {
      texts:['Certifique-se que no seu frasco está escrito o seu nome e a data da colheta'
            ],
      img:'step1.png',
      step:'01',
      notes:[]
    },
    {
      texts:['Lave a boca bochechando apenas com água (se tiver placa dentária retire-a)',
            ],
      img:'step2.png',
      step:'02',
      notes:[],
    },
    {
      texts:['Relaxe e leve o tempo necessário para colher a sua expectoração',
            ],
      img:'step3.png',
      step:'03', 
      notes:[]
    },
    {
      texts:['Num local ao ar livre, certifique-se de que ninguém esteja por perto, especialmente crianças, inspira profundamente e suspenda a a respiração por alguns segundos e expire.',
            ],
      img:'step4.png',
      step:'04',
      notes:[]
    },
    {
      texts:['1ª Inspire dep[ois expire: Inspire e espire por mais duas vezes.',
            'A 3ª vez, force a tosse a até a retirada da expectoração, do peito para a boca.'],
      img:'step5.png',
      step:'05',
      notes:[]
    },
    {
      texts:['Expire e Inspire por mais duas vezes.',
             'A 3ª vez, force a tosse a até a retirada da expectoração, do peito para a boca.'
            ],
      img:'step6.png',
      step:'06',
      notes:[]
    },
    {
      texts:['O volume da amostra deverá ser pelo menos 5ml (veja a marca na figura ao lado.',
             'Se não consiguir os 5ml, repita os passos 5 e 6 para garantir boa qualidade de amostra'
            ],
      img:'step7.png',
      step:'07',
      notes:['Evite pôr salaiva','Feche o frasco com papel']
    },
    {
      texts:['Embrulhe o frasco com papel.',
            ],
      img:'step7.png',
      step:'08',
      notes:[]
    },
    {
      texts:['Coloque o frasco embrulhado no papel com a tampa virada para cima num saco plástico e faça um nó e vá directo ao laboratório.',
            ],
      img:'step7.png',
      step:'09',
      notes:[]
    }

  ]

  $("#btnST21Next").click(function(e){
    e.preventDefault()
    if(STEP_TWO_1_TEXTS.length > STEP_TWO_1_INDEX+1){
      STEP_TWO_1_INDEX = STEP_TWO_1_INDEX +1
      $('#ST21_TEXT').empty()
      $('#ST21_STEP').empty()
      $('#ST21_IMG').empty()
      $('#ST21_NOTES_TEXT').empty()


      STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].texts.forEach(text => {
        $('#ST21_TEXT').append(`<li>${text}</li>`)
      });

      $('#ST21_STEP').append(STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].step)
      $('#ST21_IMG').append(`<img src="assets/img/AmostraTB/${STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].img}"  alt="" width="200" height="200"/>`)
      
      //ST21_NOTES_DIV
      if(STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].notes.length > 0){
          STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].notes.forEach(text => {
            $('#ST21_NOTES_TEXT').append(`<li>${text}</li>`)
          });
          $("#ST21_NOTES_DIV").css("display", "");
      }else{
          $("#ST21_NOTES_DIV").css("display", "none");
      }
      


    }
   });

   $("#btnST21Back").click(function(e){
    e.preventDefault()
    if(STEP_TWO_1_INDEX > 0){
      STEP_TWO_1_INDEX = STEP_TWO_1_INDEX -1
      $('#ST21_TEXT').empty()
      $('#ST21_STEP').empty()
      $('#ST21_IMG').empty()
      $('#ST21_NOTES_TEXT').empty()

      STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].texts.forEach(text => {
        $('#ST21_TEXT').append(`<li>${text}</li>`)
      });
      

      $('#ST21_STEP').append(STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].step)
      $('#ST21_IMG').append(`<img src="assets/img/AmostraTB/${STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].img}"  alt="" width="200" height="200"/>`)
      
      if(STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].notes.length > 0){
        STEP_TWO_1_TEXTS[STEP_TWO_1_INDEX].notes.forEach(text => {
          $('#ST21_NOTES_TEXT').append(`<li>${text}</li>`)
        });
        $("#ST21_NOTES_DIV").css("display", "");
      }else{
          $("#ST21_NOTES_DIV").css("display", "none");
      }
      
    }
   });



   $("#btnST22Next").click(function(e){
    e.preventDefault()
    if(STEP_TWO_2_TEXTS.length > STEP_TWO_2_INDEX+1){
      STEP_TWO_2_INDEX = STEP_TWO_2_INDEX +1
      $('#ST22_TEXT').empty()
      $('#ST22_STEP').empty()


      STEP_TWO_2_TEXTS[STEP_TWO_2_INDEX].texts.forEach(text => {
        $('#ST22_TEXT').append(`<li>${text}</li>`)
      });

      $('#ST22_STEP').append(STEP_TWO_2_TEXTS[STEP_TWO_2_INDEX].step)
      
    }
   });

   $("#btnST22Back").click(function(e){
    e.preventDefault()
    if(STEP_TWO_2_INDEX > 0){
      STEP_TWO_2_INDEX = STEP_TWO_2_INDEX -1
      $('#ST22_TEXT').empty()
      $('#ST22_STEP').empty()


      STEP_TWO_2_TEXTS[STEP_TWO_2_INDEX].texts.forEach(text => {
        $('#ST22_TEXT').append(`<li>${text}</li>`)
      });

      $('#ST22_STEP').append(STEP_TWO_2_TEXTS[STEP_TWO_2_INDEX].step)
      
    }
   });


});

