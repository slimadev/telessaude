$(document).ready(function(){

    
  let luvas ="<p>Luvas descartáveis</p>";
  let tubo="<p>Tubo capilar</p>";
  let alcool="<p>Álcool</p>";
  let relogio="<p>Relógio/cronometro</p>";
  let lanceta="<p>Lanceta</p>";
  let tampao="<p>Tampão</p>";
  let bolsa="<p>Bolsa do teste</p>";
        

  

    let index =0; 
    const SLIDES=[
      {'nome':luvas, 'imagem':'assets/img/luvas_descataveis.png'}, {'nome':tubo, 'imagem':'assets/img/tubo_capilar.png'}, {'nome':alcool, 'imagem':'assets/img/alcool.png'},{'nome':relogio, 'imagem':'assets/img/despertador.png'},{'nome':lanceta, 'imagem':'assets/img/lanceta.png'},{'nome':tampao, 'imagem':'assets/img/tampao.png'},{'nome':bolsa, 'imagem':'assets/img/bolsa_amarela.png'}
  ]

    $("#dvStepTwoOn").css('display','');
   $("#procedimentosStepOneSlOne").append(SLIDES[0].nome);
   $("#imagem").attr('src',`${SLIDES[0].imagem}`);
   $(".dist").css('padding','10');


    $('#btnProcedimentosNext').click(function(){

        if(SLIDES.length > index+1){
          index+=1
          $('#procedimentosStepOneSlOne').empty()
          $('#procedimentosStepOneSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
          $("#imagem").attr('src',`${SLIDES[index].imagem}`);
        }

        
    })
  
    $('#btnProcedimentosBack').click(function(){

      if(index>0){
        index-=1
        $('#procedimentosStepOneSlOne').empty()
        $('#procedimentosStepOneSlOne').append(`<strong>${SLIDES[index].nome}</strong>`)
        $("#imagem").attr('src',`${SLIDES[index].imagem}`);
      }

      
  })

  $("#btnStepOneNext").click(function(){
      
    $("#dvStepTwoOn").css('display', 'none');
    $("#dvStepTwo").css('display', '');



})

$("#btnStepTwoBack").click(function(){
      
  $("#dvStepTwoOn").css('display', '');
  $("#dvStepTwo").css('display', 'none');



})
  
   });


  

