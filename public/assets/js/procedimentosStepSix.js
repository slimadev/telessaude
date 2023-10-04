$(document).ready(function(){
  
   $("#btnStepSixNext").click(function(){
      $("#dvStepSix").css('display', 'none');
      $("#dvStepSeven").css('display', '');
  
   })

   
      $("#btnStepSixBack").click(function(){
         $("#dvStepFive").css('display', '');
         $("#dvStepSix").css('display', 'none');
     
      })

   let slideOne1="<strong>Pique a polpa do dedo anelar face lateral</strong>";
  


let index1 =0; 
const SLIDES1=[
{'nome':slideOne1, 'imagem':'assets/img/dedo_anelar_face.png'}
]



$("#imgSlSix").attr('src',`${SLIDES1[0].imagem}`);
});




  

