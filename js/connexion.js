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
$('.univForm').submit(function(e){
  e.preventDefault();
  $('.errU').css('display', 'none');
  $('.loader').css('display', 'block');
  if($('.nomU').val()!='' && $('.codeU')!=''){
  $.post(
    '../php/manager.php',
    {
      opt: 'univ',
      nom: $('.nomU').val(),
      code: $('.codeU').val()
    },function(data){}
  );
    $('.loader').css('display', 'none');
    $(this)[0].reset();
  }else{$('.loader').css('display', 'none'); $('.errU').toggle('bounce');}

});
$('.filiereForm').submit(function(e){
  e.preventDefault();
  $('.loader').css('display', 'block');
  $('.errF').css('display', 'none');
  if($('.nomF').val()!='' && $('.codeF').val()!=''){
  $.post(
    '../php/manager.php',
    {
      opt: 'filiere',
      nom: $('.nomF').val(),
      code: $('.codeF').val()
    },function(data){
    });
    $(this)[0].reset();
  }else{$('.errF').toggle('bounce');}
});

$('.docForm').submit(function(e){
  e.preventDefault();
  var formData = new FormData(this);
  formData.append('opt', 'document');
  formData.append('file', $('.doc')[0].files[0]);
  formData.append('theme', $('.themeD').val());
  formData.append('type', $('.typeD option:selected').attr('value'));
  formData.append('mail', $('.mailD').val());
  formData.append('auteur', $('.auteurD').val());
  formData.append('contact', $('.contactD').val());
  formData.append('annee', $('.anneeD').val());
  formData.append('universite', $('.univD option:selected').attr('value'));
  formData.append('filiere', $('.filiereD option:selected').attr('value'));
  $.ajax({
    type:'POST',
    url:'../php/manager.php',
    data: formData,
    cache:false,
      contentType: false,
      processData: false,
      success:function(data){
          $('.docForm')[0].reset();
      }
  });
});

$('.btnAddLink').click(function(){
  $('.zone').css('display', 'none');
  $('.link').toggle('drop');
});

$('.refForm').submit(function(e){
  e.preventDefault();
  $.post(
    '../php/manager.php',
    {
      opt: 'annuaire',
      nom: $('.nomR').val(),
      annee: $('.anneeR').val(),
      mail: $('.mailR').val(),
      contact: $('.contactR').val(),
      filiere: $('.filR option:selected').attr('value'),
      univ: $('.univR option:selected').attr('value'),
      theme: $('.titleR').val()
    },function(data){alert(data);}
  );
  $('.refForm')[0].reset();
});
$('.btnDel').click(function(){
  $('.delMenu').toggle('drop');
});
$('.btnUniv').click(function(){
  $('.zone').hide();
  $('.delMenu').hide();
  $('.delUniv').toggle('bounce');
});
$('.btnFil').click(function(){
  $('.zone').hide();
  $('.delMenu').hide();
  $('.delFil').toggle('bounce');
});
$('.btnRef').click(function(){
  $('.zone').hide();
  $('.delMenu').hide();
  $('.delRef').toggle('bounce');
});
$('.btnDoc').click(function(){
  $('.zone').hide();
  $('.delMenu').hide();
  $('.delDoc').toggle('bounce');
});
