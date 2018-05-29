<?php

require_once("database-management.inc.php");

class ForumResponse extends DbModel {

    protected $data = array(
        "response" => "",
        "user_id" => "",
        "thread_id" => ""
    );

    public function createResponse($username, $thread_id){
        $connection = parent::connect();
        $sql_query = "INSERT INTO ".TABLE_RESPONSES
                   ." (response, user_id, thread_id)"
                   . " VALUES "
                   ."(:response, (SELECT user_id FROM ".TABLE_USERS
                   ." WHERE username=:username), :thread_id)";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->bindValue(':response', $this->data["response"]);
            $sentence->bindValue(':thread_id', $thread_id);
            $sentence->bindValue(':username', $username);
            $sentence->execute();
        } catch (PDOException $exception) {
            return "There was a problem creating response: ".$exception->getMessage();
        }
        parent::disconnect($connection);
    }
}
