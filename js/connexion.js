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
