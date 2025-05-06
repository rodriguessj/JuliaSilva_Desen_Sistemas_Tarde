create database empresa;
use empresa;

create table cliente (
id_cliente int not null auto_increment,
nome varchar(50) not null,
endereco varchar(80) not null,
telefone varchar(20) not null,
email varchar(50) not null,
primary key (id_cliente)
);

create table usuario (
nome varchar(50) default null,
usuario varchar(10) default null,
senha varchar(32) default null,
nivel int default null
);

INSERT INTO cliente (nome, endereco, telefone, email) VALUES
('João Silva', 'Rua das Flores, 123', '(11) 98765-4321', 'joao.silva@email.com'),
('Maria Oliveira', 'Avenida Paulista, 456', '(11) 91234-5678', 'maria.oliveira@email.com'),
('Carlos Souza', 'Rua dos Três Irmãos, 789', '(21) 99876-5432', 'carlos.souza@email.com'),
('Ana Santos', 'Rua do Sol, 10', '(21) 93333-4444', 'ana.santos@email.com'),
('Felipe Lima', 'Rua da Liberdade, 200', '(31) 91919-1919', 'felipe.lima@email.com'),
('Juliana Costa', 'Rua dos Açores, 456', '(31) 93123-4567', 'juliana.costa@email.com'),
('Roberto Pereira', 'Rua das Palmeiras, 321', '(41) 98888-7777', 'roberto.pereira@email.com'),
('Patrícia Gomes', 'Rua das Acácias, 654', '(41) 99999-8888', 'patricia.gomes@email.com'),
('Lucas Almeida', 'Avenida Brasil, 1010', '(51) 93000-0000', 'lucas.almeida@email.com'),
('Larissa Martins', 'Rua dos Eucaliptos, 222', '(51) 95000-1111', 'larissa.martins@email.com'),
('Ricardo Oliveira', 'Rua São João, 345', '(61) 91234-5678', 'ricardo.oliveira@email.com'),
('Fernanda Silva', 'Rua 15 de Novembro, 567', '(61) 93333-4444', 'fernanda.silva@email.com'),
('Marcos Pereira', 'Avenida das Nações, 890', '(71) 98888-7777', 'marcos.pereira@email.com'),
('Camila Rocha', 'Rua do Campo, 432', '(71) 99123-4567', 'camila.rocha@email.com'),
('Eduardo Ribeiro', 'Rua do Rio, 56', '(85) 99666-5555', 'eduardo.ribeiro@email.com'),
('Roberta Alves', 'Rua Floriano Peixoto, 12', '(85) 91234-6789', 'roberta.alves@email.com'),
('Tiago Souza', 'Rua dos Oitis, 678', '(82) 96789-1234', 'tiago.souza@email.com'),
('Cíntia Cardoso', 'Rua Barão de Mauá, 90', '(82) 93123-4567', 'cintia.cardoso@email.com'),
('Gustavo Lima', 'Rua da Paz, 234', '(91) 92222-3333', 'gustavo.lima@email.com'),
('Sofia Almeida', 'Avenida Santa Maria, 876', '(91) 98765-4321', 'sofia.almeida@email.com');

