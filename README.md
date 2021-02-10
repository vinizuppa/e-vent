## E-Vent

Sistema para gerenciamento de eventos da Fatec Ourinhos.

### Como executar (necessário Docker instalado)
#### Acessar pasta do projeto
```
cd e-vent
```
#### Executar o comando do Laravel Sail (pode demorar na primeira execução)
Com esse comando o terminal fica ocupado, até cancelar a execução com 'Ctrl+C'
```
./vendor/bin/sail up
```
Já com esse parâmetro '-d' o comando é executado e o terminal liberado
```
./vendor/bin/sail up -d
```
#### Após executar o comando o site pode ser acessado em <http://localhost:8080>
#### Para cancelar a execução do projeto
```
./vendor/bin/sail down
```
### Projeto desenvolvido com Laravel
<a href="https://laravel.com" target="_blank">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="150">
</a>