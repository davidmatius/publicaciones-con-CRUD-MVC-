<?php

 class Post extends Database {

     public function all(){
        try{
            
            $result = parent::connect()->prepare("SELECT * FROM post INNER JOIN users ON post.usersid=users.id");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
     public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO post (titulo, description, url_img, usersid) VALUES (?,?,?,?)");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['url_img'], PDO::PARAM_STR);
            $result->bindParam(4, $data['usersid'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
           die("Error Post->register() " . $e->getMessage());
        }
     }

    
}

     