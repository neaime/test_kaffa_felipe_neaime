<p align="center"><img src="https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/banner-redme.png" width="400"></p>

<img src="https://img.shields.io/static/v1?label=laravel&message=framework&color=blue&style=for-the-badge&logo=laravel"/>  <img src="https://img.shields.io/static/v1?label=&message=php&color=666&style=for-the-badge&logo=php"/>  <img src="https://img.shields.io/static/v1?label&message=JavaScript&color=blue&style=for-the-badge&logo=javascript"/> <img src="https://img.shields.io/static/v1?label&message=HTML&color=blue&style=for-the-badge&logo=HTML"/> <img src="https://img.shields.io/static/v1?label&message=CSS&color=blue&style=for-the-badge&logo=CSS"/>

## Tópicos

:small_blue_diamond: [Sobre o teste](#sobre-o-teste)

:small_blue_diamond: [Requisitos para executar o Teste](#requisitos-para-executar-o-teste)

:small_blue_diamond: [Instalação](#instalação)

:small_blue_diamond: [Funcionalidades](#funcionalidades)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação-arrow_forward)


O teste consiste em 9 exercícios, nos quais utilizei 3 linguagens diferente, sendo elas PHP, JavaScript e CSS.

## Sobre o Teste

O teste consiste em 9 exercícios, nos quais utilizei 3 linguagens diferente, sendo elas PHP, JavaScript e CSS.

## :warning: Requisitos para executar o Teste

:warning: [PHP => 7.2](https://www.php.net/downloads),
:warning: [Composer](https://getcomposer.org/),
:warning: [Servidor Apache, MySQL - Xampp](https://www.apachefriends.org/pt_br/index.html) :warning: Ou [Nginx, MySql - Laradock(Docker)](https://laradock.io/)


## Instalação :arrow_forward:

###### 1º - No terminal, clone o projeto: 
```
git clone https://github.com/neaime/test_kaffa_felipe_neaime.git
```

###### 2º - Instale o composer
```
composer install
```

###### 3º Gere uma Chave para o projeto
```
php artisan key:generate
```

###### 4º - Crie um banco de dados com o nome que preferir exemplo "kaffa"

###### 5º - Renomei o arquivo .env.example para .env e edite de acordo com o exemplo abaixo
```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=kaffa
DB_USERNAME=root // usuario do banco de dados. Geralmente o usuario é root
DB_PASSWORD=root // geralmente no xampp ele vem pre-configurado sem senha! no docker você coloca a senha do administrador durante a instalação.
```

###### 6º - Execute as migrations para criar a tabela no banco de dados
```
php artisan migrate
```

###### 7º - :heavy_check_mark: Tudo pronto, acesse o navegador e digite o endereço do servidor exemplo:
```
localhost/test_kaffa_felipe_neaime/public
```

## Funcionalidades - ScreenShots

##:heavy_check_mark: Exercício 1 - Verificar se o número digitado se parece com um CNPJ ou não
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-1/exercicio-1.gif)


##:heavy_check_mark: Exercício 2 - Validar se um CNPJ é valido ou não
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-2/exercicio-2.gif)

##:heavy_check_mark: Exercício 3 - Verificar se existe intersecção entre dois retângulos
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-3/exericicio-3.gif)

##:heavy_check_mark: Exercício 4 - Calcular área de intersecção de dois retângulos
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-4/exerciocio-4.gif)

##:heavy_check_mark: Exercício 5 - Cadastrar e deletar tarefas. Durante a execução deve ficar na tela.
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-5/exercicio-5.gif)

##:heavy_check_mark: Exercício 6 - Cliente REST, consumir API http://worldclockapi.com/api/json/utc/now.
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-6/exercicio-6.gif)

##:heavy_check_mark: Exercício 7 - Servidor REST, retorno da API no formato {"currentDateTime":"20190812T14:40Z"}.
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-7/exercicio-7.jpg)

##:heavy_check_mark: Exercício 8 - Criar um diagrama de relacionamento - O Script para criação do banco encontra logo após a imagem. O SELECT para consultar quantos produtos existem em uma nota está no final deste tópico
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img/diagrama-de-relacionamento.png)

##### Script para criar a base de dados do exericício 8
```
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema exercicio_8
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema exercicio_8
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exercicio_8` DEFAULT CHARACTER SET utf8 ;
USE `exercicio_8` ;

-- -----------------------------------------------------
-- Table `exercicio_8`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercicio_8`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exercicio_8`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercicio_8`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exercicio_8`.`ordens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercicio_8`.`ordens` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `clientes_id` INT NOT NULL,
  PRIMARY KEY (`id`, `clientes_id`),
  INDEX `fk_ordens_clientes1_idx` (`clientes_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_ordens_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `exercicio_8`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exercicio_8`.`produtos_has_ordens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exercicio_8`.`produtos_has_ordens` (
  `produtos_id` INT NOT NULL,
  `ordens_id` INT NOT NULL,
  PRIMARY KEY (`produtos_id`, `ordens_id`),
  INDEX `fk_produtos_has_ordens_ordens1_idx` (`ordens_id` ASC) ,
  INDEX `fk_produtos_has_ordens_produtos_idx` (`produtos_id` ASC) ,
  CONSTRAINT `fk_produtos_has_ordens_produtos`
    FOREIGN KEY (`produtos_id`)
    REFERENCES `exercicio_8`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produtos_has_ordens_ordens1`
    FOREIGN KEY (`ordens_id`)
    REFERENCES `exercicio_8`.`ordens` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
```

##### Script para verificar quantos produtos existem em cada ordem
```
SELECT ordens.id, COUNT(produtos_has_ordens.ordens_id)
FROM ordens
INNER JOIN produtos_has_ordens on produtos_has_ordens.ordens_id=ordens.id GROUP BY id
```

##:heavy_check_mark: Exercício 9 - Criar um prototipo de UX
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img/prototipo-ux.png)

![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img/prototipo-ux.gif)

##### Obrigado por chegar até aqui!

##### Felipe Neaime
