$(document).ready(function(){

  let slideOne ="<strong>Volume para diluição depende da via de administração </strong>";
  let slideTwo ="Não se esqueça de retirar o ar do frasco antes de injectar a solução salina";
  let slideThree="Injectar o volume necessário de Cloreto de Sódio a solução reconstituida";
  let slideFour="A solução do artesanato está agora pronto para o uso";
 
        

  

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

    fetch(`/malaria_dashboard`)
    .then((response) => response.json())
    .then((json_data) => {
       console.log(json_data)

    });
    console.log("Aqui no preparacao..")


})

$("#btnStepThreeBack").click(function(){
      
  $("#dvStepThree").css('display', 'none');
  $("#dvStepTwo").css('display', '');



})
  
   });


  

