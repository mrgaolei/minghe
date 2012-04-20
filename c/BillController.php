<?php

/**
 * Description of BillController
 *
 * @author mrgaolei
 */
class BillController extends BaseController {
	
	public function dodefault() {
		$sm = M("store");
		$this->view->assign("store", $sm->getSelled());
		$this->view->display("bill");
	}
	

}