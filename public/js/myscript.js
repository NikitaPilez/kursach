$('.btn-services').click(function(){
    console.log($(this).attr('name'));
});

$('#sendQuestion').click(function(){
    if($('#question').val() == '') {
        $('#error').text('Введите свой вопрос!');
    }
    else{
        $('#my-form').submit();
    }            
});