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

		public function delete(){
			if (!empty($_POST)) {
				if (isset($_POST['signaled_id'])) {
					$this->Comment->delete($_POST['signaled_id']);
				}
				elseif (isset($_POST['unposted_id'])) {
					$this->Post->delete($_POST['unposted_id']);
				}

				header('Location: index.php?p=admin.home.index');
			}	
		}

		public function deleteReport(){
			if (!empty($_POST)) {
				if (isset($_POST['cancel-signaled_id'])) {
					$this->Comment->cancelReport();
				}
				header('Location: index.php?p=admin.home.index');
			}
		}

		public function publishChapter(){
			if (!empty($_POST)) {
				if (isset($_POST['publish-chapter_id'])) {
					$this->Post->publish();
				}
				header('Location: index.php?p=admin.home.index');
			}
		}
	}