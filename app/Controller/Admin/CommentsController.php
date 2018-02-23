<?php
	namespace App\Controller\Admin;

	use Core\HTML\MaterializeForm;


	class CommentsController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Comment');
		}

		public function index(){
			$commentParPage = 3;

			$totalCommentReq = $this->Comment->count();
			$totalComment = $totalCommentReq[0]->nbTotal;

			$pagesTotales = ceil($totalComment/$commentParPage);

			if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales) {
				$_GET['page'] = intval($_GET['page']);
				$pageCourante = $_GET['page'];
			}else{
				$pageCourante = 1;
			}

			$depart = ($pageCourante-1)*$commentParPage;
			$limite = $depart .','. $commentParPage;

			$comments = $this->Comment->allCommentsByDate($limite);

			$title = $this->pageTitle('Commentaires');

			$this->render('admin.comments.index', compact('comments', 'title', 'pagesTotales', 'pageCourante'));
		}

		public function delete(){
			if (!empty($_POST)) {
				$result = $this->Comment->delete($_POST['id']);

				return $this->index();
			}
		}		
	}