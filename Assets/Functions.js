function frmLogin(e) {
    e.preventDefault(); //evita que la página se recargue
    const usuario = document.getElementById("user");
    const contraseña = document.getElementById("password");
    //se valida que los campos no esten vacios utiliazando una clase is-invalid de Bootstrap
    if(usuario.value == ""){
        contraseña.classList.remove("is-invalid"); 
        usuario.classList.add("is-invalid");
        usuario.focus();
    }else if(contraseña.value == ""){
        usuario.classList.remove("is-invalid");
        contraseña.classList.add("is-invalid");
        contraseña.focus();
    }
}