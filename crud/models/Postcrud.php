<?php

 class Postcrud extends Database {

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

     public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM post WHERE id_post = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    } 

     public function update_post($data){
        
        try{
            /*if($data['img-post'] <>  ){
               $sql = "UPDATE post SET titulo = ?, description = ?, usersid = ? WHERE id_post = ?";
                $img_ok = true;
            }else{
               
                $sql = "UPDATE post SET titulo = ?, description = ?, url_img = ?, usersid = ? WHERE id_post = ?";
            }
             */   
            $result = parent::connect()->prepare("UPDATE post SET titulo = ?, description = ?, url_img = ? WHERE id_post = ?");
            $result->bindParam(1, $data['title'], PDO::PARAM_STR);
            $result->bindParam(2, $data['description'], PDO::PARAM_STR);
            $result->bindParam(3, $data['img-post'], PDO::PARAM_STR);
            $result->bindParam(4, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error Post->update_post() " . $e->getMessage());
        }
    }

    public function delate_post($id_post){
        try{
            $result = parent::connect()->prepare("DELETE FROM post WHERE id_post = ?");
            $result->bindParam(1, $id_post, PDO::PARAM_INT);
            return $result->execute();
        }catch(Expetion $e){
            die("Error Post->delate_post() " . $e->getMessage());
        }
    }
 }
 