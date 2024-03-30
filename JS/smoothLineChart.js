dayArr.reverse();
amountArr.reverse();

const data = {
    labels: dayArr,
    datasets: [{
      label: 'Smooth Line Chart',
      borderColor: '#57BD79',
      backgroundColor: [
        '#DAFFE0',  // Gradient start color (with alpha)
        '#fff'   // Gradient end color (with alpha)
      ],
      data: amountArr,
      fill: true,
      tension: 0.4  // Set tension to make the line smooth
    }]
  };

  // Chart configuration
  const config = {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      scales: {
        x: {
          type: 'category',
          labels: data.labels
        },
        y: {
          beginAtZero: true
        }
      }
    }
  };

  // Create the chart
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, config);