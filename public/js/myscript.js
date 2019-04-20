$('.btn-services').click(function(){
	console.log("JJNIj");
   $('#servicesName').text("Название услуги : " + $(this).attr('name'));
   $('#servicesPrice').text("Цена : " + $(this).attr('price') + "$");
  
});

$('#sendQuestion').click(function(){
    if($('#question').val() == '') {
        $('#error').text('Введите свой вопрос!');
    }
    else{
        $('#my-form').submit();
    }            
});

$('#sendOrder').click(function(){
	if($('#phoneNumber').val() == '') {
		$('#error_order').text('Введите мобильный телефон');
	}
	else{
		$('#orderForm').submit();
	}
});