# legalizacion
pruebas basicas para git y creacion de portal para legalizacion de gastos contables.

Basicamente el objetivo principal de este proyecto es crear un pequeño micrositio para centralizar la generacion y gestion de formatos de contabilidad para gastos.

Primero se publica un sitio simplemente operativo y cuando ya este minimamente funcional, comenzare a portarlo a MVC.

Dentro de los logs del commit se encontrara detalladamente toda la evolucion de este proyecto, desde su primitivo html inicial hasta donde pueda crecer.

# Idea del proyecto
El objetivo de este proyecto (ademas de servir como practica para acostumbrarme a git y github), es desarrollar una aplicacion que permita gestionar los documentos que normalmente se usan en una empresa para legalizar gastos.  Inicialmente busco que los usuarios se autentiquen, indiquen el tipo de gasto que desean legalizar, indiquen la fecha y esta informacion sea registrada en MYSql, junto con el numero de consecutivo de esa legalizacion.   Ya el usuario podra tomar su formato, registrarle el consecutivo y realizar su proceso.

En esta fase funcional, buscare que al momento de generar el consecutivo, puedan descargar un documento cuyo nombre incluya ese consecutivo.  Asi ya no dependerian de tener la plantilla.

Durante todo ese proceso buscare ir mejorando el codigo, para pasar de un simple y burdo html+php(burdo) estructurado, a tener un php optimo, en MVC.  Lo ideal habria sido arrancar de una vez por MVC, pero preferi primero tener algo funcional, sobre el cual ir puliendo y mejorando en la marcha, en vez de esperar mientras asimilo la teoria del MVC, ya que el mundo de la programacion es un universo nuevo para mi.

#TO DO
[IMPORTANTE] Conectar los iconos a la base de datos

[IMPORTANTE] Desde la ejecucion de un icono, confirmar si desea registrar el gasto y escribirlo en la base de datos.

[IMPORTANTE] Mostrar el resultado del ultimo dato registrado.

[IMPORTANTE] Publicar un archivo de texto que lleve el nombre del gasto registrado, para poder descargarlo.  Se toma un archivo base existente en el servidor y se copia con el nombre del gasto registrado.

[IMPORTANTE] Lograr que el date picker funcione en firefox.  Posiblemente sea necesario manejarlo por javascript

[OPCIONAL] Seria interesante que el usuario tenga la opcion de decidir si descargar el archivo directamente o lo envia a su cuenta de correo registrada.
