
var services_id;

$('.btn-services').click(function(){
   $('#servicesName').text("Название услуги : " + $(this).attr('name'));
   $('#servicesPrice').text("Цена : " + $(this).attr('price') + "$");
   services_id = $(this).attr('services_id');
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
	
	var phone = $('#phoneNumber').val();
	var date = $('#date').val();

	if($('#phoneNumber').val() == '') {
		$('#error_order').text('Введите мобильный телефон');
	}
	else{
		$.ajax({ 
			type:'POST',
			url:"/sendOrder", 
			data: "phone=" + phone + "&date=" + date + "&services_id=" + services_id, 
			beforeSend:function(){ 

			}, 
			success:function(data){ 
				$('#error_order').text('Заказ успешно отправлен.');
				$('#phoneNumber').val('');
				$('#date').val('');
			}, 
			error:function(xhr){ 
				console.log(xhr);
			} 
		});
	}
});

