$(document).ready(function(){
   let isChild = false;
   let ageInMonths = 0;
   let HART_RATE_INTERVAL = {};
   let RESPIRATORY_RATE_INTERVAL = {};
   let HAS_ANORMAL_HART_RATE = false;
   let HAS_ANORMAL_RESPIRATORY_RATE = false;
   let HAS_ANORMAL_SIGNAL = false;
   let hasPregnant = false;
   let isWoman = false
   let ALL_FILLED_DATA = []

  const ADD_LABEL_VALUE_DATA = (label, value) =>{
    ALL_FILLED_DATA.push({label:label,value:value})
  }

  const REMOVE_VALUE_BY_LABEL = (label) =>{
    ALL_FILLED_DATA = ALL_FILLED_DATA.filter(data => data.label != label);
  }

   console.log('Carregado via Jquery')
   $('input[type=radio][name=rbGenero]').change(function() {
      if(this.value==1){
        console.log('SELEMASCT: ',this.value)
        $(".dvGravida").css("display", "none");
      }else{
        console.log('FEM: ',this.value)
        $(".dvGravida").css("display", "");
        isWoman = true
      }
    });

    $('input[type=radio][name=rbGravida]').change(function() {
      if(this.value==1){
        hasPregnant = true
        console.log('GRAVIDA: ',this.value)
      }else{
        console.log('GRAVIDA: ',this.value)
        hasPregnant = false
      }
    });

    $("#btn_step_one").click(function(){
      const age = $("input[name=age]").val();
      const age_type = $('#age_type').find(":selected").val();
      const age_type_str = $('#age_type').find(":selected").text();
      const age_str = age+' '+age_type_str
      console.log('age_type_str: ',age_str)
      ADD_LABEL_VALUE_DATA('Idade', age_str)
      setAgeInMonthsAndSetIsChild(age, age_type);
      if(!age || isNaN(age)){
        $.notify(" Degite a idade (um numero inteiro)!", "error");
        return;
      }
      $("#dvStepOne").css("display", "none");
      $("#dvStepTwo").css("display", "");
      
      $('#dvStepTwoTitle').empty()
      $('#dvChildData').empty()
      if(isChild==true){
        $("#dvStepTwoTitle" ).append(`
        <p>
        <strong>Avaliação de sinais de perigo:</strong>  Nível de consciência, pulso e respiração, preenchimento capilar, sede, FR, FC, oligoanúria/anúria
        </p>`)
        GET_HART_RATE_INTERVAL()
        GET_RESPIRATORY_RATE_INTERVAL()
        
        $("#dvChildData" ).append(CHILD_DATA_DISPLAY())
        
      }else{
        $("#dvStepTwoTitle" ).append(`
        <p>
        <strong>Avaliação de sinais de perigo:</strong>  Nível de consciência, pulso e respiração
        </p>`)
      }
      
      
     });

     $("#btn_step_one_ajax").click(function(){
        const jData = JSON.stringify(ALL_FILLED_DATA)
        console.log('JDATAL: ',jData)
     });

     $("#btn_step_two_back").click(function(){
      $("#dvStepOne").css("display", "");
      $("#dvStepTwo").css("display", "none");
     });

     $("#btn_step_two").click(function(){
      const st1_cosciencia = $('#st1_cosciencia').find(":selected").val();
      const st1_pulso = $('#st1_pulso').find(":selected").val();
      const st1_respiracao = $('#st1_respiracao').find(":selected").val();
      const st1_sinais = $('#st1_sinais').find(":selected").val();

      ADD_LABEL_VALUE_DATA('Nível de consciência',$('#st1_cosciencia').find(":selected").text())
      ADD_LABEL_VALUE_DATA('Pulso',$('#st1_pulso').find(":selected").text())
      ADD_LABEL_VALUE_DATA('Respiração',$('#st1_respiracao').find(":selected").text())
      ADD_LABEL_VALUE_DATA('Apresenta sinais de oligoanúria/anúria',$('#st1_sinais').find(":selected").text())

      console.log('Dados: ',st1_cosciencia, st1_pulso, st1_respiracao, st1_sinais)

      if(!st1_cosciencia || !st1_pulso || !st1_respiracao || !st1_sinais){
        $.notify("Preecnha todos campos antes de prosseguir!", "error");
        return;
      }
      if (st1_cosciencia == 3 || st1_cosciencia==4
          || st1_pulso != 2
          || st1_respiracao != 2
          || st1_sinais != 3
          ){
             console.log('Esta mal')
              HAS_ANORMAL_SIGNAL = true;
          }
      if(isChild==true){

        const hart_rate_value = $("input[name=hart_rate_value]").val();
        const respiratory_rate_value = $("input[name=respiratory_rate_value]").val();
          

        ADD_LABEL_VALUE_DATA('Bebe/mama',$('#st2_mama').find(":selected").text());
        ADD_LABEL_VALUE_DATA('Preenchimento capilar',$('#st2_capilar').find(":selected").text());
        ADD_LABEL_VALUE_DATA('Apresenta sinais de oligoanúria/anúria',$('#st2_anuaria').find(":selected").text());
        ADD_LABEL_VALUE_DATA('Frequência cardíaca',hart_rate_value);
        ADD_LABEL_VALUE_DATA('Frequência cardíaca',hart_rate_value);

        SET_ANORMAL_HART_RATE(hart_rate_value);
        SET_ANORMAL_RESPIRATORY_RATE(respiratory_rate_value);
      }

      $("#dvStepOne").css("display", "none");
      $("#dvStepTwo").css("display", "none");
      $("#dvStepTree").css("display", "");

      if(hasPregnant==true){
        $("#dvStepTreeGravida").css("display", "");
      }else{
        $("#dvStepTreeGravida").css("display", "none");
      }

      
      
      
     });

     $("#btn_step_tree_back").click(function(){
      $("#dvStepTwo").css("display", "");
      $("#dvStepTree").css("display", "none");
     });

     
     

     const setAgeInMonthsAndSetIsChild = (age, ageType)=>{
        ageInMonths = ageType ==1 ? age*12 : age;
        isChild = ageInMonths < 169;
     }

     const GET_HART_RATE_INTERVAL = () =>{
      if(ageInMonths < 11){
        HART_RATE_INTERVAL = {
          min:70,
          max:170
        }
      }else if(ageInMonths < 24){
          HART_RATE_INTERVAL = {
            min:80,
            max:160
          }
      }
      if(ageInMonths == 24){
        HART_RATE_INTERVAL = {
          min:80,
          max:130
        }
      }else{
        HART_RATE_INTERVAL = {
          min:80,
          max:120
        }
      }
  }

  const GET_RESPIRATORY_RATE_INTERVAL = () =>{
    if(ageInMonths < 11){
      RESPIRATORY_RATE_INTERVAL  = {
                      min:30,
                      max:50
                    }
    }else if(ageInMonths < 24){
      RESPIRATORY_RATE_INTERVAL  = {
                          min:26,
                          max:40
                        }
    }
    else{
      RESPIRATORY_RATE_INTERVAL  = {
                            min:20,
                            max:30
                          }
    }
  }

  const  SET_ANORMAL_HART_RATE = (rate)=>{
    
      if(ageInMonths < 3 ){
        HAS_ANORMAL_HART_RATE =  rate < 100 || rate > 180;
      }
      else if(ageInMonths < 13 ){
        HAS_ANORMAL_HART_RATE = rate < 90 || rate > 180;
      }
      else if(ageInMonths < 25 ){
        HAS_ANORMAL_HART_RATE = rate < 90 || rate > 150;
      }
      else if(ageInMonths < 169 ){
        HAS_ANORMAL_HART_RATE = rate < 80 || rate > 140;
      }

  }

  const  SET_ANORMAL_RESPIRATORY_RATE = (rate)=>{
    if(ageInMonths < 3 ){
      HAS_ANORMAL_RESPIRATORY_RATE =  rate > 60;
    }
    else if(ageInMonths < 13 ){
      HAS_ANORMAL_RESPIRATORY_RATE =  rate > 50;
    }
    else if(ageInMonths < 169 ){
      HAS_ANORMAL_RESPIRATORY_RATE =  rate > 40;
    }
}

const  VALIDATE_STEP_3=()=>{

  const arterial_value = $("input[name=arterial_value]").val();
  const braquial_value = $("input[name=braquial_value]").val();

  if(!$('#st3_digestoes').find(":selected").val() || 
    !$('#st3_vomitos').find(":selected").val() || 
    !$('#st3_urina').find(":selected").val() || 
    !$('#st3_mental').find(":selected").val() || 
    !$('#st3_olhos').find(":selected").val() || 
    !$('#st1_cutanea').find(":selected").val() ||
    !$('#st3_pulso').find(":selected").val() ||
    !$('#st3_respiracao').find(":selected").val() ||
    !arterial_value || isNaN(arterial_value) ||
    !braquial_value|| isNaN(braquial_value)
    ){

    $.notify(" Insira todos os dados antes de prosseguir!", "error");
    return false;
  }
  return true;

}

const FILL_LAST_DATA = () =>{

  ADD_LABEL_VALUE_DATA('Número de dejecções/dia',$('#st3_digestoes').find(":selected").text())
  ADD_LABEL_VALUE_DATA('Frequência de vómitos',$('#st3_vomitos').find(":selected").text())
  ADD_LABEL_VALUE_DATA('Estado da Diurese/urina',$('#st3_urina').find(":selected").text())
  ADD_LABEL_VALUE_DATA('Condição mental',$('#st3_mental').find(":selected").text())
  ADD_LABEL_VALUE_DATA('Olhos',$('#st3_olhos').find(":selected").text())
  ADD_LABEL_VALUE_DATA('Prega cutânea',$('#st1_cutanea').find(":selected").text())

  if(isChild==false){
    ADD_LABEL_VALUE_DATA('Pulso',$('#st3_pulso').find(":selected").text())
    ADD_LABEL_VALUE_DATA('Respiração',$('#st3_respiracao').find(":selected").text())
  }
  
  if(hasPregnant == true){
    ADD_LABEL_VALUE_DATA('Tensão Arterial',$("input[name=arterial_value]").val())
    ADD_LABEL_VALUE_DATA('Perímetro Braquial',$("input[name=braquial_value]").val())
 }
}

  const CHILD_DATA_DISPLAY = ()=> {
    return `<p>Bebe/mama? </p>
                <div class="col form-group">
                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="st2_mama">
                    <option value="1" selected>Bebe/mama?</option>
                    <option value="2">Avidamente</option>
                    <option value="3">Pouco/incapaz</option>
                    </select>
                </div>
                <p>Preenchimento capilar? </p>
                <div class="col form-group">
                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="st2_capilar">
                    <option value="1" selected>Preenchimento capilar?</option>
                    <option value="2"> <= 3 segundos</option>
                    <option value="3"> >3 segundos</option>
                    <
                    </select>
                </div>
                <p>Apresenta sinais de oligoanúria/anúria?</p>
                <div class="col form-group">
                    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="st2_anuaria">
                    <option value="1" selected>Apresenta sinais de oligoanúria/anúria?</option>
                    <option value="2">Sim</option>
                    <option value="3">Não</option>
                    </select>
                </div>
                <p>Frequência cardíaca? <span style="color:red">* Digite números no intervalo de ${HART_RATE_INTERVAL.min} a ${HART_RATE_INTERVAL.max}</span> </p>
                <div class="col form-group">
                    <input name="hart_rate_value" type="number" class="form-control" placeholder="Frequência cardíaca?"  min="${HART_RATE_INTERVAL.min}" max="${HART_RATE_INTERVAL.mav} " required/>
                </div>
                <p>Frequência respiratória? <span style="color:red">* Digite números no intervalo de ${RESPIRATORY_RATE_INTERVAL.min} a ${RESPIRATORY_RATE_INTERVAL.max}</span></p>
                <div class="col form-group">
                    <input name="respiratory_rate_value" type="number" class="form-control" placeholder="Frequência respiratória?" min="${RESPIRATORY_RATE_INTERVAL.min}" max="${RESPIRATORY_RATE_INTERVAL.max}" required />
                </div>`
}

const SET_RESULT_DATA=()=>{

  console.log('Dados', 'HAS_ANORMAL_HART_RATE: ',HAS_ANORMAL_HART_RATE,'HAS_ANORMAL_RESPIRATORY_RATE: ', HAS_ANORMAL_RESPIRATORY_RATE,'HAS_ANORMAL_SIGNAL: ',HAS_ANORMAL_SIGNAL)
  const has_anormal_rate = (HAS_ANORMAL_HART_RATE || HAS_ANORMAL_RESPIRATORY_RATE) == true ? 1 : 0;
  const has_anormal_signal = HAS_ANORMAL_SIGNAL == true ? 1:0;

  const has_pregnant = hasPregnant==true ? 1 : 0;
  const is_child = isChild==true ? 1 : 0;
  FILL_LAST_DATA();
  const jData = JSON.stringify(ALL_FILLED_DATA)
  console.log(jData)
  return `
  <input type="hidden" name="has_anormal_rate" value="${has_anormal_rate}">
  <input type="hidden" name="has_anormal_signal" value="${has_anormal_signal}">
  <input type="hidden" name="has_pregnant" value="${has_pregnant}">
  <input type="hidden" name="is_child" value="${is_child}">
  <textarea style="display:none" name="all_filled_data" rows="4" cols="50">${jData}</textarea>
  `
}

$('#dvStepTreeForm').submit(function(event) {
  if(VALIDATE_STEP_3()==true){
    $('#dvStepTreeResultFileds').empty()
    $("#dvStepTreeResultFileds" ).append(SET_RESULT_DATA())
  }else{
    event.preventDefault();
  }
});

});

