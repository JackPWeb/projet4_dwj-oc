<?php
	namespace App\Controller\Admin;

	use Core\HTML\MaterializeForm;


	class PostsController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Post');
		}

		public function index(){
			$posts = $this->Post->all();

			$title = $this->pageTitle('Chapitres');

			$this->render('admin.posts.index', compact('posts', 'title'));
		}
	}
