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
			$posts = $this->Post->allPublic();
			$totalPost = $this->Post->countPublicPosts();

			$title = $this->pageTitle('Chapitres');

			$this->render('posts.index', compact('posts', 'totalPost', 'title'));
		}

		/**
		* Single chapter Page
		* Template Default
		* View Posts Single
		*/

		public function single(){
			$post = $this->Post->find($_GET['id']);

			$prev = $this->Post->prevPost(htmlspecialchars($_GET['id']));
			$next = $this->Post->nextPost(htmlspecialchars($_GET['id']));

			$title = $this->pageTitle($post->title);

			$this->render('posts.single', compact('post', 'title', 'prev', 'next'));
		}

	}


