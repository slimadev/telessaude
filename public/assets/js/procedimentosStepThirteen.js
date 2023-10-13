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
               info+="<p><strong>Resultado Positivo (P.Falciparum)</strong></p>";
               info+="<img src='assets/img/teste_positivo.png'  alt='' width='350' height='120'/>";
               info+="</div>";
               info+="<div id='infoTwo'>";
               info+='<p>A linha “C” e “P.f” estão presentes</p>';
               info+="<img src='assets/img/teste_linha_c.png'  alt='' width='300' height='100'/>";
               info+='<p>A linha “C” e “P.f” estão presentes (mesmo sendo a linha "P.f" fraca)</p>';
               info+="</div>";
               info+="</div>";


     let info1="<div id='info'>";
     info1+="<div class='mb-3' id='infoOne'>"; 
     info1+="<p><strong>Resultado Negativo</strong></p>";
     info1+="<img src='assets/img/teste_negativo.png'  alt='' width='350' height='120'/>";
     info1+='<p>A linha “C” está presente mas linha "P.f" não aparece</p>';
     info1+="</div>";
     info1+="</div>";


     let info2="<div id='info'>";
     info2+="<div class='mb-3' id='infoOne'>"; 
     info2+="<p><strong>Resultado Inválido </strong></p>";
     info2+="<img src='assets/img/teste_invalido.png'  alt='' width='350' height='120'/>";
     info2+="<p>A linha “C” e “P.f” não estão presentes</p>";
     info2+="</div>";
     info2+="<div id='infoTwo'>";
     info2+="<img src='assets/img/teste_invalido_linha_c.png'  alt='' width='300' height='150'/>";
     info2+='<p>Só está presente a linha “P.f”. O teste deve ser repetido</p>';
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


  




  

