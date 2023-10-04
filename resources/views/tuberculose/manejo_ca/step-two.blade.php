<div class="result-malaria-form" id="dvStepTree" style="display:none">
    <div class="row" style="background-color:#012970 ;">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <div class="custom-text-etapa">
                <strong>3ª Etapa: Processo de colheita da amostra para diagnostico de TB</strong> 
            </div>
        </div> 
    </div>
    <div class="container">
        <ul role="tablist" aria-owns="nav-tab6 nav-tab7 " class="nav nav-tabs" id="nav-tab-with-nested-tabs">           
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="nav-tab6" data-bs-toggle="tab" href="#tab6-content" data-bs-target="#tab6-content" role="tab" aria-controls="tab6-content" aria-selected="false"></i>1ª Amostra (dia da consulta)</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="nav-tab7" data-bs-toggle="tab" href="#tab7-content" data-bs-target="#tab7-content" role="tab" aria-controls="tab7-content" aria-selected="false"></i> 2ª Amostra (em casa)</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabs-content">
        <div class="tab-pane fade show active" id="tab6-content" role="tabpanel" aria-labelledby="nav-tab6">
            @include('tuberculose.manejo_ca.st2.1')
        </div>
        <div class="tab-pane" id="tab7-content" role="tabpanel" aria-labelledby="nav-tab7">
            @include('tuberculose.manejo_ca.st2.2')
        </div>
        </div>
    </div>
    <br/>
    <hr/>
    <button type="submit" class="btn btn-primary" id="btnStepTreeBack">Anterior</button>
    <button type="submit" class="btn btn-primary" id="btnStepTree">Próximo</button>
</div>

