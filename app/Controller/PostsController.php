<?php
	namespace App\Controller;

	use Core\Controller\Controller;
	use Core\Html\MaterializeForm;

	class PostsController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Post');
			$this->loadModel('Comment');
		}

		/**
		* Chapters Page
		* Template Default
		* View Posts index
		*/

		public function index(){
			$postParPage = 2;

			$totalPostReq = $this->Post->countPublicPosts();
			$totalPost = $totalPostReq[0]->nbPost;

			$pagesTotales = ceil($totalPost/$postParPage);

			if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
				$_GET['page'] = intval($_GET['page']);
				$pageCourante = $_GET['page'];
			}else{
				$pageCourante = 1;
			}

			$depart = ($pageCourante-1)*$postParPage;
			$limite = $depart .','. $postParPage;

			$posts = $this->Post->last($limite);
			$totalPostPublic = $this->Post->countPublicPosts();

			$title = $this->pageTitle('Chapitres');

			$this->render('posts.index', compact('posts', 'totalPostPublic', 'title', 'pagesTotales', 'pageCourante'));
		}

		/**
		* Single chapter Page
		* Template Default
		* View Posts Single
		*/

		public function single(){
			$post = $this->Post->find($_GET['id']);

			$commentParPage = 3;

			$nbComments = $this->Comment->countComments($_GET['id']);
			$totalComment = $nbComments->total;

			$pagesTotales = ceil($totalComment/$commentParPage);

			if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
				$_GET['page'] = intval($_GET['page']);
				$pageCourante = $_GET['page'];
			}else{
				$pageCourante = 1;
			}

			$depart = ($pageCourante-1)*$commentParPage;
			$limite = $depart .','. $commentParPage;

			$comments = $this->Comment->allCommentsByPost($_GET['id'], $limite);

			$prev = $this->Post->prevPost(htmlspecialchars($_GET['id']));
			$next = $this->Post->nextPost(htmlspecialchars($_GET['id']));

			$title = $this->pageTitle($post->title);

			if (!empty($_POST)) {

				$result = $this->Comment->create([
					'author' => htmlspecialchars(trim($_POST['author'])), 
					'comment' => htmlspecialchars(trim($_POST['comment'])),
					'post_id' => $_GET['id']
				]);

				if ($result) {
					header("Location: index.php?p=posts.single&id=" . $_GET['id']);
				}
			}

			$form = new MaterializeForm($_POST);

			$this->render('posts.single', compact('post', 'comments', 'nbComments', 'title', 'prev', 'next', 'form', 'pagesTotales', 'pageCourante'));
		}

		/**
		* Update Comment
		*/
		public function reported(){
			$result = $this->Comment->report();
		}

		

	}


