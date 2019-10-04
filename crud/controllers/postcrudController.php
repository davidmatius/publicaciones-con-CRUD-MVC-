<?php
     class postcrudController extends Postcrud{

        public function __construct(){
             Security::verifyUser();
            Security::verifyRole('1');       
        }


        public function index(){
        
           require_once 'views/layouts/header.php';
           require_once 'views/postcrud/index.php';
           require_once 'views/layouts/footer.php';
        }
        public function create(){
            require_once 'views/layouts/header.php';
            require_once 'views/postcrud/create.php';
            require_once 'views/layouts/footer.php';
        }
        public function store(){
            
            $dir = 'assets/img' . $_FILES['img-post']['name'];
            move_uploaded_file($_FILES['img-post']['tmp_name'], $dir);
            $_POST['url_img'] = $dir;

            var_dump(parent::register($_POST));
            header('Location: ?controller=postcrud');

        }    
            
        public function edit(){
            $post = parent::find($_GET['id']);
            require_once 'views/layouts/header.php';
            require_once 'views/postcrud/edit.php';
            require_once 'views/layouts/footer.php';
        }
        public function update(){

            $dir = 'assets/img' . $_FILES['img-post']['name'];
            move_uploaded_file($_FILES['img-post']['tmp_name'], $dir);
            $_POST['img-post'] = $dir;

            echo parent::update_post($_POST) ? header('Location: ?controller=postcrud') : 'Error';
        

    }
    
    
    //
    public function delete(){
        var_dump(parent::delate_post($_GET['id']));
        header('Location: ?controller=postcrud');
    }

     }
?>