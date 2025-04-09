<?php
    //ISSET - существование
    //EMPTY - пустота

    require_once "connect-db.php";
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if(!empty($email) && !empty($pass)){
        $query_check_user = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$pass'");
        
        if (mysqli_num_rows($query_check_user) > 0){
            $user = mysqli_fetch_assoc($query_check_user);
            
            setcookie("idUserSave", $user['iduser'], time()+3600, "/");
            setcookie("id_user", $user['iduser'], time()+1000, "/");
            
            echo "<script>
                alert(\"Добро пожаловать\");
                location.href='profile.php';
            </script>";
        }
        else{
            echo "<script>
            alert(\"Такого пользователя нет\");
            location.href='index.php';
        </script>";
        }
    }
    else{
        echo "<script>
        alert(\"Данные пусты\");
        location.href='index.php';
    </script>";
    }
?>