<?php

require("../Required/pdo.php");

function verificarNome($nomePost) {
    if(strlen($nomePost) == 0) {
        return false;
    } else {
        return true;
    }
}

function verificaEmail($emailPost) {
    if(strlen($emailPost) == 0) {
        return false; 
    } else {
        return true;
    }
}

function verificaSenha($senhaPost) {
    if(strlen($senhaPost) < 6) {
        return false;
    } else {
        return true;
    }
}

function comparaSenha($senhaPost, $senhaConfirmadaPost) {
    if($senhaPost != $senhaConfirmadaPost) {
        return false;
    } else {
        return true;
    }
}

$nomePost = true;
$emailPost = true;
$senhaPost = true;
$senhaConfirmadaPost = true;

if ($_POST) {

    $nome = $_POST['nomeUsuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaConfirmada = $_POST['confirmaSenha'];
    
    $nomePost = verificarNome($nome);
    $emailPost = verificaEmail($email);
    $senhaPost = verificaSenha($senha);
    $senhaConfirmadaPost = comparaSenha($senha, $senhaConfirmada);
    
    if ($nomePost && $emailPost && $senhaPost && $senhaConfirmadaPost) {
        $query = $db -> prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha);");
        $cadastrado = $query -> execute([':nome' => $nome, ':email' => $email, ':senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)]);
    } else {
        $cadastrado = false;
    }
     
    if ($cadastrado) {
        header("Location: ../CreateUsuario/createUsuario.php");
    }
}

?>
