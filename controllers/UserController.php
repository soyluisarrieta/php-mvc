<?php

namespace Controllers;

use Core\Controller;
use Models\User;

class UserController extends Controller
{
  public function profile()
  {
    $userModel = new User();
    $userData = $userModel->getUserData();

    $this->view('user/profile', ['user' => $userData]);
  }
}
