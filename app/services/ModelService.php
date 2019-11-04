<?php

	namespace app\services;

	use app\repositorys\ModelRepository;
	
	/**
	 * Classe modelo para camada de serviços contendo toda a lógica de negócio
	 */
	class ModelService {

		public static function get_all() {
			// Solicita as informações na base de dados
			ModelRepository::get_instance()->get_all();		
		}

	}


?>