<div class="reply-form " >
<div class="instruction" >
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
    <form method="post" action="{{ route('colera.submit') }}"  >
    @csrf
<p>Genero  </p>
<div class="row">
<div class="col-md-6 form-check ">
    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" checked>
    <label class="form-check-label" for="flexRadioDisabled">
        Masculino
    </label>
</div>
<div class="col-md-6 form-check ">
    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" >
    <label class="form-check-label" for="flexRadioDisabled">
        Feminino
    </label>
</div>
</div>
<p>Idade  </p>
<div class="row">
<div class="input-group form-group">
  <input min="0" type="number" class="form-control" name="age" aria-label="Text input with segmented dropdown button">
  <select name="age_type" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example">
    <option value="1" selected>Anos</option>
    <option value="2">Meses</option>
    </select>
</div>
</div>
<input type="hidden" name="step" value="{{$step }}">
<button type="submit" class="btn btn-primary">{{$button_name}}</button>
 
</form>

</div>


