$(document).ready(function(){

    
  let tabela='<table class="table" style="margin-left:80px">';
  tabela+='<thead>';
  tabela+='<tr><th>Escala de Peso</td><th>No de Frascos</th></tr>';
  tabela+='</thead>';
  tabela+='<tbody>';
  tabela+='<tr><td>5-26</td><td>1</td></tr>';
  tabela+='<tr><td>27-51</td><td>2</td></tr>';
  tabela+='<tr><td>52-75</td><td>3</td></tr>';
  tabela+='<tr><td>76-100</td><td>4</td></tr>';
  tabela+='</tbody>';
  tabela+='</table>';

  

    let index =0; 
    const SLIDES=[
      {'nome':tabela, 'imagem':'assets/img/child.png'}
  ]

   // $("#dvStepOne").css('display','');
  //  $("#dvStepTwo").css('display','none');
   $("#preparacaoStepOneSlOne").append(SLIDES[0].nome);
   $("#imagem").attr('src',`${SLIDES[0].imagem}`);
    $(".dist").css('padding','10');


  $("#btnStepOneNext").click(function(){
      
    $("#dvStepOne").css('display', 'none');
    $("#dvStepTwo").css('display', '');



})

$("#btnStepTwoBack").click(function(){
      
  $("#dvStepTwo").css('display', '');
  $("#dvStepOne").css('display', 'none');



})
  
   });


  

