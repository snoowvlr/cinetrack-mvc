CineTrack — Projeto MVC em PHP

O **CineTrack** é um projeto acadêmico desenvolvido em **PHP** seguindo o padrão **MVC (Model-View-Controller)**.  
O sistema realiza operações **CRUD** (Criar, Ler, Atualizar e Excluir) conectadas a um banco de dados **MySQL** hospedado na **InfinityFree**.

---

Funcionalidades:
- Adicionar novos filmes  
- Editar informações existentes  
- Excluir registros  
- Listar todos os filmes cadastrados  
- Interface moderna e responsiva  

---

Estrutura do Projeto:
config/ → conexão com o banco de dados
controllers/ → lógica de controle das ações
models/ → acesso e manipulação de dados
views/ → interface visual e formulários
public/ → arquivos de estilo (CSS) e recursos estáticos


---

Banco de Dados:
Tabela usada:
```sql
CREATE TABLE filmes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(100) NOT NULL,
  diretor VARCHAR(100) NOT NULL,
  genero VARCHAR(50),
  ano INT
);
