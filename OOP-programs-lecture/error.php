<?php 

function handleError($exception) {
 	d($exception);
 	echo "Uncaught exception: " . $exception->getMessage(). "<br/>";
 	echo "FILE NAME: " . $exception->getFile(). "<br/>";
 	echo "LINE NUMBER : " . $exception->getLine(). "<br/>";
 	echo "TRACE DETAIL : " . $exception->getTrace(). "<br/>";
 	echo "ERROR CODE : " . $exception->getCode(). "<br/>";
  	die();
   }


   set_exception_handler('handleError');
   throw new Exception('Uncaught Exception');
	echo "Not Executed\n";
 ?>