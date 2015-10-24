<?php

	class Libro{

		private static $instancia;
	    private $libros;
	 
	    private function __construct()
	    {
	        $this->libros = simplexml_load_file('books.xml');
	    }
		
	    public static function singletonLibro()
	    {
	        if(!isset(self::$instancia)){
	            $miclase = __CLASS__;
	            self::$instancia = new $miclase;
	        }
	        return self::$instancia;
	    }

		public function getLibros(){
			return $this->libros;
		}

		public function getSpanish(){
			$salida = array();
			foreach ($this->libros as $libro) {
		    	if($libro->Language == "Spanish"){
		    		array_push($salida, $libro);
		    	}
		    }
		    return $salida;
		}

		public function getFrench(){
			$salida = array();
			foreach ($this->libros as $libro) {
		    	if($libro->Language == "French"){
		    		array_push($salida, $libro);
		    	}
		    }
		    return $salida;
		}

		public function getMayor(){
			$salida = array();
			foreach ($this->libros as $libro) {
		    	if($libro->Price >= 100){
		    		array_push($salida, $libro);
		    	}
		    }
		    return $salida;
		}

		public function getMenor(){
			$salida = array();
			foreach ($this->libros as $libro) {
		    	if($libro->Price < 100){
		    		array_push($salida, $libro);
		    	}
		    }
		    return $salida;
		}
	    
	     // Evita que el objeto se pueda clonar
	    public function __clone(){
	        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
	    }
	}
?>