<div class="result-tuberculose-form" >  

        <div class="card mb-3" style="min-width: 840px;">
            <div class="row g-0" >
            <div class="col-md-2 d-flex flex-col align-items-center">
                <button type="button" class="btn btn-primary" style="margin-left: 30px;max-width:60px" id="btnst1Back"><i class="bi bi-caret-left" style="font-size: 20px;color:white"></i></button>
            </div>
            <div class="col-md-8">
                <div class="card-body" style="text-align:center;">
                <strong> <p  id="st11Text">Dosagem</p> </strong>
                <p style="font-style: italic;" id="st11SubText"> </p> 
                </div>
            </div>
            <div class="col-md-2 d-flex flex-col align-items-center">
                <button type="button" class="btn btn-primary" style="margin-right: 30px;max-width:60px"  id="btnst1Next"><i class="bi bi-caret-right" style="font-size: 20px;color:white"></i></button>
            </div>
            </div>
        </div>

        <table class="table text-center table-bordered" id="st1tb1" style="display:">
            <thead>
                <tr class="table-primary">
                    <th scope="col"  >Peso ( KG)</th>
                    <th scope="col" >Isoniazida comp. 100mg</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p>< 5</p></td>
                    <td><p>½ comp</p></td>
                </tr>
                <tr>
                    <td><p>5.1-9.9</p></td>
                    <td><p>1 comp</p></td>
                </tr>
                <tr>
                    <td><p>10-13.9</p></td>
                    <td><p>1 ½ comp</p></td>
                </tr>
                <tr>
                    <td><p>14 -19.9</p></td>
                    <td><p>2 comp</p></td>
                </tr>
                <tr>
                    <td><p>20 -24.9</p></td>
                    <td><p>2 ½ comp</p></td>
                </tr>
                <tr>
                    <td><p>>25</p></td>
                    <td><p>1 comp de Isoniazida 300 mg ou 3 comp de 100mg</p></td>
                </tr>
            </tbody>
        </table>

        <div id="st1tb2" style="display:none"> 
        <table class="table text-center table-bordered"  >
        <thead>
                <tr class="table-primary">
                    <th scope="col" >Peso ( KG)</th>
                    <th scope="col" >Piridoxina cp 25mg (nº de comprimidos )</th>
                    <th scope="col" >Piridoxina cp 50mg (nº de comprimido )</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p>< 5</p></td>
                    <td><p>¼ 3x por semana</p></td>
                    <td><p>Não recomendado para crianças nesta faixa de peso</p></td>
                </tr>
                <tr>
                    <td><p>5- 7.9 kg</p></td>
                    <td><p>½ por dia</p></td>
                    <td><p>¼ 3x por semana</p></td>
                </tr>
                <tr>
                    <td><p>8- 14.9 kg</p></td>
                    <td><p>1 por dia</p></td>
                    <td><p>½ 3x por semana</p></td>
                </tr>
                <tr>
                    <td><p>1>15 kg</p></td>
                    <td><p>2 por dia</p></td>
                    <td><p>1 por dia</p></td>
                </tr>
            </tbody>
            </table>
        </div>

        <div id="st1tb3" style="display:none"> 
        <table class="table text-center table-bordered"  >
        <thead>
                <tr class="table-primary">
                    <th scope="col" rowspan="2">Tipo de formulação por faixa de peso</th>
                    <th scope="col" colspan="2">Se a formulação disponivel for Isoniazida de 100 mg</th>
                    <th scope="col" colspan="2">Se a formulação disponivel for Isoniazida de 300 mg</th>
                </tr>
                <tr class="table-primary">
                    <th scope="col" >Isoniazida (cp 100mg)</th>
                    <th scope="col" >Rifapenina (cp 150mg)</th>
                    <th scope="col" >Isoniazida (cp 300mg)</th>
                    <th scope="col" >Rifapenina (cp 150mg)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><p>10 - 15.9 Kg</p></td>
                    <td><p>3 cp/semana</p></td>
                    <td><p>2 cp/semana</p></td>
                    <td><p>1 cp/semana</p></td>
                    <td><p>2 cp/semana</p></td>

                </tr>
                <tr>
                    <td><p>16 - 23.9 Kg</p></td>
                    <td><p>5 cp/semana</p></td>
                    <td><p>3 cp/semana</p></td>
                    <td><p>1 cp 300mg + 2cp 100mg /semana**</p></td>
                    <td><p>3 cp/semana</p></td>

                </tr>
                <tr>
                    <td><p>24 - 29.9 Kg</p></td>
                    <td><p>6 cp/semana</p></td>
                    <td><p>4 cp/semana</p></td>
                    <td><p>2 cp/semana**</p></td>
                    <td><p>4 cp/semana</p></td>

                </tr>
            </tbody>
            <tfoot>
                <tr class="table-warning" style="font-style: italic; font-size: 12px;">
                    <td colspan="5">
                        <ul>
                            <li>
                                A profilaxia com 3HP e feita uma vez/semana durante 12 semanas 
                            </li>
                            <li>
                                Caso tenha apenas comprimidos de INH 300mg disponovel, a dosagem e de 1.5 comprimidos por semana
                            </li>
                        </ul>
                    </td>
                </tr>
            </tfoot>
            </table>
        </div>

        <div id="st1tb4" style="display:none"> 
            <table class="table text-center table-bordered"  >
                <thead>
                    <tr class="table-primary">
                        <th scope="col" rowspan="2">Tipo de formulação por faixa de peso</th>
                        <th scope="col" rowspan="2">Se a formulação disponivel for 3HP cpm Isoniazida/Rifapenina (300/300 mg) </th>
                        <th scope="col" colspan="2">Se a formulação de 3HP em DFC não estiver disponivel</th>
                    </tr>
                    <tr class="table-primary">
                        <th scope="col" >Isoniazida (cp 300mg)</th>
                        <th scope="col" >Rifapenina (cp 150mg)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><p>>= 30Kg</p></td>
                        <td><p>3 cp/semana</p></td>
                        <td><p>3 cp/semana</p></td>
                        <td><p>6 cp/semana</p></td>

                    </tr>
                </tbody>
                <tfoot>
                    <tr class="table-warning" style="font-style: italic; font-size: 12px;">
                        <td colspan="5">
                            <ul>
                                <li>
                                    A profilaxia com 3HP e feita uma vez/semana durante 12 semanas 
                                </li>
                                <li>
                                    Caso tenha apenas comprimidos de INH 300mg disponovel, a dosagem e de 1.5 comprimidos por semana
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>


        
</div>
