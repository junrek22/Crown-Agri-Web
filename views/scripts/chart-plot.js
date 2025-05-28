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
var chart1 = {
  type: 'bar',
  data: {
    labels: labels_months,
    datasets: [{
        label: labels_tags[0],
        data:randomData[0],
        backgroundColor: ['#328E6E',],
        borderColor: ['#537D5D'],
        borderWidth: borderWidth,
    },{
        label:labels_tags[1],
        data:randomData[1],
        backgroundColor: ['#67AE6E',],
        borderColor: ['#73946B'],
        borderWidth: borderWidth,
    },{
        label: labels_tags[2],
        data:randomData[2],
        backgroundColor: ['#90C67C',],
        borderColor: ['#9EBC8A'],
        borderWidth: borderWidth,
    },{
        label: labels_tags[3],
        data:randomData[3],
        backgroundColor: ['#E1EEBC',],
        borderColor: ['#D2D0A0'],
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

var chart3 = {
  type:'line',
  data : {
    labels: labels_months,
    datasets: [{
      label: 'Sale Forecasting',
      data: getDataRevenue,
      borderColor: 'blue',
      tension: 0.1,
      backgroundColor:'#FFE99A',
      fill: true
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
const chart4 = {
  type: 'pie',
  data: {
      labels: [
      'Oil',
      'Fertilizer',
      'Seeds',
      'Chemicals',
    ],
    datasets: [{
      // label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
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
          return `${label}\n${percentage}%`;
        },
        color: '#fff',
        font: {
          weight: 'bold',
          size: 14
        }
      },
    }
  },
  plugins: [ChartDataLabels],
};