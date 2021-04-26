# Proyecto-Trivadog
Proyecto final bootcamp full stack web development

Este proyecto consiste en una web app para la busquedad de alojamientos con y para mascotas. 
Para su realización he utilizado una arquitectura MVC para estructurar el código y separar la parte del interfaz de usuario, de la lógica de negocio y de los datos. 
En el frontend, he utilizado html, Bootstrap 4, y jQuery, framework de JavaScript, para darle funcionalidad, como habilitar botones, o para realizar una primera validación de los datos introducidos en los formularios. Esta primera validación es solo para descargar de trabajo al servidor, ya que la validación definitiva se hace en el servidor.
También he utilizado peticiones Ajax para rellenar menus desplegable de forma dinámica, o comprobar que el email introducido en el formulario no esté ya dado de alta en el sistema.
Con todo esto, conseguimos que el diseño de la web sea totalmente responsive.
Para el backend, el lenguaje utilizado ha sido PHP, concretamente su framework Symfony. Para el almacenamiento de datos he utilizado una base de datos MySQL. Para el acceso a la base de datos he utilizado el ORM Doctrine. Para la parte visual, he utilizado el motor de plantillas twig.
La app consta de varias funcionalidades, las cuales explico a continuación:
  - He realizado un motor de busqueda de alojamientos, el cual tiene en cuenta varios parámetros como el destino, tipo de hospedaje, nº de huespedes, nº de mascotas y las fechas de entrada y salida. De todos, solo son obligatorios el destino, tipo de hospedaje y fechas.
  - He añadido un sistema de registro de usuarios/proveedores. Los usuarios tras registrarse, tienen la opción de modificar sus datos y consultar los hospedajes que han utilizado, asi como realizar valoraciones y comentarios de los mismos.
Por su parte los proveedores, además de poder modificar sus datos, pueden gestionar sus hospedajes, añadiendo, modificando o eliminando habitaciones, imagenes, servicios de las habitaciones, asi como gestionar las reservas.
  - He añadido un sistema de gestión de reservas, tanto por parte del cliente como por parte del proveedor del alojamiento (realización, modificación y cancelación).
  - Por último, he añadido un area administración. Este basicamente consta de un CRUD de las tablas relevantes para el mantenimiento de la web.
  
  Nota 1. Teniendo en cuenta las bases de la gestión de proyectos, he tenido que valorar calidad, costes y tiempo. Debido a que este proyecto es para demostrar lo que hemos aprendido durante el bootcamp, la opción de aumentar los costes y aumentar el tiempo limite no eran una opción, por lo que he tenido que sacrificar la calidad. Y puestos a sacrificar, he preferido sacrificar la parte del diseño, del cual no he quedado muy satisfecho, aunque sí de la maquetación y de la adaptación a los distintos tamaños de pantalla ("web responsive"). También faltaría refactorizar partes del código y eliminar código que se podría unificar con pequeñas modificaciones (fallo a la hora de planificar los requerimientos de la app). 
  
  Nota 2. La BBDD se encuentra en la carpeta .vscode/BaseDatos/trivadog.sql.

http://trivadog.mipropia.com/
