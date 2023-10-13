<div class="reply-form " >
<div class="instruction" >
<div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        <strong>Avaliação do grau de desidratação:</strong>  número de dejecções, vómitos, diurese, urina, condição mental, pulso, olhos, sede, respiração, prega cutânea.
        </p>
    </div>
    </div>
</div>
<hr/>
    <form method="post" action="{{ route('colera.submit') }}"  >
    @csrf

<p>Número de dejecções/dia? </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_digestoes">
    <option value="2" selected> < 4 dejecções/dia </option>
    <option value="3">4 – 10 dejecções/dia</option>
    <option value="4">> = 10 dejecções/dia</option>
    </select>
</div>
<p>Frequência de vómitos? </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_vomitos">
    <option value="2">Não tem episódios vómitos</option>
    <option value="3">1 ou 2 episódios de vómitos</option>
    <option value="4">3 a 4 episódios de vómitos</option>
    <option value="5">Vómitos frequentes</option>
    <
    </select>
</div>
<p>Estado da Diurese/urina? </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_urina">
    <option value="2">Normal</option>
    <option value="3">Escassa/concentrada</option>
    option value="3">Ausente durante 6 a 8 horas</option>
    </select>
</div>
<p>Condição mental?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_mental">
    <option value="2">Alerta</option>
    <option value="3">Agitado/irritado</option>
    <option value="3">Letárgico ou inconsciente</option>
    </select>
</div>

<p>Pulso?   </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_pulso">
    <option value="2">Facilmente palpável</option>
    <option value="3">Palpável (rápido)</option>
    <option value="3">Dificilmente palpável</option>
    </select>
</div>
<p>Olhos?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_olhos">
    <option value="2">Normal</option>
    <option value="3">Encovados</option>
    <option value="3">Muito encovados</option>
    </select>
</div>

<p>Respiração?  </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st3_respiracao">
    <option value="2">Normal</option>
    <option value="3">Rápida</option>
    <option value="4">Muito rápida e profunda</option>
    </select>
</div>
<p>Prega cutânea? </p>
<div class="col form-group">
    <select class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="st1_cutanea">
    <option value="2">Regride rapidamente</option>
    <option value="3">Regride lentamente (< 2 segundos)</option>
    <option value="4">Regride muito lentamente (> 2 segundos)</option>
    </select>
</div>
<input type="hidden" name="step" value="{{$step }}">
<input type="hidden" name="has_anormal_signal" value="{{$has_anormal_signal }}">
<input type="hidden" name="has_anormal_rate" value="{{$has_anormal_rate }}">
<button type="submit" class="btn btn-primary">{{$button_name}}</button>

</form>

</div>


