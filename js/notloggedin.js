//# sourceURL=formEditor.js

$(document).ready(function() {
  scannePasswoerter();
});

//zwischen den login, reset und register forms wechseln

$("#signup").click(function () {
  $("#first").fadeOut("fast", function () {
    $("#second").fadeIn("fast");
  });
});

$("#signin").click(function () {
  $("#second").fadeOut("fast", function () {
    $("#first").fadeIn("fast");
  });
});

$("#signinMail_reset").click(function () {
  $("#third").fadeOut("fast", function () {
    $("#first").fadeIn("fast");
  });
});

$("#signinPassword_reset").click(function () {
  $("#fourth").fadeOut("fast", function () {
    $("#ohneFourth").fadeIn("fast");
  });
});

$("#reset").click(function () {
  $("#first").fadeOut("fast", function () {
    $("#third").fadeIn("fast");
  });
});

$("#signinPassword_reset").click(function () {
  $("#fourth").fadeOut("fast", function () {
    $(".ohneFourth").fadeIn("fast");
  });
});

setTimeout(function () {
  $(".alert").animate({ opacity: 0 }, 1000, function () {});
}, 5000);
setTimeout(function () {
  $(".alert").css("display", "none")
  ;
}, 6000);

let password1, password2;

//unterscheidung zwischen Registrierung und Passwort zurücksetzen, weil verschiedene Passwortfelder
function scannePasswoerter() {
  if ($("#fourth").is(":visible")) {
    (password1 = document.getElementById("passwordReset1")),
      (password2 = document.getElementById("passwordReset2"));
  } else {
    (password1 = document.getElementById("passwordRegister1")),
      (password2 = document.getElementById("passwordRegister2"));
  }
  password1.onchange = validatePassword;
  password2.onkeyup = validatePassword;
}

//gucken ob passwörter gleich sind 
function validatePassword() {
  if (password1.value != password2.value) {
    password2.setCustomValidity("Passwörter stimmen nicht überein!");
  } else {
    password2.setCustomValidity("");
  }
}


  //urlParams von navbar.js
  if(!urlParams.has('backToLogin')) {
    if(urlParams.has('resetPassword')) {
      $("#ohneFourth").css("display", "none");
      $("#fourth").css("display", "block");
    }else {
      $("#ohneFourth").css("display", "block");
      $("#fourth").css("display", "none");
    }
  }


