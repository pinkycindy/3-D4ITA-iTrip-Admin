<?php
    require("password.php");

    $con = mysqli_connect("localhost", "root", "", "db_itrip");

    $username = $_POST["username"];
    $password = $_POST["password"];

    // $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
    // mysqli_stmt_bind_param($statement, "ss", $username, $password);
    // mysqli_stmt_execute($statement);
    //
    // mysqli_stmt_store_result($statement);
    // mysqli_stmt_bind_result($statement, $idUser, $nama, $username, $email, $password, $fotoProfil);

    $statement = mysqli_prepare($con, "SELECT * FROM pengguna WHERE username = ?");
    mysqli_stmt_bind_param($statement, "s", $username);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $colIdUser, $colNama, $colUsername, $colEmail, $colPassword, $colFotoProfil);

    $response = array();
    $response["success"] = false;

    // while(mysqli_stmt_fetch($statement)){
    //     $response["success"] = true;
    //     $response["nama"] = $nama;
    //     $response["username"] = $username;
    //     $response["email"] = $email;
    //     $response["password"] = $password;
    //     $response["fotoProfil"] = $fotoProfil;
    // }

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
