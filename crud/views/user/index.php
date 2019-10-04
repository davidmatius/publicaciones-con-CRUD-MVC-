<h1>Lista de usuarios</h1>


<table class="table">
    <thead>
        <th>id</th>
        <th>name</th>
         <th>email</th>
         <th>Cargo</th>
        <th>Opciones</th>
    </thead>
    <tbody>
    <?php foreach(parent::all() as $user):  ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->des_rol ?></td>
            <td width="250" class="table__options">
                <a href="?controller=user&method=edit&id=<?= $user->id ?>">
                    <button class="btn btn-outline-green">Editar</button>
                </a>
                <a href="?controller=user&method=delete&id=<?= $user->id ?>">
                <button class="btn btn-outline-red">Borrar</button>
                </a>
                
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

