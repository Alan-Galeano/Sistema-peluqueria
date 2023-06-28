# Proyecto Sistema Registro de ingresos
***
Un sistema básico que lleva el control de los ingresos y gastos generados en una iglesia, cuenta con dos modulos, registros y usuarios con Login y Logout.
***
Tambien cuenta con un pequeño sistema de roles para restringir el accesos de ciertos usuarios al modulo de Usuarios y tambien se pueden restringir/ocultar ciertas acciones
segun desee el Administrador.

## Instalación
***
Para Instalar realizar/ejecutar los siguientes comandos y acciones:
- Clonar el repositorio del proyecto.
- Ejecutar el comando "composer install" para instalar las dependencias del proyecto.
- Ejecutar el comando "composer dump-autoload" para generar el archivo de autocarga de clases.
- Configurar el archivo ".env" con la información de conexión a la base de datos y otras configuraciones específicas.
- Ejecutar el comando "php artisan migrate --seed" para realizar las migraciones de la base de datos y ejecutar los seeders     (opcionalmente, para poblar la base de datos con datos de prueba).
Recuerda que también es importante asegurarse de tener instalado PHP, Composer y Laravel correctamente en tu entorno antes de ejecutar estos pasos.

## Templates
***
Se uso AdminLTE para el diseño general del sistema.
