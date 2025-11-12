<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . "/controllers/FilmeController.php";

$acao = $_GET['acao'] ?? 'index';
$id   = $_GET['id'] ?? null;

switch ($acao) {
  case 'index':   index(); break;
  case 'form':    form($id); break;
  case 'salvar':  salvar(); break;
  case 'deletar': deletar($id); break;
  default: echo "Ação inválida!";
}
