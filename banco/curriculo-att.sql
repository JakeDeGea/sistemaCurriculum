CREATE DATABASE IF NOT EXISTS curriculo DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE curriculo ;

-- -----------------------------------------------------
-- Table `curriculo`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario (
  id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  login VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  nivelAcesso CHAR(1) NOT NULL
);

-- -----------------------------------------------------
-- Table `curriculo`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS endereco (
  id_endereco INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
CREATE TABLE IF NOT EXISTS funcionario (
  id_funcionario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  id_endereco INT NOT NULL,
  nome VARCHAR(255) NOT NULL,
  dataNas DATE NOT NULL,
  sexo CHAR(1) NOT NULL,
  cpf VARCHAR(45) NOT NULL,
  nacionalidade VARCHAR(255) NOT NULL,
  naturalidade VARCHAR(255),
  estadoCivil VARCHAR(45) NOT NULL,
  nomedoPai VARCHAR(255) NOT NULL,
  nomedaMae VARCHAR(255) NOT NULL,
  rg VARCHAR(45) NOT NULL,
  dataEmissaoRG DATE NOT NULL,
  orgaoEmissorRG VARCHAR(45) NOT NULL,
  numeroPis VARCHAR(45) NOT NULL,
  numeroPasep VARCHAR(45) NOT NULL,
  telefone VARCHAR(45),
  telefoneCelular VARCHAR(45) NOT NULL,
  email VARCHAR(255) NOT NULL,
  
  FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) 
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES endereco(id_endereco) 
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`formacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS formacao (
  id_formacao INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  id_endereco INT NOT NULL,
  situacao VARCHAR(45) NOT NULL,
  periodo VARCHAR(45) NOT NULL,
  nivel VARCHAR(45) NOT NULL,
  instituicao VARCHAR(255) NOT NULL,
  observacao VARCHAR(500),
  certificadoFormacao BLOB NOT NULL,
  
  FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario) 
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES endereco(id_endereco) 
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS evento (
  id_evento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_endereco INT,
  nome VARCHAR(255) NOT NULL,
  tipo VARCHAR(45) NOT NULL,
  dataInicial DATE NOT NULL,
  dataFinal DATE NOT NULL,
  descricao VARCHAR(500),
  area VARCHAR(45) NOT NULL,
  apresentador VARCHAR(255),
  certificadoEvento BLOB NOT NULL,
  
  FOREIGN KEY (id_endereco) REFERENCES endereco(id_endereco) 
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`experiencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS experiencia (
  id_experiencia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  id_endereco INT,
  empresa VARCHAR(255) NOT NULL,
  cargo VARCHAR(255) NOT NULL,
  dataEntrada DATE NOT NULL,
  dataSaida DATE,
  descricao VARCHAR(500),
  situacao VARCHAR(45),

  FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario) 
  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (id_endereco) REFERENCES endereco(id_endereco) 
  ON UPDATE CASCADE ON DELETE RESTRICT
);


-- -----------------------------------------------------
-- Table `curriculo`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS curso (
  id_curso INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_funcionario INT NOT NULL,
  nomeCurso VARCHAR(255) NOT NULL,
  periodoCurso VARCHAR(45) NULL,
  cargaHoraria DOUBLE NOT NULL,
  turno VARCHAR(45) NOT NULL,
  descCurso VARCHAR(500),
  totAulas INT NOT NULL,
  certificadoCurso BLOB NOT NULL,
  
  FOREIGN KEY (id_funcionario) REFERENCES funcionario(id_funcionario) 
  ON UPDATE CASCADE ON DELETE RESTRICT
);