# Laravel11-API-JWT
Apis com autenticação Jwt

Foi realizado um MVP de uma autenticação com JWT utilizando Laravel 11

Passo a passo da instalação da aplicação laravel:

1º git clone https://github.com/YuriRdrdV/Laravel11-API-JWT.git

2º cd 'raiz do projeto'

3º composer install

4º cp .env.example .env

5º php artisan key:generate

6º Alterar o arquivo .env 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=seu_banco_de_dados
    DB_USERNAME=seu_usuario
    DB_PASSWORD=sua_senha

7º php artisan:migrate

8º php artisan serve


APIS disponíveis:

1) Registrar usuário:
curl --location '127.0.0.1:8000/api/auth/register' \
--header 'Authorization: Bearer ' \
--form 'name="name"' \
--form 'email="name@mail.com"' \
--form 'password="12345678"' \
--form 'password_confirmation="12345678"'

2) Logar o usuário (irá gerar o authtoken e retornar ao usuário como resposta)
curl --location '127.0.0.1:8000/api/auth/login' \
--form 'email="name@mail.com"' \
--form 'password="12345678"'

3) Mostrar dados do usuário (irá retornar os dados do usuário, apenas se o token enviado estiver correto)
curl --location --request POST '127.0.0.1:8000/api/auth/showuser' \
--header 'Authorization: Bearer '

4) Atualizar o token (necessita utilizar o token antigo)
curl --location --request POST '127.0.0.1:8000/api/auth/refresh' \
--header 'Authorization: Bearer '

5) Deslogar o Usuário (invalida o token gerado)
curl --location --request POST '127.0.0.1:8000/api/auth/logout' \
--header 'Authorization: Bearer '
