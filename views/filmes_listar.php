<section class="card">
  <h2>Filmes Cadastrados</h2>

  <?php if (empty($filmes)): ?>
    <p>Nenhum filme cadastrado.</p>
  <?php else: ?>
  <table>
    <thead>
      <tr>
        <th>#</th><th>Título</th><th>Diretor</th><th>Gênero</th><th>Ano</th><th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($filmes as $filme): ?>
        <tr>
          <td><?= $filme['id'] ?></td>
          <td><?= htmlspecialchars($filme['titulo']) ?></td>
          <td><?= htmlspecialchars($filme['diretor']) ?></td>
          <td><?= htmlspecialchars($filme['genero']) ?></td>
          <td><?= htmlspecialchars($filme['ano']) ?></td>
          <td>
            <a class="btn" href="index.php?acao=form&id=<?= $filme['id'] ?>">✏️ Editar</a>
            <a class="btn danger" href="index.php?acao=deletar&id=<?= $filme['id'] ?>"
               onclick="return confirm('Deseja excluir?')">🗑️ Excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
</section>
