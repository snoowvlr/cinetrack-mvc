<?php
require_once __DIR__ . "/../models/Filme.php";

function render($view, $vars = []) {
  extract($vars);
  $viewFile = __DIR__ . "/../views/{$view}.php";
  require __DIR__ . "/../views/layout.php";
}

function index(){
  $filmes = listarFilmes();
  render('filmes_listar', ['filmes' => $filmes]);
}

function form($id = null){
  $filme = $id ? buscarFilme($id) : null;
  render('filmes_form', ['filme' => $filme]);
}

function salvar(){
  $id      = $_POST['id'] ?? null;
  $titulo  = trim($_POST['titulo'] ?? '');
  $diretor = trim($_POST['diretor'] ?? '');
  $genero  = trim($_POST['genero'] ?? '');
  $ano     = $_POST['ano'] ?? null;

  if (!$titulo || !$diretor) {
    $erro = "Título e Diretor são obrigatórios.";
    return render('filmes_form', ['filme' => compact('id','titulo','diretor','genero','ano'), 'erro' => $erro]);
  }

  if ($id) atualizarFilme($id, $titulo, $diretor, $genero, $ano);
  else     adicionarFilme($titulo, $diretor, $genero, $ano);

  header("Location: index.php");
  exit;
}

function deletar($id){
  if ($id) excluirFilme($id);
  header("Location: index.php");
  exit;
}
