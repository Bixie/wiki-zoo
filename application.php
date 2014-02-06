<?php
/**
* @package   com_zoo
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

class BusinessApplication extends Application {

	
	/**
	 * Called whenever the application is loaded and distpaches the actions
	 */
	public function dispatch() {

		/**
		 * Let's load extra controllers
		 
		if ($path = $this->app->path->path('applications:demo/controllers')) {
			$this->app->path->register($path, 'controllers');
		}
*/
		/**
		 * Let's bind an event to each category loading
		 
		$this->app->event->dispatcher->connect('category:init', array($this, 'categoryLoaded'));
*/
		//add uikit
		
		$this->app->document->addScript('libraries:jquery/jquery-ui.custom.min.js');
		$this->app->document->addStylesheet('libraries:jquery/jquery-ui.custom.css');
		parent::dispatch();
	}




}