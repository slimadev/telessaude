$(document).ready(function(){
   $("#btnStepSevenNext").click(function(){
      $("#dvStepSeven").css('display', 'none');
      $("#dvStepEight").css('display', '');
  
   })

       
      $("#btnStepSevenBack").click(function(){
         $("#dvStepSeven").css('display', 'none');
         $("#dvStepSix").css('display', '');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/lanceta_caixa.png'}
]

$("#dvStepSeven").css('display','none');

$("#imgSlSeven").attr('src',`${SLIDES[0].imagem}`);



});


  




  

