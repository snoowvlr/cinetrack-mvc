<?php
require_once __DIR__ . "/../config/database.php";

function listarFilmes(){
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM filmes ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function adicionarFilme($titulo, $diretor, $genero, $ano){
    $pdo = getConnection();
    $stmt = $pdo->prepare("INSERT INTO filmes (titulo, diretor, genero, ano) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$titulo, $diretor, $genero, $ano]);
}

function buscarFilme($id){
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM filmes WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarFilme($id, $titulo, $diretor, $genero, $ano){
    $pdo = getConnection();
    $stmt = $pdo->prepare("UPDATE filmes SET titulo=?, diretor=?, genero=?, ano=? WHERE id=?");
    return $stmt->execute([$titulo, $diretor, $genero, $ano, $id]);
}

function excluirFilme($id){
    $pdo = getConnection();
    $stmt = $pdo->prepare("DELETE FROM filmes WHERE id=?");
    return $stmt->execute([$id]);
}
