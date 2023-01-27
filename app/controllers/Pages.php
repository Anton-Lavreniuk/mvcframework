<?php

    class Pages extends Controller {
        private $postModel;

        public function __construct(){
            $this->postModel = $this->model('Post');
        }

        public function index() {
            $data=[
                'title' => 'About us'
            ];
            //Default to the index view
            $this->view('pages/index',$data);
        }

        public function about() {
            //echo 'Retrieved id: '.$id;
            $this->view('pages/about');
        }
    }