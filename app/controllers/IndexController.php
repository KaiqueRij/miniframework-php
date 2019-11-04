<?php

	namespace app\controllers;

	use mf\controller\Action;
	use app\services\ModelService;

	/**
	 * Classe que define o controlador da página inicial
	 */
	class IndexController extends Action {
		
		public function index() {

			// Solicita as camadas inferiores os recursos para a página
			ModelService::get_all();
			
			// Atributo sendo criado dinamicamente no objeto view
			$this->view->dados = array('Olá,', 'Mundo!');

			// Renderizando a página e o layout escolhido pelo parâmetro
			$this->render('index', 'layout');
		}

	}

?>