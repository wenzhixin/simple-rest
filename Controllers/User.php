<?php
class Controllers_User extends RestController {
	public function get() {
		$this->response = array('params' => $this->request['params'], 'data' => $this->request['data']);
		$this->responseStatus = 200;
	}
	public function post() {
		$this->response = array('params' => $this->request['params'], 'data' => $this->request['data']);
		$this->responseStatus = 200;
	}
	public function put() {
		$this->response = array('params' => $this->request['params'], 'data' => $this->request['data']);
		$this->responseStatus = 200;
	}
	public function delete() {
		$this->response = array('params' => $this->request['params'], 'data' => $this->request['data']);
		$this->responseStatus = 200;
	}
}
