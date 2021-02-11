$(document).ready(function () {
  InicializarRegistro();
});

function InicializarRegistro() {
  InicializarLocalStorage();
  InicializarEventos();
}

function InicializarLocalStorage() {
  var createedit = $("#inputhiddenaction").val();
  localStorage.clear();
  if (createedit != "edit") {
    localStorage.setItem("checkinputname", "vacio");
    localStorage.setItem("checkinputsurname", "vacio");
    localStorage.setItem("checkinputemail", "vacio");
    localStorage.setItem("checkinputphone", "vacio");
    localStorage.setItem("checkinputpw", "vacio");
    localStorage.setItem("checkinputpw2", "vacio");
    localStorage.setItem("checkinputaddress", "vacio");
    localStorage.setItem("checkautonomia", "vacio");
    localStorage.setItem("checkprovincias", "vacio");
    localStorage.setItem("checkpoblacion", "vacio");
    EventosFormularioCrear();
  } else {
    var inputsform = document.querySelectorAll("input");
    inputsform.forEach((val) => {
      localStorage.setItem("check" + val.name, "ok");
    });
    EventosFormularioEditar();
  }
   
}

function InicializarEventos() {
  $("#autonomia").change(function () {
    getProvincias();
  });

  $("#provincias").change(function () {
    getPoblacion();
  });

  $('[data-toggle="tooltip"]').tooltip({ trigger: "click" });

  $("#btn-send").on({
    click: function (e) {
      var control = verificarForm();
      if (control == "On") {
        event.preventDefault();
        $("[data-toggle='tooltip']").on("shown.bs.tooltip", function () {
          setTimeout(function () {
            $("[data-toggle='tooltip']").tooltip("hide");
          }, 2000);
        });
      } else {
        $('[data-toggle="tooltip"]').tooltip("dispose");
      }
    },
    mouseleave: function () {
      $('[data-toggle="tooltip"]').tooltip("hide");
    },
  });
}

function CargaLocalStorage() {
  const EXPRTELF = /^(6|7|8|9)[0-9]{8}$/;
  const EXPREMAIL = /^[a-zA-ZñÑ0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
  $("#btn-send").attr("control", "On");
  getComunidades();

  var inputname = $("#inputname");
  checkLetras(inputname[0]);

  var inputsurname = $("#inputsurname");
  checkLetras(inputsurname[0]);

  var inputemail = $("#inputemail");
  checkLetras(inputemail[0], EXPREMAIL);

  var inputphone = $("#inputphone");
  checkLetras(inputphone[0], EXPRTELF);

  var inputpw = $("#inputpw");
  checkLetras(inputpw[0]);

  var inputpw2 = $("#inputpw2");
  checkLetras(inputpw2[0]);

  var inputaddress = $("#inputaddress");
  checkLetras(inputaddress[0]);
} 

function EventosFormularioCrear() {
  const EXPRTEXT = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
  const EXPRTELF = /^(6|7|8|9)[0-9]{8}$/;
  const EXPREMAIL = /^[a-zA-ZñÑ0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
  const EXPRZIPCODE = /^[0-9]{5}$/;

  $('#inputname').on('blur', function () {
    checkLetras(this, EXPRTEXT);
  });
  $('#inputsurname').on('blur', function () {
    checkLetras(this, EXPRTEXT);
  });
  $('#inputemail').on('blur', function () {
    checkLetras(this, EXPREMAIL);
  });
  $('#inputphone').on('blur', function () {
    checkLetras(this, EXPRTELF);
  });
  $('#inputpw').on('blur', function () {
    checkLetras(this);
  });
  $('#inputpw2').on('blur', function () {
    checkLetras(this);
  });
  $('#inputaddress').on('blur', function () {
    checkLetras(this);
  });
  $("#autonomia").on("change", function () {
    checkLetras(this);
  });
  $("#provincias").on("change", function () {
    checkLetras(this);
  });
  $("#poblacion").on("change", function () {
    checkLetras(this);
  });
}

function EventosFormularioEditar() {
  const EXPRTEXT = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;
  const EXPRTELF = /^(6|7|8|9)[0-9]{8}$/;
  const EXPREMAIL = /^[a-zA-ZñÑ0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
  const EXPRZIPCODE = /^[0-9]{5}$/;

  $("#inputname").on("change", function () {
    checkLetras(this, EXPRTEXT);
  });
  $("#inputsurname").on("change", function () {
    checkLetras(this, EXPRTEXT);
  });
  $("#inputemail").on("change", function () {
    checkLetras(this, EXPREMAIL);
  });
  $("#inputphone").on("change", function () {
    checkLetras(this, EXPRTELF);
  });
  $("#inputpw").on("change", function () {
    checkLetras(this);
  });
  $("#inputpw2").on("change", function () {
    checkLetras(this);
  });
  $("#inputaddress").on("change", function () {
    checkLetras(this);
  });
  $("#autonomia").on("change", function () {
    checkLetras(this);
  });
  $("#provincias").on("change", function () {
    checkLetras(this);
  });
  $("#poblacion").on("change", function () {
    checkLetras(this);
  });
}

function checkLetras(input, expr) {
  $("#btn-send").attr('control', 'On');
  var data = input.value;
  //Variable de control para el valor del input.
  var check = true;
  var inputId = input.id;
  //Se verifica el contenido de la varible data, que almacena el valor de un input del
  //formulario y se le asigna un estado. Se almacena el estado del input en la variable
  //check, para crear un mensaje dependiente del error, y en el localstorage para llevar
  //un control del estado de cada campo. Hasta que todos los campos no tengan un OK en
  //el localstorage no se enviará el formulario al servidor.
  if (data == "") {
    check = "vacio";
    localStorage.setItem("check" + inputId, "vacio");
    if (inputId == "autonomia") {
      localStorage.setItem("checkprovincias", "vacio");
      localStorage.setItem("checkpoblacion", "vacio");
      $("#provincias").attr("disabled", "disabled");
      $("#provincias").css("background-color", "#e9ecef");
      $("#poblacion").attr("disabled", "disabled");
      $("#poblacion").css("background-color", "#e9ecef");
    } else if (inputId == "provincias") {
      localStorage.setItem("checkpoblacion", "vacio");
    }
  } else if (data.match(expr)) {
    check = "ok";
    localStorage.setItem("check" + inputId, "ok");
  } else {
    check = "notok";
    localStorage.setItem("check" + inputId, "notok");
    };

  var inputnombre = $("#" + inputId).attr("nombre");
  if (check == "vacio") {
    //Se borra el mensaje del error anterior, si lo hubiera.
    $(".mensajeError" + inputId).remove();
    $('.mensajeError').remove();
    //Se le cambia el color al borde del input que tiene el error.
    $("#" + inputId).css("border-color", "red");
    //Se le añade un mensaje con el error actual.
    $("#" + inputId).after(
      '<p class="mensajeError' +
        inputId +
        '" style="color:red">Por favor, rellene el campo ' +
        inputnombre +
        ".</p>"
    );
  } else if (check == "notok") {
    $(".mensajeError" + inputId).remove();
    $('.mensajeError').remove();
    $("#" + inputId).css("border-color", "red");
    $("#" + inputId).after(
      '<p class="mensajeError' +
        inputId +
        '" style="color: red ">El campo ' +
        inputnombre +
        " es incorrecto.</p>"
    );
  } else {
    //Si todo está ok, se le devuelve el color al borde del input y se borra el mensaje
    //de error.
    $("#" + inputId).css("border-color", "silver");
    $("#" + inputId).css("background-color", "white");
    $(".mensajeError" + inputId).remove();
    $(".mensajeError").remove();
    if (inputId == "inputemail") {
      ComprobarEmail(data);
    } else if (inputId == "inputpw2") {
      checkPassword($("#inputpw").val(), $("#inputpw2").val());
    } else {
      verificarForm();
    }
  };
}

function checkPassword(pass, passConf) {
  if (pass !== passConf) {
    $(".mensajeError").remove();
    $(".mensajeErrorinputpw2").remove();
    $("#inputpw2").css("border-color", "red");
    $("#inputpw2").val("");
    $("#inputpw2").after(
      '<p class="mensajeError" style="color:red"> Confirmación de password incorrecto.</p>'
    );
    localStorage.setItem("checkpass", "not ok");
  } else {
    $("#inputpw2").css("border-color", "silver");
    $("#inputpw2").css("background-color", "white");
    $(".mensajeError").remove();
    localStorage.setItem("checkpass", "ok");
    verificarForm();
  }
}

function ComprobarEmail(email) {
  var email = email; 
  var obj = {
    url: "http://trivadog.mipropia.com/trivadog/public/registrousuario/checkemail",
    data: email, 
  };
  
  $('.mensajeError').remove();
  localStorage.setItem("checkemail", "ok");
  AjaxGetItem(obj);
}

function AjaxGetItem(obj) {
  var url = obj.url + "/" + obj.data;
  $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
  }).done(function (result) {
      console.log(result);
      if (result.content != "vacio") {
        $('.mensajeError').remove();
        $('#inputemail').after('<p class="mensajeError" style="color:red">El email ' + result.email + ' ya existe.</p>');
        $('#inputemail').css("border-color", "red");
        localStorage.setItem("checkemail", "notok");
      }
  });
}

function verificarForm() {
  var control = "";
  if (check =! 'edit') {
    checknombre = localStorage.getItem("checkinputname");
    checkapellidos = localStorage.getItem("checkinputsurname");
    checkdireccion = localStorage.getItem("checkinputaddress");
    checktelefono = localStorage.getItem("checkinputphone");
    checkemail = localStorage.getItem("checkinputemail");
    checkpass = localStorage.getItem("checkpass");
    checkautonomia = localStorage.getItem("checkautonomia");
    checkprovincias = localStorage.getItem("checkprovincias");
    checkpoblacion = localStorage.getItem("checkpoblacion");

    if (
      checknombre == "ok" &&
      checkapellidos == "ok" &&
      checkdireccion == "ok" &&
      checktelefono == "ok" &&
      checkemail == "ok" &&
      checkpass == "ok" &&
      checkautonomia == "ok" &&
      checkprovincias == "ok" &&
      checkpoblacion == "ok"
    ) {
      control = "Off";
    }
  } else {
    for (var i = 0, len = localStorage.length; i < len; i++) {
      var checkinput = localStorage.getItem(localStorage.key(i));
      if (checkinput != "ok") {
        control = "On";
        return control;
      } else {
        control = "Off";
      }
    }
    return control;
  }
}





















