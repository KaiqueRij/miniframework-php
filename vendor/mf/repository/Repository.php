<?php

	namespace mf\repository;

	use app\Connection;

	/**
	 * Classe que abstrai os principais componentes do framework relacionado a conectar e solicitar recursos a base de dados
	 */
	abstract class Repository {

		protected static $instance;
		protected $conn;

		public function __construct() {
			$this->conn = Connection::get_connection();
		}

		// Métodos tradicionais
		public abstract function insert($object);  // Create
		public abstract function get_all(); // Read all
		public abstract function get_by_id($id); // Read by Id
		public abstract function update($object); // Update
		public abstract function delete($object); // Delete

	}

?>