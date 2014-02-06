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

		//add uikit
		JFactory::getDocument()->addScript($this->getURI().'/uikit/js/uikit.min.js');
		JFactory::getDocument()->addStylesheet($this->getURI().'/uikit/css/uikit.css');
		
		parent::dispatch();
	}




}