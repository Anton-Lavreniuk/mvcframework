<?php
    //Model template
    class Post{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }
    }