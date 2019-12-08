# Teste-de-sele-o-para-desenvolvedor-PHP

## Regras:
- Prazo de sete dias corridos a partir do envio do teste. Após o término do prazo, pode-se submeter o código <strong>mesmo que incompleto</strong>.
- O sistema deve ser feito na linguagem PHP e com o banco de dados MySQL.
- Não se pode usar qualquer framework em PHP para desenvolver o projeto, como Laravel, Symfony, CakePHP, Yii e etc.
- O código deve estar disponível no GitHub, Gitlab ou Bitbucket.
- Deve ter o “Readme” com as instruções.
- Pode se usar qualquer biblioteca de <strong>frontend<strong> (Bootstrap, Semantic, Materialize, Foundation, CSS, Sass, Less, Javascript, jQuery, Vue.js, React...)

## Diferenciais e análise:
- Uso das PSRs.
- Estrutura do projeto, código organizado, comentado e limpo.
- Uso de alguma biblioteca frontend (Vue.js, React e etc).


## Objetivo:
Desenvolver um sistema de controle de alunos de uma escola. O sistema deverá conter as seguintes funcionalidades:

*Cadastro de alunos*
Abaixo os requisitos da funcionalidade:

- Deve ter a listagem com busca, cadastro, edição e exclusão de aluno.
- Campos: ID, nome, telefone, e-mail, data de nascimento e gênero.
- Campos obrigatórios: Nome e E-mail.
- Um aluno pode estar ligado a muitas turmas.

*Cadastro de turmas*
Abaixo os requisitos da funcionalidade:

- Deve ter a listagem com busca, cadastro, edição e exclusão das turmas.
- Campos: Ano, nível de ensino (fundamental, médio), série e turno.
- Uma turma deve estar ligada a uma escola.

*Cadastro de escolas*
Abaixo os requisitos da funcionalidade:

- Deve ter a listagem com busca, cadastro, edição e exclusão da escola.
- Campos: ID, nome da escola, endereço.
- Campos obrigatórios: ID, Data e Situação.
- Uma escola deve:
-- Ter várias turmas.
-- Exibir o total de alunos.
- API para integração
--Os dados da escola serão buscados via api:
http://educacao.dadosabertosbr.com/api/docs/%2Fapi%2Fescolas%2Fbuscaavancada
http://educacao.dadosabertosbr.com/api/escolas/buscaavancada?estado=MT
- Localização no mapa (extra)
-- Exibição da localização da escola em uma mapa dinâmico ou fixo


## Tabelas necessárias:
- Alunos
- Turmas
- Escolas
- Alunos de Turmas
