# TODO LIST APP

Esta es una aplicación de gestión de tareas realizado con Vue 3, Laravel 10 y Bootstrap. Contiene la autenticación de usuario y la gestión. Además envía un correo para notificación de registro, probado con Mailtrap.

La base de datos está hecho con MySQL

## Instalación

1. Clona el repositorio en tu carpeta: `git clone https://github.com/fmulet/todolist-fmulet.git`.
2. Instala las dependencias de PHP: `composer install`.
3. Copia el archivo de configuración `.env.example` y renómbralo a `.env`.
4. Configura la base de datos en el archivo `.env`.
5. Para la configuración del correo se utilizó mailtrap para hacer las pruebas. Para ello registrarse en mailtrap y hacer las configuraciones pertinentes en el .env (MAIL_MAILER,MAIL_HOST, MAIL_PORT, MAIL_USERNAME,MAIL_PASSWORD).
6. Instala las dependencias de JavaScript: `npm install`.

## Uso

1. Compila los assets de Vue: `npm run dev` o `npm run watch` para compilar en tiempo real.
2. Inicia el servidor de desarrollo de Laravel: `php artisan serve`.
3. Abre el navegador y accede a `http://localhost:8000`.
