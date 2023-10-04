$(document).ready(function(){
   
       
      $("#btnStepSixteenBack").click(function(){
         $("#dvStepFifteen").css('display', '');
         $("#dvStepSixteen").css('display', 'none');
     
      })

   let slideOne="<strong><span font-color='red' >Atenção:</span>Cada teste deve ser usado apenas uma vez</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/hero-img.png'}
]

//$("#dvStepThrirteen").css('display','none');

$("#imgSlSixteen").attr('src',`${SLIDES[0].imagem}`);



});


  




  

