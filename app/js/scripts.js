$(document).ready(function() {

  $('input[name=senha2]').on('change', function() {
    var senha1 = $('input[name=senha]');
    var senha2 = $('input[name=senha2]');
    if (senha1.val()!=senha2.val()) {
      senha1.removeClass('is-primary');
      senha1.addClass('is-danger');
      senha2.removeClass('is-primary');
      senha2.addClass('is-danger');
    }else {

    }
  });


  // Aqui será um filtro para verificar se o usuario já existe no Banco de Dados
  $('#usuario').on('change', function() {
    var user = $(this).val();

  });


  // Aqui será os scripts onde ao selecionar um Estado, todas as cidades deste mesmo,
  // sejam carregadas.
  $('#estado').on('change', function() {
    console.log("Loading Cidades");
  });

  $('#termos').on('click', function() {
    var checkbox = $(this).is(':checked');
    if (checkbox) {
      $('#enviar').removeClass('is-static');
    }else {
      $('#enviar').addClass('is-static');
    }
  });

  $('#enviar').on('click', function() {



  });

});
