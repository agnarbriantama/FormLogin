<?php
session_start();
 if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password =$_POST['password'];

        $_SESSION['username'] = 'agnar';
        $_SESSION['password'] = '123';

        if($username == 'agnar' && $password == '123'){
        	header('Location: user.php');
        } else{
        	echo "<script>alert('Login gagal, username atau password salah');document.location='login.php'</script>";
        }
    }

?>