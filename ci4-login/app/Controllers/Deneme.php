<?php
namespace App\Controllers;
use App\Controllers\BaseController;

/**
 *
 */
class Deneme extends BaseController
{
    public function index()
    {
      echo password_hash('123456', PASSWORD_DEFAULT);
      echo "<br>";
      echo password_hash('123456', PASSWORD_DEFAULT);
    }
}



 ?>
