create database sistema;
use sistema;

create table tb_funcionario(
cod_funcionario char(6) primary key not null,
cpf_funcionario char(14)not null,
rg_funcionario char(12) not null,
nome_funcionario varchar(55) not null,
data_nasc_funcionario date,
data_adm_funcionario date,
sexo_funcionario char(1) not null,
fone_resi_funcionario char (10) not null,
fone_cel_funcionario char (11) not null,
cep_funcionario char (8) not null,
cidade_funcionario char(50) not null,
bairro_funcionario char(50) not null,
endereco_funcionario varchar(50) not null,
numero_funcionario varchar (6) not null,
complemento_funcionario varchar (30) not null,
email_funcionario varchar (50) not null,
senha_funcionario varchar (15) not null)

create table tb_cliente(
	cpf_cliente char(14) primary key not null,
    nome_cliente varchar(55) not null,
    data_nasc_cliente date not null,
    sexo_cliente char(1) not null,
    cep_cliente char(8) not null,
    cidade_funcionario char(50) not null,
    bairro_funcionario char(50) not null,
	endereco_cliente varchar(50) not null,
    numero_cliente char(6) not null,
    complemento_cliente varchar(30),
    fone_res_cliente char(10) not null,
    fone_cel_cliente char(11) not null,
    email_cliente varchar(50) not null,
    senha_cliente varchar(15) not null,
    pontos_cliente int(8) not null)
    ALTER TABLE tb_cliente
DROP PRIMARY KEY;
    ALTER TABLE tb_cliente
ADD PRIMARY KEY (email_cliente);

create table tb_cupom(
	cod_cupom char(6) primary key not null,
    nome_cupom varchar(10) not null,
    preco_cupom varchar(7) not null,
    pontos_cliente int(8) not null)
    
create table tb_produto(
	cod_produto int(3) primary key not null,
    nome_produto varchar(7) not null,
    preco_produto decimal(6) not null)


	foreign key (pontos_cliente) references tb_cliente (pontos_cliente)
    )    

create table tb_pedido(
	cod_pedido int(9) primary key not null,
    cod_funcionario char(6) not null,
    cpf_cliente char(14) not null,
    cod_produto int(3) not null,
    peso_pedido int(8) not null,
    preco_produto decimal(6) not null,
    pontos_cliente int(8) not null,
	nome_produto  varchar(7) not null)
	alter table tb_pedido foreign key (cod_funcionario) references tb_funcionario (cod_funcionario),
	foreign key (cpf_cliente) references tb_cliente (cpf_cliente),
	foreign key (cod_produto) references tb_produto (cod_produto),
	foreign key (pontos_cliente) references tb_cliente (pontos_cliente)
	      
   
   create table tb_adm(
	login_adm varchar(15) primary key not null,
	senha_adm varchar(10) not null)


ALTER TABLE tb_cliente MODIFY COLUMN email_cliente varchar(50) primary key not null;
insert into tb_adm(login_adm, senha_adm)
values ('adm01', md5('adm2020'));

ALTER table tb_cliente modify column  bairro_cliente char(50) not null;

ALTER TABLE tb_cliente MODIFY COLUMN cpf_cliente char(11) not null;
	show tables;
	SELECT * from tb_pedido;
    SELECT count(*) FROM tb_cliente;
    
    
alter table tb_cliente change fone_cel_cliente celular_cliente char(11) not null;
insert into tb_cliente(pontos_cliente)
values (200);

UPDATE tb_cliente
SET pontos_cliente='200'+pontos_cliente
WHERE cpf_cliente='51741935857';

DELETE FROM tb_cliente WHERE nome_cliente = 'teste2';


