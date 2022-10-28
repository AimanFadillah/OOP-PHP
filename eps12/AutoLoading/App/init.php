<?php

spl_autoload_register( function ($class) {
    require_once 'Anime/' . $class . '.php';
} );

?>