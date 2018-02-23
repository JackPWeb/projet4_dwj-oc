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

		public function delete(){
			if (!empty($_POST)) {
				$result = $this->Post->delete($_POST['id']);

				return $this->index();
			}
		}

		public function add(){
			if (!empty($_POST)) {
				$result = $this->Post->create([
					'title' => $_POST['title'], 
					'content' => $_POST['content'],
					'posted' => isset($_POST['status']) ? "1" : "0",

					'image_featured' => $_FILES['image']['name']
				]);

				if ($result) {
					
					$imagePath = ROOT . '/public/img/chapitres/' . basename($_FILES['image']['name']);
					move_uploaded_file($_FILES['image']["tmp_name"], $imagePath);

					return $this->index();
				}
			}

			$form = new MaterializeForm($_POST);

			$title = $this->pageTitle('Ajouter');

			$this->render('admin.posts.edit', compact('form', 'title'));
		}

		public function edit(){
			if (!empty($_POST)) {
				$imageFiles = $_FILES['image']['name'];
				$imagePath = ROOT . '/public/img/chapitres/' . basename($_FILES['image']['name']);

				$result = $this->Post->update($_GET['id'], [
					'title' => $_POST['title'], 
					'content' => $_POST['content'],
					'posted' => isset($_POST['status']) ? "1" : "0",
				]);
				
				if (!empty($imageFiles)) {
					$image = $this->Post->update($_GET['id'], [
						'image_featured' => $imageFiles
					]);

					move_uploaded_file($_FILES['image']["tmp_name"], $imagePath);
					return $this->index();
				}
				
				if ($result) {
					return $this->index();
				}
			}

			$post = $this->Post->test($_GET['id']);

			$form = new MaterializeForm($post);

			$title = $this->pageTitle('Editer');

			$this->render('admin.posts.edit', compact('post', 'form', 'title'));
		}
	}
