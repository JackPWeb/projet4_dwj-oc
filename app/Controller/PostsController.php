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

	}


