<div class="reply-form" id="dvStepOne" style="display:">
<div class="instruction">
<div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        <strong>Introdução  dos parâmetros de referência</strong>
        </p>
    </div>
    </div>
</div>
<hr/>
<p>Idade  </p>
<div class="input-group form-group has-validation">
 
  <input min="0" type="number" class="form-control" name="age" aria-label="Text input with segmented dropdown button">
  <select id="age_type" name="age_type" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    <option value="1" selected>Anos</option>
    <option value="2">Meses</option>
  </select>
  <div class="invalid-feedback">
          Por favor selecione Área Ocupacional
  </div>
</div>
<p>Genero  </p>
<div class="row">
<div class="col-md-6 form-check ">
    <input class="form-check-input" type="radio" name="rbGenero" value="1" checked>
    <label class="form-check-label" for="rbGenero">
        Masculino
    </label>
</div>
<div class="col-md-6 form-check ">
    <input class="form-check-input" type="radio" value="0" name="rbGenero">
    <label class="form-check-label" for="rbGenero">
        Feminino
    </label>
</div>
</div>

<div class="dvGravida" style="display:none">

<p>Grávida  </p>
<div class="row">

<div class="col-md-6 form-check ">
    <input class="form-check-input" type="radio" name="rbGravida" value="1" checked>
    <label class="form-check-label" for="rbGravida">
        Sim
    </label>
</div>
<div class="col-md-6 form-check ">
    <input class="form-check-input" type="radio" name="rbGravida" value="0">
    <label class="form-check-label" for="rbGravida">
        Não
    </label>
</div>

</div>
</div>
<hr/>
<button id="btn_step_one" class="btn btn-primary">{{$button_name}} <i class="bi bi-arrow-right"></i></button>

</div>


