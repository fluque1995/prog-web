<?php

require_once("database-management.inc.php");

class ForumResponse extends DbModel {

    protected $data = array(
        "response" => "",
        "user_id" => "",
        "thread_id" => "",
        "full_user_name" => "",
        "user_image" => ""
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

    public static function getResponses($thread_id){
        $connection = parent::connect();
        $sql_query = "SELECT user.first_name, user.family_name, user.image, "
                   ."response.response, response.response_id FROM "
                   .TABLE_USERS." user, ".TABLE_RESPONSES." response"
                   ." WHERE user.user_id = response.user_id"
                   ." AND response.thread_id = :thread_id";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->bindValue(':thread_id', $thread_id);
            $sentence->execute();
            $responses = array();
            while($row = $sentence->fetch()){
                $row["full_user_name"] = $row["first_name"]." ".$row["family_name"];
                $row["user_image"] = $row["image"];
                $responses[] = new ForumResponse($row);
            }
            parent::disconnect($connection);
            return $responses;
        } catch (PDOException $exception) {
            return "There was a problem fetching responses: ".$exception->getMessage();
        }
        parent::disconnect($connection);
    }
}
