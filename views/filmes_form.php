<section class="card">
  <h2><?= isset($filme['id']) ? "Editar Filme" : "Novo Filme" ?></h2>

  <form method="post" action="index.php?acao=salvar" class="form">
    <input type="hidden" name="id" value="<?= $filme['id'] ?? '' ?>">

    <label>Título* 
      <input type="text" name="titulo" value="<?= htmlspecialchars($filme['titulo'] ?? '') ?>" required>
    </label>

    <label>Diretor* 
      <input type="text" name="diretor" value="<?= htmlspecialchars($filme['diretor'] ?? '') ?>" required>
    </label>

    <label>Gênero 
      <input type="text" name="genero" value="<?= htmlspecialchars($filme['genero'] ?? '') ?>">
    </label>

    <label>Ano 
      <input type="number" name="ano" value="<?= htmlspecialchars($filme['ano'] ?? '') ?>">
    </label>

    <div class="form-actions">
      <a class="btn" href="index.php">Cancelar</a>
      <button class="btn primary" type="submit">Salvar</button>
    </div>
  </form>
</section>
