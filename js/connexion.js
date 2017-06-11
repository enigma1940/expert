$('.btnAddDoc').click(function(){
  $('.zone').css('display', 'none');
  $('.document').toggle('drop');
});
$('.btnAddUn').click(function(){
  $('.zone').css('display', 'none');
  $('.university').toggle('drop');
});
$('.btnAddFil').click(function(){
  $('.zone').css('display', 'none');
  $('.filiere').toggle('drop');
});
$('select').material_select();
$('.uninvForm').submit(function(e){
  e.preventDefault();
  $('.loader').css('display', 'block');
  $.post(
    '../php/manager.php',
    {
      opt: 'univ',
      nom: $('.nomU').val(),
      code: $('.codeU').val()
    },function(data){
      alert(data);
    }
  );
});
$('.filiereForm').submit(function(e){
  e.preventDefault();
  $('.loader').css('display', 'block');
  $.post(
    '../php/manager.php',
    {
      opt: 'filiere',
      nom: $('.nomF').val(),
      code: $('.codeF').val()
    },function(data){
      alert(data);
    }
  );
});
