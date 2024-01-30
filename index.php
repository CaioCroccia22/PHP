<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    <?php
        //Escrevendo na tela
        echo "Olá mundo!";

        //Declarando variavel
        //Variaveis PHP na iniciao com um numero
        
        $var = "Pedro";
        echo $var;

        //Array
        $lista = array(10,20,30, $var);
        //Mostra o indice e os valores dentro do array
        print_r($lista);

        //Instanciando Objeto  $VAR = new NOME DA CLASSE
        $p1 = new Pessoa();

        //Função
        $p1 -> Cadastro();

        //Chamando o atributo da classe
        $p1 -> nome = "Pedro";

    ?>


    <?//Codigo ?>
</body>
</html>

