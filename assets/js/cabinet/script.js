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
};

$('#phone').mask('+1 999-999-9999');
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
	'use strict'

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.needs-validation')

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms)
		.forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
					event.preventDefault()
					event.stopPropagation()
				}

				form.classList.add('was-validated')
			}, false)
		})
})();
$('.radio-group .radio').click(function () {
	$('.radio').removeClass('selected');
	$(this).addClass('selected');
	$('#next_happy').prop('disabled', false);
});

function happy_update(id){
	let data = new FormData();
	data.append('happy', $('.radio.selected').attr('data-happy'));
	data.append('order_id', id);
	return $.ajax({
		url: '/cabinet/happy_update',
		type: 'POST',
		data: data,
		processData: false,
		contentType: false,
		cache: false,
		async: false,
		success: function (data) {
			var result = validate_data_server_response(data);
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
	});
}
function star_update(id){
	var star = $("input[type='radio'][name='rating']:checked").val()
	if(star === undefined){
		Swal.fire('Fail!', 'Please select rate!', 'error'
		);
	}else{
		let data = new FormData();
		data.append('star', star);
		data.append('order_id', id);
		return $.ajax({
			url: '/cabinet/star_update',
			type: 'POST',
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			async: false,
			success: function (data) {
				location.href = '/cabinet';
			},
		});
	}
}

function updateStep(order_id, step) {

	var data = {
		'order_id': order_id,
		'step': step,
	};

	$.ajax({
		url: '/cabinet/update_step',
		type: 'POST',
		dataType: 'JSON',
		data: data,
		cache: false,
		success: function (data) {
			var result = validate_data_server_response(data);
			if (result) {
				location.href = '/cabinet';

			} else {
				Swal.fire('Fail!', data.text_message, 'error');
			}
		}

	});

}

$('.leave-button').on('click', function(){
	$('.input__wrapper').css('display','block');
});
