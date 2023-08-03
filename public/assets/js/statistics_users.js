$(document).ready(function(){
 
  
// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

const FILL_BAR_CHART = (provincessDashboard) =>{
    var chBar = $("#chBar");
    const PROFESSIONAL_DATA = provincessDashboard.map(data=>data.professional)
    const PARCEIRO_DATA = provincessDashboard.map(data=>data.parceiro)
    const DOCENTE_DATA = provincessDashboard.map(data=>data.docente)
    const ESTUDANTE_DATA = provincessDashboard.map(data=>data.estudante)

    const PROVINCES = provincessDashboard.map(data=>data.descrption)
    
    if (chBar) {
      new Chart(chBar, {
      type: 'bar',
      data: {
        labels: PROVINCES,
        datasets: [{
          data: PROFESSIONAL_DATA,
          backgroundColor: colors[0],
          label:'Profissional de Saude'
        },
        {
          data: PARCEIRO_DATA,
          backgroundColor: colors[1],
          label:'Parceiro'
        },
        {
          data: DOCENTE_DATA,
          backgroundColor: colors[5],
          label:'Docente'
        },
        {
          data: ESTUDANTE_DATA,
          backgroundColor: colors[4],
          label:'Estudante'
        }]
      },
      options: {
        legend: {
          display: true
        },
        scales: {
          xAxes: [{
            barPercentage: 0.4,
            categoryPercentage: 0.5
          }]
        }
      }
      });
    }
}
/* bar chart */




const FILL_CIRCLE_CHART = (totalDashboard) =>{
  /* 3 donut charts */
    var donutOptions = {
      cutoutPercentage: 85, 
      legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
    };

    // donut 1
    var chDonutData1 = {
        labels: ['Profissional de Saude', 'Parceiro', 'Docente','Estudante'],
        datasets: [
          {
            backgroundColor: colors.slice(0,4),
            borderWidth: 0,
            data: [totalDashboard.professional, totalDashboard.parceiro, totalDashboard.docente, totalDashboard.estudante]
          }
        ]
    };

    var chDonut1 = $("#chDonut1");
    if (chDonut1) {
      new Chart(chDonut1, {
          type: 'pie',
          data: chDonutData1,
          options: donutOptions
      });
    }
}


const LOAD_DASHBOARD_DATA = ()=>{
    fetch(`/user_statistics_dashboard`)
          .then((response) => response.json())
          .then((json_array) => {
            FILL_BAR_CHART(json_array.months_dashboard)
            FILL_CIRCLE_CHART(json_array.total_dashboard)
            
            console.log(json_array)

    });
    
}

LOAD_DASHBOARD_DATA();
 
 });
 
 