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
* Created: 2/9/2013
*/

if (!defined('ROOT_PATH')){
	header('This is not the page you are looking for', true, 404);
	include( dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/404.html');
	exit();
}

require_once APP_PATH . "ui/components/Container.php";

/**
 * Data List Class
 */
Class DataList extends Container {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct();
		 
		$this->element = 'datalist';
	}
	
	/**
	 * Build
	 */
	public function build($count_indent=0) {
		$count_indent++;
		
		for ($i = 0; $i < $count_indent; $i++) echo "\t";
		
		echo '<'. $this->element;
		if (!is_null($this->id))
			echo ' id="'. $this->id .'"';
		if (!is_null($this->class))
			echo ' class="'. $this->class .'"';
		echo '>';
		echo "\r\n";
		
		// Loop through the components and run their build actions.
		foreach($this->components as $component) {
			$component->build($count_indent);
		}
		
		for ($i = 0; $i < $count_indent; $i++) echo "\t";
		echo '</'. $this->element .'>'. "\r\n";
	}
	
}
?>
