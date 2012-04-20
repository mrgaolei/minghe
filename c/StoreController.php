<?php

/**
 * Description of StoreController
 *
 * @author mrgaolei
 */
class StoreController extends BaseController {
	
	public function dodefault() {
		$sm = M("store");
		$this->view->assign("store", $sm->getStore());
		$this->view->assign("cats", M("catalog")->getAll());
		$this->view->assign("products", M("product")->getAll());
		$this->view->display("store");
	}
	
	public function doadd() {
		$pid = intval($this->post['pid']);
		if (!$pid) {
			// ����µĲ�Ʒ
			$data = array(
					'catid' => intval($this->post['catid']),
					'caption' => trim($this->post['caption']),
					'price_in' => floatval($this->post['price_in']),
					'price_sell' => floatval($this->post['price_sell']),
					'time_in' => time(),
					'memo' => trim($this->post['memo']),
					);
			$pid = M("product")->inserttable($data, true);
		}
		for ($i = 0; $i <= intval($this->post['num']) - 1; $i ++) {
			$data = array(
					'pid' => $pid,
					'time_in' => time(),
					);
			M("store")->inserttable($data);
		}
		$this->dbcommit();
		$this->message("��ӳɹ�", util::makeurl("store"));
	}

}