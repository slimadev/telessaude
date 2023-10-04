$(document).ready(function(){
   $("#btnStepThreeNext").click(function(){
      $("#dvStepThree").css('display', 'none');
      $("#dvStepFour").css('display', '');
  
   })

      $("#btnStepThreeNext").click(function(){
         $("#dvStepThree").css('display', 'none');
         $("#dvStepFour").css('display', '');
     
      })
       
      $("#btnStepFourBack").click(function(){
         $("#dvStepThree").css('display', '');
         $("#dvStepFour").css('display', 'none');
     
      })

      $("#btnStepFourNext").click(function(){
         $("#dvStepFive").css('display', '');
         $("#dvStepFour").css('display', 'none');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/teste_linha_c.png'}
]

$("#dvStepThree").css('display','none');

$("#imgSlFour").attr('src',`${SLIDES[0].imagem}`);



});


  




  

