<?php
	namespace App\Table;

	use Core\Table\Table;

	/**
	* 
	*/
	class CommentTable extends Table {
		
		protected $table = 'comments';

		
		/**
		* Recupere les commentaires du post associé
		*/

	  	public function find($id){
			return $this->query("SELECT * FROM comments WHERE post_id = ? ORDER BY comment_date DESC", [$id], false);
		}

		/**
		* Affiche le nombre total de commentaire pour chaque post
		**/

		public function countComments($id){
			return $this->query("SELECT COUNT(id) as total FROM comments WHERE post_id = ?", [$id], true);	
		}

		/**
		* Report le commentaire signaler
		*/

	  	public function report(){
	  		return $this->query("UPDATE comments SET signaled='1' WHERE id='{$_POST['id']}'");
	  	}

	  	/**
		* Annule le commentaire signaler
		*/

	  	public function cancelReport(){
	  		return $this->query("UPDATE comments SET signaled='0' WHERE id='{$_POST['cancel-signaled_id']}'");
	  	}

	  	/**
		* Recupere les commentaires du post associé puis limite en fonction de la pagination
		*/

	  	public function allCommentsByPost($id, $var){
		    return $this->query("SELECT * FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT $var", [$id], false);
	  	}

	  	/**
		* Recupere les commentaires par date puis limite en fonction de la pagination
		*/

	  	public function allCommentsByDate($var){
		    return $this->query("SELECT * FROM comments ORDER BY comment_date DESC LIMIT $var");
	  	}

	  	/**
		* Recupere les commentaires signaler
		*/

		public function signaled(){
		    return $this->query("SELECT * FROM comments WHERE signaled = '1' ORDER BY comment_date DESC");
	  	}

	  	/**
		* Update role if user auth
		*/

	  	public function updateRole(){
	  		return $this->query("UPDATE comments SET author_role='1' WHERE author='{$_POST['author']}'");
	  	}

	}
