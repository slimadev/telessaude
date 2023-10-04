$(document).ready(function(){
   $("#btnStepFifteenNext").click(function(){
      $("#dvStepFifteen").css('display', 'none');
      $("#dvStepSixteen").css('display', '');
  
   })
       
      $("#btnStepFifteenBack").click(function(){
         $("#dvStepFifteen").css('display', 'none');
         $("#dvStepFourteen").css('display', '');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/resultado.png'}
]

//$("#dvStepThrirteen").css('display','none');

$("#imgSlFifteen").attr('src',`${SLIDES[0].imagem}`);



});


  




  

