<?php

/**
 * Imprime de forma legible los valores pasados y termina la ejecución del script.
 * 
 * @param mixed ...$args Valores a imprimir. Pueden ser uno o más argumentos.
 * @return void
 */
function dd(...$args)
{
  echo '<pre>';
  foreach ($args as $arg) {
    print_r($arg);
    echo '<br>';
  }
  echo '</pre>';
  die;
}
