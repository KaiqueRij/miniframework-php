<?php

	namespace mf\init;

	/**
	 * Classe que abstrai os principais componentes do framework relacionado as rotas
	 */
	abstract class Bootstrap {

		// Vetor de rotas
		private $routes;

		// Método abstrato de inicialização de rotas 
		abstract protected function init_routes();

		// Instanciar inicia as rotas e indentifica a url da requisição
		public function __construct() {
			$this->init_routes();
			$this->run($this->get_url());
		}

		// Retorna o vetor das rotas 
		public function get_routes() {
			return $this->routes;
		}

		// Atualiza o vetor das rotas
		protected function set_routes(array $routes) {
			$this->routes = $routes;
		}

		// Executa o controlador dinamicamente de acordo com a rota requisitada
		protected function run($url) {

			foreach ($this->routes as $path => $route) {
				if($url == $route['route']) {
					$class = 'app\\controllers\\' . $route['controller'];
					$controller = new $class;

					$action = $route['action'];
					$controller->$action();
				}
			}

		}

		// Retorna a url da requisição
		protected function get_url() {
			return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		}

	}

?>