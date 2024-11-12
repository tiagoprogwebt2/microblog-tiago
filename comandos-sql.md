# Operações CRUD usando SQL

## Resumo

- C: Criar/Inserir dados    -> INSERT
- R: (R) Ler dados          -> SELECT
- U: (U) Atualizar dados    -> UPDATE
- D: (D) Excluir dados      -> DELETE

## Exemplos para tabela "usuarios"

### Inserindo usuarios

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Tiago', 'tiago@gmail', '123senac', 'admin');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Chapolin', 'chapolin@gmail', '456', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Didi Mocó', 'didi@msn', '000', 'editor');

INSERT INTO usuarios (nome, email, senha, tipo)
VALUES ('Naruto', 'naruto@gmail.com', '000', 'editor');