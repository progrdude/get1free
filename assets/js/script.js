function redirect(url) {

	var url_redirect = base_url + url;
	window.setTimeout('window.location.assign(\'' + url_redirect + '\')', 3000); //редирект после 3-х секунд
}

function validate_data_server_response(data) {
	if (data.status === 'fail') {
		if (data.response_data !== undefined) {
			//запускаем цикл, перебирая сообщения ошибок
			$.each(data.response_data, function (key, val) {
				if (val != '') {	//если у нас есть сообщение об ошибке, то вставляем данные в страницу
					$('#error_' + key).html(val);
				} else {	//иначе, если у нас нет сообщения с ошибкой, то просто засовываем пустоту в блок
					$('#error_' + key).html('');
				}
			});
		}

		return false;
	} else if (data.status === 'success') {

		return true;
	}
}
$('#order_id').mask('000-0000000-0000000');
function register() {

	var val_order = $( "#order_id" ).val();
	var val_email = $( "#email" ).val();
	var reg_order = /^[0-9]{3}\-[0-9]{7}\-[0-9]{7}$/;
	var reg_email = /^[^@\s]+@[^@\s]+\.[^@\s]{2,}$/;
	$('.spin-button').prop('disabled', true);
	if (reg_order.test(val_order) && reg_email.test(val_email)) {
		let data = new FormData();
		data.append('order', $('#order_id').val());
		data.append('email', $('#email').val());
		$('.spin-button').prop('disabled', true);

		return $.ajax({
				url: '/reg_and_log/registration',
				type: 'POST',
				data: data,
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function (data) {
					let result = validate_data_server_response(data);
					if (result) {
						$('.wheel').superWheel('start', 'true');

					} else {
						Swal.fire(
							'Fail!',
							data.text_message,
							'error'
						);
						$('.spin-button').prop('disabled', false);

					}

				},
			},
		);
	}else {
		Swal.fire(
			'Fail!',
			'Please enter valid data for orderId and email',
			'error'
		);
		$('.spin-button').prop('disabled', false);

	}
}
function login() {
	let data = new FormData();
	data.append('email', $('#loginEmail').val());
	data.append('password', $('#loginPass').val());


	return $.ajax({
			url: '/reg_and_log/login',
			type: 'POST',
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			async: false,
			success: function (data) {
				let result = validate_data_server_response(data);
				if (result) {
					Swal.fire(
						'Success!',
						data.text_message,
						'success'
					);
					setTimeout(function () {
						location.href = '/cabinet';

					}, 2000);
				} else {
					Swal.fire(
						'Fail!',
						data.text_message,
						'error'
					);
				}
			},
		},
	);
}

// $('body').on('input','.form-control', function() {
// 	var ret_order = false;
// 	var ret_email = false;
// 	$('.spin-button').prop("disabled",true);
// 	var val_order = $( "#order_id" ).val();
// 	var val_email = $( "#email" ).val();
// 	var reg_order = /^[0-9]{3}\-[0-9]{7}\-[0-9]{7}$/;
// 	var reg_email = /^[^@\s]+@[^@\s]+\.[^@\s]{2,}$/;
//
// 	if (val_order) {
// 		if (reg_order.test(val_order)) {
// 			ret_order = true;
// 		}
// 	}
// 	if (val_email) {
// 		if (reg_email.test(val_email)) {
// 			ret_email = true;
// 		}
// 	}
//
// 	if (ret_order && ret_email){
// 		$('.spin-button').prop("disabled",false);
// 	}
//
//
// });


