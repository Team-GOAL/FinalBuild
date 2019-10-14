// Create the chart
$(document).ready(function(){
	var options={
					chart: {
							renderTo: 'bubble_sports',
							type: 'packedbubble',
							height: '75%'
					},
					title: {
						text: 'Source: Ausplay Vic Data tables Jan - Dec Report',
						margin: 5
					},
					subtitle: {
								style :{
									"fontSize": "22px" 
								}
					},
					tooltip: {
						useHTML: true,
						pointFormat: '<b>{point.name}:</b> {point.value}%',
						headerFormat: '',
						style : {
							fontSize : '20px'
						}
					},
					legend: {
						align: 'center',
						verticalAlign: 'top',
						layout: 'horizontal',
						itemStyle: {
							fontSize: '20px'},
						margin : 0
					},
					colors: ['#2f7ed8', '#F987C5'],
					plotOptions: {
						packedbubble: {
							layoutAlgorithm: {
								splitSeries: true,
								gravitationalConstant: 0.02,
									minSize: '20%',
									maxSize: '100%',
									zMin: 0,
									zMax: 1000
							},
							dataLabels: {
								enabled: true,
								format: '{point.name}',
								style: {
									color: 'black',
									textOutline: 'none',
									fontWeight: 'normal',
									fontSize: '20px'
								}
							}
						}
					},
					series: [{
								name: 'Boys',
								data: []
							},
							{
								name: 'Girls',
								data: []
							}
							]
				};
				$.getJSON('php/datavis_bubble_sql_call.php',function(data){
					var yr = data[0].year;
					//loop over retrieved data to separate populate empty arrays above
					var male_dt = [];
					var female_dt = [];
					
					for(var i = 0; i < data.length; i++) {
						var obj = data[i];
						var ml = {};
							ml.name = obj.SportsPlayed;
							ml.value = obj.Males;
						var fm = {};
							fm.name = obj.SportsPlayed;
							fm.value = obj.Females;
						male_dt.push(ml);
						female_dt.push(fm);
						}
						
				options.series[0].data = male_dt;
				options.series[1].data = female_dt;
				options.subtitle.text = yr;
				var chart = new Highcharts.Chart(options);
			});
		});