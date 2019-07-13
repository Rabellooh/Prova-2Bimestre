<?php
    $ano = $_GET["ano"];
    $arquivo = fopen('violencia-domestica-df.csv', 'r');
    $cont = 0;
    $dados = fgetcsv($arquivo);
    foreach($dados as $dados) { //está jogando o array na variável
        if($dados != $ano)
            $cont++;
        else
            break;
    }
    $dados = fgetcsv($arquivo);
    while($dados) {
        echo " Localidade: $dados[0] , Ocorrência no ano de $ano: $dados[$cont] / ";
        $dados = fgetcsv($arquivo); //evita sobrecarga do while também
    }
    fclose($arquivo);
?>