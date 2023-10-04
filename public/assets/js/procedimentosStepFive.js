$(document).ready(function(){
  
   $("#btnStepFiveNext").click(function(){
      $("#dvStepSix").css('display', '');
      $("#dvStepFive").css('display', 'none');
  
   })

   
      $("#btnStepFiveBack").click(function(){
         $("#dvStepFour").css('display', '');
         $("#dvStepFive").css('display', 'none');
     
      })

   let slideOne1="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index1 =0; 
const SLIDES1=[
{'nome':slideOne1, 'imagem':'assets/img/dedo_anelar.png'}
]



$("#imgSlFive").attr('src',`${SLIDES1[0].imagem}`);
});


  




  

