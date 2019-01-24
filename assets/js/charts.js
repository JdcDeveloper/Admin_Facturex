$(document).ready(function() {
 
	$("#usersHide").click(function() {
		
		$("#graphicUsers").toggle();
	});	
	
});


function graphic(result){


  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Stadistics', 'Totals'],
      ['Users', result.users.totalusers],
      ['Customers', result.customers.totalcustomers],
      ['Projects', result.projects.totalprojects],
      ['Leads', result.leads.totalleads]           
      ]);

    var options = {
      chart: {
        title: 'JDC Customers',
        subtitle: 'Stadistics',
      },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('graphicUsers'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }



    }

// dashboard chart
$.ajax({
	url: BASE_URL+'dashboard/totalgraphic',
	type: 'GET',
	dataType: 'json'	
})
.done(function(result) {  
  
	graphic(result); 

});











