<?php
	class IndexController extends ControllerBase {
	    public function index() {
	        $params = array();
	        $params['title'] = $this->config->get('Title');

	        $this->view->show('index/index.php', $params);
	    }
	}