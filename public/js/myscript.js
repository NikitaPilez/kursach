$('.btn-services').click(function(){
   console.log($(this).attr('name'));
   console.log($(this).attr('price'));
   var name = $(this).attr('name');
   console.log($(this).children());
   var contents = document.getElementById(name);
   $("span").text($(this));

  
  
});

$('#sendQuestion').click(function(){
    if($('#question').val() == '') {
        $('#error').text('Введите свой вопрос!');
    }
    else{
        $('#my-form').submit();
    }            
});