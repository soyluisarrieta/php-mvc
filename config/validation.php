<?php

/**
 * Comprueba si una fecha es válida.
 *
 * @param string $date La fecha en formato 'YYYY-MM-DD'.
 * @return bool True si la fecha es válida, False en caso contrario.
 */
function is_date_valid(string $date)
{
  $date_valid = true;

  if (!empty($date)) {
    if (preg_match("/\d{4}-\d{2}-\d{2}/", $date) && DateTime::createFromFormat('Y-m-d', $date)) {
      [$year, $month, $day] = explode('-', $date);
      $date_valid  = checkdate($month, $day, $year);
    } else {
      $date_valid = false;
    }
  }

  return $date_valid;
}

/**
 * Comprueba si una fecha de cumpleaños es válida.
 * 
 * Una fecha de cumpleaños válida debe ser una fecha válida en el formato 'YYYY-MM-DD' 
 * y el año debe ser menor o igual al año actual.
 *
 * @param string $date La fecha de cumpleaños en formato 'YYYY-MM-DD'.
 * @return bool True si la fecha de cumpleaños es válida, False en caso contrario.
 */
function is_birthday_valid($date)
{
  if (is_date_valid($date)) {
    [$year] = explode('-', $date);
    return $year <= date('Y');
  }

  return false;
}
