var objBuscar;
 $(document).ready(function () {    
    InicialiceAutocomplete();
});

function InicialiceAutocomplete(){
    $('#auComplete').autocomplete({
        source: function (request, response) {                    
            $.ajax({
                url: "http://trivadog.mipropia.com/trivadog/public/aucomplete",                       
                method:"POST",
                data: {
                    texto: $('#auComplete').val()
                }
            })                   
            .done(function( result ) {
                response($.map(result.texto, function(item){
                    return {label: item.textobusqueda, value: item.textobusqueda, obj: item}
                }));    
            });
        },
        minLength: 3,
        select: function (event, ui) {
            objBuscar = ui.item.obj; 
            //StorageUpdate(this);
            InicializarFormulario();// home/index.twig
            $('#typehosting').val("");
        }
    });

    
}               

//Función que a través de una petición AJAX obtiene el listado de las CC.AA. de la BD geonames
function getComunidades(){
    var admin1code = $('#autonomia');
    admin1code.html('');
    admin1code.append(`<option value="">Seleccione comunidad</option>`)
    var poblacion = inicializarPoblacion();

    $.ajax({
        type: "POST",
        url: "/trivadog/public/listadoccaa",
        dataType: "json",
        success: function (response) {          
            $( response.listComunidades ).each(function( index ) {                
                admin1code.append(`<option value="${this.admin1code}">${this.name}</option>`)
            });
            admin1code.removeAttr('disabled');
        }
    });
}

//Función que a través de una petición AJAX obtiene el listado de las provincias de la BD geonames
function getProvincias(){
    var admin1code = $('#autonomia').val();
    var provincias = $('#provincias');
    provincias.html('');
    provincias.append(`<option value="">Seleccione Provincia</option>`)
    provincias.attr('disabled',"disabled");
    var poblacion = inicializarPoblacion();

    $.ajax({
        type: "POST",
        url: "http://trivadog.mipropia.com/trivadog/public/listadopro",
        data: {'admin1code': admin1code},
        dataType: "json",
        success: function (response) {          
            $( response.listProvincias ).each(function( index ) {                
                provincias.append(`<option value="${this.admin2code}">${this.name}</option>`)
            });
            if (localStorage.getItem("checkautonomia") == "ok") {
                provincias.removeAttr("disabled");
                provincias.css("background-color", "#FFF");
            }
            
        }
    });
}

//Función que a través de una petición AJAX obtiene el listado de las poblaciones de la BD geonames
function getPoblacion(){
    var admin1code = $('#autonomia').val();
    var admin2code = $('#provincias').val();
    var poblacion = inicializarPoblacion();
    $.ajax({
        type: "POST",
        url: "http://trivadog.mipropia.com/trivadog/public/listadopobla",
        data: {'admin1code': admin1code, 'admin2code': admin2code},
        dataType: "json",
        success: function (response) {
            poblacion.html("");
            $( response.listPoblacion ).each(function( index ) {
                poblacion.append(`<option value="${this.admin3code}">${this.name}</option>`)
            });
            if (localStorage.getItem("checkprovincias") == "ok") {
                poblacion.removeAttr("disabled");
                poblacion.css("background-color", "#FFF");
            }
            
        }
    });
}

function inicializarPoblacion(){
    var poblacion = $('#poblacion');
    poblacion.html('');
    poblacion.append(`<option value="">Seleccione Poblacion</option>`)
    poblacion.attr('disabled',"disabled");

    return poblacion;
}

