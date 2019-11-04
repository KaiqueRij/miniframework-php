<?php

	namespace app;

	/**
	 * Classe que define a conexão com o banco de dados com o PDO
	 */
	class Connection {

		private static $host = 'localhost';
		private static $user = 'root';
		private static $pass = '';
		private static $db = 'mvc_teste';

		public static function get_connection() {
			try {

				$conn = new \PDO(
					'mysql:host=' . self::$host . ';dbname=' . self::$db . ';charset=utf8',
					self::$user,
					self::$pass
				);

				return $conn;

			} catch (PDOException $e) {
				// Tratativa
			}
		}

	}

?>