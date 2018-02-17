<?php

	namespace App\Entity;

	use Core\Entity\Entity;
	/**
	* 
	*/
	class PostEntity extends Entity{
		
		public function getUrl(){
			return 'index.php?p=posts.single&id=' . $this->id;
		}

		public function getDate(){
			$html = '<span>Publié le ' . date("d/m/Y",strtotime($this->creation_date)) . '</span>';
			
			return $html;
		}

		public function getImage(){		
			$html = '<img class="responsive-img" src="img/chapitres/' . $this->image_featured . '" alt="Image en vedette du '. $this->title .'">';

			return $html;
		}

		public function getExcerpt(){
			$text = substr($this->content, 0 ,150);
			
			$html = '<p>' . substr($text, 0 ,strrpos($text, ' ')) . ' ...</p>';
			$html .= '<div class="more-link right-align"><a href="' . $this->getUrl() . '">Lire la suite</a></div>';

			return $html;
		}

		public function getPrev(){
								
			$html = '<a class="nav-previous" href="' . $this->getUrl() . '" title="'. $this->title .'">';
			$html .= '<i class="material-icons">chevron_left</i>';
			$html .= '<span class="meta-nav">Précédant</span>';
			$html .= '<h4 class="link-title">' . $this->title .'</h4>';
			$html .= '</a>';

			return $html;
		}

		public function getNext(){
			
			$html = '<a class="nav-next" href="' . $this->getUrl() . '" title="'. $this->title .'">';

			$html .= '<i class="material-icons">chevron_right</i>';
			$html .= '<span class="meta-nav">Suivant</span>';
			$html .= '<h4 class="link-title">' . $this->title .'</h4>';
			$html .= '</a>';

			return $html;			
		}

	}