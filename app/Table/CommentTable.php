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

	}
