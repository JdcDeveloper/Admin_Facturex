// $(document).ready(function() {
 
// 	$("#usersHide").click(function() {
		
// 		$("#graphicUsers").toggle();
// 	});	
	
// });


function graphic(result){


  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Estadisticas', 'Totals'],
      ['Users registrados', result.usersRegister],
      ['Role Admin', result.admin],
      ['Role User', result.user]              
      ]);

    var options = {
      chart: {
        // title: 'Admin Facturex',
        // subtitle: 'Estadisticas',
      },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('graphicUsers'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }



    }

// dashboard chart
$.ajax({
	url: BASE_URL+'dashboard/chartdata',
	type: 'GET',
	dataType: 'json'	
})
.done(function(result) {  
  
	graphic(result); 

});











