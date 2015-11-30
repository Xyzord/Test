<?php

/**
*
* It's a test web application for mvc pattern, url mapping and database communication
*
* @author Richard Biró <ricsibi@hotmail.com>
*/
	//import control.php
	require_once("control/control.php");
	
	/**
	* instantiates a Control class
	* 
	* @var store a Control
	*/
	$viewControl = new Control();
	
	// after it called the getList() method it will list the result
	$viewControl->getList();

?>