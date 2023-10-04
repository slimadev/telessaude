$(document).ready(function(){

  let slideOne ="<ul><li><strong>Artesunato reconstruido + cloreto de sódio (ou dextrose a 5%)</strong></li><li><strong>Volume para diluição depende da via de administração</strong></li></ul>";
  let slideTwo ="<p>Não se esqueça de retirar o ar do frasco antes de injectar a solução salina</p>";
  let slideThree="<p>Injectar o volume necessário de Cloreto de Sódio a solução reconstituida</p>";
  let slideFour="<p>A solução do artesanato está agora pronto para o uso </p>";
 
        

  

    let index =0; 
    const SLIDES=[
      {'nome':slideOne, 'imagem':'assets/img/artesunato_reconstituido_solucao.png'},{'nome':slideTwo, 'imagem':'assets/img/instrucao_aplicacao1.png'}, {'nome':slideThree, 'imagem':'assets/img/instrucao_aplicacao2.png'}, {'nome':slideFour, 'imagem':'assets/img/frasco.png'}
  ]

   // $("#dvStepThree").css('display','');
   $("#preparacaoStepThreeSlOne").append(SLIDES[0].nome);
   $("#imagem3").attr('src',`${SLIDES[0].imagem}`);


    $('#btnPreparacaoThreeNext').click(function(){

        if(SLIDES.length > index+1){
          index+=1
          $('#preparacaoStepThreeSlOne').empty()
          $('#preparacaoStepThreeSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
          $("#imagem3").attr('src',`${SLIDES[index].imagem}`);
        }

        
    })
  
    $('#btnPreparacaoThreeBack').click(function(){

      if(index>0){
        index-=1
        $('#preparacaoStepThreeSlOne').empty()
        $('#preparacaoStepThreeSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
       $("#imagem3").attr('src',`${SLIDES[index].imagem}`);
      }

      
  })

  $("#btnStepThreeNext").click(function(){
      
    $("#dvStepThree").css('display', 'none');
    $("#dvStepFour").css('display', '');



})

$("#btnStepThreeBack").click(function(){
      
  $("#dvStepThree").css('display', 'none');
  $("#dvStepTwo").css('display', '');



})
  
   });


  

