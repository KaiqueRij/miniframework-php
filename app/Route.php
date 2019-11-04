<?php

	namespace app;

	use mf\init\Bootstrap;

	/**
	 * Classe que define o sistema de roteamento das url
	 */
	class Route extends Bootstrap {

		protected function init_routes() {

			$routes['index'] = array (
				'route' => '/',
				'controller' => 'IndexController',
				'action' => 'index'
			);

			$this->set_routes($routes);
		}

	}

?>