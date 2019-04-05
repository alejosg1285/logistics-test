### Configuración básica

Para configurar la conexión a la base de datos ingresar a la carpeta "Backend", dentro de la carpeta abrir el archivo .env, se deben modificar los datos de la conexión a mysql desde la línea 9 hasta la línea 14.

![](D:\Usuarios\alejandro.saa\Documents\pruebasphp\logistics\images\conf_mysql.png)



Una vez configurado la conexión a la base de datos usando la consola de comandos se usa el comando "php artisan migrate" para generar las tablas de la base de datos.

Usando la consola de comando subir el servidor que viene integrado con Laravel usando el comando "php artisan serve", por defecto el servidor corre por el puerto 8000, en un navegador web ingresar a la ruta http://localhost:8000/admin/login, al ingresar se despliega una ventana de login, para crear un nuevo usuario y poder acceder, se debe dar clic en el enlace "Register" debajo del formulario de autenticación.

![](D:\Usuarios\alejandro.saa\Documents\pruebasphp\logistics\images\login.png)