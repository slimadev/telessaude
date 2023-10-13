$(document).ready(function(){

  let slideOne ="<strong>IV: Injecção lenta de 3-4 ml por minuto</strong>";

  let slideTwo ="<strong>IM:</strong> Injecte lentamente <br>Divida as doses superiores a 5 ml em locais diferentes (coxas)";
  
 
        

  

    let index =0; 
    const SLIDES=[
      {'nome':slideOne, 'imagem':'assets/img/administrar1.png'},{'nome':slideTwo, 'imagem':'assets/img/administrar2.png'}
  ]

   // $("#dvStepThree").css('display','');
   $("#preparacaoStepFourSlOne").append(SLIDES[0].nome);
   $("#imagem4").attr('src',`${SLIDES[0].imagem}`);


    $('#btnPreparacaoFourNext').click(function(){

        if(SLIDES.length > index+1){
          index+=1
          $('#preparacaoStepFourSlOne').empty()
          $('#preparacaoStepFourSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
          $("#imagem4").attr('src',`${SLIDES[index].imagem}`);
        }

        
    })
  
    $('#btnPreparacaoFourBack').click(function(){
     
      if(index>0){
        index-=1
        $('#preparacaoStepFourSlOne').empty()
        $('#preparacaoStepFourSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
       $("#imagem4").attr('src',`${SLIDES[index].imagem}`);
      }

      
  })

  

$("#btnStepFourBack").click(function(){
      
  $("#dvStepFour").css('display', 'none');
  $("#dvStepThree").css('display', '');



})
  
   });


  

