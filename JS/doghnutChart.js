const datas = {
    labels: dept,
    datasets: [{
      data: deptVal, // Values for each category
      backgroundColor: ['#1ABCFE', '#A259FF', '#F24E1E', '#0ACF83','blue'], // Colors for each category
    }]
  };
  
  // Configuration options
  const options = {
    responsive: true,
    maintainAspectRatio: false,
    cutout: '70%', // Size of the doughnut hole
    legend: {
      display: true,
      position: 'bottom', // Position the legend to the bottom
      align: 'center', // Align the legend text to the center
      labels: {
        boxWidth: 10, // Width of the legend color box
        padding: 10, // Padding between the legend and labels
      }
    }
  };
  
  // Get the canvas element
  const dognt = document.getElementById('myDoughnutChart').getContext('2d');
  
  // Create the doughnut chart
  const myDoughnutChart = new Chart(dognt, {
    type: 'doughnut',
    data: datas,
    options: options
  });
  