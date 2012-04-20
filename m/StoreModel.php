<?php
class StoreModel extends BaseModel {
	protected $_tablepre = '';
	protected $_tablename = 'store';
	
	public function getAll($filters = array(), $pagesize = 0, $offset = 0, $order = array(), $select = '') {
		$sql = "SELECT s.sid, p.* FROM {$this->_tablename} s INNER JOIN `product` p ON s.pid = p.pid";
		return $this->db->fetch_by_sql($sql);
	}
	
	public function getStore() {
		$sql = "SELECT COUNT(*) AS count, SUM(price_in) AS total, p.pid, p.catid, p.caption, p.price_in FROM `{$this->_tablename}` s INNER JOIN `product` p ON s.pid = p.pid WHERE s.selled = 0 GROUP BY p.pid";
		return $this->db->fetch_by_sql($sql);
	}
	
	public function sale($pid, $time_sell, $price_sell) {
		$sql = "UPDATE `{$this->_tablename}` SET selled = 1, time_sell = $time_sell, price_sell = $price_sell WHERE pid = $pid AND selled = 0 LIMIT 1";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
	
	public function getSelled() {
		$sql = "SELECT s.*, p.caption, p.price_in FROM `{$this->_tablename}` s INNER JOIN `product` p ON s.pid = p.pid WHERE s.selled = 1 ORDER BY s.time_sell DESC";
		return $this->db->fetch_by_sql($sql);
	}
}