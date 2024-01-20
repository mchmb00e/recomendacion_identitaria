<?php

$PATH = "../database/identitaria.db";

// Lista los registros de una tabla
function get($table) {
    require "../env.php";
    $conn = mysqli_connect($host, $user, $password, $database);
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($conn, $sql);
    $data = [];
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }
    }
    mysqli_close($conn);
    return $data;
}

// Comprueba las credenciales user y password en la tabla designada
function login($user_name, $user_pass) {

    $table = "users";

    $data = get($table);

    foreach ($data as $row) {
        if ($row["user"] == $user_name && $row["password"] == $user_pass && $row["verified"]) {
            return true;
        }
    }

    return false;
}


?>