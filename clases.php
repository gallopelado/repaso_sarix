<?php

	class Persona {
		private $nombres;
		private $apellidos;
		private $cedula;
		
		//variable de clase
		private $ciudad;//agregacion
		
		
		/*__construct($nombre, $apellido, $cedula, $ciudad) {
			$this.nombres = $nombre;
			$this.apellidos = $apellidos;
			$this.cedula = $cedula;
			$this.ciudad = $ciudad;
		}*/
		
		//getters y setters
	}
	
	class Ciudad {
		private $id;
		private $descripcion;
		
		/*__construct($id, $descripcion) {
			$this.id = $id;
			$this.descripcion = $descripcion;
		}*/
		
		//getters y setters
	}
	
	class Empleado {
		private $persona = new Persona();
		private $salario;
		
		__construct($nombre, $apellido, $cedula, $ciudad, $salario) {
			$this->persona->setNombres($nombre);
			$this->persona->setApellidos($apellidos);
			$this->persona->setCedula($cedula);
			$this->persona->setCiudad($ciudad);
			$this->salario = $salario;	
		}
	}
	

$ciudad1 = new Ciudad(1, 'Santa Elena');
$persona1 = new Persona('Sara', 'Franco', '6363975', $ciudad1);



$emp1 = new Empleado('Sara', 'Franco', '6363975', $ciudad1, 6000000);


