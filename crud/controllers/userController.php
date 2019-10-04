<?php

class userController extends User{
    //Mostrar toda la informacion
    
public function __construct(){
              Security::verifyUser();
            Security::verifyRole('1');
        }
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        $cam = 'assets/img' . $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], $cam);
        $_POST['foto'] = $cam;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        var_dump(parent::register($_POST));
       

       // echo parent::register($_POST) ? 'Registro correcto.' : 'Error en el registro';
        header('Location: ?controller=index');

    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_register($_POST));
        header('Location: ?controller=user');
    }
    
    
    //
    public function delete(){
        var_dump(parent::delate_user($_GET['id']));
        header('Location: ?controller=user');
    }

}