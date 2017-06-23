<?php
  function validarDatos($datos) {
    $errores = [];

    if (trim($datos["nombre"]) === "") {
      $errores["nombre"] = "No ingreso ningun nombre.";
    }

    $email = trim($_POST["email"]);
    if (trim($datos["email"]) === "") {
      $errores["email"] = "No ingreso ningun Email.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$errores["email"] = "Mal formato de email";
  	}

    if (strlen(trim($datos["username"]) === "")) {
      $errores["username"] = "No ingreso ningun Username.";
    }
    $username = trim($datos["username"]);
    if (strlen($username) < 8) {
      $errores["usernameLen"] = "Username ingresado menor a 8 caracteres";
    }

    $pass = trim($_POST["password"]);
    $passConf = trim($_POST["passwordConfir"]);

    if (strlen(trim($datos["password"]) === "")) {
      $errores["password"] = "No ingreso ninguna Contraseña.";
    } else if (strlen($pass) < 8) {
      $errores["passwordLen"] = "La Contraseña ingresada en menor a 8 caracteres.";
    } else if ($pass != $passConf) {
      $errores["passwordConfir"] = "La Contraseña y la Conifirmacion son distintas.";
    }


    return $errores;
  };

  
 ?>
