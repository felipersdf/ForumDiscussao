<p align="center">
  <a href="https://www.ifpb.edu.br/">
    <img alt="IFPB" src="https://avatars0.githubusercontent.com/u/2523928?s=400&v=4" width=150 >
  </a>
  
  <a href="https://estudante.ifpb.edu.br/cursos/39">
   <img alt="CSTSI" src="https://henrifrade.github.io/Marvelist/images/others/TSI.svg" width=150>
  </a>
</p>

<h1 align="center">
    Systems Analysis and Design 2019.1
</h1>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/felipersdf/ForumDiscussao?color=%2300CED1">

  <a href="https://github.com/felipersdf">
    <img alt="Made by Felipe Rodrigues" src="https://img.shields.io/badge/made%20by-Felipe Rodrigues-%2304D361?color=%2300CED1">
  </a>

  <a href="https://github.com/felipersdf/ForumDiscussao">
    <img alt="Repo Size" src="https://img.shields.io/github/repo-size/felipersdf/ForumDiscussao?color=%2300CED1">
  </a>
  
  <a href="https://github.com/felipersdf/ForumDiscussao">
    <img alt="Last commit" src="https://img.shields.io/github/last-commit/felipersdf/ForumDiscussao?color=%2300CED1">
  </a>
</p>


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

![DiagramaDeClasse](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Classe/Diagrama01v4.jpg)


## Diagrama de Caso de Uso

![DiagramaCasodeUso](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Casos%20de%20Uso/Diagramav4.jpg)

## Diagrama de Sequência

![DiagramaSequencia](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Sequência/DiagramaThread.png)

![DiagramaSequencia2](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Sequência/DiagramaReply.png)

## Diagrama de Pacote

![DiagramaPacote](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Pacote/DiagramaDePacote.png)

## Diagrama de Atividade
![DiagramaAtividade](https://github.com/felipersdf/ForumDiscussao/blob/master/Documentation/Diagrama%20de%20Atividade/DiagramaDeAtividade.png)
