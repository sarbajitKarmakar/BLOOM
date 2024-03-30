// Get the chart container
dayArr.reverse();
amountArr.reverse();
var ctx = document.getElementById('barChart').getContext('2d');

// Create the chart
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: dayArr,
    datasets: [{
      label: 'Revenue',
      data: amountArr,
      backgroundColor: function (context) {
        // Dynamically set bar color based on the value
        var value = context.dataset.data[context.dataIndex];
        return value < 10000 ? 'red' : 'green';
      },
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1,
    }]
  },
  options: {
scales: {
x: {
  grid: {
    display: false // Remove x-axis grid lines
  }
},
y: {
  grid: {
    display: true,
    drawBorder: false, // Hide grid lines that are along the border
    borderDash: [5, 5] // Set the borderDash property for dashed lines
  },
  ticks: {
    stepSize: 10000, // Set the step size to 1000
    callback: function (value, index, values) {
      // Show the label only for the 1000 value
      return value === 10000 ? '10k' : '';
      mirror: true
    }, 
    // color: 'white', 
      backgroundColor: 'blue', 
      border: '1px solid black', 
      borderRadius: 5
  },
  beginAtZero: true
}
}
}

});