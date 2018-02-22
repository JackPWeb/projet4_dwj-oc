<?php

	namespace App\Controller;

	use Core\Auth\DBAuth;
	use Core\HTML\MaterializeForm;
	use \App;

	class UsersController extends AppController{

		protected $template = 'login';

		public function login(){
			$title = $this->pageTitle('Connexion');
			$errors = false;

			if (!empty($_POST)) {
				$auth = new DBAuth(App::getInstance()->getDb());

				if ($auth->login(htmlspecialchars(trim($_POST['username'])), htmlspecialchars(trim($_POST['password'])))) {
					header('Location: index.php?p=admin.home.index');
				}
				else{
					$errors = true;
				}
			}

			$form = new MaterializeForm($_POST);
			$this->render('users.login', compact('title', 'form', 'errors'));
			
		}

		public function logout(){
			$auth = new DBAuth(App::getInstance()->getDb());
			$auth->logout();

			header('Location: index.php');
		}
	}