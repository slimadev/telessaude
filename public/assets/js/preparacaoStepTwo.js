$(document).ready(function(){

  let slideOne ="<strong>Artesunato em pó + ampola de bicarbonato </strong>";
  let slideTwo ="<p>Injectar o conteúdo da ampola de bicarbonato em frasco de artesunato </p>";
  let slideThree="<p>Agitar suavemente ate dissolver </p>";
  let slideFour="<p>A solução reconstruida ficará clara em cerca de 2-3 minutos </p>";
 
        

  

    let index =0; 
    const SLIDES=[
      {'nome':slideOne, 'imagem':'assets/img/artesunato_po_bicarbonato.png'},{'nome':slideTwo, 'imagem':'assets/img/instrucacao_dosagem.png'}, {'nome':slideThree, 'imagem':'assets/img/modo_aplicacao.png'}, {'nome':slideFour, 'imagem':'assets/img/frasco.png'}
  ]

    $("#dvStepOne").css('display','');
   $("#preparacaoStepTwoSlOne").append(SLIDES[0].nome);
   $("#imagem1").attr('src',`${SLIDES[0].imagem}`);


    $('#btnPreparacaoNext').click(function(){

        if(SLIDES.length > index+1){
          index+=1
          $('#preparacaoStepTwoSlOne').empty()
          $('#preparacaoStepTwoSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
          $("#imagem1").attr('src',`${SLIDES[index].imagem}`);
        }

        
    })
  
    $('#btnPreparacaoBack').click(function(){

      if(index>0){
        index-=1
        $('#preparacaoStepTwoSlOne').empty()
        $('#preparacaoStepTwoSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
       $("#imagem1").attr('src',`${SLIDES[index].imagem}`);
      }

      
  })

  $("#btnStepTwoNext").click(function(){
      
    $("#dvStepTwo").css('display', 'none');
    $("#dvStepThree").css('display', '');



})

$("#btnStepTwoBack").click(function(){
      
  $("#dvStepTwo").css('display', 'none');
  $("#dvStepOne").css('display', '');



})
  
   });


  

