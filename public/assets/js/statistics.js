$(document).ready(function(){
 
  const MONTHS = [{id:1,desc:'Jan'},{id:2,desc:'Fev'},{id:3,desc:'Mar'},{id:4,desc:'Abr'},
                  {id:5,desc:'Mai'},{id:6,desc:'Jun'},{id:7,desc:'Jul'},{id:8,desc:'Ago'},
                  {id:9,desc:'Set'},{id:10,desc:'Out'},{id:11,desc:'Nov'},{id:12,desc:'Dez'}]
  const GET_CURRENT_MONTHS = ()=>{
    const d = new Date();
    let current_month = d.getMonth()+2;
    return MONTHS.filter(month=>month.id < current_month).map(month=>month.desc)
  }
// chart colors
var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

const FILL_BAR_CHART = (monthsDashboard) =>{
    var chBar = $("#chBar");
    const COLERA_DATA = monthsDashboard.map(data=>data.colera)
    const MALARIA_DATA = monthsDashboard.map(data=>data.malaria)
    const TUBERCULOSE_DATA = monthsDashboard.map(data=>data.tuberculose)
    if (chBar) {
      new Chart(chBar, {
      type: 'bar',
      data: {
        labels: GET_CURRENT_MONTHS(),
        datasets: [{
          data: COLERA_DATA,
          backgroundColor: colors[0],
          label:'Cólera'
        },
        {
          data: MALARIA_DATA,
          backgroundColor: colors[1],
          label:'Malária'
        },
        {
          data: TUBERCULOSE_DATA,
          backgroundColor: colors[3],
          label:'Tuberculose'
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
        labels: ['Cólera', 'Malária', 'Tuberculose'],
        datasets: [
          {
            backgroundColor: colors.slice(0,3),
            borderWidth: 0,
            data: [totalDashboard.colera, totalDashboard.malaria, totalDashboard.tuberculose]
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
    fetch(`/statistics_dashboard`)
          .then((response) => response.json())
          .then((json_array) => {
            FILL_BAR_CHART(json_array.months_dashboard)
            FILL_CIRCLE_CHART(json_array.total_dashboard)
            
            console.log(json_array)

    });
    
}

LOAD_DASHBOARD_DATA();
 
 });
 
 