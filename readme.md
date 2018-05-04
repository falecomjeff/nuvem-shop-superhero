# Nuvem Shop — Teste de código com Laravel | Superheros


## Considerações iniciais

1. Teste executado em Laravel, na versão 5.5.

2. Para para realização do teste: 2 dias úteis (de 02/05 a 03/05). Como estou atualmente empregado, o teste foi realizado em horários alternativos, dando um total aproximado de 12h de trabalho. Caso o trabalho em prazos apertados e comprometimento com datas seja um ponto de avaliação, fica a informação. ;-)


## Objetivo do software

O software tem por objetivo comprovar o conhecimento no desenvolvimento de aplicações PHP utilizando o framework Laravel. A ferramenta foi desenvolvida de acordo com [o escopo](./storage/escopo/PHP_Engineer_Test.pdf) passado pela equipe de recrutamento da Nuvem Shop.

Em resumo, a aplicação deve permitir a realização de um CRUD completo para uma base de super-hérois. Deve ser possível ainda fazer o upload de imagens sobre o super-héroi, no formato de array collection, numa entidade one-to-many, sendo possível inserir e remover imagens a qualquer tempo na criação e edição dos dados de um super-héroi. Os resultados deverão ser paginados em 5 itens por página.


## Pré-requisitos

+ Servidor Apache 2.0 ou Nginx
+ PHP 7.1+
+ MySql 5.7+
+ OpenSSL PHP Extension
+ PDO PHP Extension
+ Mbstring PHP Extension
+ Tokenizer PHP Extension
+ XML PHP Extension
+ Ctype PHP Extension
+ JSON PHP Extension


## Instalação

### 1. Clone o projeto

```sh
git clone git@gitlab.com:falecomjeff/leroy-merlin-teste-api.git
```

### 2. Instale as dependências do projeto

```sh
composer install
```

(caso o **composer** não esteja disponível, baixe-o pelo site [getcomposer.org](http://getcomposer.org))

### 3. Acerte as configurações do projeto (arquivo .env). MySql foi a base de dados utilizada.

Verifique a documentação em [https://laravel.com](https://laravel.com)

### 4. Execute o Migrate

```sh
php artisan migrate
```

### 5. Gere a chave do projeto

```sh
php artisan key:generate
```

### 6. Criar diretório de armazenamento das imagens, caso não tenha sido criado automaticamente no clone do projeto.

```sh
mkdir public/images
```

## Execução dos testes com phpunit
```sh
./vendor/bin/phpunit
```


## Contato

- falecomjeff@gmail.com
- (11) 99635-5400
