<?php
	namespace App\Controller;

	use Core\Controller\Controller;

	class CommentsController extends AppController{

		public function __construct(){
			parent::__construct();

			$this->loadModel('Comment');
		}
		
	}