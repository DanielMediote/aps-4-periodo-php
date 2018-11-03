# APS 4º Periodo
#### Elaboração de um website que gerêncie os estágio;


## Objetivos:
  - Elaborar um website sobre o tema abordado em sala;
  - Banco de Dados MySQL;
  - Utilização do Dockerfile e Docker-Compose;


### File setup 'Dockerfile':
#### Arquivo utilizado para buildar um novo conteiner:
```Dockerfile
FROM php:7.0-apache

# Instala extenção docker PDO
RUN docker-php-ext-install pdo pdo_mysql
#Habilita o uso do .htaccess
RUN a2enmod rewrite

```

### File setup 'docker-compose.yml'.
#### Arquivo que é ultilizado para subir os conteiners do docker:


```yaml
version: '3'
services:
  web:
    build:
      context: .

    container_name: aps-web
    ports:
      - "8080:80"
    volumes:
      - ./app:/var/www/html
    links:
      - database
    depends_on:
      - database
  database:
    image: mysql:5.7
    container_name: aps-mysql
    command: --default-authentication-plugin=mysql_native_password
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: aps_estagio
    volumes:
      - ./dumps:/docker-entrypoint-initdb.d
      - data:/var/lib/mysql
    ports:
      - "3307:3306"
volumes:
  data:

```


## Implementações até dia 10/11:
  - Filtro de Campos;
  - Mascaras para os Inputs;
  - Inserts e Updates de Empresa;
  - Inserts e Updates de Faculdade;
  - Inserts e Updates de Estagio;
  - Modelagem do Banco de Dados;
  - Elaboração das Páginas de Estágio, Lista de Alunos;
  - Elaboração das Páginas de Convênio com FPDF;
  - Diagrama de Classe, Casos de Uso e Sequência.
