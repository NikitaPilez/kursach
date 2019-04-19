$('.btn-services').click(function(){
   console.log($(this).attr('name'));
   console.log($(this).attr('price'));
   console.log(document.getElementById(servicesName));
  // var name = $(this).attr('name');
 // var servicesNameElement = document.getElementById(servicesName);
   $('#servicesName').text($(this).attr('name'));
});

$('.btn-services').click(function(){
   console.log($(this).attr('name'));
   console.log($(this).attr('price'));
   console.log(document.getElementById(servicesName));
  // var name = $(this).attr('name');
 // var servicesNameElement = document.getElementById(servicesName);
   $('#servicesPrice').text($(this).attr('price'));
  
  
});

$('#sendQuestion').click(function(){
    if($('#question').val() == '') {
        $('#error').text('Введите свой вопрос!');
    }
    else{
        $('#my-form').submit();
    }            
});