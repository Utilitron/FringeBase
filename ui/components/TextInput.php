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

require_once APP_PATH . "ui/Component.php";

/**
 * Text Class
 */
Class TextInput extends Component {

	/**
	* Type
	* 
	* @var type
	*/
	protected $type = 'text';
	
	/**
	 * Placeholder
	 *
	 * @var placeholder
	 */
	public $placeholder;
	
	/**
	 * Required
	 *
	 * @var required
	 */
	public $required;
	
	/**
	 * Value
	 *
	 * @var value
	 */
	public $value;
	
	/**
	 * On Key Up
	 *
	 * @var onkeyup
	 */
	public $onkeyup;
	
	/**
	 * On Change
	 *
	 * @var onchange
	 */
	public $onchange;
	
	/**
	 * Max Length
	 *
	 * @var maxlength
	 */
	public $maxlength;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		 parent::__construct();
		 
		 $this->element = 'input';
	}
	
	/**
	 * Build
	 */
	public function build($count_indent=0) {
		$count_indent++;
		
		for ($i = 0; $i < $count_indent; $i++) echo "\t";
		echo '<'. $this->element .' type="'. $this->type . '"';
		if (!is_null($this->id)){
			echo ' id="'. $this->id .'"';
			echo ' name="'. $this->id .'"';
		}
		if (!is_null($this->class))
			echo ' class="'. $this->class .'"';
		if (!is_null($this->placeholder))
			echo ' placeholder="'. $this->placeholder .'"';
		if (!is_null($this->required))
			echo ' required="'. $this->required .'"';
		if (!is_null($this->value))
			echo ' value="'. $this->value .'"';
		if (!is_null($this->onkeyup))
			echo ' onkeyup="'. $this->onkeyup .'"';
		if (!is_null($this->onchange))
			echo ' onchange="'. $this->onchange .'"';
		if (!is_null($this->maxlength))
			echo ' maxlength="'. $this->maxlength .'"';
		echo '>'. "\r\n";
	}
	
}
?>
