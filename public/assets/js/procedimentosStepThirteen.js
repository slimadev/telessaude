$(document).ready(function(){
   $("#btnStepThirteenNext").click(function(){
      $("#dvStepThirteen").css('display', 'none');
      $("#dvStepFourteen").css('display', '');
  
   })

   $("#btnStepThirteenBack").click(function(){
      $("#dvStepThirteen").css('display', 'none');
      $("#dvStepTwelve").css('display', '');
  
   })

     let info="<div id='info'>";
               info+="<div class='mb-3' id='infoOne'>"; 
               info+="<p>POSITIVO(P.Falsiparum)</p>";
               info+="<img src='assets/img/teste_positivo.png'  alt='' width='300' height='100'/>";
               info+="</div>";
               info+="<div id='infoTwo'>";
               info+='<p>A linha “C” e “Pf” estão presentes(mesmo sendo a linha "pf" fraca)</p>';
               info+="<img src='assets/img/teste_linha_c.png'  alt='' width='300' height='100'/>";
               info+="</div>";
               info+="</div>";


     let info1="<div id='info'>";
     info1+="<div class='mb-3' id='infoOne'>"; 
     info1+="<p>NEGATIVO</p>";
     info1+='<p>A linha “C” está presente mas linha "pf" não aparece</p>';
     info1+="<img src='assets/img/teste_negativo.png'  alt='' width='200' height='70'/>";
     info1+="</div>";
     info1+="</div>";


     let info2="<div id='info'>";
     info2+="<div class='mb-3' id='infoOne'>"; 
     info2+="<p>RESULTADO INVALIDO</p>";
     info2+="<img src='assets/img/teste_positivo.png'  alt='' width='300' height='150'/>";
     info2+="<p>A linha “C” e “Pf” não estão presentes</p>";
     info2+="</div>";
     info2+="<div id='infoTwo'>";
     info2+="<img src='assets/img/teste_linha_c.png'  alt='' width='300' height='150'/>";
     info2+='<p>Só está presente a linha “Pf”. O teste deve estar repetido</p>';
     info2+="</div>";
     info2+="</div>";
       

   let slideOne="<strong>Retirar a dose necessária(ml) do(s) frasco(s) e administrar</strong>";
  


let index =0; 
const SLIDES=[
{'nome':info, 'imagem':'assets/img/teste_linha_c.png'},{'nome':info1, 'imagem':'assets/img/teste_linha_c.png'},{'nome':info2, 'imagem':'assets/img/teste_linha_c.png'}
]

//$("#dvStepThrirteen").css('display','none');

//$("#imgSlThirteen").attr('src',`${SLIDES[0].imagem}`);
$("#procedimentosStepThirteen").append(SLIDES[0].nome);

$("#btnProcedimentosStepThirteenNext").click(function(){
  if(index+1<SLIDES.length){
      index+=1;
      $("#procedimentosStepThirteen").empty();
      $("#procedimentosStepThirteen").append(SLIDES[index].nome);
  }
})


$("#btnProcedimentosStepThirteenBack").click(function(){
   if(index>0){
       index-=1;
       $("#procedimentosStepThirteen").empty();
       $("#procedimentosStepThirteen").append(SLIDES[index].nome);
   }
 })
});


  




  

