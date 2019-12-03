<?php
/**
 * The autoloader class handling classes loading in compliance with PSR-4
 * The `loadClass` works by getting the FQCN (Fully qualified class name = full namespace + class name).
 * It transforms class name into a file path, and checks if the file exists. 
 * If it does, the autoloader includes it. 
 * Thus the target class is available within its correct namespace.
 *
**/
function loadClass($className) {
	$fileName = '';
	$namespace = 'Test';

	// Sets the include path as the "src" directory
	$includePath = dirname(__FILE__).DIRECTORY_SEPARATOR; //.'src';

	if (false !== ($lastNsPos = strripos($className, '\\'))) {
		$namespace = substr($className, 0, $lastNsPos);
		$className = substr($className, $lastNsPos + 1);
		$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	}
	$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
	$fullFileName = $includePath . DIRECTORY_SEPARATOR . $fileName;
   
	if (file_exists($fullFileName)) {
		require $fullFileName;
	} else {
		echo 'Class "'.$className.'" does not exist.';
	}
}
spl_autoload_register('loadClass'); // Registers the autoloader
?>