<?php
    if(!isset($user))
    {
        header('Location: ../index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Gestock</title>
    <link href="Assets/css/styles.css" rel="stylesheet" />
    <script src="Assets/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <h3 class="font-weight-light my-4"></h3>
                                    <img src="Assets/img/logo.jpeg" class="img-fluid rounded" width="150">
                                </div>
                                <div class="card-body">
                                    <form id="frmLogin" action="index.php" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control <?php echo $border?>" id="user" name="user" type="text" placeholder="User"/>
                                            <label for="user">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control <?php echo $border?>" id="password" name="password" type="password" placeholder="Contraseña"/>
                                            <label for="password">Contraseña</label>
                                        </div>
                                        <?php

            
                                                    /*if(isset($errorLogin)){
                                                        echo $errorLogin;
                                                    }*/

                                            ?>

                                        <div class="alert alert-danger text-center <?php echo $display; ?>" id="alerta" role="alert">
                                        Nombre de Usuario y/o Contraseña incorrectos
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary btn-lg">INGRESAR</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Alumnos isft177</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
   
    <script src="Assets/js/scripts.js"></script>
    <script src="Assets/js/login.js"></script>
    <!--<script src="../Assets/Functions.js"></script>-->
</body>

</html>