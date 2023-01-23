<?php
/*
 * App core class
 * Creates URL and loads core controller
 * URL FORMAT - /controller/method/params
 */
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $currentParams = [];

        public function __construct()
        {
            //print_r($this->getUrl());
            $url = $this->getUrl();
            //Look in controllers for first value
            if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
            //If such controller exists, set it as current controller
                $this->currentController = ucwords($url[0]);
            //Remove the used controller
                unset($url[0]);
            }
        //Require the controller
            require_once '../app/controllers/' . $this->currentController.'.php';
        //Create an instance of the controller class
            $this->currentController = new $this->currentController;
        }
        public  function getUrl() {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }
    }
