<?php
     class postController extends Post{

        public function __construct(){
            Security::verifyUser();
            
        }


        public function index(){
                  
            require_once 'views/layouts/headerb.php';                               
            require_once 'views/post/index.php';
            require_once 'views/layouts/footer.php';
        }
        public function create(){
            require_once 'views/layouts/headerb.php';
            require_once 'views/postcrud/create.php';
            require_once 'views/layouts/footer.php';
        }
        public function store(){
            
            $dir = 'assets/img' . $_FILES['img-post']['name'];
            move_uploaded_file($_FILES['img-post']['tmp_name'], $dir);
            $_POST['url_img'] = $dir;

            var_dump(parent::register($_POST));
            header('Location: ?controller=post');

        }    
            
       

     }
?>