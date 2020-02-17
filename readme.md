ApiRest del proyecto de PoliJobs

1. Clonar el repositorio
2. Ejecutar composer install
3. Modificar el .env con las respectivas credenciales de la base de datos
4. Ejecutar php bin/console make:migration
5. Ejecutar php bin/console doctrine:migrations:migrate
6. Correr el proyecto con php -S 127.0.0.1:8000 -t public/
6. Para ver las rutas disponibles php bin/console debug:router
