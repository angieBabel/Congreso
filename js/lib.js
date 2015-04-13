$(function(){
  $('#ponente').change(function(){

      $('#ponente').removeClass('alert-dange');
  });
});

function valida_conferencia(){
  var flag=true;
  var cad=$('option:selected').val().trim();
  if(cad==''){
    $('#ponente').addClass('alert-warning')
    alert('Debe seleccionar ponente');
    flag=false;
  }else
  {
    $('#ponente').removeClass('alert-warning')
  }

  if(flag){
    $('form').submit();
  }
}
