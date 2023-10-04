$(document).ready(function(){
   $("#btnStepFourteenNext").click(function(){
     
      $("#dvStepFourteen").css('display', 'none');
      $("#dvStepFifteen").css('display', '');
  
   })


       
      $("#btnStepFourteenBack").click(function(){
         $("#dvStepFourteen").css('display', 'none');
         $("#dvStepThirteen").css('display', '');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/lixo.png'}
]



$("#imgSlFourteen").attr('src',`${SLIDES[0].imagem}`);



});


  




  

