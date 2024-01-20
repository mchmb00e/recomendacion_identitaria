<?php

include 'templates/header.html';

echo
'
<body>
    <form method="POST" action="controller/login.php" class="bg-dark position-fixed top-0 bottom-0 start-0 end-0 d-flex align-items-center justify-content-center">
        <div style="width: 600px; height: 400px;" class="bg-white d-flex flex-column justify-content-between align-items-center p-2">
            <div class="d-flex justify-content-center">
                <img style="width: 35px; height: auto;" src="https://identitaria.cl/wp-content/uploads/2023/10/favicon.png" alt="Logo Identitaria" class="img-fluid">
            </div>
';


session_start();

        try { echo (isset($_SESSION["msg"])) ? $_SESSION["msg"] : ""; }  catch (Exception $e) { echo 'Error: ' . $e->getMessage(); }
        
session_destroy();

echo
'
            <div class="d-flex flex-column justify-content-between align-items-start gap-2">
                <label for="user_name">
                    Nombre de usuario:
                    <input type="text" name="user_name" id="user_name" placeholder="Nombre de usuario" class="form-control">
                </label>
                <label for="user_pass">
                    Contraseña:
                    <input type="password" name="user_pass" id="user_pass" placeholder="Contraseña" class="form-control">
                </label>
            </div>

            <button type="submit" class="btn btn-primary" onclick="login()">Iniciar sesión</button>
        </div>
    </div>
</body>
';

include 'templates/end.html';

?>