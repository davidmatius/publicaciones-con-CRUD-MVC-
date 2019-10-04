<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>
<center>
<div class="formo">
<form action="?controller=postcrud&method=store" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <label for="img-post">Img</label><br>
    
     Select a img:<br> <input type="file" name="img-post"><br>
   
    <label for="title">Title</label><br>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">description</label>
    <input type="description" name="description" id="description" required>
     <input type="hidden" name="usersid" value="<?= $_SESSION['users']->id; ?>">

    
    <button>Registrar</button>
    
</form>
</div>
</center>