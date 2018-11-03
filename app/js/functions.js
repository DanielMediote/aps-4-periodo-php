(function($){
  $.fn.viacep = function() {
    $(this).each(function(index, el) {
      var $this = $(el);
      var cep = $this.find('.cep');
      var uf = $this.find('.uf');
      var cidade = $this.find('.cidade');
      var bairro = $this.find('.bairro')
      var rua = $this.find('.rua');
      var ibge;
      // console.log($this);

      cep.blur(function() {

        //Nova variável "cep" somente com dígitos.
        cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            rua.val("...");
            bairro.val("...");
            cidade.val("...");
            uf.val("...");
            // ibge.val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

              if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                rua.val(dados.logradouro);
                bairro.val(dados.bairro);
                cidade.val(dados.localidade);
                uf.val(dados.uf);
                // ibge.val(dados.ibge);
              } //end if.
              else {
                //CEP pesquisado não foi encontrado.
                // Limpa valores do formulário de cep.
                rua.val("");
                bairro.val("");
                cidade.val("");
                uf.val("");
                // ibge.val("");
                alert("CEP não encontrado.");
              }
            });
          } //end if.
          else {
            //cep é inválido.
            rua.val("");
            bairro.val("");
            cidade.val("");
            uf.val("");
            alert("Formato de CEP inválido.");
          }
        } //end if.
        else {
          //cep sem valor, limpa formulário.
          rua.val("");
          bairro.val("");
          cidade.val("");
          uf.val("");
        }
      });

    });
  };

  $.fn.submitform = function(){
    $(this).each(function(index, el) {
      var form = $(el);
      var btn_enviar = form.find('button[name=btn_enviar]');
      btn_enviar.addClass('uk-disabled');
      var termos = form.find('input[name=termos]');
      var dados = {};
      var classe = form.attr('name');

      termos.on('click', () =>{
        if (termos.is(':checked')) {
          btn_enviar.toggleClass('uk-disabled');
          btn_enviar.addClass('uk-button-primary');
        } else {
          btn_enviar.toggleClass('uk-disabled');
          btn_enviar.removeClass('uk-button-primary');
        }
      });

      btn_enviar.on('click', () => {
        dados['classe'] = classe;
        form.find("input").each(function(index, el) {
          var input_name = $(this).attr('name');
          var input_value = $(this).val();
          if (input_name == "termos") dados[input_name] = ($(this).is(':checked')) ? true : false;
          else dados[input_name] = input_value;
          // console.log(input_name+" = "+input_value+"\n");
        });
        form.find("select").each(function(index, el) {
          var input_name = $(this).attr('name');
          var input_value = $(this).val();
          dados[input_name] = input_value;
          // console.log(input_name+" = "+input_value+"\n");
        });
        $.ajax({
          url: '../controller/ajax_submit.php',
          type: 'POST',
          data: dados
        })
        .done(function(res) {
          console.log(res);
        })
        .fail(function() {
          console.log("error");
        });
      });

    });
  };

})(jQuery);


function form_clear() {
  var form = $(".formulario");
  form.find('input').each(function(index, el) {
    $(this).val("");
  });
}

function load_cursos() {
  var faculdade = $("select[name=faculdade]").val();
  $.ajax({
    url: '../controller/ajax_load_cursos.php',
    type: 'POST',
    data: {faculdade: faculdade}
  })
  .done(function(response) {
    // console.log(response);
    $("select[name=curso]").append(response);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("Cursos Carregados");
  });

}

function load_periodos() {
  var curso = $("select[name=curso]").val();
  $.ajax({
    url: '../controller/ajax_load_periodos.php',
    type: 'POST',
    data: {curso: curso}
  })
  .done(function(response) {
    // console.log(response);
    $("select[name=periodo]").append(response);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("Periodos Carregados");
  });

}
