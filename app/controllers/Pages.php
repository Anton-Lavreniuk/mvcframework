<?php

    class Pages{
        public function __construct(){

        }

        public function index() {
            echo "<h1>404 Page does not exist</h1>";
        }

        public function about($id) {
            echo 'This is about '.$id;
        }
    }