# ForumDiscussao - Documentation
Documentação do Projeto da Disciplina Programação para Web I 2019.1

## Descrição
 O projeto será uma aplicação referente à um fórum de discussão sobre as disciplinas do curso de Sistemas para Internet. A aplicação deverá permitir que seus usuários postem dúvidas relacionadas a algum tema específico sobre alguma disciplina do curso. A aplicação possui dois perfis de usuários: usuário e visitante. </p>

## Levantamento de Requisitos

Sobre os perfis: 
 
### 1. Usuário

* Deverá ser capaz de realizar o próprio cadastro no sistema
* Uma vez logado, este usuário poderá criar, atualizar, pesquisar ou listar temas; gerenciar (adicionar, remover, visualizar) suas postagens;
* A postagem deve estar sempre associada a um tema;
* Visualizar as respostas publicadas sobre as suas postagens, identificando cada usuário pelo login;
* Responder qualquer postagem, de qualquer usuário.

 #### Relacionado ao cadastro do usuário:

* Deverão ser cadastrados nome, login/senha (verificando se o login já existe ou não).
* As senhas serão codificadas.
* Usar mecanismo de autenticação e controle de sessão, para o perfil Usuário.

### 2. Visitante

* Não necessita estar cadastrado no sistema;
* O visitante será capaz de consultar postagens e visualizar as suas respostas, identificando cada usuário pelo login;
* A consulta poderá ser por tema e/ou pelo titulo (ou parte dele) da postagem.


## Diagrama de Classe

![DiagramaDeClasse](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Classe/Diagrama01.jpg)


## Diagrama de Caso de Uso

![DiagramaCasodeUso](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Casos%20de%20Uso/Diagramav2.jpg)