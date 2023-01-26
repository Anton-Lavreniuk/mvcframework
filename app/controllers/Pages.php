<?php

    class Pages extends Controller {
        public function __construct(){

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