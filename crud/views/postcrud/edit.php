<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
        width: 300px;
    }
</style>
<center>
<div class="formo">
 <h2 style="color:white; margin-top: 5px">Modificacion de Publicación</h2><br>
<form action="?controller=postcrud&method=update" method="POST" enctype="multipart/form-data">
   
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <label for="img-post">Img</label><br>
    
     Select a imagen:<br> <input type="file" name="img-post" value="<?= $post->url_img ?>"><br>
    
    <label for="title">Title</label><br>
    <input type="text" name="title" id="title" required value="<?= $post->titulo ?>">
    <br>
    <label for="description">description</label><br>
    <input type="description" name="description" id="description" required value="<?= $post->description ?>">
    <br>
    <br>
    <button>Guardar</button>
   
</form>
</div></center>
