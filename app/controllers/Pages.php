<?php

    class Pages extends Controller {
        private $postModel;

        public function __construct(){

        }

        public function index() {

            $data=[
                'title' => 'MVCFramework'
            ];

            //Default to the index view
            $this->view('pages/index',$data);
        }

        public function about() {
            $data=[
                'title' => 'About'
            ];
            $this->view('pages/about', $data);
        }
    }