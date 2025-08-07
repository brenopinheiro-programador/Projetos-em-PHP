<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>
            Conversor de Moedas
        </h1>
        <?php 
            $cotação = 5.46; //cotação copiada do Google
            $real = $_GET["din"] ?? 0; //Quantos R$ você tem?
            $dolar = $real/$cotação; //Converção de real para dolar
            
            //Mostrar o resultado sem a formatação de moedas com a intl
            //echo "Seus R\$" . number_format($num, 2, ",", ".") . " equivalem a U\$" . number_format($dolar, 2, ",", ".") . "  ";
            
            //Formatação de moedas com internacionalização da Biblioteca intl

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascrip:history.go(-1)">Voltar</button>
    </main>
</body>
</html>