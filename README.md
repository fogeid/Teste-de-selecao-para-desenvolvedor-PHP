# Teste-de-sele-o-para-desenvolvedor-PHP

<strong>Regras:</strong>
    <ul>
        <li>
            <p>
                Prazo de sete dias corridos a partir do envio do teste. Após o término do prazo, pode-se submeter o
                código <strong>mesmo que incompleto</strong>.
            </p>
        </li>

        <li>
            <p>
                O sistema deve ser feito na linguagem PHP e com o banco de dados MySQL.
            </p>
        </li>

        <li>
            <p>
                Não se pode usar qualquer framework em PHP para desenvolver o projeto, como Laravel, Symfony, CakePHP,
                Yii e etc.
            </p>
        </li>

        <li>
            <p>
                O código deve estar disponível no GitHub, Gitlab ou Bitbucket.
            </p>
        </li>

        <li>
            <p>
                Deve ter o “Readme” com as instruções.
            </p>
        </li>

        <li>
            <p>
                Pode se usar qualquer biblioteca de <strong>frontend</strong> (Bootstrap, Semantic, Materialize,
                Foundation, CSS, Sass, Less, Javascript, jQuery, Vue.js, React...)
            </p>
        </li>
    </ul>

    <strong>Diferenciais e análise:</strong>
    <ul>
        <li>
            <p>
                Uso das PSRs.
            </p>
        </li>
        <li>
            <p>
                Estrutura do projeto, código organizado, comentado e limpo.
            </p>
        </li>
        <li>
            <p>
                Uso de alguma biblioteca frontend (Vue.js, React e etc).
            </p>
        </li>
    </ul>

    <strong>Objetivo:</strong>
    <p>
        Desenvolver um sistema de controle de alunos de uma escola. O sistema deverá conter as seguintes
        funcionalidades:
    </p>

    <i>Cadastro de alunos</i>
    <p>
        Abaixo os requisitos da funcionalidade:
    </p>

    <ul>
        <li>
            <p>
                Deve ter a listagem com busca, cadastro, edição e exclusão de aluno.
            </p>
        </li>
        <li>
            <p>
                Campos: ID, nome, telefone, e-mail, data de nascimento e gênero.
            </p>
        </li>
        <li>
            <p>
                Campos obrigatórios: Nome e E-mail.
            </p>
        </li>
        <li>
            <p>
                Um aluno pode estar ligado a muitas turmas.
            </p>
        </li>
    </ul>

    <i>Cadastro de turmas</i>
    <p>
        Abaixo os requisitos da funcionalidade:
    </p>

    <ul>
        <li>
            <p>
                Deve ter a listagem com busca, cadastro, edição e exclusão das turmas.
            </p>
        </li>
        <li>
            <p>
                Uma turma deve estar ligada a uma escola.
            </p>
        </li>
        <li>
            <p>
                Campos: Ano, nível de ensino (fundamental, médio), série e turno.
            </p>
        </li>
    </ul>

    <i>Cadastro de escolas</i>
    <p>
        Abaixo os requisitos da funcionalidade:
    </p>

    <ul>
        <li>
            <p>
                Deve ter a listagem com busca, cadastro, edição e exclusão da escola.
            </p>
        </li>
        <li>
            <p>
                Campos: ID, nome da escola, endereço.
            </p>
        </li>
        <li>
            <p>
                Campos obrigatórios: ID, Data e Situação.
            </p>
        </li>

        <li>
            <p>
                Uma escola deve:
            </p>
            <ul>
                <li>
                    <p>
                        Ter várias turmas.
                    </p>
                </li>
                <li>
                    <p>
                        Exibir o total de alunos.
                    </p>
                </li>
            </ul>
        </li>

        <li>
            <p>
                API para integração
            </p>
            <ul>
                <li>
                    <p>
                        Os dados da escola serão buscados via api:
                        http://educacao.dadosabertosbr.com/api/docs/%2Fapi%2Fescolas%2Fbuscaavancada
                        http://educacao.dadosabertosbr.com/api/escolas/buscaavancada?estado=MT
                    </p>
                </li>
            </ul>
        </li>

        <li>
            <p>
                Localização no mapa (extra)
            </p>
            <ul>
                <li>
                    <p>
                        Exibição da localização da escola em uma mapa dinâmico ou fixo
                    </p>
                </li>
            </ul>
        </li>
    </ul>

    <p>Tabelas necessárias:</p>
    <ul>
        <li>Alunos</li>
        <li>Turmas</li>
        <li>Escolas</li>
        <li>Alunos de Turmas</li>
    </ul>
