<?php
require_once "zodiac_functions.php";
SESSION_START();

// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se ha enviado el formulario de inicio de sesión
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        // Autenticar al usuario
        $username = $_POST["user"];
        $password = $_POST["pass"];

        // Datos de autenticación almacenados
        $stored_username = "fortune";
       
        $stored_hash = 'teller';

        // Verificar si los datos de inicio de sesión son válidos
        if ($username === $stored_username && $password==$stored_hash) {
            // Inicio de sesión exitoso, redirigir a zodiac.php
            $_SESSION['usuario']=$username;
            header("Location: zodiac.php");
            exit;
        } else {
            echo "Credenciales de inicio de sesión incorrectas. Por favor, intenta de nuevo.";
        }
    }
}

pageTop("Log In", BACK_MENU);
?>
<form method="POST" action="index.php">
    <label for="user">User</label>
    <input type="text" name="user" id="user"><br/>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass"><br/>
    <input type="submit" value="Log In">
    <input type="submit" name="cancel" value="Cancel">
</form>
<?php
pageBottom("2020-11-20");
?>
