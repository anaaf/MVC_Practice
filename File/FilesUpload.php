<?php

//spl_autoload_register() allows you to register multiple functions
// that PHP will put into a stack/queue and call sequentially when a "new Class" is declared
spl_autoload_register('ClassLoad');

//$className variable is a placeholder for whenever we call and try to create an object from a class
 function ClassLoad($className){

//creating the path to where we have all our class files saved and in order to load class files i.e folder AllClass
      $path= 'AllClass/';

//declaring a variable $extension to get the extension of the file
    $extension = '.class.php';

    // require_once the class file that are going to be linking.
require_once  $path . $className . $extension;
}
?>
