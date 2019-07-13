<?php
    $local = $_POST["localidade"];
    $arquivo = fopen("violencia-domestica-df.csv", "r");
    $dados = fgetcsv($arquivo);
    $result;
    $somatorio = 0;
    while($dados){
        if($local==$dados[0]){
            for($i=1;$i<=6;$i++){
                $somatorio+=$dados[$i];
            }
            foreach($dados as $result){
                echo " $result / ";
            }
            echo "Total de casos neste local: $somatorio";
        }
        $dados = fgetcsv($arquivo); //gera sobrecarga no while e demora demais pra exibir sem essa linha
    }
    fclose($arquivo);
?>

