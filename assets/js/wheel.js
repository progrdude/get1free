jQuery(document).ready(function($){

	$('.wheel').superWheel({
		slices: [
			{
				text: "20% OFF",
				value: 0,
				message: "You win 20% off",
				discount: "95Qm9tof",
				background: "#e50307",

			},
			{
				text: "Free product",
				value: 1,
				message: "You win free product!",

				background: "#5cff8a",
				win: 'true'

			},
			{
				text: "30% OFF",
				value: 0,
				message: "You win 30% off",
				discount: "8C46fBeH",
				background: "#ffdf69",

			},
			{
				text: "Lose",
				value: 0,
				message: "You Lose :(",
				discount: "no",
				background: "#E74C3C",

			},
			{
				text: "40% OFF",
				value: 1,
				message: "You win 40% off",
				discount: "aHiH4bfd",
				background: "#7d53b9",

			},
			{
				text: "Nothing",
				value: 0,
				message: "You get Nothing :(",
				discount: "no",
				background: "#ff7575",

			},
			{
				text: "40% OFF",
				value: 0,
				message: "You Lose :(",
				discount: "no",
				background: "#E74C3C",

			},
			{
				text: "40% OFF",
				value: 1,
				message: "You win 40% off",
				discount: "aHiH4bfd",
				background: "#7d53b9",

			},
			{
				text: "Nothing",
				value: 0,
				message: "You get Nothing :(",
				discount: "no",
				background: "#ff7575",

			},
			{
				text: "70% OFF",
				value: 0,
				message: "You Lose :(",
				discount: "no",
				background: "#E74C3C",

			},
			{
				text: "40% OFF",
				value: 1,
				message: "You win 40% off",
				discount: "aHiH4bfd",
				background: "#7d53b9",

			},
			{
				text: "DOUBLE <br> REFUND",
				value: 0,
				message: "You get Nothing :(",
				discount: "no",
				background: "#ff7575",

			}
		],
		text : {
			size: 14,
			color: '#fff',
			offset : 8,
			letterSpacing: 0,
			orientation: 'v',
			arc: true
		},
		selector: "win",
		frame: 1,
		type: "spin",
		slice: {
			background: "#333",
			selected: {}
		},

		line: {

			color: "#ecf0f1"
		},
		outer: {
			color: "#ecf0f1"
		},
		inner: {
			color: "#ecf0f1"
		},
		center: {
			rotate: 1,
		},
		marker: {
			background: "#e53935",
			animate: 1
		},
		width: 550
	});








	$('.wheel').superWheel('onStart',function(results){
		$('.spin-button').text('Spinning...');
	});


	$('.wheel').superWheel('onComplete',function(results){
		//console.log(results.value);
		if(results.value === 1){
			Swal.fire("WINNER!", 'You win free product!', "success");
			setTimeout(function () {
				location.href = '/cabinet';

			}, 3000);



		}else{
			Swal.fire("Oops!", results.message, "error");
		}


		$('.spin-button:disabled').prop('disabled',false).text('Spin');

	});

});
