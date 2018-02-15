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

		public function getImage(){		
			$html = '<img class="responsive-img" src="img/chapitres/' . $this->image_featured . '" alt="Image en vedette du '. $this->title .'">';

			return $html;
		}

	}