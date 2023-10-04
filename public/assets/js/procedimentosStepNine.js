$(document).ready(function(){
   $("#btnStepNineNext").click(function(){
      $("#dvStepNine").css('display', 'none');
      $("#dvStepTen").css('display', '');
  
   })

     
       
      $("#btnStepNineBack").click(function(){
         $("#dvStepEight").css('display', '');
         $("#dvStepNine").css('display', 'none');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/gota_sangue.png'}
]

$("#dvStepNine").css('display','none');

$("#imgSlNine").attr('src',`${SLIDES[0].imagem}`);



});

  




  

