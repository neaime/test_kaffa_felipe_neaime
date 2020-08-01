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
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-3/exercicio-3.gif)

##:heavy_check_mark: Exercício 4 - Calcular área de intersecção de dois retângulos
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-4/exercicio-4.gif)

##:heavy_check_mark: Exercício 5 - Cadastrar e deletar tarefas. Durante a execução deve ficar na tela.
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img-readme/exercicio-5/exercicio-5.gif)

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

##### Script verificar quantos produtos existem em cada ordem
```
SELECT ordens.id, COUNT(produtos_has_ordens.ordens_id)
FROM ordens
INNER JOIN produtos_has_ordens on produtos_has_ordens.ordens_id=ordens.id GROUP BY id
```

##:heavy_check_mark: Exercício 9 - Criar um prototipo de UX
![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img/prototipo-ux.png)

![](https://github.com/neaime/test_kaffa_felipe_neaime/blob/master/public/img/prototipo-ux.gif)

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
