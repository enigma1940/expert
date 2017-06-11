$('.connForm').submit(function(e){
  e.preventDefault();
  $('.connErr').css('display', 'none');
  if($('.userName').val()!="" && $('.userPass').val()!=""){
    $.post(
      '../php/auth.php',
      {
        opt: 'connect',
        uname: $('.userName').val(),
        password: $('.userPass').val()
      },
      function(data){
        alert(data);
        if(data=='success'){
          
        }
        else $('.connErr').toggle('bounce');
      }
    );
  }else{
    $('.connErr').toggle('bounce');
  }
});
