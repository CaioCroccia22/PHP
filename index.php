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
        
        $nome = "Pedro";
        echo $var;

        //Array
        $lista = array(10,20,30, $var);
        //Mostra o indice e os valores dentro do array
        print_r($lista);

        //Instanciando Objeto  $VAR = new NOME DA CLASSE
        //$p1 = new Pessoa();

        //Função $VARIAVEL -> NOME DA FUNÇÂO
        $p1 -> Cadastro();

        //Chamando o atributo da classe
        $p1 -> nome = "Pedro";

        //Operações
        $n1 = 12 + 13;
        define('Desconto', 10);
        echo '<br>'.Desconto;
        const taxa = 5;
        echo '<br>'.taxa;

        //Operadores Aritmeticos e lógicos

        var_dump(true && true);
        var_dump(false && true);
        echo '<br>';
        var_dump(true || true);
        var_dump(false || true);
        echo '<br>';
        var_dump(!true);

        var_dump(2 + 3);
        echo 10 -2;
        echo 10 / 2;
        echo 10 * 2;
        echo 10 % 2;
        echo 2 ** 10;
        echo (2 + 3) * 4;

        //Estruturas de controle e de repetição

        //if
        if(true){
            echo "Verdadeiro";
        }else{
            echo "falso";
        };

        echo '<hr>';

        //while

        const valor = 5;
        $cont = 0;
        while($cont < valor){
            $cont += 1;
            echo $cont;
        }

        echo '<hr>';

        //for

        for($contador = 1; $contador < 10; $contador++){
            echo $contador;
        }

        //Percorrendo um array
        $array = ["Maria", "Pedro", "João", "Carlos"];
         foreach($array as $valor){
            echo "$valor <br>";

         }

         //Break e continue
         $number = 0;
         for(;;$number++){
            if($number % 2 == 0){
                continue;
            }
            if ($number > 10){
                break;
            }
         }

         //Função

         function somaSalario($salario){
            return $salario + 150;
         }

         somaSalario(1500);
         echo $salario;

         //Função dentro da variavel

         $soma = function($a, $b){
            return $a + $b;
         };

         echo $soma(10, 8);


         function caneta ($modelo="0.7", $cor="Azul"){
            return "Modelo: ".$modelo." , Cor:".$cor;

         }
        
        echo caneta();


         function messagem(){
            return "Olá mundo!";
         }

         messagem();
         $msg = messagem();
         echo "<br>".$msg;
         var_dump(messagem());


         function cadastroCliente($nome, $idade, $endereco){

            return $array = [$nome, $idade, $endereco];
            
         }

         function imprimeCadastro($array){
            print_r($array);
         }

         $cliente = cadastroCliente("Pedro", 15, "Rua flor de ");
         imprimeCadastro($cliente);

         //Switch

         $opcao = 3;
         switch($opcao){
            case 1:
                echo "Opção numero 1";
                break;

            case 2:
                echo "Opção numero 2";
                break;

            case 3:
                echo "Opção numero 3";
                break;

            default:
                echo "Opção invalida";

         }


         class Pessoa{

            //Atributos 
            public $nome = "Pedro";
            public $idade = 26;
            public $endereco = "Rua Flor de Maio";
         

         //Metodos
         function imprimiPessoa(){
            return "Nome: {$this->nome} idade: {$this->idate} Endereço: {$this->endereco}";
         }
    }

    $p1 = new Pessoa();
    echo $p1 -> nome;


    ?>


    <?//Codigo ?>
</body>
</html>

