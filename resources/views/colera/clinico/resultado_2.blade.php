<div class="result-form " >
    <div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/rs1.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        O estado clínico do paciente é <strong style="color:orange">preocupante</strong> – não apresenta sinais de desidratação (Plano B)
        </p>
    </div>
    </div>
    <hr/>
    <div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end ">
    <img src="assets/img/rs2.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        @if($is_child ==1)
            .
            <ul>
            <li>
            50 – 150 ml/Kg de SORO em 4 a 6 horas
            </li>
            <li>
            Crianças dos 0 - 4 meses (< 5 kg): 200-400ml.
            </li>
            <li>
            Crianças de 5 - 11 meses (5-7,9 kg): 400-600 ml.
            </li>
            <li>
            Crianças de 12 - 23 meses (8 a 10,9 kg): 600-800 ml.
            </li>
            </ul>

            <p><<strong>Crianças de 2 - 4 anos (11 a 15,9 kg):</strong> 800-1200 ml Crianças de 5 - 14 anos (16 a 29,9 kg): 1200-2200 ml.</p>
            <p>Crianças com mais de 14 anos (30 kg ou mais): 2200-4000 ml.</p>
        @elseif($has_pregnant ==1)
            <p><strong>Reidratação oral:</strong></p>
            <ul>
            <li>
            75 ml/kg de SORO durante 4 horas
            </li>
            <li>
            250 ml de SORO após cada evacuação
            </li>
            </ul>

            <p><strong>Antibioterapia:</strong> Azitromicina 1 g dose única</p>
            <p>Nota: se a paciente não tolera a via oral - reidratação IV (70 ml/kg de RL em 3-4 horas)</p>
            <p>Se a TAS for ≤ 90 mmHg ou aparecerem sinais de desidratação grave, iniciar terapia IV para desidratação grave.</p>
        @else
            
            <p>
            80ml de SORO por kg de peso em 4 a 6 horas administrar nas primeiras 4 horas:  Adultos (30 kg ou mais): 2200-4000 ml.
            </p>
        @endif
    </div>
    </div>
    <hr/>
    <div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end ">
    <img src="assets/img/rs3.png" alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
    @if($is_child ==1)
            
            Suplementação do zinco em <strong>crianças < 5 anos,</strong> com comprimidos de 20mg: 
            <ul>
            <li>
            <strong>< 6 meses: 1⁄2 comprimido por dia durante 10 dias
            </li>
            <li>
            <strong>6 meses a 5 anos:</strong> 1 Comprimido por dia durante 10 dias
            </li>
            </ul>
        @elseif($has_pregnant ==1)
            
            <ul>
            <li>
            Existem complicações obstétricas da cólera que precisam ser geridas em acordo com normas obstétricas nacionais e podem requerer transferência urgente para maternidade. Antes da transferência estabilize o paciente Hemodinamicamente com Lactato de Ringer
            </li>
            <li>
            Morte fetal intrauterina e Aborto espontâneo
            </li>
            <li>
            Ameaça de parto prematuro – Entre 26 e 34 semanas de gestação:
            </li>
            </ul>

            <ol>
            <li>
            <strong>Se o colo do útero estiver dilatado::</strong> transferir para uma maternidade para tocólise, maturação pulmonar e cuidados neonatais
            </li>
            <li>
            <strong>Se o colo do útero estiver fechado::</strong> as contrações provavelmente cessarão quando a cólera for resolvida. Se as contrações persistirem após o término da reidratação, transfira para uma maternidade para possível parto prematuro
            </li>
            <li>
            Se idade gestacional > 34 semanas ou morte fetal intra-uterina ou mãe em risco de vida: estabilizar a paciente e transferir para a maternidade
            </li>
            </ol>
        @else
            
            <ul>
            <li>
            Pacientes com doença <strong>cardiovascular,</strong> fazer a primeira fase de hidratação em 6 horas e fazer monitoria de sinais de sobrecarga de fluidos a cada 30 minutos
            </li>
            <li>
            Pacientes com <strong>diabetes</strong> medir a glicemia a cada 6 horas (objectivo de 140 a 180 mg/dl = 7,8 a 10 mmol/litro)
            </li>
            <li>
            Não se recomenda o uso de Ciprofloxacina em grávidas
            </li>
            </ul>
        @endif
    </div>
    </div>
</div>
