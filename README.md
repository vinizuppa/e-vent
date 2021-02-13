## E-Vent

Sistema para gerenciamento de eventos da Fatec Ourinhos.

### Como executar projeto? 
*Necessário Docker
#### 1 - Clonar repositório
```
git clone https://github.com/renandmc/e-vent.git
```
#### 2 - Acessar pasta do projeto
```
cd e-vent
```
#### 3 - Instalar dependências com composer (via Docker)
```
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php80-composer:latest composer install
```
#### 4 - Copiar arquivo de variáveis de ambiente
```
cp .env.example .env
```
#### 5 - Criar atalho para não digitar './vendor/bin/sail' toda vez
```
alias sail='bash vendor/bin/sail'
```
#### 6 - Executar comando para gerar key
```
sail artisan key:generate
```
#### 7 - Executar o comando do Laravel Sail (pode demorar na primeira execução)
Com o primeiro comando o terminal fica ocupado, até cancelar a execução com 'Ctrl+C'. 
Na segunda opção o terminal fica liberado.
Para cancelar a execução do projeto use o terceiro comando 'down'
```
sail up

sail up -d

sail down
```
#### 8 - Após executar o comando o site pode ser acessado em <http://localhost:8080>

### Projeto desenvolvido com Laravel
<a href="https://laravel.com" target="_blank">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="150">
</a>