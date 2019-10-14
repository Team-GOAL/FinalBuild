// Create the chart
$(document).ready(function(){
	var options={
			chart: {
				renderTo: 'sports_summary',
				type: 'column'
			},
			title: {
				text: 'Source: Ausplay Vic Data tables Jan - Dec Reports'
			},
			subtitle: {
			},
			xAxis: {
				categories: ['Language at Home'],
				crosshair: true
			},
			yAxis: {
				visible : false
			},
			legend: {
				verticalAlign: 'top',
				enabled: true
			},
	   
		colors: ['#777777','#2f7ed8'],
		plotOptions: {
				series: {
					borderWidth: 0,
					dataLabels: {
						enabled: true,
			  style : { fontSize: '15'
								},
			  formatter: function() {
							return this.y + ' %';
										}           
									},
				},
			},
		tooltip: {
			useHTML: true,
			headerFormat:'',
			pointFormat: '</b> {point.y}%',
			style : {
				fontSize : '20px'
				}
		},
		series: [{
				   name: 'English',
				   data: []
			   },{
				   name: 'Not English',
				   data: []
			   }]
		};
				$.getJSON('php/datavis_sports_participation_sql.php',function(data){
					var yr = data[0].year;
					//separate data
					var dt_en = data.filter(data => data.language == 'english');
					var dt_oen = data.filter(data => data.language == 'other_than_english');
					//loop over each data and update datavisualization entries
					options.series[0].data.push(dt_en[0].y);
					options.series[1].data.push(dt_oen[0].y);
					options.subtitle.text = yr;

				var chart1 = new Highcharts.Chart(options);
			});
		});