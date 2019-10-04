<style>
    input{
        border: 1px solid black;
        margin-bottom: 20px;
    }
</style>
<center>
    <div class="formo">
    <h2 style="color:white;">Registro de Usuarios</h2><br>
    <form action="?controller=user&method=store" method="POST">
    <label for="foto">Foto</label><br>
    
     Select a img:<br> <input type="file" name="foto"><br>
    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" required>
    <br>
    <select name="rol_id">
        <option value="0">Selecione</option>
        <option value="2">Docente</option>
        <option value="3">Alumno</option>
        <option value="4">Obrero</option>
    </select>
    <button>Register</button>
</form>
    </div>
</center>
