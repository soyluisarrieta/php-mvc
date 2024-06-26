<?php
spl_autoload_register(function ($className) {
  // Convertir el nombre de la clase en la ruta del archivo
  $className = str_replace("\\", "/", $className);
  $file = __DIR__ . "/../" . $className . ".php";

  // Verificar si el archivo existe
  if (file_exists($file)) {
    require_once $file;
  }
});
