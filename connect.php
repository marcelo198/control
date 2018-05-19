<?php
  class DataBase{

    public $servername = "localhost";
    public $id = "id";
    public $nombre = "nombre";
	public $codigo = "codigo";
	public $valor = "valor";
    public $dbname = "Producto";

    function connect(){
      $conn = new mysqli(
                    $this->servername,
                    $this->id,
                    $this->nombre,
					$this->codigo,
					$this->valor,
                    $this->dbname
                  );
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          return FALSE;
      }
      return $conn;
    }

  }

?>
