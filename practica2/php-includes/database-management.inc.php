<?php

require_once("db-config.inc.php");

abstract class DbModel {
    protected $data = array();

    public function __construct($data = NULL){
        foreach ($data as $key => $val){
            if (array_key_exists($key, $this->data)){
                $this->data[$key] = $val;
            }
        }
    }

    public function getValue($key){
        if (array_key_exists($key, $this->data)){
            return $this->data[$key];
        } else die("Key not in array");
    }

    protected static function connect() {
        try{
            $connection = new PDO(DB_DSN, DB_USER, DB_PASS);
        }catch(PDOException $except) {
            echo "Error connecting to the database";
            echo $except->getMessage();
        }
        return $connection;
    }

    protected static function disconnect($connection){
        $connection = null;
    }
}
