<?php

	namespace mf\controller;

	/**
	 * Classe que abstrai os principais componentes do framework relacionado a camada do controlador
	 */
	abstract class Action {

		// Objeto dinâmico utilizado para preencher o fron-end
		protected $view;

		public function __construct() {
			$this->view = new \stdClass();
		}

		// Método que que define o layout a ser renderizado e os recursos que popularão o fron-end
		protected function render($view, $layout) {
			$this->view->page = $view;

			$file_path = '../app/views/' . $layout . '.phtml';
			if(file_exists($file_path)){
				require_once $file_path;
			} else {
				$this->content();
			}
		}

		// Método do conteúdo principal da página
		protected function content() {
			$class = get_class($this);
			$class = str_replace('app\\controllers\\', '', $class);
			$class = strtolower(str_replace('Controller', '', $class));

			require_once '../app/views/'. $class . '/' . $this->view->page . '.phtml';
		}

	}

?>