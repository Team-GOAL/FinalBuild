// Create the chart

document.addEventListener('DOMContentLoaded', function () {
	var myChart =  Highcharts.chart('sport_participation_by_gender', {
					chart: {
						type: 'column'
					},
					title: {
						text: 'Organized Sport Children Participation in Victoria'
					},
					subtitle: {
						text: 'Source: Ausplay Vic Data tables Jan - Dec Reports, 2016-2018'
					},
					xAxis: {
						type: 'category'
					},
					yAxis: {
						visible : false
					},
					legend: {
						enabled: false
					},
			   
				colors: ['#777777','#F987C5','#2f7ed8'],
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
					pointFormat: '<b>{point.name}:</b> {point.y} %'
				},
					series: [{
						name: 'Participation Rate',
						colorByPoint: true,
						data: [{
							  name: 'All',
							  y: 65
							  },  {
							  name: 'Female',
							  y : 50
						  }, {
							  name: 'Male',
							  y : 80.76
								}]
						  }]
				});

});
