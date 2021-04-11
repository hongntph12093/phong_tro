<?php
	class App{

		protected $controller;
		protected $action;
		protected $params = [];

		function __construct() {
			if( $this->urlProcess() ) {
				$url = $this->urlProcess();

				if( file_exists("./mvc/controllers/".$url[0].".php") ) {
					$this->controller = $url[0];
					unset($url[0]);
				}

				require_once "./mvc/controllers/".$this->controller.".php";
				$this->controller = new $this->controller;

				// xu li action
				if( isset($url[1]) ){
					if(method_exists($this->controller, $url[1])) {
						$this->action = $url[1];
						unset($url[1]);
					}
				}

				$this->params = $url?array_values($url):[];

				call_user_func_array([$this->controller, $this->action], $this->params);

			}
		}


		function urlProcess() {
			if(isset($_GET['url'])) {
				return explode("/", trim($_GET['url']));
			}
		}
	}
?>