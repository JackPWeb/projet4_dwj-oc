<?php
	namespace App\Controller;

	use Core\Controller\Controller;

	class PostsController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Post');
		}

		/**
		* Home Page
		* Template Default
		* View Posts index
		*/

		public function index(){
			$posts = $this->Post->last(2);

			$title = $this->pageTitle('Accueil');

			$this->render('posts.index', compact('posts', 'title'));
		}

	}


