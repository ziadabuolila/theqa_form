<?php
    require('../inc/config.php');

    $IDuser = $_GET['userid'];
    if(isset($_POST['submit'])){
        $mood = $_GET['mood'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ability = $_POST['ability'];
        $job = $_POST['job'];
        $active = $_POST['active'];
        if($mood == 'create'){
            mysqli_query($conection, "INSERT INTO users(user_name, user_email, user_password, ability, job, active) VALUES('$name', '$email', '$password', '$ability', '$job', '$active')");
        }else if($mood == 'update'){
            $id = $_POST['rowid'];
            mysqli_query($conection, "UPDATE users SET user_name='$name', user_email='$email', user_password='$password', ability='$ability', job='$job', active='$active' WHERE user_id=$id");
        }
    }
    header('location:../settings.php?userid='.$IDuser."&mood=create");
?>