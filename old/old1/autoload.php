<?php
//Autoload's classes without having to include them manualy each time

function __autoload($class)
{
$parts = explode('_', $class);
$path = 'classes/' . implode(DIRECTORY_SEPARATOR,$parts);

//require_once strtolower($path) . '_class.php';

require_once strtolower($path) . '.php';

}
 