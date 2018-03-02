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

	  	public function find($id){
			return $this->query("SELECT * FROM posts WHERE id = ? AND posted= '1'", [$id], true);
		}

		public function findPost($id){
			return $this->query("SELECT * FROM posts WHERE id = ?", [$id], true);
		}

	  	/**
		* Recupere tous les articles uniquement public
		*/

		public function allPublic(){
		    return $this->query("SELECT * FROM posts WHERE posted= '1' ORDER BY title DESC");
	  	}

	  	/**
		* Recupere tous les articles uniquement priver
		*/

		public function allPrivate(){
		    return $this->query("SELECT * FROM posts WHERE posted= '0' ORDER BY title DESC");
	  	}

		/**
		* Recupere les x derniers articles
		*/

		public function last($number){
		    return $this->query("SELECT * FROM posts WHERE posted = '1' ORDER BY creation_date DESC LIMIT $number");
	  	}

	  	/**
		* Compte tous les articles public
		*/

		public function countPublicPosts(){
			return $this->query("SELECT COUNT(id) as nbPost FROM posts WHERE posted='1'");
		}

		/**
		* Prev article
		*/

		public function prevPost($id){
		    return $this->query("SELECT * FROM posts WHERE id < ? AND posted='1' ORDER BY id DESC LIMIT 0, 1", [$id], true);	    
	  	}

	  	/**
		* Next article
		*/

	  	public function nextPost($id){
		    return $this->query("SELECT * FROM posts WHERE id > ? AND posted='1' ORDER BY id ASC LIMIT 0, 1", [$id], true);	    
	  	}

	  	/**
		* Publie l'article
		*/

	  	public function publish(){
	  		return $this->query("UPDATE posts SET posted='1' WHERE id='{$_POST['publish-chapter_id']}'");
	  	}
	
	}
