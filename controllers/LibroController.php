<?php
	require_once "models/Libro.php";

	class LibroController
	{
		private $model;

		public function __construct()
		{
			$this->model = Libro::singletonLibro();
		}

		public function indexAction()
		{
			return new View('libro');
		}

		public function listaAction()
		{
			$lista = $this->model->getLibros();
			return new View('libro', 'lista', ["lista" => $lista]);
		}

		public function spanishAction()
		{
			$lista = $this->model->getSpanish();
			return new View('libro', 'spanish', ["lista" => $lista]);
		}

		public function frenchAction()
		{
			$lista = $this->model->getFrench();
			return new View('libro', 'french', ["lista" => $lista]);
		}

		public function mayorAction()
		{
			$lista = $this->model->getMayor();
			return new View('libro', 'mayor', ["lista" => $lista]);
		}

		public function menorAction()
		{
			$lista = $this->model->getMenor();
			return new View('libro', 'menor', ["lista" => $lista]);
		}
	}
	
?>