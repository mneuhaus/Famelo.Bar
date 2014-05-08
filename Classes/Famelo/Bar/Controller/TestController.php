<?php
namespace Famelo\Bar\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Famelo.Bar".            *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class TestController extends \TYPO3\Flow\Mvc\Controller\ActionController {
	
	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}
	
}