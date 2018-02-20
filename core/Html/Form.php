<?php
	namespace Core\Html;

	/**
	* Class Form
	* Génére un formulaire rapidement
	*/

	class Form{

		/**
		* @var array données utilisées par le formulaire
		*/

		private $data;

		/**
		* @var string Tag utilisé pour entourer les champs
		*/

		public $surround = 'p';

		/**
		* @var array $data Données utilisées par le formulaire
		*/

		public function __construct($data = array()){
			$this->data = $data;
		}

		/**
		* @param $html string code html à entourer
		* @return string
		*/

		protected function surround($html){
			return "<{$this->surround}>{$html}</{$this->surround}>";
		}

		/**
		* @param $index string index de la valeur à récupérer
		* @return string
		*/

		protected function getValue($index){
			if (is_object($this->data)) {
				return $this->data->$index;
			}
			
			return isset($this->data[$index]) ? $this->data[$index] : null;
		}

		/**
		* @param $name string
		* @param $label
		* @param array $options
		* @return string
		*/

		public function input($name, $label, $options = []){
			$type = isset($options['type']) ? $options['type'] : 'text';
			return $this->surround('<input type="' . $type .'" name="' . $name . '" value="' . $this->getValue($name) . '">');
		}

		/**
		* @return string
		*/

		public function submit($text){
			return $this->surround('<button type="submit">' . $text . '</button>');
		}


	}
?>