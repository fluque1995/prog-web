<?php

require_once("database-management.inc.php");

class ForumThread extends DbModel {

    protected $data = array(
        "title" => "",
        "description" => "",
        "user_id" => ""
    );

    public function createThread($username){
        $connection = parent::connect();
        $sql_query = "INSERT INTO ".TABLE_THREADS
                   ." (title, description, user_id)"
                   . " VALUES "
                   ."(:title, :description, (SELECT user_id FROM ".TABLE_USERS
                   ." WHERE username=:username))";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->bindValue(':title', $this->data["title"]);
            $sentence->bindValue(':description', $this->data["description"]);
            $sentence->bindValue(':username', $username);
            $sentence->execute();
        } catch (PDOException $exception) {
            return "There was a problem creating forum thread: ".$exception->getMessage();
        }
        parent::disconnect($connection);
    }
}
