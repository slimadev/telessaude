(function () {
  'use strict'
  var diagram = flowchart.parse(
   `st=>start: Inicio|past:>http://www.google.com[blank]
    e=>end: Fim|future:>http://www.google.com
    op1=>operation: Tem actualmente 2 ou mais sinais/sintomas sugestivos a TB? 
      (Tosse há mais de 2 semanas, febre há mais de 2 semanas, perda de peso, falência de
      crescimento/perda ponderal, fadiga, adenomegalia)|past
    op2=>operation: Tratar para TB
    Referir para consulta medica se não responde ao tratamento|current
    op3=>operation:Fazer Mantoux |current
    cond=>condition: Sim
    ou Não?|approved:>http://www.google.com
    cctcp=>condition: Tem contacto com TB pulmonar nos últimos 2 anos?|rejected
    ccr=>condition: Curado?
    io=>inputoutput: Alta
    
    op1(right)->op1(bottom)->cond
    cond(yes, bottom)->cctcp
    cond(no, left)->ccr
    ccr(no, bottom)->cctcp
    cctcp(yes, bottom)->op2
    cctcp(no, left)->op3
    ccr(yes, bottom)->io`);
    
    
  diagram.drawSVG('st2diagramDiv');

})()

