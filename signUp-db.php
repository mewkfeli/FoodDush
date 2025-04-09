<?php
    require_once "connect-db.php";
    
    if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['username'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        
        if (empty($username) || empty($email) || empty($password)) {
            echo "<script>
            alert(\"Заполните все поля\");
            location.href='signup.php';
            </script>";
        }
        
        $passHash = password_hash($password, PASSWORD_DEFAULT);
        
        $query_check_user = mysqli_query($conn, "INSERT INTO `user`(`email`, `password`, `user_name`, `birthdate`, `phone_number`, `url_photo`, `status`) VALUES ('$email','$password','$username','2000-01-01','','','Активен')");
        if (password_verify($password, $passHash)) {
            echo "<script>
            alert('Вы зарегистрированы!');
            location.href='profile.php';
            </script>";
        } else {
            echo "<script>
            alert('Error during registration');
            location.href='signUp-db.php';
            </script>";
        }
    }