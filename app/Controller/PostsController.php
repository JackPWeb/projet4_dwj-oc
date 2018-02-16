<?php
	namespace App\Controller;

	use Core\Controller\Controller;

	class PostsController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Post');
		}

		/**
		* Chapters Page
		* Template Default
		* View Posts index
		*/

		public function index(){
			$posts = $this->Post->all();

			$title = $this->pageTitle('Chapitres');

			$this->render('posts.index', compact('posts', 'title'));
		}

		/**
		* Single chapter Page
		* Template Default
		* View Posts Single
		*/

		public function single(){
			$post = $this->Post->find($_GET['id']);

			$title = $this->pageTitle($post->title);

			$this->render('posts.single', compact('post', 'title'));
		}

	}


