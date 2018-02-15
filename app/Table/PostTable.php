<?php
	namespace App\Table;

	use Core\Table\Table;

	/**
	* 
	*/
	class PostTable extends Table {
		
		protected $table = 'posts';

		/**
		* Recupere tous les articles
		*/

		public function all(){
		    return $this->query("SELECT * FROM posts ORDER BY title DESC");
	  	}

		/**
		* Recupere les x derniers articles
		*/

		public function last($number){
		    return $this->query("SELECT * FROM posts WHERE posted = '1' ORDER BY title DESC LIMIT $number");
	  	}
	
	}
