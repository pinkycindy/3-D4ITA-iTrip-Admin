<?php
    require("password.php");

    $con = mysqli_connect("localhost", "root", "", "db_itrip");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "SELECT * FROM pengguna WHERE username = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $colIdUser, $colUsername, $colNama, $colEmail, $colPassword, $colFotoProfil);

    $response = array();
    $response["success"] = false;

    while(mysqli_stmt_fetch($statement)){
        if (password_verify($password, $colPassword)) {
          $response["success"] = true;
          $response["nama"] = $colNama;
          $response["username"] = $colUsername;
          $response["email"] = $colEmail;
          $response["password"] = $colPassword;
          $response["fotoProfil"] = $colFotoProfil;
        }
    }

    echo json_encode($response);

?>
