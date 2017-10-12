<?php
    $con = mysqli_connect("localhost", "root", "", "db_itrip");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);

    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $idUser, $nama, $username, $email, $password);

    $user = array();

    while(mysqli_stmt_fetch($statement)){
      $user[nama] = $nama;
      $user[username] = $username;
      $user[email] = $email;
      $user[password] = $password;
    }

    echo json_encode($user);

    mysqli_stmt_close($statement);

    mysqli_close($con);
?>
