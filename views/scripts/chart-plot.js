const borderWidth = 3;
const randomData = getRandomData(4, 7, 500, 10000);
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
const labels_tags = ["Oils","Seeds","Chemicals","Fertilizer"];
// Chart.defaults.set('plugins.datalabels', {
//   // color: '#FE777B'
// });

const chart1 = {
  type: 'bar',
  data: {
    labels: ['2020', '2021', '2022', '2023'],
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
    }]
  },
  options: {
    // responsive: false, // <--- disables responsiveness
    // maintainAspectRatio: false, // optional: disable aspect ratio locking
    scales: {
      y: {
        // max: 100,
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
        grid: {
          display: false,
        },
        title: {
          font: {
            size: 14,           // Larger font size for labels
            weight: 'bold'      // Optional: bold text
          },
        },
      }
    }
  }
}

const chart2 = {
  type: 'bar',
  data: {
    labels: ['2020', '2021', '2022', '2023'],
    datasets: [{
        label: 'Nara (Main)',
        data:randomData[0],
        backgroundColor: ['#328E6E',],
        borderColor: ['#537D5D'],
        borderWidth: borderWidth,
        
    },{
        label:'Sagay',
        data:randomData[1],
        backgroundColor: ['#67AE6E',],
        borderColor: ['#73946B'],
        borderWidth: borderWidth,
    },{
        label: 'Kabankalan',
        data:randomData[2],
        backgroundColor: ['#90C67C',],
        borderColor: ['#9EBC8A'],
        borderWidth: borderWidth,
    },{
        label: 'Bago',
        data:randomData[3],
        backgroundColor: ['#E1EEBC',],
        borderColor: ['#D2D0A0'],
        borderWidth: borderWidth,
    }]
  },
  options: {
    // responsive: false, // <--- disables responsiveness
    // maintainAspectRatio: false, // optional: disable aspect ratio locking
    scales: {
      y: {
        // max: 100,
        beginAtZero: true,
        grid: { lineWidth: 2, color: '#ccc',
          display: false, 
        },
        ticks: {
          font: {
            size: 14,           // Larger font size for labels
            weight: 'bold'      // Optional: bold text
          },
          color: '#333',        // Optional: font color
          callback: function(value) {
            return '₱'+value.toLocaleString(); // Optional: add degree symbol
          }
        }
      },
      x : {
        grid: {
          display: false,
        },
        title: {
          font: {
            size: 14,           // Larger font size for labels
            weight: 'bold'      // Optional: bold text
          },
        },
      }
    }
  }
}

const chart3 = {
  type:'line',
  data : {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'My First Dataset',
      data: [65, 59, 80, 81, 56, 55, 40],
      fill: false,
      borderColor: 'blue',
      tension: 0.1
    },{
      label: 'My 2nd Dataset',
      data: [0, 2, 64, 75, 56, 55, 40],
      fill: false,
      borderColor: 'red',
      tension: 0.1
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
    }
  }
}
const chart4 = {
  type: 'pie',
  data: {
      labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      // label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  },
  options: {
    responsive: true,
    // maintainAspectRatio: false,
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