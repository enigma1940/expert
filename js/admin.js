$('.connForm').submit(function(e
  $('.connErr').css('display', 'none');
  e.preventDefault();
  if($('.userName').val().lenght>2 && $('.userPass').val().length>7){
    $.post(
      
    );
  }else{
    $('.connErr').toggle('bounce');
  }
});
