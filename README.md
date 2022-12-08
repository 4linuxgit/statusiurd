# statusiurd
status
Pagina de teste para verificação de status dos sistemas, fluig,rds,logix,email,servicedesk,otrs,ibmvault.
A pagina fecha conexão com um BD SQL local que possui 1 tabela com cada coluna correspondente ao sistema a ser monitorado.
É feito uma consulta e se associa a uma variavel o valor que esta armazenado naquela coluna.
As coluna que levam nome do sistema recebem os valores de : disponível,indisponível e instável.
Na pasta com as logos dos sistemas, possuem também 3 arquivos png com os 3 Status: disponivel.png indisponivel.png instalvel.png

Cada seção da pagina possue um codigo que chama a variavel armazenada nas colunas do BD; essa variavel é impressa em um codigo que chama a $variavel.png conforme o
seu nome de status.

Toda vez que houver alteração no BD, a pagina ao ser atualizada vai imprimir a nova variavel, que consequentemente ira mudar a imagem png da respectiva seção.

A pagina possui um accordion com algumas perguntas frequentes ainda a ser alterado.
