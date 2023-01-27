<?php
    /*
     * PDO Database class
     * Connect to the database
     * Create prepared statements
     * Bind values
     * Return rows
     */
    class Database
    {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbhandler;
        private $stmt;
        private $error;

        public function __construct()
        {
            //Set Data Source Name
            $dsn = 'mysql:host'.$this->host.';dbname'.$this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            //Create PDO instance
            try {
                $this->dbhandler = new PDO($dsn,$this->user,$this->pass, $options);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }