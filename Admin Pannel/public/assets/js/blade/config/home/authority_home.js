$(function() {

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
  
    var areaChartData = {
      labels  : ['day-1', 'day-5', 'day-10', 'day-15', 'day-20', 'day-25', 'day-30'],
      datasets: [
        {
          label               : 'Customers',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [100000, 150000, 120000, 160000, 180000, 200000, 190000]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }
  
    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
  
    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })
  
  
  
  //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = $.extend(true, {}, areaChartOptions)
      var lineChartData = $.extend(true, {}, areaChartData)
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false
  
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })
  
  
  
  });