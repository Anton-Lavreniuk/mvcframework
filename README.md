# mvcframework

This is a framework for web development written in PHP using the Model-View-Controller pattern.

To get started, change values with ***underscores*** in public/.htaccess and config.php files to match yours.

For creating a model, refer to the template below.
```
<?php
    //Model template
    class Post{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getPosts()
        {
            $this->db->query("SELECT * FROM posts");
            return $this->db->resultSet();

        }
    }
    
