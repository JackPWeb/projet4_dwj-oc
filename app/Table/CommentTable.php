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
		* Recupere les commentaires du post associé puis limite en fonction de la pagination
		*/

	  	public function allCommentsByPost($id, $var){
		    return $this->query("SELECT * FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT $var", [$id], false);
	  	}

	}
