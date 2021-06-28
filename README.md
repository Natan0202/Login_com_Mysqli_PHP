# Login_com_Mysqli_PHP
Script com a conexão com Banco de Dados, no qual libera o acesso ou nega ele de acordo com o banco, como em um login (senha e usuário)



------- Instruções na criação do Forms --------

1º Conexão com o banco via mysqli_connect - conectando.php
{
    session_start(); //Abre a sessão para ser usado em outras páginas 
    //Se usa o comando para executar quando for necessário

    //Definição de host, root, db e senha
    define('HOST', '127.0.0.0');
    define('USER' , 'root');
    define('DB' , 'teste');
    define('SENHA', 'senha');

    //TEM ORDEM  - HOST, USER, SENHA, DB
    $conne = mysqli_connect(HOST, USER, SENHA, DB)


}
2º Criar a página de index, dar 'names' aos inputs no qual é desejável o dado - index.php

3º Verificação com o banco - verificar.php
{
    1º Abra a sessão - inclua páginas necessárias
    2º Verificação de caso o campo está vazio
    empty - header (Direcionamento) - $_POST

    3º - Capturar e declarar uma variável 
    que irá receber o valor capturado
    dos inputs da página desejada(index.php)

    4º Criar um camando($sql), nesse caso
    select - para selecionar e verificar
    os valores dos inputs capturados

    5º - Utilizando o mysqli_query - 
    pegamos a variável de conexão ao banco
    via sessão e a variável do comando em sql
    para executar a conexão e a Verificação 
    com o banco ($conne, $sql)

    6º Utilizando mysqli_num_rows 
    pegamos a variável na qual está executando
    a conexão e o comando e colocamos 
    na variável $row

    7º Verificação do resultado do $row -
    É feito um if para se achar o valor
    do $row - caso 1 entra no if e redireciona
    o usuário para a página painel.php
    E cria uma session user para mais tarde
    ser utilizada como meios no qual
    possa impedir o acesso indevido a url,
    caso ele "saia" do painel.
    E ao dar negativo deixa o usuário na página
    index
}

4º Verificação de user - verificar_user.php
{

    1º abrimos uma sessão 
    2º pegamos a session de user criada em verificar.php, caso
    não exista não permite que qualquer pessoa navegue pela url
}

5º Saida de user - logout
{ 
    1º Criamos um <a></a> na página no qual o USER
    tem acesso após passar pelas verificações

    2º Ao clicar nesse 'a' é acionando em logut.php e encerra a sessão
}
