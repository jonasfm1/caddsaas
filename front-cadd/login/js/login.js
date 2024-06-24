$(document).ready(function () {
    $("login-system").submit(function (event) {
      var formData = {
        userSystem: $("#user-system").val(),
        passwordSystem: $("#password-system").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "login-system.php",
        data: formData,
        dataType: "json",
        encode: true,
      }).done(function (data) {
        console.log(data);
      });
  
      event.preventDefault();
    });
  });