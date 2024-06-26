<?php

namespace Models;

use Core\Model;

class User extends Model
{
  public function getUserData()
  {
    // EJEMPLO: Supongamos que obtenemos datos de la base de datos
    return [
      'name' => 'John Doe',
      'email' => 'john@example.com'
    ];
  }
}
