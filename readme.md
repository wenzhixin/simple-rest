Simple-REST - PHP REST Library (v1.0)
=====================================

Simple-REST is a lightweight PHP based REST library which can
quickly enable RESTfulness in your application. It does all the
Request/Response processing and can return response in multiple
formats like JSON, XML and QUERYSTRING.
The Simple-REST is licensed under the Apache Licence, Version 2.0
(http://www.apache.org/licenses/LICENSE-2.0.html)


Usage
-----

**GET /users?limit=20&offset=0 **

	class Controllers_Users extends RestController {
		public function get() {
			$this->response = array('data' => $this->request['data']);
			/**
			 * {
			 *     "data": {
			 *         "limit": 20,
			 *         "offset": 0
			 *     }
			 * }
			 */
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
	
**GET /user/param1/param2 **

**POST /user/ **

	Content-type: application/json
	{
		"username": "user",
		"password": "password"
	}

**PUT /user/1 **

	Content-type: application/json
	{
		"username": "user",
		"password": "password"
	}
	
**DELETE /user/1 **

	class Controllers_User extends RestController {
		public function get() {
			$this->response = array('params' => $this->request['params']);
			/**
			 * {
			 *    "params": ["param1", "param2"]
			 * }
			*/
			$this->responseStatus = 200;
		}
		public function post() {
			$this->response = array('data' => $this->request['data']);
			/**
			 * {
			 *    "data": {
			 *        "username": "user",
			 *        "password": "password"
			 *    }
			 * }
			*/
			$this->responseStatus = 200;
		}
		public function put() {
			$this->response = array('data' => $this->request['data']);
			/**
			 * {
			 *    "params": [1],
			 *    "data": {
			 *        "username": "user",
			 *        "password": "password"
			 *    }
			 * }
			*/
			$this->responseStatus = 200;
		}
		public function delete() {
			/**
			 * {
			 *    "params": [1]
			 * }
			*/
		}
	}

