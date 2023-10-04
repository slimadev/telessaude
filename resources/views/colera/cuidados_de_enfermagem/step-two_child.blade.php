<div class="reply-form " >
<div class="instruction" >
<div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        <strong>Avaliação de sinais de perigo:</strong> FR, FC, preenchimento capilar
        </p>
    </div>
    </div>
</div>
<hr/>
        <form method="post" action="{{ route('colera.submit') }}"  >
        @csrf
<p>Bebe/mama? * </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_age">
    <option value="1" selected>Bebe/mama?</option>
    <option value="2">Avidamente</option>
    <option value="3">Pouco/incapaz</option>
    </select>
</div>
<p>Preenchimento capilar? * </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_age">
    <option value="1" selected>Preenchimento capilar?</option>
    <option value="2"> <= 3 segundos</option>
    <option value="3">> 3 segundos</option>
    <
    </select>
</div>
<p>Apresenta sinais de oligoanúria/anúria? * </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_age">
    <option value="1" selected>Apresenta sinais de oligoanúria/anúria?</option>
    <option value="2">Sim</option>
    <option value="3">Não</option>
    </select>
</div>
<p>Frequência cardíaca? <span style="color:red">* Digite números no intervalo de {{$hart_rate->min}} a {{$hart_rate->max}}</span> </p>
<div class="col form-group">
    <input name="hart_rate_value" type="number" class="form-control" placeholder="Frequência cardíaca?" value="" min="{{$hart_rate->min}}" max="{{$hart_rate->max}}" required/>
</div>
<p>Frequência respiratória? <span style="color:red">* Digite números no intervalo de {{$respiratory_rate->min}} a {{$respiratory_rate->max}}</span></p>
<div class="col form-group">
    <input name="respiratory_rate_value" type="number" class="form-control" placeholder="Frequência respiratória?" min="{{$respiratory_rate->min}}" max="{{$respiratory_rate->max}}" required />
</div>
<input type="hidden" name="months" value="{{$hart_rate->months }}">
<input type="hidden" name="step" value="{{$step }}">
<input type="hidden" name="has_anormal_signal" value="{{$has_anormal_signal }}">
<button type="submit" class="btn btn-primary">{{$button_name}}</button>

</form>

</div>