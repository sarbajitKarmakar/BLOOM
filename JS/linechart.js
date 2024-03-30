var ctx = document.getElementById("lineChart").getContext("2d");
sDayArr.reverse();
admsnArr.reverse();
rcvrArr.reverse();


var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: sDayArr,
        datasets: [{
            label: 'New patient',
            data: admsnArr,
            borderColor: '#FC5066',
            fill: false,
        }, {
            label: 'Recovared patient',
            data: rcvrArr,
            borderColor: '#57BD79',
            fill: false,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                 grid: {
                display: false // Remove x-axis grid lines
              },
                type: 'category',
                labels: sDayArr,
            },
            y: {
                beginAtZero: true,
            }
        },
        plugins: {
            legend: {
                position: 'bottom',
                display: true,
            }
        }
    }
});