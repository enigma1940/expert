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
        if(data=='success'){
          document.location.href='connexion.php';
        }
        else $('.connErr').toggle('bounce');
      }
    );
  }else{
    $('.connErr').toggle('bounce');
  }
});
