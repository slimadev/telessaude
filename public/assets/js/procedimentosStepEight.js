$(document).ready(function(){
   $("#btnStepEightNext").click(function(){
      $("#dvStepEight").css('display', 'none');
      $("#dvStepNine").css('display', '');
  
   })

     
       
      $("#btnStepEightBack").click(function(){
         $("#dvStepSeven").css('display', '');
         $("#dvStepEight").css('display', 'none');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/tubo_capilar_gota_sangue.png'}
]

$("#dvStepEight").css('display','none');

$("#imgSlEight").attr('src',`${SLIDES[0].imagem}`);



});


  




  

