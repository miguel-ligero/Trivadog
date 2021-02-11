$(document).ready(function () {
  InicializarMultimedia();
});

function InicializarMultimedia() {
  ContarImagenes();
  EventosModal();
  EventosPrincipal();
}

function EventosModal() {
  var pictureid;
  var pictureold;
  
  $("button[id^=btn-edit-]").click(function (e) {
    pictureid = e.target.getAttribute("myid");
    $("#modalpictureid").val(pictureid);
    pictureold = $("img[myid='" + pictureid + "']").attr("src");
  });

  $("#btn-add").click(function (e) {
    pictureid = e.target.getAttribute("myid");
    $("#modalpictureid").val(pictureid);
    pictureold = $("#newimg").attr("src");
  });

  $("#file").change(function () {
    PrevisualizarImagen(this, pictureid);
  });

  $("#btnsubmit").click(function () {
    HabilitarSubmit();
  });

  $('#btncancelsubmit').click(function () {
    if (pictureid == "") {
      $("#newimg").attr("src", pictureold);
    } else {
      $("img[myid='" + pictureid + "']").attr("src", pictureold);
    }
  });
  
}

//Función para limitar el número de imagenes
function ContarImagenes() {
  //Seleccionamos todos los elementos de la clase count-img, y contamos cuantos hay
  var imgcount = $(".count-img").toArray().length;
  if (imgcount < 5) {
    $("#addblock").prepend(
      '<div class="row ml-3 my-2 result-hist"><div class="col-4 p-2"><img id="newimg" src="http://trivadog.mipropia.com/trivadog/public/img/ico/dog_shepherd.ico" class="center-img" style="width:8rem; height:5rem"></div>           <div class="col-1"></div><div class="col-2 my-auto" align="center"></div><div class="col-2 my-auto" align="center"></div><div class="col-2 my-auto" align="center"><button id="btn-add" type="button" myid="" class="btn btn-primary btn-editar btn-sm my-3" data-toggle="modal" data-target="#imgmodal">Añadir</button></div></div>'
    );
  }
}

//Función para almacenar y gestionar las imagenes antes de ser guardadas
function PrevisualizarImagen(input, pictureid) {
  //Comprobamos si hay un archivo
  if (input.files && input.files[0]) {
    //Instanciamos un objeto de la clase 'FileReader()', para manejar archivos
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function (e) {
      if (pictureid == "") {
        $("#newimg").attr("src", e.target.result);
      } else {
        $("img[myid='" + pictureid + "']").attr("src", e.target.result);
      }
      var files = input.files[0];
      $("#img").val(files);
    };
  }
}

//Función para controlar el envió de la imagen
function HabilitarSubmit() {
  var checkimg = ComprobarImagen(this);
  if (checkimg == true) {
    $("#imgmodal").modal("hide");
    $("#formimg").submit();
  } else if (checkimg == false) {
    $("#formimg").submit(function (e) {
      event.preventDefault();
    });
  }
}

//Función para comprobar si se ha seleccionado una imagen
function ComprobarImagen() {
  var archivo = $("#file").val();
  if (archivo == "") {
    alert("Seleccione un archivo");
    return false;
  } else {
    return true;
  }
}

//Función que cambia el checkbox de la imagen principal
function EventosPrincipal() {
  $(':checkbox').change(function (e) {
    var check = e.target.id;
    var checked = check.slice(9);
    $(":checkbox").each(function () {
      var element = $(this).attr('id');
      if (element != check) {
        $(this).prop('checked', false);
        $(this).val(0);
      } else {
        $(this).prop('checked', true);
        $(this).val(1);
      }
    })
    var roomid = $('#room').val();
    changeMain(checked, roomid);
    
  });

  //Función que a través de una petición AJAX actualiza en la base de datos multimedia 
  //la imagen principal
  function changeMain(checked, roomid) {
    var url = "/multimedia/principal";
    $.ajax({
      method: "POST",
      url: url,
      datatype: 'json',
      data: { id: checked, idHabitacion: roomid },
    })
      .done(function (result) {
        alert(result.msg);
      });
  }
}