$(document).ready(function(){
    $("#btnStepSixteenNext").click(function(){
      
       $("#dvStepSixteen").css('display', 'none');
       $("#dvStepSeventeen").css('display', '');

       fetch(`/malaria_dashboard`)
               .then((response) => response.json())
               .then((json_data) => {
                  console.log(json_data)

         });
       console.log("Aqui no procedimento..")
   
    })
 
 
        
       $("#btnStepSixteenBack").click(function(){
          $("#dvStepSixteen").css('display', 'none');
          $("#dvStepFourteen").css('display', '');
      
       })
 
    let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
   
 
 
 let index =0; 
 const SLIDES=[
 {'nome':slideOne, 'imagem':'assets/img/lixo.png'}
 ]
 
 
 
 $("#imgSlFourteen").attr('src',`${SLIDES[0].imagem}`);
 
 
 
 });
 
 
   
 
 
 
 
   
 
 