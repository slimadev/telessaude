$(document).ready(function(){

   let cor_amarela="<strong>Se a cor estiver amarela, usar o teste</strong>";
   let cor_verde="<strong>Se a cor estiver verde, não usar o teste</strong>";
  

 let index =0; 
 const SLIDES=[
   {'nome':cor_amarela, 'imagem':'assets/img/bolsa_amarela.png'}, {'nome':cor_verde, 'imagem':'assets/img/bolsa_verde.png'}
]

 $("#dvStepTwo").css('display','none');
$("#procedimentosStepTwo").append(SLIDES[0].nome);
$("#imgSlTwo").attr('src',`${SLIDES[0].imagem}`);

 $('#btnProcedimentosStepTwoNext').click(function(){

     

     if(SLIDES.length > index+1){
       index+=1
         $('#procedimentosStepTwo').empty()
         $('#procedimentosStepTwo').append(`<strong>${SLIDES[index].nome}</strong>`)
         $("#imgSlTwo").attr('src',`${SLIDES[index].imagem}`);
    }

     
 })

 $('#btnProcedimentosStepTwoBack').click(function(){

   if(index>0){
     index-=1
     $('#procedimentosStepTwo').empty()
     $('#procedimentosStepTwo').append(`<strong>${SLIDES[index].nome}</strong>`)
     $("#imgSlTwo").attr('src',`${SLIDES[index].imagem}`);
   }

   
})



   
  
  
   });


  

