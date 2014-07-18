<?php

//location: tests/acceptance/_autoloader.php  
 spl_autoload_register(function ($className) {  
      foreach (array('PageObjects', 'Controllers') as $type) {  
           $filePath = __DIR__ . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR . $className . '.php';  
                if (file_exists($filePath)) {  
                     include_once($filePath);
                     }}});  
?> 