(function ($) {
  $.fn.viacep = function () {
    $(this).each(function (index, el) {
      var $this = $(el);
      var cep = $this.find('.cep');
      var uf = $this.find('.uf');
      var cidade = $this.find('.cidade');
      var bairro = $this.find('.bairro')
      var rua = $this.find('.rua');
      var ibge;
      cep.blur(function () {
        //Nova variável "cep" somente com dígitos.
        cep = $(this).val().replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;
          //Valida o formato do CEP.
          if (validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            rua.val("...");
            bairro.val("...");
            cidade.val("...");
            uf.val("...");
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
              if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                rua.val(dados.logradouro);
                bairro.val(dados.bairro);
                cidade.val(dados.localidade);
                uf.val(dados.uf);
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
})(jQuery);

function form_clear() {
  var form = $(".formulario");
  form.each(function(index, el) {
    var this_form = $(el);
    this_form.find('input').each(function(index, el) {
      var input = $(this);
      input.val("");
      if (input.hasClass('uk-form-success')) input.removeClass('uk-form-success');
      if (input.hasClass('uk-form-danger')) input.removeClass('uk-form-danger');
    });
  });
}

function load_cursos() {
  var faculdade = $("select[name=faculdade]").val();
  $.ajax({
    url: '../controller/ajax_load_cursos.php',
    type: 'POST',
    data: {
      faculdade: faculdade
    }
  })
  .done(function (response) {
    // console.log(response);
    $("[name=curso]").append(response);
  })
  .fail(function () {
    console.log("error");
  });
}

function load_periodos() {
  var curso = $("select[name=curso]").val();
  $.ajax({
    url: '../controller/ajax_load_periodos.php',
    type: 'POST',
    data: {
      curso: curso
    }
  })
  .done(function (response) {
    // console.log(response);
    $("[name=periodo]").append(response);
  })
  .fail(function () {
    console.log("error");
  });
}

function build_mask_all() {
  $("[name=cpf]").mask('000.000.000-00', {
    reverse: true
  });
  $("[name=telefone1]").mask('(00) 9 0000-0000');
  $("[name=telefone2]").mask('(00) 9 0000-0000');
  $("[name=dataNasc]").mask('00/00/0000', {
    placeholder: 'DD/MM/YYYY'
  });
  $("[name=cpnj]").mask('00.000.000/0000-00', {
    reverse: true
  });
}

function check_termos() {
  var chk_termos = $(".formulario").find("[name=termos]");
  var btn_enviar = $(".formulario").find("[name=btn_enviar]");
  chk_termos.click(() => {
    if (chk_termos.is(':checked')) {
      btn_enviar.removeClass('uk-disabled');
      btn_enviar.addClass('uk-button-primary');
    } else {
      btn_enviar.removeClass('uk-button-primary');
      btn_enviar.addClass('uk-disabled');
    }
  });
}

function validate_inputs(form) {
  var res = false;
  form.find('input').each(function(index, el) {
    var name = $(this).attr('name');
    var value = $(this).val();
    var arr = ["telefone2", "email"];
    if (name != "termos") {
      if (!arr.includes(name)) {
        if ($(this).hasClass('uk-form-danger') || (value == "")){
          $(this).addClass('uk-form-danger');
          res = true;
        }
      }
    }
  });
  return res;
}

function form_submit() {
  var form = $(".formulario");
  form.each(function (index, el) {
    var this_form = $(el);
    var btn_enviar = this_form.find("[name=btn_enviar]");
    var form_name = this_form.attr('name');
    btn_enviar.click(() => {
      if (validate_inputs(this_form)) {
        notification(
          "<p class=\"uk-text-center\">Alguns campos estão nulos. Preencha-os corretamente.</p>",
          'warning',
          'top-center',
          2000
        );
      }else {
        var formData = new FormData(el);
        formData.append('classe', form_name);
        $.ajax({
          url: '../controller/ajax_submit.php',
          type: 'POST',
          contentType: false,
          processData: false,
          data: formData,
          success: (data) => {
            // form_clear();
            notification(
              "<p class=\"uk-text-center\">Formulário Enviado</p>",
              'success',
              'top-center',
              2000
            );
            console.log(data);
          },
          error: () => {
            console.log("error");
          }
        });
      }
    });
  });
}

function check_passwords() {
  var form = $(".formulario");
  form.each(function(index, el) {
    var $this = $(el);
    var input_s1 = $this.find("[name=senha1]");
    var input_s2 = $this.find("[name=senha2]");
    input_s2.blur(function(event) {
      /* Act on the event */
      var senha1 = input_s1.val();
      var senha2 = input_s2.val();
      if (!(senha1==senha2)) {
        if (input_s1.hasClass('uk-form-success')) input_s1.removeClass('uk-form-success');
        if (input_s2.hasClass('uk-form-success')) input_s2.removeClass('uk-form-success');
        input_s1.addClass('uk-form-danger');
        input_s1.attr('uk-tooltip', 'title: Senha as se confere; pos: bottom;');
        input_s2.attr('uk-tooltip', 'title: Senha as se confere; pos: bottom;');
        input_s2.addClass('uk-form-danger');
      }else {
        if ((senha1 == "") && (senha2 == "")) {
          if (input_s1.hasClass('uk-form-success')) input_s1.removeClass('uk-form-success');
          if (input_s2.hasClass('uk-form-success')) input_s2.removeClass('uk-form-success');
          input_s1.addClass('uk-form-danger');
          input_s2.addClass('uk-form-danger');
        }else {
          if (input_s1.hasClass('uk-form-danger')) input_s1.removeClass('uk-form-danger');
          if (input_s2.hasClass('uk-form-danger')) input_s2.removeClass('uk-form-danger');
          input_s1.addClass('uk-form-success');
          input_s2.addClass('uk-form-success');
          input_s1.removeAttr("uk-tooltip");
          input_s2.removeAttr("uk-tooltip");
        }
      }
    });
  });
}

function check_null_fields() {
  var form = $(".formulario");
  form.each(function(index, el) {
    $(el).find('input').each(function(index, el) {
      var input = $(this);
      $(this).blur(function(event) {
        var value = input.val();
        var name = input.attr('name');
        var arr = ["telefone2", "email"];
        /* Act on the event */
        if (!arr.includes(name)) {
          if (value == "") {
            input.addClass('uk-form-danger');
            input.attr('uk-tooltip', 'title: Preencha este campo; pos: bottom;');
          }else {
            input.removeClass('uk-form-danger');
            input.removeAttr('uk-tooltip');
          }
        }
      });
    });
  });
}

function notification(text, sts, pos, time) {
  UIkit.notification({
    message: text,
    status: sts,
    pos: pos,
    timeout: time
  });
}

function check_user_exists() {
  var form = $(".formulario");
  form.each(function(index, el) {
    var input_usuario = $(el).find('[name=usuario]');
    input_usuario.blur(function(event) {
      var value = input_usuario.val();
      $.ajax({
        url: '/controller/ajax_check_user.php',
        type: 'POST',
        data: {'usuario':value}
      })
      .done(function(res) {
        console.log(res);
        if (res) {
          input_usuario.addClass('uk-form-warning');
          input_usuario.attr('uk-tooltip', "title: Este usuario jś esta cadastrado; pos: right;");
        }else {
          input_usuario.addClass('uk-form-success');
        }
      })
      .fail(function() {
        console.log("error");
      });

    });
  });
}
