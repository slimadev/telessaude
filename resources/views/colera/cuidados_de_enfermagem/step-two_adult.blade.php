

<div class="reply-form " >
<div class="instruction" >
<div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        <strong>Avaliação de sinais de perigo:</strong>  Nível de consciência, pulso e extremidades
        </p>
    </div>
    </div>
</div>
<hr/>
    <form method="post" action="{{ route('colera.submit') }}"  >
    @csrf
<p>Nível de consciência?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_cosciencia">
    <option value="1" selected>Nível de consciência?</option>
    <option value="2">Normal</option>
    <option value="3">Coma</option>
    <option value="4">Letargia</option>
    <option value="5">Confusão mental</option>
    </select>
</div>
<p>Pulso?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_pulso">
    <option value="1" selected>Pulso?</option>
    <option value="2">Normal</option>
    <option value="3">Fraco</option>
    <option value="4">Ausência de pulso</option>
    <option value="5">Dificilmente palpáve</option>
    <
    </select>
</div>
<p>Respiração?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_respiracao">
    <option value="1" selected>Respiração?</option>
    <option value="2">Normal</option>
    <option value="3">Muito rápida</option>
    <option value="4">Gasping ou cianose</option>
    </select>
</div>
<p>Apresenta sinais de oligoanúria/anúria?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_sinais">
    <option value="1" selected>Apresenta sinais de oligoanúria/anúria?</option>
    <option value="2">Sim</option>
    <option value="3">Não</option>
    <
    </select>
</div>
<input type="hidden" name="step" value="{{$step }}">

<input type="hidden" name="age" value="{{$age }}">
<input type="hidden" name="age_type" value="{{$age_type }}">

<button type="submit" class="btn btn-primary">{{$button_name}}</button>

</form>

</div>


