<?php

	namespace App\Entity;

	use Core\Entity\Entity;
	/**
	* 
	*/
	class CommentEntity extends Entity{
		
		/**
		* Affiche l'url du commentaire
		*/

		public function getUrl(){
			return 'index.php?p=posts.single&id=' . $this->id;
		}

		/**
		* Affiche la date du commentaire
		*/

		public function getDate(){
			$html = '<p class="commentaire-postedAt">Le ' . date("d/m/Y à H:i",strtotime($this->comment_date)) . '</p>';
			
			return $html;
		}

		/**
		* Affiche le nombre total de commentaire et ajuste l'orthographe
		*/

		public function getTotalComments(){
			if ($this->total <= 1) {
				$html = $this->total . ' Commentaire: ';
			}else{
				$html = $this->total . ' Commentaires: ';
			}

			return $html;
		}

		public function getExcerpt(){
			$html = '<p>' . substr($this->comment, 0 ,100) . '...</p>';
			
			return $html;
		}
		
	}