<div class="result-malaria-form" id="dvStepSixteen" style="display:none">
      <div class="row" style="background-color:#012970 ;">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <div class="custom-text-etapa">
            <strong>PASSO 16:</strong> Resultado
            </div>
        </div>
    </div>



    <div class="d-flex align-items-start tab" >
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link" id="indeterminado-tab" data-bs-toggle="pill" data-bs-target="#indeterminado" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-journal-minus"></i>&nbsp;&nbsp Inválido</button>    
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="bi bi-journal-minus"></i> &nbsp;&nbsp Negativo</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-journal-minus"></i>&nbsp;&nbsp Positivo - Malária não complicada</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-journal-minus"></i>&nbsp;&nbsp Positivo - Malária complicada</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade" id="indeterminado" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                @include('malaria.manejo.resultado4')            
            </div>
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                @include('malaria.manejo.resultado1')
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                @include('malaria.manejo.resultado2')
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                @include('malaria.manejo.resultado3')
            </div>
        </div>

    </div>
    <p style="font-style: italic;" style="color:red;"> 

    <hr/>
    <button type="submit" class="btn btn-primary" id="btnStepSixteenBack">Anterior</button>
    <button type="submit" class="btn btn-primary" id="btnStepSixteenNext">Próximo</button>

</div>    
</div>





