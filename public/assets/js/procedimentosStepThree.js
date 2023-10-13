$(document).ready(function(){
   $("#btnStepTwoNext").click(function(){
      $("#dvStepTwo").css('display', 'none');
      $("#dvStepThree").css('display', '');
  
   })
    
   $("#btnStepThreeBack").click(function(){
      $("#dvStepThree").css('display', 'none');
      $("#dvStepTwo").css('display', '');
  
   })

   let teste="<strong>Teste</strong>";
   let tubo="<strong>Tubo capilar (copo invertido)</strong>";
   let desinfectante="<strong>Desinfectante</strong>";
  

let index =0; 
const SLIDES=[
{'nome':teste, 'imagem':'assets/img/kit.png'},
{'nome':tubo, 'imagem':'assets/img/tupo_copoinvertido.png'},
{'nome':desinfectante, 'imagem':'assets/img/alcool.png'}
]

$("#dvStepTwo").css('display','none');
$("#procedimentosStepThree").append(SLIDES[0].nome);
$("#imgSlThree").attr('src',`${SLIDES[0].imagem}`);

$('#btnProcedimentosStepThreeNext').click(function(){

     

   if(SLIDES.length > index+1){
     index+=1
       $('#procedimentosStepThree').empty()
       $('#procedimentosStepThree').append(`<strong>${SLIDES[index].nome}</strong>`)
       $("#imgSlThree").attr('src',`${SLIDES[index].imagem}`);
  }

   
})

$('#btnProcedimentosStepThreeBack').click(function(){

 if(index>0){
   index-=1
   $('#procedimentosStepThree').empty()
   $('#procedimentosStepThree').append(`<strong>${SLIDES[index].nome}</strong>`)
   $("#imgSlThree").attr('src',`${SLIDES[index].imagem}`);
 }

 
})

});


  

