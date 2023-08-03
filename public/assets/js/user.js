$(document).ready(function(){
 
    console.log('Carregado via Jquery')
    $('input[type=radio][name=rbProfile]').change(function() {
       if(this.value==1){
         $(".dvProgram").css("display", "");
       }else{
         $(".dvProgram").css("display", "none");
       }
     });
 
 });
 
 