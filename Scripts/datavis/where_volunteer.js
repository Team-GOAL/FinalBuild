// Create the chart
$(document).ready(function(){
	var options={
				   chart: {
					   renderTo: 'where_volunteer',
					   type: 'column'
				   },
				   title: {
					   text: 'Volunteering Participation Rate in Victoria by Sector',
						style :{
							"fontSize": "20px" 
							}
				   },
				   subtitle: {
					   text: 'Source: Australian Bureau of Statistics General Social Survey',
						style :{
							"fontSize": "17px" 
							}
				   },
				   xAxis: {
					   categories: [],
					   crosshair: true
				   },
				   yAxis: {
							visible:false
				   },
				   plotOptions: {
					   series: {
						   borderWidth: 0,
						   dataLabels: {
							   enabled: true,
							   format: '{point.y:.1f}%'
						   }
					   }
				   },
				legend: {
					enabled: false
						},
				   series: [{
					   name: 'Participation Rate',
					   data: []
				   }]
				};
				$.getJSON('php/datavis_volunteer_orgs_sql_call.php',function(data){
					var yr = data[0].year;
					//loop over retrieved data to separate populate empty arrays above
					var dt = [];
					for(var i = 0; i < data.length; i++) {
						var obj = data[i];
						options.xAxis.categories.push(obj.reasons);
						options.series[0].data.push(obj.proportion);
						}

				var chart2 = new Highcharts.Chart(options);
			});
		});