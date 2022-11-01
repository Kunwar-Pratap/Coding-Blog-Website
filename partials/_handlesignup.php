<?php 
    $showError = "false";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        include "_dbconnect.php";
        $user_name = $_POST["name"];
        $user_email = $_POST["email"];
        $password = $_POST["password"];
        $cPassword = $_POST["cPassword"];

        $existSql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_num_rows($result);
        if($numRows > 0){
            $showError =  "Email is already in use";
        }
        else{
            if($password == $cPassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `cts`) VALUES ('$user_name', '$user_email', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $showAlert = true;
                    header('Location: /codingblogwebsite/index.php?signupsuccess=true');
                    exit();
                }
            } 
            else{
                $showError = "Password do not match";
            }
        }
        header('Location: /codingblogwebsite/index.php?signupsuccess=false&error=$showError');
    }
?>