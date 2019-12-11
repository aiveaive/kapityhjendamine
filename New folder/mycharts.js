// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages':['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {
console.log(c1_Json);
console.log(c2_Json);
console.log(c3_Json);
console.log(c4_Json);
console.log(c5_Json);
  // Create the data table.
  var data = new google.visualization.DataTable(c1_Json);
  var data2 = new google.visualization.DataTable(c2_Json);
  var data3 = new google.visualization.DataTable(c3_Json);
  var data4 = new google.visualization.DataTable(c4_Json);
  var data5 = new google.visualization.DataTable(c5_Json);
  

  // Set chart options
  var options = {
    'title': '1. Keskmised hinnangud innovatsiooni teguritele välisosaluse alusel.',
    'width': 1000,
    'height': 500,
    chartArea: {
      height: 250,
      width: 400
    },
    'vAxis': {
      viewWindow: {
        min: 0,
        max: 7
      }
    }
  };

  var options2 = {
    'title': '2. Keskmised hinnangud innovatsiooni teguritele ekspordi alusel.',
    'width': 1000,
    'height': 500,
    chartArea: {
      height: 250,
      width: 400
    },
    'vAxis': {
      viewWindow: {
        min: 0,
        max: 7
      }
    }
  };

  var options3 = {
    'title': '3. Keskmised hinnangud innovatsiooni teguritele 2017. aasta müügitulu alusel (€).',
    'width': 1000,
    'height': 500,
    chartArea: {
      height: 250,
      width: 400
    },
    'vAxis': {
      viewWindow: {
        min: 0,
        max: 7
      }
    }
  };

  var options4 = {
    'title': '4. Keskmised hinnangud innovatsiooni teguritele ettevõtte vanuse alusel (aasta).',
    'width': 1000,
    'height': 500,
    chartArea: {
      height: 250,
      width: 400
    },
    'vAxis': {
      viewWindow: {
        min: 0,
        max: 7
      }
    }
  };

  var options5 = {
    'title': '5. Keskmised hinnangud innovatsiooni teguritele ettevõtte tegevjuhi hariduse alusel.',
    'width': 1000,
    'height': 500,
    chartArea: {
      height: 250,
      width: 400
    },
    'vAxis': {
      viewWindow: {
        min: 0,
        max: 7
    
    
      }
    }
  };

  // Instantiate and draw our chart, passing in some options.
  var chart = new google.visualization.ColumnChart(document.getElementById('chart_q1'));
  chart.draw(data, options);
  var chart2 = new google.visualization.ColumnChart(document.getElementById('chart_q2'));
  chart2.draw(data2, options2);
  var chart3 = new google.visualization.ColumnChart(document.getElementById('chart_q3'));
  chart3.draw(data3, options3);
  var chart4 = new google.visualization.ColumnChart(document.getElementById('chart_q4'));
  chart4.draw(data4, options4);
  var chart5 = new google.visualization.ColumnChart(document.getElementById('chart_q5'));
  chart5.draw(data5, options5);
}