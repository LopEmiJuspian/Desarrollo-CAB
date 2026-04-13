<?php

//asguramos inicio de sesion
sesion_start();
//Hacemos conexion con la BD
$conn = new mysqli("localhost", "root", "", "discapacidad");
if ($conn->connect_error){
    die("error de conexión: " . $conn->connect_error);

}

//Verificacion para el formulario enviado

if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    //aqui recogemos documento y contraseña
    $documento = $_POST['documento'] ?? null;
    $password = $_POST['contrasena'] ?? null;

    //ciframos contraseña
    $password_hash = hash('sha256', $password);

    //consultar usuario en BD
    $stmt =$conn->prepare("SELECT doc_pronal... etc FROM usuarios... WHERE doc_pronal =?");

    $stmt->bind_param("s", $documento);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $stmt->fetch_assoc();

    //Validacion existencia de ususario:
    if (!$usuario) {
        echo "El documento ingresado no se encuentra registrado";
    } else {
        //se compara contraseña cifrada
        if ($usuario['user_paswword_hash'] === $password_hash) {

            //los siguientes datos se guardan en la sesion
            $_SESSION['login']= true;
            $_SESSION['doc_pronal']= $usuario['doc_pronal'];
            $_SESSION['nombres']= $usuario['prof_nombres..'];
            $_SESSION['apellidos']= $usuario[''];
            $_SESSION['rol']= $usuario[''];
            $_SESSION['estado']= $usuario[''];

            //Redirigimos al dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Contraseña incorrecta";

        }
    }

}else {
    //Si se recibe GET se muestra nuevamente login.html
    include("templates/login.html");
}
?>