<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineTrack 🎬</title>
  <link rel="stylesheet" href="public/styles.css">
</head>
<body>
  <header>
    <h1><a href="index.php">🎬 CineTrack</a></h1>
    <nav>
      <a href="index.php">Início</a>
      <a class="btn" href="index.php?acao=form">Novo Filme</a>
    </nav>
  </header>

  <main>
    <?php if (!empty($erro)): ?>
      <div class="alert error"><?= htmlspecialchars($erro) ?></div>
    <?php endif; ?>
    <?php include $viewFile; ?>
  </main>

  <footer>
    <p>Projeto acadêmico desenvolvido por Pedro Henrique e Vitor Forcassin.</p>
  </footer>
</body>
</html>
