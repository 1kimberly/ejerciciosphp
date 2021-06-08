<?php
    include_once ( "DBconect.php" );


    if ( isset ( $_POST [ 'nombre' ]) && isset ( $_POST [ 'apellido' ]) && isset ( $_POST [ 'email' ]) && isset ( $_POST [ 'edad' ])) {

    if ( $_POST [ 'nombre' ] !== "" && $_POST [ 'email' ]!== "" && $_POST [ 'apellido' ]!== "" && $_POST [ 'edad' ]!== "" ) {

        $nombre = $_POST [ 'nombre' ];
        $apellido = $_POST [ 'apellido' ];
        $edad = $_POST [ 'edad' ];
        $correoelectrónico = $_POST [ 'correo electrónico' ];

        $conexión = new Database ;
        $confirmar = $conexión -> insertar ( $nombre , $apellido , $edad , $email );
    }else {
       $confirm = 2 ;//uno o mas campos estan vacios 
    }

}

header ( 'Ubicación: ../index.php?confirm=' .$confirmar )
?>