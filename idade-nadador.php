<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Linguagem de Programação 1</title>
        <link rel="stylesheet" href="style6.css">
    </head>
        <body bgcolor="#FFA07A">
            <div id="primeiro">
                <h1>Linguagem de Programação 1</h1>
                <h1>RA: 8127726 - Nome: Pedro Henrique Jacobucci</h1>
                <br>
                <form action="" method="GET">
                <input type="number" placeholder="Digite a idade do nadador" name="nadador">        
                <button type="submit">Enviar</button>
                <br>
                <?php
                $idadeNadador = $_GET['nadador'];
                    echo "<p>A idade do Nadador é de $idadeNadador anos</p>";

                if ($idadeNadador >= 5 & $idadeNadador <= 7){
                    echo "<p1>*O nadador está na categoria Infantil A => 5 -7 anos</p1>";
                }elseif($idadeNadador >= 8 & $idadeNadador <= 10){
                    echo "<p1>O nadador está na categoria Infantil B => 8 - 10 anos</p1>";
                }elseif($idadeNadador >= 11 & $idadeNadador <= 13){
                    echo "<p1>O nadador está na categoria Juvenil A</p1>";
                }elseif($idadeNadador >= 14 & $idadeNadador <= 17){
                    echo "<p1>O nadador está na categoria Juvenil B</p1>";
                }elseif ($idadeNadador >= 18){
                    echo "<p1>O nadador está na categoria Adulta</p1>";
                }else{
                    echo "<p2> Categoria Indisponível</p2>";
                }            
                ?>
            </div>
        </body>
</html>