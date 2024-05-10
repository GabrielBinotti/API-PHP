# Exemplo simples de rotas em PHP

Este código apresenta um exemplo simples para criar sua primeira API usando PHP, aceitando requisições do tipo GET e POST.

Podendo assim criar um webservice para disponibilizar recursos de seu sistema sem a necessidade de liberar acesso diretamente.
No exemplo não foi usado nenhum tipo de autenticação, mas pode implementar autenticações jwT ou basic auth, ou até mesmo criar uma validação seguindo seus criterios.

## O código possui:
* Pasta app -> responsavel por conter todos os arquivos realicionados a logica da api
    * Pasta controller -> Contém os arquivos de controle da aplicação, onde é feita a validação e interação do view com o model.
    * Arquivo Router -> Classe responsavel por implementar a lógica de rotas, possui atributos e métodos para controlar a lista de rotas disponiveis em sua aplicação.
* Pasta server -> respnsavel por conter o arquivo index.php que contem as rotas de sua aplicação.

## Requisitos
* PHP >= 8.0
* Composer instalado
