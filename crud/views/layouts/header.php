<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar">
        <a href="?controller=index" class="navbar-brand">Public POST</a>
        <ul class="navbar-nav">
       
             
             <?php if(isset($_SESSION['users'])): ?>
            <ul>

                <li><p style="color:white; font-size: 20px;">  <?= $_SESSION['users']->name; ?></p></li>
            </ul>
            <ul>
                <li><a class="nav-link" href="?controller=postcrud&method=create">Crear Post</a></li>
            </ul>
            <ul>
                <li><a class="nav-link" href="?controller=user">Users</a></li>
            </ul>
            <ul>
                <li><a class="nav-link" href="?controller=postcrud">Post</a></li>
            </ul>
            <ul>
                <li>
                    <a href="?controller=security&method=logout">Cerrar sesion</a></p></li>
            </ul>
        
    <?php else: ?>
            
             <li><a class="nav-link" href=" ?controller=user&method=create">Registrase</a></li>
            <li><a class="nav-link" href="?controller=post">Post</a></li>
            <li><a class="nav-link" href=" ?controller=index&method=login">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <main class="container">
