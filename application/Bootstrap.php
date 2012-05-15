<?php

namespace application;

/**
 *
 * @author Murali M
 *        
 */
class Bootstrap {
	// TODO - Insert your code here
	
	/**
	 * @var string
	 */
	private $action = '';
	
	/**
	 * @var string
	 */
	private $module = 'Index';
	
	/**
	 */
	function __construct() {
		
		// TODO - Insert your code here
	}
	

	/**
	 * @return the $action
	 */
	public function getAction() {
		return $this->action;
	}

	/**
	 * @param string $action
	 */
	public function setAction($action) {
		$this->action = $action;
	}

	/**
	 * @return the $module
	 */
	public function getModule() {
		return $this->module;
	}

	/**
	 * @param string $module
	 */
	public function setModule($module) {
		$this->module = $module;
	}

	/**
	 */
	function __destruct() {
		
		// TODO - Insert your code here
	}
}

?>