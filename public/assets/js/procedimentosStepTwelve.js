$(document).ready(function(){
   $("#btnStepTwelveNext").click(function(){
      $("#dvStepTwelve").css('display', 'none');
      $("#dvStepThirteen").css('display', '');
  
   })

      $("#btnStepTwelveBack").click(function(){
         $("#dvStepTwelve").css('display', 'none');
         $("#dvStepEleven").css('display', '');
     
      })
       
    

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/despertador.png'}
]

$("#dvStepTwelve").css('display','none');

$("#imgSlTwelve").attr('src',`${SLIDES[0].imagem}`);



});