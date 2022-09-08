<form  action="registrerUser.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nombre</label>
      <input type="text" name="Nombre" value="<?php echo $pvd->$Nombre; ?>" class="form-control" placeholder="Ingrese Nombre" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="Email" value="<?php echo $pvd->Email; ?>" class="form-control" placeholder="Ingrese Email" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="Username" value="<?php echo $pvd->Username; ?>" class="form-control" placeholder="Ingrese el nombre de usario" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Userpass</label>
        <input type="text" name="Userpass" value="<?php echo $pvd->Userpass; ?>" class="form-control" placeholder="Ingrese una contraseña" data-validacion-tipo="requerido|min:100" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>