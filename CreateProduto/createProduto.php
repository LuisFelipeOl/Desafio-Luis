<?php

    require("../Required/insertProduto.php");

    require_once("../Required/manterLogin.php");
    
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="createProduto.css">
        <title>Cadastro - Produto</title>
    </head>
    <body>
    
        <?php include('..\Header\header.php'); ?>

        <main class="modal">
            <form method="POST" enctype="multipart/form-data">
                <div class="registro">
                    <h1>Cadastre seu produto aqui!</h1><br>
                </div>
                <div class="pedaco"> 
                    <label for="nome">Nome do Produto:</label><br>
                    <input class="input" type="text" name="nome" id="nome" required><br>
                    <span data_placeholder=""></span>
                </div>
                <div class="pedaco">
                    <label for="preco">Preço:</label><br>
                    <input class="input" type="text" name="preco" id="preco" required><br>
                    <span data_placeholder=""></span>
                </div>
                <div class="caixa-de-texto">
                    <label for="descricao">Descrição:</label><br>
                    <textarea class="text-area" name="descricao" id="descricao"></textarea><br>
                </div>
                <div class="image">
                    <label for="imagem">Imagem do produto:<input class="imagem" type="file" name="imagem" id="imagem" required></label><br>
                </div>
                <div class="botao">
                    <form action="../Required/insertProduto.php" enctype="multipart/form-data">
                        <button class="botao-configurado" type="submit">Criar</button>
                    </form>
                </div>
            </form> 

            <a href="../Produtos/produtos.php" class="voltar">Ver produtos</a> 

        </main>
        <footer>
            <div class="copy">&copy 2020</div>
        </footer>
    </body>
</html>
