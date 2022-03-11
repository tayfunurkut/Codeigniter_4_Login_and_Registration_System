<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {
  if (session()->get('isLoggedIn') == true) {
    echo view('layouts/header');
    echo view('dashboard');
    echo view('layouts/footer');
  }else {
    return redirect()->to('/');
  }
  }
  public function logout()
  {
    session()->destroy();
    return redirect()->to('/');
  }
}


 ?>
