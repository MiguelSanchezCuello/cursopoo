<?php
    class Usuario{
        public $strNombre;
        public $strEmail;
        public $strTipo;
        private $strClave;
        protected $strFechaRegistro;
        static $strEstado = "Activo";

        function __construct(string $nombre, string $email, string $tipo){
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
        }






    } // End Class Usuario.

?>