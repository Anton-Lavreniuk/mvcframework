<?php

    class Pages extends Controller {
        public function __construct(){

        }

        public function index() {
            $data=[
                'title' => 'Welcome!'
            ];
            //Default to the index view
            $this->view('pages/index',$data);
        }

        public function about($id) {
            //echo 'Retrieved id: '.$id;
            $this->view('pages/about');
        }
    }