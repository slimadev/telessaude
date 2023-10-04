$(document).ready(function(){
   $("#btnStepElevenNext").click(function(){
      $("#dvStepEleven").css('display', 'none');
      $("#dvStepTwelve").css('display', '');
  
   })

      $("#btnStepElevenBack").click(function(){
         $("#dvStepEleven").css('display', 'none');
         $("#dvStepTen").css('display', '');
     
      })
       
    

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/tampao_poco_quadrado.png'}
]

$("#dvStepElevn").css('display','none');

$("#imgSlEleven").attr('src',`${SLIDES[0].imagem}`);



});


  




  

