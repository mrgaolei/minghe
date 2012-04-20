<?php

/**
 * Description of IndexController
 *
 * @author mrgaolei
 */
class IndexController extends BaseController {
	
	public function dodefault() {
		$this->view->display("index");
	}

}