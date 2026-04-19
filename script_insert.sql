-- COMANDO PARA INSERIR (CREATE)
-- insert into nome_da_tabela (coluna) values (valores)

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Ana Maria', 'ana@gmail.com', 'senha123', '2025-10-25');


insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values 
('Carlos Junior' , 'carlos@gmail.com' , '44510' , '2025-10-25');


insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Vitor', 'vitor@gmail.com', '27029',' 2025-10-25');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Rosana', 'rosana@yahoo.com', '60017',' 2025-10-25');


insert into tb_categoria
(nome_categoria, id_usuario)
values 
('Alimentação', 1);


insert into tb_categoria
(nome_categoria, id_usuario)
values 
('Viagens', 3);


insert into tb_categoria
(nome_categoria, id_usuario)
values 
('Financiamento', 5);

insert into tb_categoria
(nome_categoria, id_usuario , id_categoria)
values 
('Dentista', 6);


insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Empresa Colchão', '43998554792', 'Rua Euclides', 1);


insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Empresa Comer bem', '43998556623', 'Rua do Restaurantes', 3);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Empresa BK', '43999665791', 'Rua dos Imigrante', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values 
('Empresa Moda Feminina', '43992534783', 'Rua Henrique Mansano', 6);


insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta , id_usuario)
values 
('Bradesco' , '1122','56789-0', 4500.20 , 1);


insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta , id_usuario)
values 
('Nubank' , '1388', '45633', 2600.40 , 3);


insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta , id_usuario)
values 
('Itau' , '3058', '92045', 100.300 , 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta , id_usuario)
values 
('Caixa' , '5897', '33452', 30.000 , 6);



insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa , id_conta, id_categoria, id_usuario)
values 
(1, '2025-10-25', 45 , null , 1 , 1 , 2 , 1);


insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa , id_conta, id_categoria, id_usuario)
values 
(3, '2025-10-25', 85.50 , 'pagamento adiantado ', 3 , 3 , 4 , 3);


INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(4, '2025-10-25', 10.700, 'pagamento adiantado', 2, 1, 1, 1);



insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa , id_conta, id_categoria, id_usuario)
values 
(5, '2025-10-25', 35.07 , null, 2 , 1 , 1 , 1);