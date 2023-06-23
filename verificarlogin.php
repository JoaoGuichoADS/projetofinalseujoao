<?php
$nomecorreto = "thainaardias";
$senhacorreta = "Trd242517";

if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $nome = ($_POST["login"]);
    $senha = ($_POST["senha"]);

    if($nome == $nomecorreto && $senha == $senhacorreta) {
        session_start();
        $_SESSION["login"] = $_POST["login"];
        header("Location: calculadora.php");
    }
    else {
        header("Location: index.html");

    }
}

?>