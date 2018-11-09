$(document).ready(function() {
  $(".viacep").viacep();
  // $(".formulario").submitform();
  form_submit();
  build_mask_all();
  check_termos();
  check_passwords();
  check_null_fields();
  check_user_exists();
});

$(window).resize(function() {
});

$(window).scroll(function() {
});
