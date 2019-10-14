// Create the chart
$(document).ready(function(){
	var options={
			chart: {renderTo:'why_volunteer'
			}, 
			series: [{
				type: 'wordcloud',
				rotation: {
					from: 0,
					to: 0,
					orientations: 5
				},
				data: [],
						name: 'Main Reasons to Volunteer'
					}],
				title: {
				text: null,
				margin: 0
				},
				tooltip: {
							useHTML: true,
							headerFormat:'',
							pointFormat: '{point.name}:{point.weight}%',
							style : {
								fontSize : '20px'
								}
						}
			};
				$.getJSON('php/datavis_volunteer_sql_call.php',function(data){
					var yr = data[0].year;
					//loop over retrieved data to separate populate empty arrays above
					var dt = [];
					for(var i = 0; i < data.length; i++) {
						var obj = data[i];
						var ml = {};
							ml.name = obj.reasons;
							ml.weight = obj.proportion;
						dt.push(ml);
						}
				options.series[0].data = dt;
				var chart1 = new Highcharts.Chart(options);
			});
		});