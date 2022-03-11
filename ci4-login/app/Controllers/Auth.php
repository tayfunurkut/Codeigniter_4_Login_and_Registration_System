<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Auth extends BaseController
{
	public function index()
	{
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			// code...
			// LOGIN OPERATION
			$rules = $this->validate([
				'email'			=> 'required|min_length[3]|max_length[30]|valid_email|is_not_unique[users.email]',
				'password'	=> 'required|min_length[5]|max_length[40]',
			]);
			if (! $rules) {

					echo view('layouts/header');
					echo view('login', ['errors' => $this->validator]);
					echo view('layouts/footer');
			}else {
				// LOGIN CONTROL
				$data = [
					'email' => $this->request->getPost('email'),
					'password' => md5($this->request->getPost('password'))
				];
				$model = new UsersModel();
				$user = $model->where('email', $data['email'])->first();
				if ($user['password'] == $data['password']) {
					$session = session();
					$sessionData = [
						'id' => $user['id'],
						'first_name' => $user['first_name'],
						'last_name' => $user['last_name'],
						'email' => $user['email'],
						'isLoggedIn' => true
					];
					$session->set($sessionData);
					echo view('layouts/header');
					echo view('dashboard');
					echo view('layouts/footer');
				}else {
					return redirect()->to('/');
				}
			}


		}else {
			$data = [];

			echo view('layouts/header', $data);
			echo view('login');
			echo view('layouts/footer');
		}


	}



// REGISTER CONTROLLER FOR NEW USERS

	public function register()
	{

			helper(['form']);
			$data = [];
		if ($this->request->getMethod() == 'post') {
			// start to validation and save in database
			$userValid = $this->validate([
				'first_name' => 'required|min_length[3]|max_length[30]',
				'last_name' => 'required|min_length[3]|max_length[30]',
				'email'			=> 'required|min_length[3]|max_length[30]|valid_email',
				'password'	=> 'required|min_length[5]|max_length[40]',
				'confpassword' => 'matches[password]'
			]);
			if (! $userValid) {
				echo view('layouts/header.php');
				echo view('register', ['errors' => $this->validator]);
				echo view('layouts/footer.php');
			}else {
				// insert to database new user
				$model = new UsersModel();

				$data = [
					'first_name' => $this->request->getPost('first_name'),
					'last_name' => $this->request->getPost('last_name'),
					'email' => $this->request->getPost('email'),
					'password' => md5($this->request->getPost('password'))

				];

				$insert = $model->save($data);
				if ($insert) {
						$session = session();
						$session->setFlashdata('success', 'Insert is successful');
						return redirect()->to('/');
				}

			}

		}else {


			echo view('layouts/header', $data);
			echo view('register', $data);
			echo view('layouts/footer');
		}
	}




}
