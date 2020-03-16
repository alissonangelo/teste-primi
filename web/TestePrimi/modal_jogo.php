<?php

    $codJogo = $_GET['codigo'];

    //Executando a requisição e trazendo o JSON e
    //decodificando o JSON de uma maneira
    //que o PHP entenda
    $url = "http://localhost:8080/jogo/".$codJogo;
    $jogo = json_decode(file_get_contents($url));

    //Executando a requisição e trazendo o JSON e
    //decodificando o JSON de uma maneira
    //que o PHP entenda
    $urlLoja = "http://localhost:8080/estoque/1";
    $lojas = json_decode(file_get_contents($urlLoja));
    


?>
<div class="modal_top">
    <div class="modal_top_left">
        <div class="modal_image">
            <img src="<?= $jogo[0]->imgJogo ?>" alt="<?= $jogo[0]->nome ?>">
        </div>
    </div>
    <div class="modal_top_right">
        <h1><?= $jogo[0]->nome ?></h1>
        <ul>
            <li><p>Desenvolvedora</p></li>
            <li><?= $jogo[0]->desenvolvedora->desenvolvedora ?></li>
            <li><p>Classificação</p></li>
            <li><?= $jogo[0]->classificacao->classificacao ?></li>
            <li><p>Data de Lançamento</p></li>
            <li><?= $jogo[0]->dataLancamento ?></li>
            <li><b>R$ 99,90</b></li>
        </ul>
    </div>
    </div>
    <div class="modal_bottom">
    <div class="modal_bottom_titulo">
        LOJAS DISPONÍVEIS
    </div>
    <div class="modal_bottom_lojas">
        <?php
            
            //Verificando se houve algum retorno da requisição
            if(count($lojas)){
                
                //Laço de repetição que atribui cada objeto a variavel $Jogo
                foreach($lojas as $Loja){

        ?>
        <div class="loja">
            <div class="loja_image">
                <img src="<?= $Loja->imgLoja ?>" alt="<?= $Loja->unidade ?>">
            </div>
            <div class="loja_unidade">
                <?= $Loja->unidade ?>
            </div> 
             
        </div>
        <?php
        
                }
            }
        ?>
    </div>
</div>