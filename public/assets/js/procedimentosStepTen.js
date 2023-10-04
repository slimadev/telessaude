$(document).ready(function(){


      $("#btnStepTenNext").click(function(){
         $("#dvStepTen").css('display', 'none');
         $("#dvStepEleven").css('display', '');
     
      })
       
      $("#btnStepTenBack").click(function(){
         $("#dvStepTen").css('display', 'none');
         $("#dvStepNine").css('display', '');
     
      })

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/teste_linha_c.png'}
]

$("#dvStepTen").css('display','none');

$("#imgSlTen").attr('src',`${SLIDES[0].imagem}`);



});


  




  

