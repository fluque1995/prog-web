<?php

require_once("database-management.inc.php");

class ForumThread extends DbModel {

    protected $data = array(
        "thread_id" => "",
        "title" => "",
        "description" => "",
        "user_id" => "",
        "full_user_name" => "",
        "user_image" => ""
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

    public static function getThreads(){
        $connection = parent::connect();
        $sql_query = "SELECT user.first_name, user.family_name, user.image, user.user_id, "
                   ."thread.title, thread.description, thread.thread_id FROM "
                   .TABLE_USERS." user, ".TABLE_THREADS." thread"
                   ." WHERE user.user_id = thread.user_id";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->execute();
            $threads = array();
            while($row = $sentence->fetch()){
                $row["full_user_name"] = $row["first_name"]." ".$row["family_name"];
                $row["user_image"] = $row["image"];
                $threads[] = new ForumThread($row);
            }
            parent::disconnect($connection);
            return $threads;
        } catch (PDOException $exception) {
            return "There was a problem fetching threads: ".$exception->getMessage();
        }
        parent::disconnect($connection);
    }

    public static function getThread($thread_id){
        $connection = parent::connect();
        $sql_query = "SELECT user.first_name, user.family_name, user.image, "
                   ."thread.title, thread.description, thread.thread_id FROM "
                   .TABLE_USERS." user, ".TABLE_THREADS." thread"
                   ." WHERE user.user_id = thread.user_id"
                   ." AND thread.thread_id = :thread_id";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->bindValue(':thread_id', $thread_id);
            $sentence->execute();
            $row = $sentence->fetch();
            $row["full_user_name"] = $row["first_name"]." ".$row["family_name"];
            $row["user_image"] = $row["image"];
            parent::disconnect($connection);
            return new ForumThread($row);
        } catch (PDOException $exception) {
            parent::disconnect($connection);
            return "There was a problem fetching threads: ".$exception->getMessage();
        }
    }
    public static function getThreadsFromUser($user_id){
        $connection = parent::connect();
        $sql_query = "SELECT title, thread_id FROM "
                   .TABLE_THREADS
                   ." WHERE user_id = :user_id";
        try {
            $sentence = $connection->prepare($sql_query);
            $sentence->bindValue(':user_id', $user_id);
            $sentence->execute();
            $threads;
            while($row = $sentence->fetch()){
                $threads[] = new ForumThread($row);
            }
            parent::disconnect($connection);
            return $threads;
        } catch (PDOException $exception) {
            parent::disconnect($connection);
            return "There was a problem fetching threads: ".$exception->getMessage();
        }
    }
}
