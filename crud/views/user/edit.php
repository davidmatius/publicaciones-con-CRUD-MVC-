<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>
<center><div class="formo">
<h2 style="color:white">Modificación del Usuario  <strong style="color: #02cc9d"> <?= $user->name ?></strong> </h2><br>
<form action="?controller=user&method=update" method="POST">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?= $user->name ?>">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?= $user->email ?>">
    <br>
    <button>Guardar</button>
</form>
</div>
</center>