$(document).ready(function () {
	InicializarValoracion();

});

function InicializarValoracion() {
	EventosModal();
}

function EventosModal() {
	
	$('#star6').click( function () {
		addRating(6);
	});

	$("#star7").click(function () {
    addRating(7);
	});
	
	$("#star8").click(function () {
    addRating(8);
	});
	
	$("#star9").click(function () {
    addRating(9);
	});
	
	$("#star10").click(function () {
    addRating(10);
	});
	
	$("#star11").click(function () {
    addPetsRating(11);
	});
	
	$("#star12").click(function () {
    addPetsRating(12);
	});
	
	$("#star13").click(function () {
    addPetsRating(13);
	});
	
	$("#star14").click(function () {
    addPetsRating(14);
	});
	
	$("#star15").click(function () {
    addPetsRating(15);
  });
}

function addRating(num_star) {
	//es necesario inicializar la i a 6, porque en la página ya puede haber hasta 5 estrellas
	//de la valoración de la noticia, sin contar las que vayamos a darle en el comentario.
	for (var i = 6; i <= 10; i++) {
		$("#star" + i).addClass("fa fa-star-o");
	}

	for (var i = 6; i <= num_star; i++) {
		$("#star" + i).removeClass("fa fa-star-o");
		$("#star" + i).addClass("fa fa-star checked");
	}

	$("#rating-input").val(num_star - 5);
}

function addPetsRating(num_star) {
  //es necesario inicializar la i a 6, porque en la página ya puede haber hasta 5 estrellas
  //de la valoración de la noticia, sin contar las que vayamos a darle en el comentario.
  for (var i = 11; i <= 15; i++) {
    $("#star" + i).addClass("fa fa-star-o");
  }

  for (var i = 11; i <= num_star; i++) {
    $("#star" + i).removeClass("fa fa-star-o");
    $("#star" + i).addClass("fa fa-star checked");
  }

  $("#rating-pets-input").val(num_star - 10);
}

/* ----- para añadir las estrellas -----*/
/* <div class="m-3">
	<div class="card mx-auto my-1 p-3 w-50">
		<form action="insertar" method="post">
			<input type="hidden" name="id" value="<?php echo $_GET["id_noticia"];?>">
			<div class="form-group">
				<label for="exampleInputtext1">Comentario</label>
				<input name="comentario" type="text" class="form-control" id="exampleInputtext1">

					<label for="exampleInputtext1">Valoración</label>

					<span class="fa fa-star-o checked" id="star6" onclick="add(6)"></span>
					<span class="fa fa-star-o checked" id="star7" onclick="add(7)"></span>
  				<span class="fa fa-star-o checked" id="star8" onclick="add(8)"></span>
  				<span class="fa fa-star-o checked" id="star9" onclick="add(9)"></span>
  				<span class="fa fa-star-o checked" id="star10" onclick="add(10)"></span>
					<input type="hidden" value="" id="inputstar" name="inputstar">
			</div>
			<input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
		</form>
	</div>
</div> */
/* <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="<?php echo URL_BASE . 'js/valoracion.js';?>"></script>  */