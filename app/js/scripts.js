$(document).ready(function() {
  $(".viacep").viacep();
  form_submit();
  build_mask_all();
  check_termos();
  check_passwords();
  check_null_fields();
  check_user_exists();
  isDate();
  form_login();
});

$(window).resize(function() {
});

$(window).scroll(function() {
});
