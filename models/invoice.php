<?php

class Invoice{

    private $adress;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
	}

    function getadress() {
		return $this->adress;
	}

    function setAdress($adress) {
		$this->adress = $adress;
	}


    //Crear base de dato de la facturación con los siguientes campos:
    //id de la factura:
    //id del usuario clave secundaria:
    //direccion del usuario:
    //DNI del usuario: 11111111A
    //numero de telefono: 000000000
    //fecha del pedido:
    //fecha de la entrega: dd/mm/yyyy
    //total facturado:

//Flujo:

//extraer de la secion las unidades el monto y el monto total de los productos
//insertar campos en la tabla de facturacion junto con la informacion generica
//de los "inputs que debe completar el usuario"
//hacer un join de la informacion necesaria del usuario y facturacion para
//generar el pdf con la factura.

    
}