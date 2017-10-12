<?php
    require("password.php");

    $connect = mysqli_connect("localhost", "root", "", "db_itrip");

    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // $statement = mysqli_prepare($con, "INSERT INTO user (nama, username, email, password) VALUES (?, ?, ?, ?)");
    // mysqli_stmt_bind_param($statement, "ssss", $nama, $username, $email, $password);
    // mysqli_stmt_execute($statement);

    function registerUser() {
       global $connect, $nama, $email, $username, $password;
       $passwordHash = password_hash($password, PASSWORD_DEFAULT);
       $statement = mysqli_prepare($connect, "INSERT INTO pengguna (nama, username, email, password) VALUES (?, ?, ?, ?)");
       mysqli_stmt_bind_param($statement, "ssss", $nama, $username, $email, $passwordHash);
       mysqli_stmt_execute($statement);
       mysqli_stmt_close($statement);
   }

   function usernameAvailable() {
       global $connect, $username;
       $statement = mysqli_prepare($connect, "SELECT * FROM pengguna WHERE username = ?");
       mysqli_stmt_bind_param($statement, "s", $username);
       mysqli_stmt_execute($statement);
       mysqli_stmt_store_result($statement);
       $count = mysqli_stmt_num_rows($statement);
       mysqli_stmt_close($statement);
       if ($count < 1){
           return true;
       }else {
           return false;
       }
   }

    $response = array();
    $response["success"] = false;

    if (usernameAvailable()){
        registerUser();
        $response["success"] = true;
    }

    echo json_encode($response);
?>
