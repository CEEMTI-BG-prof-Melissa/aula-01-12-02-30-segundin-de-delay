<html>
    <head>
        <title>Aula 07</title>
    </head>
    <body>

        <?php
            //Aula 07
            //Daniel A. e Erick.
            //08/10/2025
            $numero = 10;

            //Soma a variável com 5
            $numero += 5;
            echo "O resultado da soma é: ".$numero;
            echo "<br>";

            //Subtrai a variável com 2
            $numero -= 2;
            echo "O resultado da subtração é: ".$numero;
            echo "<br>";

            //Multiplica a variável com 3
            $numero *= 3;
            echo "O resultado da multiplicação é: ".$numero;
            echo "<br>";

            //Divide a variável com 2
            $numero /= 2;
            echo "O resultado da divisão é: ".$numero;
            echo "<br>";

            //Pré-incremento: Soma e depois mostra
            ++$numero;
            echo "Pré-incremento: ".$numero;
            echo "<br>";

            //Pós-incremento: Mostra e depois soma
            echo "Pós-incremento: ".$numero;
            echo "<br>";
            $numero++;

            //Pré-decremento: Subtrai e depois mostra
            --$numero;
            echo "Pré decremento: ".$numero;
            echo "<br>";

            //Pós-decremento: mostra e depois Subtrai
            echo "Pós decremento: ".$numero;
            echo "<br>";
            $numero--;

            //Mostra o valor final
            echo "O valor final é: ".$numero;
        ?>

    </body>
</html>
