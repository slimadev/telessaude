<div class="reply-form " >
<div class="instruction" >
    <div class="row" style="background-color:#012970 ;">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <div class="custom-text-etapa">
                <strong>Introdução  dos parâmetros de referência</strong> 
            </div>
        </div>
    </div>
<hr/>
    <form method="post" action="{{ route('malaria.do_calculo') }}"  >
    @csrf
    <br/>
<p><strong>Tipo de solução </strong> </p>
<div class="row">
<div class="col-md-6 form-check ">
    <input class="form-check-input" value="1"  type="radio" name="solutionType" id="solutionType" checked>
    <label class="form-check-label" for="solutionType">
    Via Endovenosa (IV)
    </label>
</div>
<div class="col-md-6 form-check ">
    <input class="form-check-input" value="2" type="radio" name="solutionType" id="solutionType" >
    <label class="form-check-label" for="solutionType">
    Via Intra-muscular (IM)
    </label>
</div>
</div>
<br/>
<p><strong>Peso corporal </strong> </p>
<div class="row">
<div class="col form-group">
    <input name="peso" type="number" class="form-control" placeholder="Peso corporal" required/>
</div>
</div>
<br/>
<button type="submit" class="btn btn-primary">Calcular</button>
 
</form>

</div>


