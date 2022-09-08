<?php


    if(!isset($user))
    {
        header('Location: ../index.php');
    }

    $inactive = 240;
    if (isset($_SESSION["timeout"])) {
	// Calcula el "tiempo de vida" de la sesión.
   $sessionTTL = time() - $_SESSION["timeout"];
   if ($sessionTTL > $inactive) {
		session_unset();
		echo "<script> window.location='./index.php'; </script>";
   }
}
    $_SESSION["timeout"] = time();

    

    
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="Assets/css/styles.css" rel="stylesheet"/>
    <title>Home</title>
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion">
                <a href="Controllers/logout.php">Cerrar sesión</a>
            </li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getNombre(); ?> </h1>
    </section>
    
</body>
</html>