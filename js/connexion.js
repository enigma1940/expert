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
  /*$('.errU').css('display', 'none');
  $('.loader').css('display', 'block');
  if($('.nomU').val()!='' && $('.codeU')!=''){

    $(this)[0].reset();
  }else{$('.errU').toggle('bounce');}*/
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
  /*$('.loader').css('display', 'block');
  $('.errF').css('display', 'none');
  if($('.nomF').val()!='' && $('.codeF').val()!=''){

    $(this)[0].reset();
  }else{$('.errF').toggle('bounce');}*/
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
  formData.append('annee', $('.annee').val());
  formData.append('universite', $('.univD option:selected').attr('val'));
  formData.append('filiere', $('.filiereD option:selected').text());
  $.ajax({
    type:'POST',
    url:'../php/manager.php',
    data: formData,
    cache:false,
      contentType: false,
      processData: false,
      success:function(data){
          alert(data);
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
