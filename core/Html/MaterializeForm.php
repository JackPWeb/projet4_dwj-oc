<?php
	namespace Core\Html;

	class MaterializeForm extends Form{

		/**
		* @param $html string code html à entourer
		* @return string
		*/

		protected function surround($html){
			return $html;
		}

		/**
		* @param $name string
		* @param $label
		* @param array $options
		* @return string
		*/

		public function input($name, $label, $options = []){
			$type = isset($options['type']) ? $options['type'] : 'text';

			$value = isset($options['value']) ? $options['value'] : '';

			$label = '<label>' . $label . '</label>';

			if ($type === 'textarea') {
				$input = '<textarea name="' . $name . '" class="materialize-textarea">' . $this->getValue($name) . '</textarea>';
			}
			elseif ($type === 'hidden') {
				$input = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
			}
			else{
				$input = '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="validate">';
			}

			return $this->surround($label . $input);
		}

		public function inputIcon($identifiant, $iconName, $name, $label, $options = []){
			$type = isset($options['type']) ? $options['type'] : 'text';

			$icon = '<i class="material-icons prefix">' . $iconName . '</i>';

			$label = '<label for="' . $identifiant . '">' . $label . '</label>';
			
			$input = '<input id="' . $identifiant . '" type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="validate">';
			
			return $this->surround($icon . $label . $input);
		}

		/**
		* @return string
		*/

		public function submit($text){
			return $this->surround('<button type="submit" name="submit" class="btn waves-effect waves-light front-bg-color">' . $text . '</button>');
		}

		public function submitIcon($iconName, $text){
			return $this->surround('<button type="submit" class="btn waves-effect waves-light"><i class="material-icons">' . $iconName . '</i>' . $text . '</button></div>');
		}

	}
