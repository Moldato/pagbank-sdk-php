# Biblioteca PagBank-SDK-PHP

## Cobrança com cartão de crédito
### HISTÓRIAS DO USUÁRIO
___
COMO e-comerce  
Eu PRECISO fazer cobraça com cartão de crédito de forma transparente  
PARA facilitar a finalização da compra na minha loja 
### BDD
---
**Obter ID da Sessão Pagseguro**
```
DADO que importo e instâncio a Biblioteca PagBank-SPK-PHP  
QUANDO enviado usuário e token para endpoit  
ENTÃO recebo um ID de sessão para acesso a API de validações do front
```
**Setar ID da sessão na biblioteca JS no front**  
```
DADO estou na página de checkout, possuo ID de sessão e importo a biblioteca javascript  
QUANDO envio o ID da sessão para biblioteca JS  
ENTÃO recebo permissão para consumir funções da API
```
