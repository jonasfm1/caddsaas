$(document).ready(function () {
    $("login-system").submit(function (event) {
      // VERIFICAR DE CAMPOS ESTAO VAZIOS E RETORNAR ERRO

      var formData = {
        userSystem: $("#user-system").val(),
        passwordSystem: $("#user-password").val(),
        company: $("#user-company").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "index.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function(data) {
        console.log(data);
      });
      event.preventDefault();
    });
  });