<div class="result-malaria-form" id="dvStepTwo" style="display:none">
    <div class="row" style="background-color:#012970 ;">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <div class="custom-text-etapa">
                <strong>2ª Etapa: avaliação clinica e laboratorial através dos seguintes algoritmos</strong> 
            </div>
        </div> 
    </div>


    <div class="container">
        <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab1 nav-tab2" class="nav nav-tabs" id="nav-tab-with-nested-tabs">           
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="nav-tab1" data-bs-toggle="tab" href="#tab1-content" data-bs-target="#tab1-content" role="tab" aria-controls="tab1-content" aria-selected="false"></i>Diagnóstico de TB em crianças</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab2-content" data-bs-target="#tab2-content" role="tab" aria-controls="tab2-content" aria-selected="false"></i> Solicitação do teste Xpert em crianças</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="nav-tab5" data-bs-toggle="tab" href="#tab5-content" data-bs-target="#tab5-content" role="tab" aria-controls="tab5-content" aria-selected="false"></i>Diagnóstico testam com recurso a GENEXPERT</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabs-content">
        <div class="tab-pane fade show active" id="tab1-content" role="tabpanel" aria-labelledby="nav-tab1">
            @include('tuberculose.manejo_ca.st3.1')
        </div>
        <div class="tab-pane" id="tab2-content" role="tabpanel" aria-labelledby="nav-tab2">
            @include('tuberculose.manejo_ca.st3.3')
        </div>
        <div class="tab-pane" id="tab5-content" role="tabpanel" aria-labelledby="nav-tab5">
            @include('tuberculose.manejo_ca.st3.2')
        </div>
        </div>
    </div>



    <br/>
    <hr/>
    <button type="submit" class="btn btn-primary" id="btnStepTwoBack">Anterior</button>
    <button type="submit" class="btn btn-primary" id="btnStepTwo">Próximo</button>
</div>

