$(document).ready(function(){
   
       
      $("#btnStepSeventeenBack").click(function(){
         $("#dvStepSiventeen").css('display', '');
         $("#dvStepSixteen").css('display', 'none');
     
      })

   let slideOne="<strong><span font-color='red' >Atenção:</span> Cada teste deve ser usado apenas uma vez</strong>";
  


let index =0; 
const SLIDES=[
{'nome':slideOne, 'imagem':'assets/img/Doctors-bro.svg'}
]

//$("#dvStepThrirteen").css('display','none');

$("#imgSlSeventeen").attr('src',`${SLIDES[0].imagem}`);



});


  




  

