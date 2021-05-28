/* globals Chart:false, feather:false */
$(document).ready(function() {
	feather.replace()
	$('.myTable').DataTable();
	$('.summernote').summernote();
	$('[data-filter="dateStartTotal"]').datepicker({dateFormat: "yy-mm-dd"});
	$('[data-filter="dateEndTotal"]').datepicker({dateFormat: "yy-mm-dd"});
	loadTotalNum();
	loadChartMonth();
} );



function loadTotalNum() {
	let data = {
		'date_from': $('[data-filter="dateStartTotal"]').val(),
		'date_to': $('[data-filter="dateEndTotal"]').val(),
		'site': $('#site').val(),
	};

	return $.ajax({
		url: 'analytics/get_info_total_date',
		method: 'POST',
		data: data,
		success: function (data) {
			var new_data = JSON.parse(data)
			var get_total_con_chart = JSON.parse(JSON.stringify(new_data.get_total_con_chart));
			$('#dataConTotal').text(((new_data.totalFinal/new_data.totalView)*100).toFixed(2) + '%');
			$('#dataConHappy').text(((new_data.totalFinalHappy/new_data.totalFinal)*100).toFixed(2) + '%');
			$('#dataConNotHappy').text(((new_data.totalFinalNotHappy/new_data.totalFinal)*100).toFixed(2) + '%');
			$('#dataViewReg').text(((new_data.totalUser/new_data.totalView)*100).toFixed(2) + '%');
			var step = [];
			var step_count = [];
			$.each(get_total_con_chart, function (key, value){
				$.each(get_total_con_chart[key], function (key, value){
					if(key === 'step'){
						step.push(value)
					}
					if(key === 'count'){
						step_count.push(value)
					}

				})
			})

			window.myChart = new Chart(document.getElementById('myChart').getContext('2d'), {
				type: 'pie',
				data: {
					labels: step,
					datasets: [{
						data: step_count,
						backgroundColor: [
							'rgba(255, 99, 132)',
							'rgba(54, 162, 235)',
							'rgba(255, 206, 86)',
							'rgba(75, 192, 192)',
							'rgba(153, 102, 255)'
						],
					}]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false
				}
			});

		},
	})

};
function loadChartMonth() {
	let data = {

		'site': $('#site_month').val(),
	};

	return $.ajax({
		url: 'analytics/get_site_con_month',
		method: 'POST',
		data: data,
		success: function (data) {
			var new_data = JSON.parse(data)
			var get_total_con_chart = JSON.parse(JSON.stringify(new_data));

			window.chartMonth = new Chart(document.getElementById('chartMonth').getContext('2d'), {
				type: 'line',
				data: {
					labels:  ["Март","Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
					datasets: [
						{
							label: "Конверсия к финалу",
							backgroundColor: "#4BC0C0",
							borderColor: "#4BC0C0",
							data: get_total_con_chart,
						},

					]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false
				}
			});

		},
	})

};
function destroyChart() {
	window.myChart.destroy();
}
