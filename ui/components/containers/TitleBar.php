<?php 
/*******************************************************************
* Copyright (C) 2013 utilitron.net
*
* This software is provided 'as-is', without any express or implied
* warranty. In no event will the authors be held liable for any damages
* arising from the use of this software.

* Permission is granted to anyone to use this software for any purpose,
* including commercial applications, and to alter it and redistribute it
* freely, without restriction.
*
* AUTHOR
* ======
* Erik Ashcraft
*
* Created: 2/8/2013
*/

if (!defined('ROOT_PATH')){
	header('This is not the page you are looking for', true, 404);
	include( dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/404.html');
	exit();
}

require_once APP_PATH . "ui/components/Container.php";
require_once APP_PATH . "ui/components/Text.php";

/**
 * TitleBar Class
 */
Class TitleBar extends Container {
	/**
	 * Constructor
	 */
	public function __construct($title=null) {
		parent::__construct();
		 
		$this->element = 'div';
		$this->class = 'titleBar';
		 
		if ($title){
		 	$title = new Text($title);
		 	$title->class = 'title';
		 
			$this->addComponent($title);
		}
	}
}
?>
