CREATE DATABASE IF NOT EXISTS curriculo DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE curriculo ;
-- SET PASSWORD FOR 'user-name-here'@'hostname' = PASSWORD('new-password');
-- DROP DATABASE curriculo;

-- -----------------------------------------------------
-- Table `curriculo`.`cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS cargos (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(45) NOT NULL,
  descricao VARCHAR(255) NOT NULL
);
INSERT INTO cargos VALUES(null, 'Administrador', 'pika das galáxias');
INSERT INTO cargos VALUES(null, 'funcionário', 'dont have power');

-- -----------------------------------------------------
-- Table `curriculo`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS usuarios (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  id_cargo INT NOT NULL,

  FOREIGN KEY (id_cargo) REFERENCES cargos(id)
  ON UPDATE CASCADE ON DELETE RESTRICT
);
INSERT INTO usuarios VALUES (null, 'admin', '', 1);


-- -----------------------------------------------------
-- Table `curriculo`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS enderecos (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cep VARCHAR(45) NOT NULL,
  rua VARCHAR(255),
  numero INT,
  complemento VARCHAR(255),
  bairro VARCHAR(255),
  cidade VARCHAR(255),
  estado VARCHAR(255),
  pais VARCHAR(255)
);


-- -----------------------------------------------------
-- Table `curriculo`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS funcionarios (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  id_endereco INT NOT NULL,
  nome VARCHAR(255) NOT NULL,
  data_nas DATE NOT NULL,
  sexo CHAR(1) NOT NULL,
  cpf VARCHAR(45) NOT NULL,
  nacionalidade VARCHAR(255) NOT NULL,
  naturalidade VARCHAR(255),
  estado_civil VARCHAR(45) NOT NULL,
  nomedo_pai VARCHAR(255) NOT NULL,
  nomeda_mae VARCHAR(255) NOT NULL,
  rg VARCHAR(45) NOT NULL,
  data_emissao_rg DATE NOT NULL,
  orgao_emissor_rg VARCHAR(45) NOT NULL,
  numero_pis VARCHAR(45) NOT NULL,
  numero_pasep VARCHAR(45) NOT NULL,
  telefone VARCHAR(45),
  telefone_celular VARCHAR(45) NOT NULL,
  email VARCHAR(255) NOT NULL,

  FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES enderecos(id)
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`formacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS formacoes (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  id_endereco INT NOT NULL,
  situacao VARCHAR(45) NOT NULL,
  periodo VARCHAR(45) NOT NULL,
  nivel VARCHAR(45) NOT NULL,
  instituicao VARCHAR(255) NOT NULL,
  observacao VARCHAR(500),
  certificado_formacao BLOB NOT NULL,

  FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id)
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES enderecos(id)
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS eventos (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  id_endereco INT,
  nome VARCHAR(255) NOT NULL,
  tipo VARCHAR(45) NOT NULL,
  data_inicial DATE NOT NULL,
  data_final DATE NOT NULL,
  descricao VARCHAR(500),
  area VARCHAR(45) NOT NULL,
  apresentador VARCHAR(255),
  certificado_evento BLOB NOT NULL,

  FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id)
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES enderecos(id)
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`experiencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS experiencias (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  id_endereco INT,
  empresa VARCHAR(255) NOT NULL,
  cargo VARCHAR(255) NOT NULL,
  data_entrada DATE NOT NULL,
  data_saida DATE,
  descricao VARCHAR(500),
  situacao VARCHAR(45),

  FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id)
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES enderecos(id)
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS cursos (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  id_endereco INT,
  nome VARCHAR(255) NOT NULL,
  periodo VARCHAR(45) NULL,
  carga_horaria DOUBLE NOT NULL,
  turno VARCHAR(45) NOT NULL,
  descricao VARCHAR(500),
  total_aulas INT NOT NULL,
  certificado_curso BLOB NOT NULL,

  FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id)
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES enderecos(id)
  ON UPDATE CASCADE ON DELETE RESTRICT
);
