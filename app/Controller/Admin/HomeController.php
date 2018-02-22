<?php
	namespace App\Controller\Admin;

	use Core\HTML\MaterializeForm;


	class HomeController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Post');
			$this->loadModel('Comment');
		}

		public function index(){
			$totalComment = $this->Comment->count();
			$comments_signaled = $this->Comment->signaled();
			
			$totalPost = $this->Post->count();
			$posts = $this->Post->allPrivate();

			$title = $this->pageTitle('Cockpit');

			$this->render('admin.home.index', compact('totalComment', 'comments_signaled', 'totalPost', 'posts', 'title'));
		}
	}