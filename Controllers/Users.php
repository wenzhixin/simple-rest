<?php
class Controllers_Users extends RestController {
	public function get() {
		$this->response = array('params' => $this->request['params'], 'data' => $this->request['data']);
		$this->responseStatus = 200;
	}
	public function post() {
		return null;
	}
	public function put() {
		return null;
	}
	public function delete() {
		return null;
	}
}
