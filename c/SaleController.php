<?php

/**
 * Description of SaleController
 *
 * @author mrgaolei
 */
class SaleController extends BaseController {
	
	public function dodefault() {
		$sm = M("store");
		$this->view->assign("store", $sm->getStore());
		$this->view->assign("cats", M("catalog")->getAll());
		$this->view->assign("products", M("product")->getAll());
		$this->view->display("sale");
	}
	
	public function dosale() {
		$pid = intval($this->get['pid']);
		$product = M("product")->getByPKID($pid);
		if (!$product) $this->message("无效产品");
		$this->view->assign("product", $product);
		$this->view->display("product");
	}
	
	public function doconfirm() {
		$pid = intval($this->get['pid']);
		$product = M("product")->getByPKID($pid);
		if (!$product) $this->message("无效产品");
		$row = M("store")->sale($pid, time(), floatval($this->post['price']));
		if ($row) {
			$this->dbcommit();
			$this->message("销售成功");
		} else {
			$this->message("库存已经没有");
		}
	}

}