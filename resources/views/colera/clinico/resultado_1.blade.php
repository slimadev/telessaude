<div class="result-form " >
    <div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/rs1.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        O estado clínico do paciente é <strong>estável</strong> – não apresenta sinais de desidratação (Plano A)
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
            
            <ul>
            <li>
            50 ml de SRO por kg de peso em 6 horas, mais perdas em curso ou usar o esquema da tabela 
            </li>
            <li>
            <strong>Crianças menores 1 ano:</strong> 50-100 ml de SRO, por cada dejeção ou 5ml/kg após cada dejecção.
            </li>
            <li>
            <strong>Crianças entre >1- 9 anos:</strong> 100-200 ml de SRO por cada dejeção ou 5ml/kg após cada dejeção.
            </li>
            <li>
            <strong>Crianças maiores de >10:</strong> 200-400ml SRO, por cada dejeção liquida ou 5 ml/kg por cada dejeção.
            </li>
            </ul>
        @elseif($has_pregnant ==1)
            
            <ul>
            <li>
            Pelo menos 250 ml de SRO após cada evacuação em observação para 4-6 horas + 
            </li>
            <li>
            Antibioterapia em dose única (Azitromicina 1 g)
            </li>
            </ul>
        @else
            
            <ul>
            <li>
            50 ml de SRO por kg de peso em 6 horas, mais perdas em curso ou usar o esquema da tabela
            </li>
            <li>
            Aproximadamente 2 litros de SRO, ou 5 ml/kg por cada dejecção.
            </li>
            </ul>
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
