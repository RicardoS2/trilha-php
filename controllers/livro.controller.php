<?php
require 'dados.php';

// Obtém o ID do livro
$id = $_REQUEST['id'];

// Filtra os livros com base no ID
$filtroDeLivros = array_filter($livros, fn($data) => $data['id'] == $id);

// Pega o livro filtrado
$livro = array_pop($filtroDeLivros);

// Verifica se o livro foi encontrado
if (empty($livro)) {
    echo "Livro não encontrado!";
    exit;
}

// Define a view que será carregada
$view = "livro";

// Carrega o template
require "views/template/app.php";