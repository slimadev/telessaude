<div class="result-form " >
    <div class="row">
    <div class="col-lg-1 d-flex flex-row justify-content-end">
    <img src="assets/img/rs1.png"  alt="" width="50" height="50">
        
    </div>
    <div class="col-lg-11 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <p>
        O estado clínico do paciente é <strong style="color:red">crítico</strong> – apresenta sinais de desidratação severa (Plano C)
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
            Inicie soros endovenosos imediatamente (100ml/kg)
            </li>
            <li>
            Desidratação grave – Lactato de ringer (1a linha) /Soro fisiológico
            </li>
            <li>
            <strong>Criança < 5 anos:</strong> 100ml/kg IV a correr em 6 horas, a serem administrados da seguinte forma: 20ml/kg nos primeiros 15 minutos. Se sinais de perigo, repetir bolus até 2 vezes. Depois 50 ml/Kg nas 4-6horas seguintes..
            </li>
            <li>
            <strong>Crianças ≥ 5 anos:</strong> dar 100 ml/kg IV a correr em 4 horas, divididos como se segue: 50ml/ kg nos primeiros 30 minutos. Ou se choque abrir soro para infusão rápida. Se sinais de perigo, repetir o bolus. Depois 70 ml/Kg em 3-4 horas seguintes.
            </li>
            </ul>
            <p>Para volumes superiores a 1000 ml utilize SEMPRE a tabela de referência de volume por kg. [O aplicativo apresenta uma opção para consulta (pop-up) das seguintes tabelas de referência]</p>
            
            <ol>
            <li>
            <a href="{{url('/downloadr/Anexo II')}}">Tabela de reidratação em crianças com mais de 5 anos e adultos  consultar anexo II </a> 
            </li>
            <li>
            <a href="{{url('/downloadr/Anexo III')}}"> Tabela de reidratação em crianças com menos de 5 anos consultar anexo III </a>
            </li>
            <li>
            <a href="{{url('/downloadr/Anexo IV')}}">Tabela de reidratação em crianças desnutridas  consultar anexo IV </a>
            </li>
            </ol>
        @elseif($has_pregnant ==1)
            <p>Inicie soros endovenosos imediatamente:</p>
            <ul>
            <li>
            100 ml/kg IV a correr em 3 horas, divididos como se segue: 30ml/ kg nos primeiros 30 minutos. Se sinais de perigo, repetir o bolus. Depois 70 ml/Kg nas 2 horas e meia seguintes.
            </li>
            <li>
            250 ml de SRO a cada dejecção para pacientes sem vómitos
            </li>
            </ul>
            <p><strong>Antibioterapia:</strong> Azitromicina 1 g dose única</p>
        @else
            
            <ul>
            <li>
            Inicie soros endovenosos imediatamente (10ml/kg)
            </li>
            <li>
            Desidratação grave –Lactato de ringer (1a linha)/Soro fisiológico
            </li>
            <li>
            <strong>Adultos:</strong> dar 100 ml/kg IV a correr em 3 horas, divididos como se segue: 30ml/ kg nos primeiros 30 minutos. Se sinais de perigo, repetir o bolus. Depois 70 ml/Kg nas 2 horas e meia seguintes.
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
            <strong>Se o colo do útero estiver dilatado:</strong> transferir para uma maternidade para tocólise, maturação pulmonar e cuidados neonatais
            </li>
            <li>
            <strong>Se o colo do útero estiver fechado:</strong> as contrações provavelmente cessarão quando a cólera for resolvida. Se as contrações persistirem após o término da reidratação, transfira para uma maternidade para possível parto prematuro
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
