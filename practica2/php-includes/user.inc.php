<?php

require_once("database-management.inc.php");

class User extends DbModel {

    protected $data = array(
        "username" => "",
        "password" => "",
        "email" => "",
        "mobile-phone" => "",
        "telephone" => "",
        "first-name" => "",
        "family-name" => "",
        "address" => "",
        "population" => "",
        "province" => "",
        "image" => "",
        "reference" => ""
    );

    public function saveUser(){
        $connection = parent::connect();
        $sql_query = "INSERT INTO ".TABLE_USERS
                   ." (username, password, email, mobile_phone, telephone,"
                   ." first_name, family_name, address, population, province,"
                   ." image, reference)"
                   . " VALUES "
                   ."(:username, :password, :email, :mobile_phone, :telephone,"
                   ." :first_name, :family_name, :address, :population, :province,"
                   ." :image, :reference)";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->bindValue(':username', $this->data["username"]);
            $sentence->bindValue(':password', $this->data["password"]);
            $sentence->bindValue(':email', $this->data["email"]);
            $sentence->bindValue(':mobile_phone', $this->data["mobile-phone"]);
            $sentence->bindValue(':telephone', $this->data["telephone"]);
            $sentence->bindValue(':first_name', $this->data["first-name"]);
            $sentence->bindValue(':family_name', $this->data["family-name"]);
            $sentence->bindValue(':address', $this->data["address"]);
            $sentence->bindValue(':population', $this->data["population"]);
            $sentence->bindValue(':province', $this->data["province"]);
            $sentence->bindValue(':image', $this->data["image"]);
            $sentence->bindValue(':reference', $this->data["reference"]);
            $sentence->execute();
        } catch (PDOException $exception) {
            return "There was a problem creating user".$exception->getMessage();
        }
        parent::disconnect($connection);
    }

    public function logUser(){
        $connection = parent::connect();
        $user_query = "SELECT * FROM users WHERE username=:username AND password=:password";
        $sentence = $connection->prepare($user_query);

        $sentence->bindValue(":username", $this->data["username"]);
        $sentence->bindValue(":password", $this->data["password"]);

        $sentence->execute();

        if ($sentence->rowCount() > 0){
            session_start();
            parent::disconnect($connection);
            $_SESSION["usr"] = $this->data["username"];
            return("Logged");
        } else {
            parent::disconnect($connection);
            return("NotLogged");
        }
    }
}
