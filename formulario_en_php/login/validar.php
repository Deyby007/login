<?php 
include ('../conexion.php');

//valida el loging
if (isset($_POST['Iniciar_sesion'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sqly = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$pass'";
    $result = mysqli_query($conex, $sqly);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['user'] = $email;
        header("location:../inisio.php");   
        } else {
            echo '<script> alert("El usuario no existe"); window.location.href = "login.php"; </script>' ;
        }
    
}

/*
$email = $_POST['email'];
$password = $_POST['contraseña'];
$query = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$password'";
$result = $conex -> query($query);
if($result->num_rows > 0){
    session_start();
    $_SESSION['gg'] = $email;
    echo "<script> alert('sesion inisiada'); window.location.href = 'inicio.php'</script>";
}else{
    echo "<script> alert('correo o contrasena incorrectos'); window.location.href = 'login.php'</script>";
}*/



     



?>