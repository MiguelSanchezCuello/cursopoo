<?php
    class Persona{
    
        public $intDpi;
        public $strNombre;
        public $intEdad;

        function __construct(int $dpi, string $nombre, int $edad){
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

        public function getDatosPersonales(){
            $datos = "
                    <h2>DATOS PERSONALES<h2>
                    <p>DPI: $this->intDpi</p>
                    <p>Nombre: $this->strNombre</p>
                    <p>Edad: $this->intEdad</p>
                    ";
            return $datos;
                    
        }
    } // End Class Persona.
