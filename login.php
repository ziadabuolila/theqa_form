<!DOCTYPE html>
<html lang="en">
<?php
    include 'inc/config.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='img/logo_icon.png'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Theqa | ثقة</title>
</head>
<body>
    <?php
        include 'inc/config.php';
        session_start();

        $pssfalse = '';
        $emailfalse = '';

        @$password=$_POST['password'];
        @$email=$_POST['email'];
        if(isset($_POST['submit'])){

            $con = new PDO("mysql:host=localhost;dbname=theqa_form","root","");
            $login = $con->prepare("SELECT * FROM users WHERE user_email =:email");
        
            $login->bindParam("email",$email);
            $login->execute();

            @$data = $login->fetchObject();
            @$_SESSION['user_id']= $data->user_id;
            @$_SESSION['data']= $data;

            if($login->rowCount() === 1){
                if($password == $data->user_password){
                    if($data->active == 'true'){
                        echo "<script>
                            window.location.replace('index.php?userid=$data->user_id');
                        </script>";
                    }else{
                        echo"<div class='alert alert-warning' role='alert' style='text-align:center; direction:rtl; '>
                            <h4 style='color:rgb(245, 74, 74);'>حسابك غير مفعل</h4>
                            <h6>الرجاء التواصل مع المسئولين لتفعيل حسابك</h6>
                        </div>";
                    }
                }else{
                    echo"<div class='alert alert-danger' role='alert' style='text-align:center; direction:rtl; '>
                        ! الرجاء اكتب كلمة المرور صحيحة
                        <br> 
                        تحقق من كلمة المرور الذي كتبته 
                    </div>";
                    $pssfalse = 'false';
                }
            }else{
                echo"<div class='alert alert-danger' role='alert' style='text-align:center; direction:rtl; '>
                        ! الرجاء اكتب البريد الاكتروني صحيحا
                        <br> 
                        تحقق من البريد الذي كتبته 
                        '<span style='color:rgb(82, 106, 240);'>
                            $email
                        </span>'
                    </div>";
                $emailfalse = 'false';
            }
        }
    ?>
    <div class="content">
        <div class="container">
            <div class="header">
                <div class="img">
                    <img src="img/logo.png" class="logo">
                </div>
                <div class="title">
                    <hr>
                    <div>
                        Login To Theqa
                    </div>
                </div>
            </div>
            <form method="POST" id="loginForm">
                <div>
                    <div>
                        <i class="fa-solid fa-user"></i>
                        <input type="email" id="mail" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div>
                        <i class="fa-solid fa-unlock"></i>
                        <input type="password" id="pass_1" name="password" placeholder="Enter Your Password" required>
                        <i class="fa-regular fa-eye-slash" id="show" onclick="show_password(this.id)"></i>
                    </div>
                </div>
                <div class="btns">
                    <button type="submit" id="submit" name="submit" class="btn btn-success w-100">
                        Login
                    </button>
                </div>
            </form>
            
            <?php 
                echo "<script>
                const email = document.querySelector('#mail');
                const password = document.querySelector('#pass_1');

                email.value = '$email';
                password.value = '$password';

                if('$pssfalse' == 'false'){
                    password.style.border = '1px solid red';
                    password.addEventListener('focus', function(){
                        password.style.boxShadow = '4px 4px 0 #dc3545';
                    });
                    password.addEventListener('blur', function() {
                        password.style.boxShadow = 'none';
                    });
                }else if('$emailfalse' == 'false'){
                    email.style.border = '1px solid red';
                    email.addEventListener('focus', function(){
                        email.style.boxShadow = '4px 4px 0 #dc3545';
                    });
                    email.addEventListener('blur', function() {
                        email.style.boxShadow = 'none';
                    });
                }
            </script>";
            ?>
        </div>
    </div>
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/log.js"></script>
</body>
</html>