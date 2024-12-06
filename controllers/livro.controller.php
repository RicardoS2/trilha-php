<?php

require 'dados.php';

$id = $_REQUEST['id'];

$filtroDeLivros = array_filter($livros, fn($l) => $l['id'] == $id);

$livro = array_pop($filtroDeLivros);

$view =  "livro";

require "views/template/app.php";
