<div class="result-malaria-form" id="dvStepTwo" style="display:none">
    <div class="row" style="background-color:#012970 ;">
        <div class="col-lg-1 d-flex flex-row justify-content-end">
        <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            
        </div>
        <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <div class="custom-text-etapa">
                <strong>2ª Etapa: Dosagem</strong> 
            </div>
        </div> 
    </div>


    <div class="container">

        <ul role="tablist" aria-owns="nav-tab3 nav-tab4 nav-tab3 nav-tab4" class="nav nav-tabs" id="nav-tab-with-nested-tabs">           
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="nav-tab3" data-bs-toggle="tab" href="#tab3-content" data-bs-target="#tab3-content" role="tab" aria-controls="tab3-content" aria-selected="false"></i>TB Sensível</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="nav-tab4" data-bs-toggle="tab" href="#tab4-content" data-bs-target="#tab4-content" role="tab" aria-controls="tab4-content" aria-selected="false"></i>TB Resistente </a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabs-content">
        <div class="tab-pane fade show active" id="tab3-content" role="tabpanel" aria-labelledby="nav-tab3">
        @include('tuberculose.tratamento_preventivo.st2.1')
        </div>
        <div class="tab-pane" id="tab4-content" role="tabpanel" aria-labelledby="nav-tab4">
        <br/>
        <table class="table text-center table-bordered"  >
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">Peso (KG)</th>
                            <th scope="col">Nº de comprimidos dispersiveis de 100mg</th>
                            <th scope="col">Nº de comprimidos de 250mg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><p> < 3Kg </p></td>
                            <td colspan="2"><p>Enviar para avaliação por um medico consultar momite terapeutico</p></td>

                        </tr>
                        <tr>
                            <td><p>3-3.9</p></td>
                            <td><p>0.5</p></td>
                            <td><p>-</p></td>

                        </tr>
                        <tr>
                            <td><p>4-6</p></td>
                            <td><p>1</p></td>
                            <td><p>0.5</p></td>

                        </tr>
                        <tr>
                            <td><p>7-9</p></td>
                            <td><p>1.5</p></td>
                            <td><p>0.5</p></td>

                        </tr>
                        <tr>
                            <td><p>10-12</p></td>
                            <td><p>2</p></td>
                            <td><p>1</p></td>

                        </tr>
                        <tr>
                            <td><p>13-15</p></td>
                            <td><p>3</p></td>
                            <td><p>1</p></td>

                        </tr>
                        <tr>
                            <td><p>16-18</p></td>
                            <td><p>3.5</p></td>
                            <td><p>1.5</p></td>

                        </tr>
                        <tr>
                            <td><p>19-20</p></td>
                            <td><p>4</p></td>
                            <td><p>1.5</p></td>

                        </tr>
                        <tr>
                            <td><p>21-23</p></td>
                            <td><p>4.5</p></td>
                            <td><p>2</p></td>

                        </tr>
                        <tr>
                            <td><p>24-25</p></td>
                            <td><p>5</p></td>
                            <td><p>2</p></td>

                        </tr>
                        <tr>
                            <td><p>26-45</p></td>
                            <td><p>-</p></td>
                            <td><p>3</p></td>

                        </tr>
                        <tr>
                            <td><p>>45</p></td>
                            <td><p>-</p></td>
                            <td><p>4</p></td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="table-warning" style="font-style: italic; font-size: 12px;">
                            <td colspan="5">
                                Em caso de caso fonte com resistencia comprovada a Fluoroquinolonas, o TPT com Levofloxacina nao deve ser implementado
                            </td>
                        </tr>
                    </tfoot>
                </table>
        </div>
        </div>
    </div>
    <br/>
    <hr/>
    <button type="submit" class="btn btn-primary" id="btnStepTwoBack">Anterior</button> 
</div>

