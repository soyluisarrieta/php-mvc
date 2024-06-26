<?php
// Configuración de la aplicación
define('APP_NAME', 'MiAplicacion');
define('APP_DEBUG', true);
define('APP_URL', 'http://localhost/php-mvc/public');
define('APP_TIMEZONE', 'America/Bogota');
define('APP_LOCALE', 'es');

// Configuración de la base de datos
define('DB_CONNECTION', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_PORT', '3306');
define('DB_DATABASE', 'mi_base_de_datos');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// Configuración de URLs y rutas
define('BASE_URL', 'http://localhost/php-mvc');
define('BASE_PATH', dirname(__FILE__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('UPLOADS_PATH', BASE_PATH . '/uploads');

// Configuración de correo electrónico
define('MAIL_MAILER', 'log');
define('MAIL_HOST', 'smtp.example.com');
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'usuario@example.com');
define('MAIL_PASSWORD', 'tu_contraseña');
define('MAIL_ENCRYPTION', 'tu_contraseña');
define('MAIL_FROM_ADDRESS', 'noreply@example.com');
define('MAIL_FROM_NAME', 'tu_contraseña');

// Configuración de sesión
define('SESSION_LIFETIME', 3600);

// Configuración de errores y registros
define('ERROR_REPORTING_LEVEL', E_ALL);
define('LOG_ERRORS', true);
define('LOG_ERRORS_PATH', BASE_PATH . '/logs/errors.log');