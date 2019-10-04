<?php

class securityController extends Security {


    public function __construct(){
            Security::verifyUser();
        }
    public function login(){
        $user = parent::validateLogin($_POST['email']);

        if(!is_object($user)) die('Ingreso incorrecto.');

       if(is_object($user)){
        $pas=$_POST['password'];
        $pas2=$_POST['password_ver'];
        if($pas=$pas2){
          $passd=($pas=$pas2);
        
          if(password_verify($passd, $user->password)){
           $_SESSION['users'] = $user;

           switch ($user->rol_id){
               case 1:
                 
                   return header('location:?controller=postcrud');
               break;

               case 2:
                   
                   return header('location:?controller=post');
               break;
               case 3:
                  
                   return header('location:?controller=post');
               break;
               case 4:
                   
                   return header('location:?controller=post');

               break;
               default:;

           }
         }

       }else{
        echo "Las contraseñas No coniceden";
         header('location:?controller=post');
       }
    }
  }

    public function logout(){
        unset($_SESSION['users']);
        session_destroy();
        header('location:?controller=index');
    }

}