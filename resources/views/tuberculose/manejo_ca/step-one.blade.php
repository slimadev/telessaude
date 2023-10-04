<div class="result-malaria-form" id="dvStepOne">
    <div class="row" style="background-color:#012970 ;">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <div class="custom-text-etapa">
                <strong>1ª Etapa: Avaliação de sinais e sintomas de rastreio</strong> 
            </div>
        </div>
    </div>

    <div class="container">
        <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav nav-tabs" id="nav-tab-with-nested-tabs">           
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="nav-tab3" data-bs-toggle="tab" href="#tab3-content" data-bs-target="#tab3-content" role="tab" aria-controls="tab3-content" aria-selected="false"></i>&nbsp;&nbsp Criança</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="nav-tab4" data-bs-toggle="tab" href="#tab4-content" data-bs-target="#tab4-content" role="tab" aria-controls="tab4-content" aria-selected="false"></i>&nbsp;&nbsp Adolescente/Adulto</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabs-content">
        <div class="tab-pane fade show active" id="tab3-content" role="tabpanel" aria-labelledby="nav-tab3">
            @include('tuberculose.manejo_ca.step-one-child')
        </div>
        <div class="tab-pane" id="tab4-content" role="tabpanel" aria-labelledby="nav-tab4">
            @include('tuberculose.manejo_ca.step-one-adolescente')
        </div>
        </div>
    </div>
    <br/>
    
    <hr/>

    
    <button type="submit" class="btn btn-primary" id="btnStepOne">Próximo</button>
     
</div>

