<?php
	namespace App\Controller;

	use Core\Controller\Controller;

	class HomeController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Post');
		}

		/**
		* Home Page
		* Template Default
		* View home index
		*/

		public function index(){
			$posts = $this->Post->last(2);

			$title = $this->pageTitle('Accueil');

			$this->render('home.index', compact('posts', 'title'));
		}

	}


