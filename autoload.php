<?php

// autoload.php

spl_autoload_register( function( $class ){

    // Convert the class name to a file path
    $classPath = str_replace( '\\', DIRECTORY_SEPARATOR, $class ) . '.php';

    // Check if the file exists
    if( file_exists($classPath) ){
        require_once $classPath;
    }
  }
);

?>