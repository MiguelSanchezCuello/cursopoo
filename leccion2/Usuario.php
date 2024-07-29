<?php
    require_once("ClassUsuario.php");

    $objUsuario1 = new Usuario("Miguel", "miguel@sanchez.com", "Admin");
    $objDawilka = new Usuario("Dawilka", "nome@mail.com", "Cliente");

    echo "Acceso al nombre de usuario: ".$objUsuario1->getNombre()."<br />";
    echo "Acceso al email: ".$objUsuario1->getEmail()."<br />";

    echo "<br /><br />Obtener el perfil completo: "."<br />";
    echo $objUsuario1->getPerfil();

    // Forma de acceder a la propiedad estatitca.
    // echo Usuario::$strEstado;

    echo "<br><br>";
    echo $objDawilka->getPerfil();

    $objDawilka->setCambiarClave("NuevaClave");
    echo "<br>";
    echo $objDawilka->getPerfil();

?>