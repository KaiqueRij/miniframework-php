<?php 

	namespace app\repositorys;

	use app\Connection;
	use mf\repository\Repository;
	
	/**
	 * Classe modelo da camada que realiza instruções coma base de dados
	 */
	class ModelRepository extends Repository {

		public function insert($object) {
			// Lógica de inserção
		}

		public function get_all() {
			// Lógica para buscar todos registros
		}

		public function get_by_id($id) {
			// Lógica de para buscar um registro pelo identificador
		}

		public function update($object) {
			// Lógica de atualização
		}

		public function delete($object) {
			// Lógica para remoção
		}

		// Singleton
		public static function get_instance() {
			if (!isset(self::$instance)) {
				self::$instance = new ModelRepository();
			}
			return self::$instance;
		}

	}

?>