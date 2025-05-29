function getRandomData(column, row, min, max) {
  const data = [];
  for(let j = 0; j < row; j++){ 
      data[j] = [];
     for (let i = 0; i < column; i++) {
      data[j][i] = (Math.floor(Math.random() * (max - min + 1)) + min);
    }
  }
  return data;
}
function getTotalSaleRevenue(labelOfMonths){
  const dataRevenue = [];
  let getRevenueMonth = 0;
  const getRandomdata = getRandomData(labelOfMonths.length, labels_tags.length, 500, 10000);
  for(let i = 0; i < getRandomdata[0].length; i++){
    getRevenueMonth = 0;
    for(let j = 0; j < labels_tags.length; j++){
      getRevenueMonth+=getRandomdata[j][i];
    }
    dataRevenue[i] = getRevenueMonth;
  }
  console.log(dataRevenue)
  return dataRevenue;
}
function getMonthLabel(year){
   let labels_months = [
  "Jan", "Feb", "Mar", "Apr", "May", "Jun",
  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
  ];
  let newLabelMonths = [];
  if(year=="Present"){
    const getMonthNow = new Date().getMonth();
    for(let x = 0; x <= getMonthNow; x++){
      newLabelMonths[x] = labels_months[x];
    }
  }else{
      newLabelMonths = labels_months;
  }
  return newLabelMonths;
}

const labels_tags = ["Oils","Seeds","Chemicals","Fertilizer"];
const labels_months = getMonthLabel("Present");
const getDataRevenue = getTotalSaleRevenue(labels_months);
const borderWidth = 3;
const randomData = getRandomData(labels_months.length, labels_tags.length, 500, 10000);
// const randomData1 = getRandomData(4, 4, 500, 10000);
const bgcolor = {
  oil: '#328E6E',
  seed: '#67AE6E',
  chemical: '#90C67C',
  fertilizer: '#537D5D'
}
const bdcolor = {
  oil: '#537D5D',
  seed: '#73946B',
  chemical: '#9EBC8A',
  fertilizer: '#626F47'
}
var bar_chart = {
  type: 'bar',
  data: {
    labels: labels_months,
    datasets: [{
        label: labels_tags[0],
        data:randomData[0],
        backgroundColor: bgcolor.oil,
        borderColor: bdcolor.oil,
        borderWidth: borderWidth,
    },{
        label:labels_tags[1],
        data:randomData[1],
        backgroundColor: bgcolor.seed,
        borderColor: bdcolor.seed,
        borderWidth: borderWidth,
    },{
        label: labels_tags[2],
        data:randomData[2],
        backgroundColor: bgcolor.chemical,
        borderColor: bdcolor.chemical,
        borderWidth: borderWidth,
    },{
        label: labels_tags[3],
        data:randomData[3],
        backgroundColor: bgcolor.fertilizer,
        borderColor: bdcolor.fertilizer,
        borderWidth: borderWidth,
    }],
    font :{
      weight:'bold',
    }
  },
  options: {
    // responsive: false, // <--- disables responsiveness
    // maintainAspectRatio: false, // optional: disable aspect ratio locking
    scales: {
      y: {
        beginAtZero: true,
        grid: {
          lineWidth: 2,         // Thicker grid lines
          color: '#ccc',
          display: false, 
        },
        ticks: {
          font: {
            size: 14,           // Larger font size for labels
            weight: 'bold'      // Optional: bold text
          },
          color: '#537D5D',        // Optional: font color
          callback: function(value) {
            return '₱'+value.toLocaleString(); // Optional: add degree symbol
          }
        }
      },
      x : {
        grid: {display: false},
        ticks :{font: {weight: 'bold'}, color: '#537D5D'}
      }
    },
    plugins : {
      legend:{
        labels :{
          font:{
            weight:'bold'
          },
          color: '#537D5D',
        }
      }
    }
  }
}

var line_chart_dashboard = {
  type:'line',
  data : {
    labels: labels_months,
    datasets: [{
      label: 'Sale Forecasting',
      data: getDataRevenue,
      borderColor: '#00a651',
      tension: 0.1,
      backgroundColor:'#ECFAE5',
      fill: true,
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          callback: function(value) {
            return value.toLocaleString(); // Add comma formatting
          },
          font: {
            size: 14
          }
        },
        grid: {
          borderColor: 'black',
          borderWidth: 2
        },
      },
      x: {
        grid: {
          display: false
        },
        ticks: {
          font: {
            size: 14
          }
        }
      }
    },
  }
}
const pie_chart = {
  type: 'pie',
  data: {
    labels: labels_tags,
    datasets: [{
      // label: 'My First Dataset',
      data: [300, 50, 100, 250],
      backgroundColor: [
        bgcolor.oil,
        bgcolor.seed,
        bgcolor.chemical,
        bgcolor.fertilizer,
      ],
      borderColor: [
        bdcolor.oil,
        bdcolor.seed,
        bdcolor.chemical,
        bdcolor.fertilizer,
      ],
      borderWidth:borderWidth,
      hoverOffset: 4,
    }]
  },
  options: {
    responsive: true,
    plugins: {
      datalabels: {
        formatter: (value, context) => {
          const label = context.chart.data.labels[context.dataIndex];
          const total = context.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
          const percentage = (value / total * 100).toFixed(1) + "%";
          //  console.log(context.chart);
          return `${label}\n${percentage}`;
        },
        color: '#fff',
        font: {
          weight: 'bold',
          size: 12
        }
      },
      legend:{
        labels :{
          font:{
            weight:'bold'
          },
          color: '#537D5D',
        },
        // position:'right',
      }
    }
  },
  plugins: [ChartDataLabels],
};

var line_chart_sales_report = {
  type:'line',
  data : {
    labels: labels_months,
    datasets: [{
      label: 'Total Sales Revenue',
      data: getDataRevenue,
      borderColor: '#00a651',
      tension: 0.1,
      backgroundColor:'#ECFAE5',
      fill: true,
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          callback: function(value) {
            return '₱'+value.toLocaleString(); // Add comma formatting
          },
          font: {
            size: 14,
            weight: 'bold',
          },
          color: '#537D5D',
        },
        grid: {
          borderColor: 'black',
          borderWidth: 2
        },
      },
      x: {
        grid: {
          display: false
        },
        ticks: {
          font: {
            size: 14
          }
        },
        ticks :{font: {weight: 'bold'}, color: '#537D5D'},
      }
    },
  }
}