CREATE TABLE IF NOT EXISTS Categoria (
    idCategoria INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO Categoria (nome) VALUES
('Eletrônicos'),
('Roupas'),
('Utilidades Domésticas'),
('Papelaria');
