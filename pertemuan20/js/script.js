$(document).ready(function(){
	// event ketika kwyword ditulis
	$('#keyword').on('keyup', function(){
		//tampilkan loading
		$('.loader').show();

		// ajax menggunkan load
		// $('#container').load('ajax/smartphones.php?keyword=' + $('#keyword').val());

		// $.get
		$.get('ajax/smartphones.php?keyword=' + $('#keyword').val(), function(data){
			$('#container').html(data);
			$('.loader').hide();
		});
	});
});
