# Entrega TP1 - Tecnologias Dinâmicas para a Internet
Projeto individual de Sofia Ribeiro - 85382. Ver instruções de instalação abaixo: 

## Passos de instalação:
* Fazer *download* ou *clone* do repositório `git clone https://github.com/soalribeiro/exe-laravel-sofia`;
* Abrir o XAMPP e iniciar o *Apache* e  o *MySQL*;
* Abrir `http://localhost/phpmyadmin/` e criar uma base de dados com o nome **exe-sofia** em *utf8_unicode_ci*;
* De seguida, dentro da pasta deste projeto, na linha de comandos, escrever `npm install` e `composer install` para instalar dependências;
* Executar o comando `php artisan migrate`;
* Criar utilizadores através da execução do comando `php artisan db:seed`;
* `npm run watch` para iniciar o projeto;
* Explorar a documentação da API através da opção do menu "Documentação";
* Experimentar as *features* disponíveis como **admin**, **editor** e **reporter**.

##### Autor: Sofia Ribeiro | 85382
##### MCMM MI - TDI 2019