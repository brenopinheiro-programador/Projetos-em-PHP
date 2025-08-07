 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Interação com Formulários</title>
</head>
<body>   
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php
                $num = $_GET["number"] ?? 0; //pegando o valor do input
                echo "O número escolhido foi <strong> $num </strong>"; //exibindo na tela o Nº escolhido.
                echo "<br>O seu <em>antecessor</em> é ". $num - 1 .""; //exibindo seu antecessor
                echo "<br>O seu <em>sucessor</em> é ". $num + 1 .""; //exibindo seu sucessor
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
            
    </main>   
</body>
</html>