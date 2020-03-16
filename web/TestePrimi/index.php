<?php

    //Armazenando url em uma variavel
    $urlJogos = "http://localhost:8080/jogo";

    //Executando a requisição e trazendo o JSON e
    //decodificando o JSON de uma maneira
    //que o PHP entenda
    $jogos = json_decode(file_get_contents($urlJogos));

?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Smart Games</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/ancora.js"></script>
        <script>
            function visualizarDados(codJogo){
                $.ajax({
                   type: "GET",
                    url: "modal_jogo.php",
                    data: {codigo:codJogo},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                });
            } 

            $(document).ready(function(){
                    $('.ver_mais').click(function(){
                        $('.background').fadeIn();
                        console.log("ALO");
                    });
                    $('#fechar_modal').click(function(){
                        $('.background').fadeOut();
                    });
                    $('.background').click(function(){
                        $('.background').fadeOut();
                    });
                });
        </script>
    </head>
    <body>
        <div class="background">
            <div class="modal_background">
                <div class="modal">
                    
                </div>
            </div>
        </div>
        
        <header>
            <div class="top_header">
                <div class="top_header_info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.06" height="20.878" viewBox="0 0 16.06 20.878">
                        <path id="Icon_ionic-ios-lock" data-name="Icon ionic-ios-lock" d="M20.8,10.6H19.6V8.258a4.818,4.818,0,1,0-9.636-.065V10.6h-1.2A2.013,2.013,0,0,0,6.75,12.609v9.636a2.013,2.013,0,0,0,2.007,2.007H20.8a2.013,2.013,0,0,0,2.007-2.007V12.609A2.013,2.013,0,0,0,20.8,10.6Zm-5.32,6.263v3.453a.72.72,0,0,1-.667.723.7.7,0,0,1-.738-.7V16.865a1.606,1.606,0,1,1,1.405,0Zm2.71-6.263H11.367V8.193a3.413,3.413,0,0,1,6.825,0Z" transform="translate(-6.75 -3.374)" fill="#fff"/>
                    </svg>
                      <p>
                          COMPRA <b>100% SEGURA</b>
                      </p>
                </div>
                <div class="top_header_info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.252" height="16.252" viewBox="0 0 16.252 16.252">
                        <g id="Icon_feather-percent" data-name="Icon feather-percent" transform="translate(-5 -5)">
                            <path id="Caminho_1" data-name="Caminho 1" d="M19.971,7.5,7.5,19.971" transform="translate(-0.609 -0.609)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            <path id="Caminho_2" data-name="Caminho 2" d="M10.454,8.227A2.227,2.227,0,1,1,8.227,6a2.227,2.227,0,0,1,2.227,2.227Z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            <path id="Caminho_3" data-name="Caminho 3" d="M26.954,24.727A2.227,2.227,0,1,1,24.727,22.5a2.227,2.227,0,0,1,2.227,2.227Z" transform="translate(-6.702 -6.702)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>
                    </svg>
                    <p>
                        <b>5% OFF</b> NO CARTÃO DE CRÉDITO
                    </p>
                </div>
                <div class="top_header_info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.881" height="14.151" viewBox="0 0 19.881 14.151">
                        <path id="_002-delivery-truck" data-name="002-delivery-truck" d="M19.711,5.371,16.591,2.31a.588.588,0,0,0-.412-.167H13.642V2.1A2.125,2.125,0,0,0,11.5,0H2.142A2.125,2.125,0,0,0,0,2.1V9.754a2.124,2.124,0,0,0,2.142,2.1h.412a2.934,2.934,0,0,0,5.727,0H11.6a2.934,2.934,0,0,0,5.727,0H19.3a.577.577,0,0,0,.582-.571V5.775A.565.565,0,0,0,19.711,5.371ZM15.938,3.285,17.893,5.2h-4.25V3.285ZM1.165,9.754V2.1a.969.969,0,0,1,.977-.959H11.5a.969.969,0,0,1,.977.959V9.184a2.853,2.853,0,0,0-.877,1.529H8.281a2.934,2.934,0,0,0-5.727,0H2.142A.969.969,0,0,1,1.165,9.754Zm4.253,3.254a1.724,1.724,0,1,1,1.757-1.724A1.743,1.743,0,0,1,5.417,13.008Zm9.046,0a1.724,1.724,0,1,1,1.757-1.724A1.743,1.743,0,0,1,14.464,13.008Zm2.864-2.3a2.914,2.914,0,0,0-2.864-2.3,2.961,2.961,0,0,0-.821.116V6.346h5.074v4.366H17.327Zm0,0" fill="#fff"/>
                    </svg>
                    <p>
                        ENTREGA EM <b>24 HORAS*</b> 
                    </p>
                </div>
            </div>
            <div class="bottom_header">
                <div class="bottom_header_left">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="252" height="48" viewBox="0 0 252 48">
                        <image id="smartgameslogo" width="252" height="48" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPwAAAAwCAYAAAA1gReoAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAZOSURBVHja7J0/bNNaFMa/PL0JhJIFmKpGKkwMzdYpJUjdW5G1Uo2Q0pFIDKgsdZcC6tK3MCCkBpgrJWMlIoJgYHt+EhVTFbOSgTB0vm85fu/G9Z9r107d8P0kS8F2Tu459vH57rFdSkopZERmhjKkBELIf/zBEBDChCeEMOEJIUx4QggTnhDChCeEMOEJIUx4QggTnhDChCeEFCXhR6MRXr58ieXlZZRKpcyW4+NjHklCDPhzWj/U7/exubmJk5MTRp2QWU74fr+PlZUVRpuQWZf0o9EIm5ubjDQhv0PCv379+oyMb7VaGA6HUEplsty5c4dHkhADSnm/D18qTb6S/uTJEzx//nxq/vEQEzKlCh/UPX/8+DGjng8dAFX6SC5U0us0m01cv359FuNYAbAPwBWlE7XYmiJSchJHYWn7hlEFsKHZDmJgMDZXs9Ew2N9bBoZxaoi/ToStxjl8tMWGI8ckjBqAccjxMFka2pg6mi2Vwq/ZTXjHcWb1wjkA8AjAfIrvbkQkvQXgwMCGrdk6TwWcB7BtcBFKwz6ADzLGxRTfT+LjohyTSkiyDwCUz+lPVS4sGxnYmhq53pa7evXqxL9PTk5wfHw8a002SzuBdwyqnRuS9J6tpMle1b7vJYYVsf+biIRekwuXdxG6ZxiDsUGyP5LPPa0qBtaFDHzUk76h/ZZJspv47IhPZQC/ALRDjmucX9Mnq065CqFer09Im4WFBTUcDtWUwBQWW36rmzJejva5I9uskO1BdjqybaztVw3YbyDb7JhxORH71ZRSDaVUJYGfDW1cVsoYm/poB8TMkfHWtO+PlVKuz8+k54wXz/aUzrNMltwfvGm1Wvj06dNElV9ZWcHDhw8xNzdnbOf27du4efMmqtXC9mxqKb/Xlmq1ocnVu7LtH6lQPw2q+5pUznmx2T6HVA2r2vsytnsJ5u1tX2VPM54NzZYtPkZV+a6M9UCr9FWtIjdk+/wFHvfZk/QAsL6+jm63i8PDw4mkf/r0aSp79Xode3t7WFpaKtL8fVtOHkdOtiDJ242QfZYm7f3JPjaY136XcdhyklvyeRySQHbEOMpa0mSB16zqBKwPamR1fHFqaz56Ng60Bl5YTPV9vSmXl+yOwZijmmwdifddGUclxKYrcRwXJuPzlvRKKXV6eqqazWaSLmjssru7WxRJD6XUvsFYxj5J69EIkK6OTzYH+VMNkcpuiCTXJX0nZqxWjIxtpDgvqiHy249uu6LJ8CAf90Ns6r5bWvxrEVMcPcZ2THwavulP3HGv/TaSHgCuXLmCt2/f4tatW3jx4kUmNj2FsLW1VYTrZluu5EFVoaJVzgOpDFGV3olpavlVwXdf9fSqfFtk6zhGUXhqoqsplkGGsfklvld9fvt/YzskruUIH6OUjF6Nx/Lbpo0z08ZrTcZQjZiKlCW2hZiLlqb9P8+4rovPnz9PzOtN6Pf7gW/aff36NarrX5Qn7SpykpSlk29r8TKZDyufP7q9BwFy2ZUpxo4m3z0Jqq/raEn/wGCOPUgxh+8CWJW7A5aBj57tND7acuHYQfT9+qB4qBzOmRqAvxMc59mQ9FnR7XbPSPtms1kESW+ydEMkZCNBbP3S1Q3ZX5exlZgufSdBFz2NpLcM7fvjkcZH2/BORJykz3IZp4hZbsul+os3q6urePfu3cS6w8NDjEajog/dkioHg/u1Jmqh7WvaBcnY71Id2wZje6M1uKyMfe8A+KjZtw3kbdY+XpSq29eaoG4RBnXp/sTV/fv3z6z78ePHRQ7JNmgyHgTMlc/TLyhrCRT2GKet7V+54KRf05J+G8AwYMx5+5hkamrymOwgZp+f+P9hozdM+HM0AFutFi4hHxF/my1JdTeprL8SVMA8k34svj+Qi16WPha5ygPAXzlcQC9P0y6TQfteuY1o3PH1WEIuc4Xv9Xpn1t24cYNHkpBZS/her4e1tbWJdTP8yi0hl0vSu66LZ8+eZWL827dvgffuv3z5EvWYLSU9IRq5Pml3enqKV69e5WZ/d3e3SM/UE0JJn2eyF+SxWkKY8HlRr9fx/v17JjshRZvDj0YjHB0dZWL82rVrWFxcTPo+POfwhEwr4YvgHw8xITMwhyeEMOEJIUx4QggTnhAmPCGECU8IYcITQpjwhJAC8u8AakqPwC6TgfIAAAAASUVORK5CYII="/>
                    </svg>
                </div>
                <nav class="bottom_header_middle">
                    <ul>
                        <li>
                            <a href="index.php">
                                HOME
                            </a>
                        </li>
                        <li>
                            <a href="lojas.php">
                                LOJAS
                            </a>
                        </li>
                        <li>
                            <a href="#titulo_sobre">
                                SOBRE NÓS
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="bottom_header_right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31.231" height="31.231" viewBox="0 0 31.231 31.231">
                        <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt" d="M15.115,17a8.5,8.5,0,1,0-8.5-8.5A8.5,8.5,0,0,0,15.115,17Zm7.558,1.889H19.42a10.278,10.278,0,0,1-8.609,0H7.558A7.557,7.557,0,0,0,0,26.452V27.4a2.835,2.835,0,0,0,2.834,2.834H27.4A2.835,2.835,0,0,0,30.231,27.4v-.945A7.557,7.557,0,0,0,22.673,18.894Z" transform="translate(0.5 0.5)" fill="#fff" stroke="#fff" stroke-width="1"/>
                    </svg>
                    <div class="bottom_header_right_text">
                        <p>
                            OLÁ, VISITANTE
                        </p>
                        <p>
                            Minha Conta
                        </p>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="slider_container">
            <div class="arrow_right">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.619" height="24.746" viewBox="0 0 14.619 24.746">
                    <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M20.679,18,11.742,9.07a1.681,1.681,0,0,1,0-2.384,1.7,1.7,0,0,1,2.391,0L24.258,16.8a1.685,1.685,0,0,1,.049,2.327L14.14,29.32a1.688,1.688,0,0,1-2.391-2.384Z" transform="translate(-10.746 -5.566)" fill="#fff" stroke="#000" stroke-width="1"/>
                </svg>
            </div>
            <div class="arrow_left">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.619" height="24.751" viewBox="0 0 14.619 24.751">
                    <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-10.634 -5.562)" fill="#fff" stroke="#000" stroke-width="1"/>
                </svg>
            </div>
            <ul class="slide">
                <li>
                    <img src="img/slider/godofwar.jpg" alt="God of War">
                </li>
                <li>
                    <img src="img/slider/callofduty.jpg" alt="Call of Duty">
                </li>
                <li>
                    <img src="img/slider/batman.jpg" alt="Batman">
                </li>
                <li>
                    <img src="img/slider/leagueoflegends.jpg" alt="League of Legends">
                </li>
            </ul>
        </div>
        <div class="title">
            MAIS VENDIDOS
        </div>
        
        <div class="arrow_container">
            <div class="arrow_right_is">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.619" height="24.746" viewBox="0 0 14.619 24.746">
                    <path id="Icon_ionic-ios-arrow-forward" data-name="Icon ionic-ios-arrow-forward" d="M20.679,18,11.742,9.07a1.681,1.681,0,0,1,0-2.384,1.7,1.7,0,0,1,2.391,0L24.258,16.8a1.685,1.685,0,0,1,.049,2.327L14.14,29.32a1.688,1.688,0,0,1-2.391-2.384Z" transform="translate(-10.746 -5.566)" fill="#fff" stroke="#000" stroke-width="1"/>
                </svg>
            </div>
            <div class="arrow_left_is">
                <svg xmlns="http://www.w3.org/2000/svg" width="14.619" height="24.751" viewBox="0 0 14.619 24.751">
                    <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z" transform="translate(-10.634 -5.562)" fill="#fff" stroke="#000" stroke-width="1"/>
                </svg>
            </div>
        </div>  
        <div class="item_slider">
            
            <ul class="item_container">
                
            <?php
            
                //Verificando se houve algum retorno da requisição
                if(count($jogos)){
                    
                    //Laço de repetição que atribui cada objeto a variavel $Jogo
                    foreach($jogos as $Jogo){
                        

            ?>
                <li>
                    <div class="item">
                        <div class="item_image">
                            <img src="<?= $Jogo->imgJogo ?>" alt="<?= $Jogo->nome ?>">
                        </div>
                        <div class="item_title">
                            <?= $Jogo->nome?>
                        </div>
                        <div class="item_group">
                            <div class="item_price">
                                R$ 99,90
                            </div>
                            <div class="item_rating">
                                <img src="img/icon/stars.png" alt="Estrelas">
                            </div>
                        </div>
                        <div class="item_group_platform">
                            <div class="platform">
                            <?php
                                
                            ?>
                            
                                <div class="item_platform" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.39" height="18.049" viewBox="0 0 23.39 18.049">
                                        <path id="Icon_awesome-playstation" data-name="Icon awesome-playstation" d="M23.181,16.068a4.384,4.384,0,0,1-1.576.987l-8.328,2.989v-2.2L19.4,15.654c.694-.248.8-.6.236-.788a4.107,4.107,0,0,0-2.282.118l-4.081,1.442v-2.29a14.4,14.4,0,0,1,3.074-.682,12.11,12.11,0,0,1,5.287.629C23.433,14.651,23.636,15.492,23.181,16.068Zm-9.112-3.756V6.668c0-.662-.122-1.271-.743-1.446-.475-.154-.772.288-.772.95V20.3l-3.809-1.21V2.25a45.885,45.885,0,0,1,5.246,1.437c3.228,1.109,4.32,2.489,4.32,5.6C18.313,12.308,16.445,13.457,14.069,12.312Zm-12.316,5.3C-.09,17.088-.4,16,.442,15.382a9.011,9.011,0,0,1,2.1-1.011L8,12.43v2.213l-3.931,1.4c-.694.248-.8.6-.236.788a4.107,4.107,0,0,0,2.282-.118L8,16.032v1.982a12.355,12.355,0,0,1-6.249-.406Z" transform="translate(0.002 -2.25)"/>
                                    </svg> 
                                </div>
                                <div class="item_platform">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.145" height="16.15" viewBox="0 0 16.145 16.15">
                                        <path id="Icon_awesome-xbox" data-name="Icon awesome-xbox" d="M12.346,10.659c1.442,1.768,2.106,3.216,1.771,3.864a7.11,7.11,0,0,1-3.015,1.82,8.862,8.862,0,0,1-3.268.332,8.1,8.1,0,0,1-3.584-1.27c-.908-.592-1.113-.837-1.113-1.322,0-.973,1.071-2.679,2.9-4.626A14.6,14.6,0,0,1,8.69,7.094a25.617,25.617,0,0,1,3.656,3.565Zm-5.9-5.678A9.462,9.462,0,0,0,3.631,2.918c-.495-.166-.531-.156-.934.264A8.069,8.069,0,0,0,.733,7.166,6.291,6.291,0,0,0,.6,9.136a8.334,8.334,0,0,0,1.318,3.936c.309.475.394.563.3.322a3.843,3.843,0,0,1,.309-2.083A24.873,24.873,0,0,1,6.444,4.982ZM16.588,7.049a7,7,0,0,0-2.429-4.242,3.038,3.038,0,0,0-1.172.453,14.1,14.1,0,0,0-2.093,1.719,25.981,25.981,0,0,1,4,6.586,3.9,3.9,0,0,1,.241,1.7c-.055.277-.055.277.046.15A9.868,9.868,0,0,0,16.008,12a9.555,9.555,0,0,0,.606-1.911A10.575,10.575,0,0,0,16.588,7.049ZM4.9,1.7c1.553-.081,3.571,1.123,3.721,1.152a6.479,6.479,0,0,0,.7-.316,5.986,5.986,0,0,1,3.5-.82A8.061,8.061,0,0,0,5.21,1.335c-.762.361-.781.387-.306.365Z" transform="translate(-0.566 -0.559)"/>
                                    </svg>
                                </div>
                                <div class="item_platform">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.065" height="16.061" viewBox="0 0 16.065 16.061">
                                        <path id="Icon_awesome-nintendo-switch" data-name="Icon awesome-nintendo-switch" d="M3.439,2.306A4.151,4.151,0,0,0,.148,5.332C0,5.9-.01,6.225.008,10.585a30.962,30.962,0,0,0,.079,4.406,4.164,4.164,0,0,0,3.238,3.245,14.436,14.436,0,0,0,2.3.068,8.814,8.814,0,0,0,2.1-.039c.05-.05.054-.692.054-7.967,0-5.4-.011-7.934-.032-7.981s-.09-.065-2.04-.061a21.753,21.753,0,0,0-2.27.05Zm3.008,7.981v6.737l-1.355-.018a7.3,7.3,0,0,1-1.631-.082,2.826,2.826,0,0,1-2.09-2.176c-.072-.337-.072-8.608,0-8.938A2.858,2.858,0,0,1,3.088,3.751a4.79,4.79,0,0,1,2.065-.2l1.287,0v6.74Zm-2.721-4.7a1.831,1.831,0,0,0-.7.348,1.469,1.469,0,0,0-.495,1.237,1.043,1.043,0,0,0,.136.545,1.506,1.506,0,0,0,.713.717,1.027,1.027,0,0,0,.57.133A1.175,1.175,0,0,0,4.482,8.5,1.5,1.5,0,0,0,5.515,6.838,1.522,1.522,0,0,0,3.726,5.583ZM9.4,2.274c-.014.011-.022,3.614-.022,8.013,0,7.253,0,7.988.054,8.01.09.032,2.671.022,2.99-.014a4.152,4.152,0,0,0,3.191-2.194,5.46,5.46,0,0,0,.251-.581c.208-.624.2-.459.2-5.238,0-3.815-.007-4.385-.054-4.625a4.132,4.132,0,0,0-3.388-3.338,13.078,13.078,0,0,0-1.75-.05c-.8,0-1.466.007-1.477.018ZM12.951,9.52a1.63,1.63,0,0,1,1.119,1.036,1.718,1.718,0,0,1,0,1.058,1.612,1.612,0,0,1-3.073-.079,1.939,1.939,0,0,1,.014-.939A1.608,1.608,0,0,1,12.951,9.52Z" transform="translate(-0.001 -2.255)"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ver_mais" onclick="visualizarDados(<?= $Jogo->codJogo ?>)">
                                VER MAIS
                            </div>
                        </div>
                    </div>
                </li>
            <?php
                
                    }
                }

            ?>
            </ul>

        </div>
        <div class="banner_container">
            <div class="banner">
                <img src="img/banner/deadbydaylight.png" alt="Dead by Daylight">
                <div class="banner_txt">
                    <b>
                        OFERTAS
                    </b>
                    <p>
                        EXCLUSIVAS
                    </p>  
                </div>
                <div class="btn_banner">
                    VER MAIS
                </div>
            </div>
            <div class="banner">
                <img src="img/banner/cyberpunk.png" alt="Cyberpunk">
                <div class="banner_txt">
                    <b>
                        LANÇAMENTOS
                    </b>
                </div>
                <div class="btn_banner">
                    VER MAIS
                </div>
            </div>
        </div>
        <div class="titulo_sobre" id="titulo_sobre">
            SOBRE A SMART GAMES
        </div>
        <div class="texto_sobre">
            <p>
                A Gameteczone existe há mais de 15 anos e se
                tornou um ponto de encontro de apaixonados por
                Games, onde você encontra Vídeo Games Novos e
                Usados de todas as gerações em um ambiente imersivo,
                temático e familiar, nossa Assistência Técnica onde
                o cliente acompanha o conserto de seu vídeo game do
                lado do técnico, onde promovemos a maior Feira de
                Compra e Venda de vídeo games novos e usados, a 
                Feira dos Pássaros. Também oferecemos Cursos de 
                Assistência Técnica de Vídeo Games, presencial e online. Produzimos conteúdos informativos e de entretenimento para nosso Canal do Youtube e Instagram, para que possamos estarmos sempre juntos dos nossos queridos clientes e amigos.
            </p>
            <p>
                Somos uma conceituada loja de vídeo
                games, tendo a primeira loja física em Campinas
                no ano de 1987. Desde então,
                atuamos no mercado de games,
                assumindo e cumprindo sempre o
                compromisso com nossos clientes.
            </p>
            <p>
                No e-commerce, faturamos nosso primeiro pedido
                em fevereiro de 2008, dando início as nossas
                atividades com a missão de atender com seriedade
                e responsabilidade nossos clientes de todo o Brasil,
                com preços acessíveis e competitivos.
            </p>
            <p>
                Dois anos após o início de nossas atividades online,
                já nos tornamos referência no comércio eletrônico
                devido a alta qualidade do serviço prestado,
                solidificando a marca e sendo protagonistas
                no setor de games brasileiro, competindo em
                pé de igualdade com as grandes redes varejistas.
            </p>
        </div>
        <footer>
            <div class="footer_left">
                <div class="footer_info">
                    <ul>
                        <li>CONHEÇA A SMART GAMES</li>
                        <li>CONHEÇA A SMART GAMES</li>
                        <li>COMO COMPRAR</li>
                        <li>INDICAÇÃO E DESCONTO</li>
                        <li>BLOG SMART GAMES</li>
                    </ul>
                    <ul>
                        <li>
                            <svg id="Símbolo_13_1" data-name="Símbolo 13 – 1" xmlns="http://www.w3.org/2000/svg" width="20.686" height="20.686" viewBox="0 0 20.686 20.686">
                                <path id="Caminho_3" data-name="Caminho 3" d="M10.343,1.839a31.714,31.714,0,0,1,4.137.115,5.33,5.33,0,0,1,1.954.345,4.036,4.036,0,0,1,1.954,1.954,5.33,5.33,0,0,1,.345,1.954c0,1.034.115,1.379.115,4.137a31.714,31.714,0,0,1-.115,4.137,5.33,5.33,0,0,1-.345,1.954,4.036,4.036,0,0,1-1.954,1.954,5.33,5.33,0,0,1-1.954.345c-1.034,0-1.379.115-4.137.115a31.714,31.714,0,0,1-4.137-.115,5.33,5.33,0,0,1-1.954-.345A4.036,4.036,0,0,1,2.3,16.434a5.33,5.33,0,0,1-.345-1.954c0-1.034-.115-1.379-.115-4.137a31.714,31.714,0,0,1,.115-4.137A5.33,5.33,0,0,1,2.3,4.252,4.128,4.128,0,0,1,3.1,3.1a1.943,1.943,0,0,1,1.149-.8,5.33,5.33,0,0,1,1.954-.345,31.714,31.714,0,0,1,4.137-.115m0-1.839A33.957,33.957,0,0,0,6.091.115a7.1,7.1,0,0,0-2.528.46A4.5,4.5,0,0,0,1.724,1.724,4.5,4.5,0,0,0,.575,3.563a5.236,5.236,0,0,0-.46,2.528A33.957,33.957,0,0,0,0,10.343,33.957,33.957,0,0,0,.115,14.6a7.1,7.1,0,0,0,.46,2.528,4.5,4.5,0,0,0,1.149,1.839,4.5,4.5,0,0,0,1.839,1.149,7.1,7.1,0,0,0,2.528.46,33.957,33.957,0,0,0,4.252.115,33.957,33.957,0,0,0,4.252-.115,7.1,7.1,0,0,0,2.528-.46,4.822,4.822,0,0,0,2.988-2.988,7.1,7.1,0,0,0,.46-2.528c0-1.149.115-1.494.115-4.252a33.957,33.957,0,0,0-.115-4.252,7.1,7.1,0,0,0-.46-2.528,4.5,4.5,0,0,0-1.149-1.839A4.5,4.5,0,0,0,17.124.575,7.1,7.1,0,0,0,14.6.115,33.957,33.957,0,0,0,10.343,0m0,5.057a5.2,5.2,0,0,0-5.287,5.287,5.287,5.287,0,1,0,5.287-5.287m0,8.734A3.386,3.386,0,0,1,6.9,10.343,3.386,3.386,0,0,1,10.343,6.9a3.386,3.386,0,0,1,3.448,3.448,3.386,3.386,0,0,1-3.448,3.448M15.86,3.563a1.264,1.264,0,1,0,1.264,1.264A1.275,1.275,0,0,0,15.86,3.563" fill="#fff" fill-rule="evenodd"/>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.158" height="18.31" viewBox="0 0 19.158 18.31">
                                <g id="linkedin-letters_1_" data-name="linkedin-letters (1)" transform="translate(0 -9.708)">
                                    <g id="Grupo_1107" data-name="Grupo 1107" transform="translate(0 9.708)">
                                    <rect id="Retângulo_1509" data-name="Retângulo 1509" width="4.116" height="12.36" transform="translate(0.237 5.949)" fill="#fff"/>
                                    <path id="Caminho_1701" data-name="Caminho 1701" d="M162.835,140.747a4.43,4.43,0,0,0-3.43-1.416,4.943,4.943,0,0,0-1.428.193,3.24,3.24,0,0,0-1.085.543,4.647,4.647,0,0,0-1.191,1.308v-1.758h-4.1l.013.6q.013.6.013,3.692t-.025,8.07h4.1v-6.9a3.012,3.012,0,0,1,.137-1.01A2.649,2.649,0,0,1,156.63,143a2.019,2.019,0,0,1,1.316-.431,1.775,1.775,0,0,1,1.578.742,3.609,3.609,0,0,1,.505,2.052v6.61h4.1v-7.084A5.938,5.938,0,0,0,162.835,140.747Z" transform="translate(-144.974 -133.668)" fill="#fff"/>
                                    <path id="Caminho_1702" data-name="Caminho 1702" d="M2.32,9.708a2.348,2.348,0,0,0-1.678.6A2.008,2.008,0,0,0,0,11.841a2.044,2.044,0,0,0,.624,1.522,2.251,2.251,0,0,0,1.646.611h.025a2.35,2.35,0,0,0,1.69-.611,1.974,1.974,0,0,0,.63-1.522,2.08,2.08,0,0,0-.636-1.528A2.281,2.281,0,0,0,2.32,9.708Z" transform="translate(0 -9.708)" fill="#fff"/>
                                    </g>
                                </g>
                            </svg>
                        </li>
                        <li>    
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20.687" viewBox="0 0 20 20.687">
                                <g id="Símbolo_11_1" data-name="Símbolo 11 – 1" transform="translate(-0.441)">
                                    <rect id="Retângulo_392" data-name="Retângulo 392" width="20" height="20" transform="translate(0.441)" fill="none"/>
                                    <path id="Caminho_1" data-name="Caminho 1" d="M87.01,20.686V11.263h3.218l.46-3.678H87.01v-2.3c0-1.034.345-1.839,1.839-1.839H90.8V.115C90.343.115,89.194,0,87.93,0a4.436,4.436,0,0,0-4.712,4.827V7.585H80v3.678h3.218v9.424Z" transform="translate(-74.613 0.001)" fill="#fff" fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.468" height="16.516" viewBox="0 0 23.468 16.516">
                                <g id="XMLID_822_" transform="translate(0 -45.917)">
                                    <path id="XMLID_823_" d="M22.553,47.335c-.847-1.007-2.411-1.418-5.4-1.418H6.313c-3.055,0-4.646.437-5.49,1.509C0,48.472,0,50.012,0,52.143v4.063c0,4.13.976,6.226,6.313,6.226H17.155c2.59,0,4.026-.362,4.954-1.251.952-.911,1.359-2.4,1.359-4.975V52.143C23.468,49.9,23.4,48.346,22.553,47.335Zm-7.487,7.4-4.924,2.573a.757.757,0,0,1-1.108-.671v-5.13a.757.757,0,0,1,1.106-.672l4.924,2.557a.757.757,0,0,1,0,1.343Z" fill="#fff"/>
                                </g>
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="footer_info">
                    <ul>
                        <li>INFORMAÇÕES ÚTEIS</li>
                        <li>FALE CONOSCO</li>
                        <li>DÚVIDAS</li>
                        <li>PRAZOS DE ENTREGA</li>
                        <li>FORMAS DE PAGAMENTO</li>
                        <li>POLITICA DE PRIVACIDADE</li>
                        <li>TROCAR E DEVOLUÇÕES</li>
                    </ul>
                </div>
            </div>
            <div class="footer_right">
                <div class="footer_pagamento">
                    <ul>
                        <li>
                            FORMAS DE PAGAMENTO
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="171.542" height="81.693" viewBox="0 0 171.542 81.693">
                                <defs>
                                  <clipPath id="clip-path">
                                    <path id="Caminho_36" data-name="Caminho 36" d="M28.344,15.958A14.172,14.172,0,0,1,25.8,15.7a8.747,8.747,0,0,1-1.893-.565l.728-3.381.084.039a8.224,8.224,0,0,0,3.855.937h.163a4.227,4.227,0,0,0,.855-.1,2.91,2.91,0,0,0,.765-.275,1.6,1.6,0,0,0,.551-.466,1.157,1.157,0,0,0,.217-.671c.009-.674-.514-1.165-2.068-1.92a8.913,8.913,0,0,1-2.33-1.544,4.7,4.7,0,0,1-.475-.545,3.777,3.777,0,0,1-.374-.62,3.335,3.335,0,0,1-.242-.7,3.454,3.454,0,0,1-.092-.792,4.465,4.465,0,0,1,.51-2.064,4.842,4.842,0,0,1,1.394-1.609A6.67,6.67,0,0,1,29.58.374,9.516,9.516,0,0,1,32.3,0a10.206,10.206,0,0,1,1.1.058c.328.035.66.087.986.154A12.065,12.065,0,0,1,36.03.685l-.7,3.271a8,8,0,0,0-1.831-.59,7.48,7.48,0,0,0-1.43-.146,5.288,5.288,0,0,0-.679.039,3.118,3.118,0,0,0-.75.191,1.924,1.924,0,0,0-.526.307,1.258,1.258,0,0,0-.312.383.96.96,0,0,0-.108.415,1.191,1.191,0,0,0,.574.948,9.846,9.846,0,0,0,1.4.826,10.535,10.535,0,0,1,2.425,1.579,3.638,3.638,0,0,1,1.2,2.767,4.874,4.874,0,0,1-.5,2.185,4.779,4.779,0,0,1-1.406,1.666A6.652,6.652,0,0,1,31.2,15.591,10.344,10.344,0,0,1,28.344,15.958Zm21.067-.24h-3.7l-.482-2.3H40.111l-.835,2.3H35.085l5.989-14.3a1.813,1.813,0,0,1,1.7-1.135h3.405l3.229,15.439ZM43.364,4.454l-2.1,5.793H44.57ZM21.16,15.718H17.167L20.473.278h4l-3.3,15.439Zm-8.872,0H8.069L4.885,3.4a2.623,2.623,0,0,0-.326-.843,1.623,1.623,0,0,0-.626-.517,11.055,11.055,0,0,0-1.8-.728C1.465,1.09.728.891,0,.728L.093.283H6.885A1.9,1.9,0,0,1,7.51.389,1.807,1.807,0,0,1,8.056.7a1.968,1.968,0,0,1,.669,1.165l1.684,8.926L14.565.283h4.193L12.29,15.722Z" transform="translate(0 0)" fill="#fff"/>
                                  </clipPath>
                                  <clipPath id="clip-path-2">
                                    <path id="vectorMask" d="M2237.743,1561.458v34.473h34.344v-11.378a1.315,1.315,0,0,0,.2-.759,1.18,1.18,0,0,0-.2-.755v-21.58Z" transform="translate(-2237.743 -1561.458)" fill="none" stroke="#fff" stroke-width="1"/>
                                  </clipPath>
                                </defs>
                                <g id="Grupo_970" data-name="Grupo 970" transform="translate(-562 -3946)">
                                  <g id="Grupo_968" data-name="Grupo 968" transform="translate(562 3955.102)">
                                    <g id="Grupo_61" data-name="Grupo 61" transform="translate(0 0)" clip-path="url(#clip-path)">
                                      <g id="Grupo_60" data-name="Grupo 60" transform="translate(-0.01 -0.158)">
                                        <rect id="Retângulo_97" data-name="Retângulo 97" width="49.535" height="16.125" fill="#fff"/>
                                      </g>
                                    </g>
                                  </g>
                                  <g id="Grupo_951" data-name="Grupo 951" transform="translate(562.555 3993.053)">
                                    <path id="Exclusão_1" data-name="Exclusão 1" d="M11.612,15.629H7.829A7.828,7.828,0,0,1,0,7.882,7.747,7.747,0,0,1,2.255,2.258,7.655,7.655,0,0,1,7.7,0l.178,0h3.674l.192,0a7.938,7.938,0,0,1,5.538,2.236,8.037,8.037,0,0,1,2.438,5.646,8.119,8.119,0,0,1-8.109,7.747ZM7.893.644a7.161,7.161,0,0,0-4,13.095,7.092,7.092,0,0,0,3.978,1.215h.042a7.074,7.074,0,0,0,2.771-.563A7.159,7.159,0,0,0,7.893.644ZM6.271,12.032h0a4.534,4.534,0,0,1,0-8.46v8.459Zm3.245,0h0V3.571a4.529,4.529,0,0,1,0,8.46Z" transform="translate(14.217 3.463)" fill="#fff"/>
                                    <path id="Caminho_51" data-name="Caminho 51" d="M2.326,5.824H1.121c-.4,0-.792,0-1.118.014v-.23H.028a1.219,1.219,0,0,0,.54-.124c.126-.085.186-.23.2-.508V.919a1.148,1.148,0,0,0-.06-.4A.425.425,0,0,0,.551.308.861.861,0,0,0,.071.23H0V0C.326.016.661.016.983.016L1.507,0h.919A3.994,3.994,0,0,1,3.858.248,3.071,3.071,0,0,1,4.9.907a2.806,2.806,0,0,1,.645.93,2.777,2.777,0,0,1,.218,1.079,2.953,2.953,0,0,1-.611,1.759,2.742,2.742,0,0,1-1.043.8,4.341,4.341,0,0,1-1.787.344ZM2.235.269c-.26,0-.416.014-.54.023L1.585.3v4.54c0,.632.439.717.866.717a2.634,2.634,0,0,0,1.137-.23,1.982,1.982,0,0,0,.74-.6,2.476,2.476,0,0,0,.4-.836,3.5,3.5,0,0,0,.119-.93,3.128,3.128,0,0,0-.181-1.079,2.448,2.448,0,0,0-.521-.85,2.329,2.329,0,0,0-.82-.57A2.885,2.885,0,0,0,2.235.269Z" transform="translate(4.482 19.735)" fill="#fff"/>
                                    <path id="Caminho_52" data-name="Caminho 52" d="M2928.392,1778.711v-.218h-.143c-.229,0-.417,0-.417-.276V1775l-.06-.117-.149.041c-.037.025-.5.186-.895.3v.136c.309.165.433.216.433.585v2.26c0,.275-.168.275-.4.275h-.162v.218c.31,0,.609-.016.919-.016s.594.016.877.016" transform="translate(-2916.062 -1753.152)" fill="#fff"/>
                                    <path id="Caminho_53" data-name="Caminho 53" d="M2932.045,1753.885a.419.419,0,0,0,.408-.418.407.407,0,0,0-.408-.4.422.422,0,0,0-.409.4.428.428,0,0,0,.409.418" transform="translate(-2920.611 -1733.426)" fill="#fff"/>
                                    <path id="Caminho_54" data-name="Caminho 54" d="M2951.849,1778.489h-.152c-.229,0-.417,0-.417-.273v-2.156c0-.653-.248-1.167-.958-1.167a2.437,2.437,0,0,0-1.444.629v-.544l-.051-.085a10.2,10.2,0,0,1-1.1.4v.16c.393.158.482.244.482.551v2.214c0,.273-.166.273-.4.273h-.152v.218c.3,0,.6-.016.9-.016s.595.016.886.016v-.218h-.152c-.23,0-.415,0-.415-.273v-2.471a2.211,2.211,0,0,1,.966-.4c.478,0,.77.23.77.713v2.161c0,.273-.168.273-.4.273h-.151v.218c.3,0,.6-.016.9-.016s.592.016.883.016Z" transform="translate(-2935.089 -1753.146)" fill="#fff"/>
                                    <path id="Caminho_55" data-name="Caminho 55" d="M1.6,3.939A1.536,1.536,0,0,1,.788,3.73a1.445,1.445,0,0,1-.487-.5A2.278,2.278,0,0,1,0,2.124,2.708,2.708,0,0,1,.182,1.1,1.837,1.837,0,0,1,.625.448,1.693,1.693,0,0,1,1.178.1a1.472,1.472,0,0,1,.51-.1,1.534,1.534,0,0,1,.955.324,1.245,1.245,0,0,1,.459.988v.152l-.09.051H.669A2.081,2.081,0,0,0,.669,2a1.775,1.775,0,0,0,.381,1.02,1.1,1.1,0,0,0,.845.427,1.628,1.628,0,0,0,1.128-.56L3.137,3a2.889,2.889,0,0,1-.659.661,1.525,1.525,0,0,1-.882.278ZM1.654.266c-.505,0-.859.367-.965.978H2.145c.2,0,.23-.106.23-.209A.815.815,0,0,0,2.191.492.689.689,0,0,0,1.654.266Z" transform="translate(16.726 21.744)" fill="#fff"/>
                                    <path id="Caminho_56" data-name="Caminho 56" d="M3027.1,1778.7v-.216h-.459c-.23,0-.4,0-.4-.276v-1.961a.7.7,0,0,1,.608-.688c.291,0,.291.2.549.2a.413.413,0,0,0,.285-.132.407.407,0,0,0,.106-.3.459.459,0,0,0-.476-.441c-.506,0-.859.535-1.068.859h-.016V1775l-.074-.11c-.075,0-.41.23-1.019.477v.122c.124.07.434.118.434.377v2.345c0,.276-.168.276-.4.276h-.229v.216c.306,0,.652-.014,1-.014s.708,0,1.168.014" transform="translate(-3004.927 -1753.143)" fill="#fff"/>
                                    <path id="Caminho_57" data-name="Caminho 57" d="M3057.962,1778.571a1.1,1.1,0,0,1-1.052-1.017l-.152.039.09.961a2.189,2.189,0,0,0,1.022.286c.993,0,1.436-.586,1.436-1.137,0-1.31-1.939-1.008-1.939-1.987a.592.592,0,0,1,.652-.553.857.857,0,0,1,.917.829h.194l-.058-.852a2.154,2.154,0,0,0-.95-.244,1.149,1.149,0,0,0-1.294,1.07c0,1.344,1.817,1.027,1.817,2.01a.589.589,0,0,1-.676.594" transform="translate(-3033.681 -1753.15)" fill="#fff"/>
                                    <path id="Caminho_58" data-name="Caminho 58" d="M3112.332,1758.341l.192-1.218-.192-.05a1.7,1.7,0,0,1-1.679,1.447,2.72,2.72,0,0,1-2.484-2.9,2.379,2.379,0,0,1,2.353-2.646,1.588,1.588,0,0,1,1.786,1.378h.209l-.083-1.195a5.953,5.953,0,0,0-1.97-.443,3.067,3.067,0,0,0-3.159,2.937,2.97,2.97,0,0,0,3.188,3.137,4.68,4.68,0,0,0,1.837-.441" transform="translate(-3079.358 -1733.099)" fill="#fff"/>
                                    <path id="Caminho_59" data-name="Caminho 59" d="M3166.346,1754.656v-.216h-.141c-.231,0-.414,0-.414-.275V1748.4l-.069-.117-.188.092a5.135,5.135,0,0,1-.858.361v.133c.316.089.445.108.445.65v4.648c0,.275-.17.275-.4.275h-.161v.216c.312,0,.611-.011.918-.011s.6.011.877.011" transform="translate(-3131.104 -1729.097)" fill="#fff"/>
                                    <path id="Caminho_60" data-name="Caminho 60" d="M3183.65,1776.891v2.138a.9.9,0,0,0,.917.991,2.248,2.248,0,0,0,1.48-.7V1780l.039.025a8.6,8.6,0,0,1,1.205-.257v-.177h-.333c-.143,0-.229,0-.229-.157v-3.079l-.067-.152c-.084,0-.553.067-1.3.117v.147c.3.087.689.179.689.344v2.246a1.871,1.871,0,0,1-1.009.51c-.725,0-.725-.719-.725-.971v-2.152c0-.184,0-.241-.089-.241s-.78.05-1.075.06v.158c.458.039.5.248.5.46" transform="translate(-3147.905 -1754.324)" fill="#fff"/>
                                    <path id="Caminho_61" data-name="Caminho 61" d="M1.911,6.5A2.3,2.3,0,0,1,.85,6.256L.751,6.2.5,6.389l-.172-.08A9.726,9.726,0,0,0,.443,4.823V1.233A.8.8,0,0,0,.349.749.574.574,0,0,0,.034.59L0,.581V.459A5.475,5.475,0,0,0,.861.092L1.047,0l.062.117V3.162a3.362,3.362,0,0,1,.576-.407A1.41,1.41,0,0,1,3.5,3.1a1.764,1.764,0,0,1,.305.56,2.067,2.067,0,0,1,.106.659,2.349,2.349,0,0,1-.549,1.5,1.97,1.97,0,0,1-.629.5A1.837,1.837,0,0,1,1.911,6.5Zm0-3.489a1.291,1.291,0,0,0-.795.393V5.434a.919.919,0,0,0,.23.547.88.88,0,0,0,.262.22.8.8,0,0,0,.372.09,1.114,1.114,0,0,0,.967-.533,2.033,2.033,0,0,0,.3-1.089A1.837,1.837,0,0,0,2.823,3.5,1.509,1.509,0,0,0,2.4,3.149,1.011,1.011,0,0,0,1.9,3.011Z" transform="translate(39.368 19.184)" fill="#fff"/>
                                    <path id="Caminho_62" data-name="Caminho 62" d="M2864.083,1833.21c-.23,0-.494-.016-.676-.016h-.016v.175h.08c.167,0,.317.02.321.229v2.376c0,.23-.154.23-.321.23h-.08v.177h.016c.182,0,.448-.019.668-.019s.5.019.719.019h.019v-.177h-.08c-.166,0-.318-.019-.318-.23V1833.6c0-.229.154-.229.318-.229h.08v-.175h-.023c-.218,0-.484.016-.712.016" transform="translate(-2858.936 -1805.833)" fill="#fff"/>
                                    <path id="Caminho_63" data-name="Caminho 63" d="M2882.684,1833.222c-.211,0-.423-.016-.637-.016h-.018v.175h.12c.136,0,.374.046.374.409v1.67l-1.993-2.248h-.418c-.172,0-.349-.016-.522-.016h-.019v.174h.079a.391.391,0,0,1,.392.391v1.911c0,.363-.087.553-.388.555h-.083v.177h.019c.207,0,.416-.019.621-.019s.388.019.583.019h.023v-.177h-.1c-.34,0-.4-.115-.4-.512V1833.9l2.3,2.568h.212v-.021a2.779,2.779,0,0,1-.025-.459v-2.067c0-.537.2-.553.386-.558h.085v-.175h-.018c-.188,0-.375.016-.558.016" transform="translate(-2873.556 -1805.847)" fill="#fff"/>
                                    <path id="Caminho_64" data-name="Caminho 64" d="M2921.8,1831.672v.022l-.23.127H2919.2l-.23-.119v-.014h-.144v.021l-.028.384-.054.386v.021h.176v-.014c.074-.334.068-.392.4-.4h.725v2.406c0,.349-.11.354-.36.359h-.1v.179h.02c.179,0,.5-.016.768-.016s.561.016.74.016h.02v-.179h-.106c-.215,0-.352-.025-.355-.367v-2.4h.725c.287,0,.3.245.315.418v.027l.159-.059h.013v-.379l.051-.367v-.019l-.128-.023Z" transform="translate(-2908.958 -1804.457)" fill="#fff"/>
                                    <path id="Caminho_65" data-name="Caminho 65" d="M2955.586,1835.593v.018c-.133.51-.358.537-.9.537-.3,0-.537,0-.537-.274v-1.037h.526c.3,0,.3.154.335.433v.019l.172-.034v-.016c0-.174-.015-.344-.015-.516s0-.354.015-.533v-.019h-.172v.016c-.03.248-.078.381-.338.383h-.524v-1.148h.614c.459,0,.507.216.532.512v.024l.159-.042h.017v-.016c0-.129-.017-.3-.017-.459v-.249h-.02c-.311,0-.781.016-1.162.016s-.855-.016-1.129-.016h-.021v.175h.083c.163,0,.314.019.317.241v2.377c0,.229-.157.229-.317.229h-.083v.177h.021c.26,0,.8-.021,1.209-.021s.918.021,1.219.021h.019v-.019c.04-.229.095-.48.158-.72v-.016l-.146-.037Z" transform="translate(-2940.032 -1805.821)" fill="#fff"/>
                                    <path id="Caminho_66" data-name="Caminho 66" d="M1.479,3.218H0V3.034H.1c.186,0,.3-.085.3-.23V.508A.335.335,0,0,0,.308.233.34.34,0,0,0,.11.177H0V0H.726c.163,0,.262.011.384,0s.23,0,.344,0a1.479,1.479,0,0,1,.765.161.659.659,0,0,1,.243.25.857.857,0,0,1-.528,1.215L2.7,2.777a.475.475,0,0,0,.425.262h.016v.179h-.9a11.954,11.954,0,0,1-.939-1.477H1.024v.951c0,.34.14.342.349.342h.106ZM1.263.2l-.23.016V1.539h.2a.721.721,0,0,0,.505-.158A.712.712,0,0,0,1.906.848.6.6,0,0,0,1.263.2Z" transform="translate(15.888 27.357)" fill="#fff"/>
                                    <path id="Caminho_67" data-name="Caminho 67" d="M3019.424,1833.373v-.174h-.023c-.187,0-.372.016-.558.016s-.42-.016-.636-.016h-.019v.174h.117c.136,0,.377.046.377.411v1.67l-2-2.249h-.418c-.172,0-.351-.016-.524-.016h-.019v.175h.078a.387.387,0,0,1,.393.391v1.911c0,.363-.087.553-.388.558h-.08v.175h.019c.2,0,.414-.016.619-.016s.388.016.583.016h.021v-.175h-.1c-.344,0-.4-.118-.409-.512v-1.821l2.307,2.57h.208v-.021a2.516,2.516,0,0,1-.031-.459v-2.067c0-.537.2-.553.391-.558Z" transform="translate(-2996.603 -1805.839)" fill="#fff"/>
                                    <path id="Caminho_68" data-name="Caminho 68" d="M1.077,3.323H.985c-.156,0-.317-.014-.475-.014a4.168,4.168,0,0,0-.425.014H0V3.149H.048a.379.379,0,0,0,.23-.071.436.436,0,0,0,.149-.209L1.148.781A5.163,5.163,0,0,0,1.33.207,2.09,2.09,0,0,0,1.743,0h.046l.048.03.041.113.834,2.384.044.124c.041.122.083.23.126.335a.26.26,0,0,0,.28.17h.053V3.33H3.1c-.17,0-.347-.014-.535-.014s-.37,0-.563.014h-.14V3.149h.071l.26-.113a1.426,1.426,0,0,0-.087-.319L1.934,2.2h-1l-.145.459c-.016.057-.034.11-.051.156a.71.71,0,0,0-.048.188c0,.122.2.14.324.14h.064v.177ZM1.424.689h0l-.4,1.222h.79Z" transform="translate(22.759 27.245)" fill="#fff"/>
                                    <path id="Caminho_69" data-name="Caminho 69" d="M3085.677,1831.672v.025l-.23.121h-2.365l-.23-.119v-.014h-.143v.021l-.028.384-.052.384v.021h.175v-.014c.072-.336.064-.392.4-.4h.724v2.407c0,.349-.106.354-.358.358h-.1v.179h.014c.176,0,.5-.016.766-.016s.564.016.742.016h.019v-.179h-.107c-.217,0-.355-.025-.357-.367v-2.4h.726c.288,0,.305.246.314.418v.028l.164-.06h.016v-.379l.051-.368v-.018l-.131-.023Z" transform="translate(-3057.052 -1804.457)" fill="#fff"/>
                                    <path id="Caminho_70" data-name="Caminho 70" d="M3117.927,1833.226c-.229,0-.493-.016-.675-.016h-.015v.169h.082c.166,0,.313.023.314.243V1836c0,.229-.152.229-.314.229h-.082v.177h.015c.179,0,.447-.018.671-.018s.5.018.717.018h.018v-.177h-.08c-.167,0-.317-.016-.317-.229v-2.38c0-.229.15-.229.317-.243h.08v-.169h-.018c-.216,0-.49.016-.713.016" transform="translate(-3088.337 -1805.848)" fill="#fff"/>
                                    <path id="Caminho_71" data-name="Caminho 71" d="M1.72,3.344A1.782,1.782,0,0,1,.5,2.885a1.527,1.527,0,0,1-.363-.519A1.729,1.729,0,0,1,0,1.7,1.7,1.7,0,0,1,.491.489,1.693,1.693,0,0,1,1.695,0,1.9,1.9,0,0,1,2.94.427a1.456,1.456,0,0,1,.377.491,1.592,1.592,0,0,1,.129.668,1.927,1.927,0,0,1-.126.71,1.635,1.635,0,0,1-.367.553A1.745,1.745,0,0,1,1.72,3.344ZM1.688.23a.882.882,0,0,0-.8.429,1.64,1.64,0,0,0-.214.875A2.081,2.081,0,0,0,.949,2.623a.942.942,0,0,0,.813.482,1,1,0,0,0,.524-.119.843.843,0,0,0,.308-.333A2.067,2.067,0,0,0,2.777,1.7,1.837,1.837,0,0,0,2.51.717.962.962,0,0,0,1.688.23Z" transform="translate(30.421 27.293)" fill="#fff"/>
                                    <path id="Caminho_72" data-name="Caminho 72" d="M3173.38,1833.373v-.174h-.019c-.188,0-.372.016-.558.016s-.421-.016-.636-.016h-.022v.174h.122c.134,0,.373.046.373.411v1.67l-1.993-2.249h-.421c-.17,0-.344-.016-.523-.016h-.016v.175h.074a.386.386,0,0,1,.277.114.391.391,0,0,1,.114.276v1.913c0,.363-.089.554-.388.556h-.081v.177h.017c.209,0,.413-.016.62-.016s.389.016.585.016h.021v-.177h-.1c-.342,0-.4-.115-.406-.51v-1.821l2.3,2.57h.215v-.021a3.453,3.453,0,0,1-.022-.46v-2.067c0-.537.2-.553.385-.558Z" transform="translate(-3135.735 -1805.839)" fill="#fff"/>
                                    <path id="Caminho_73" data-name="Caminho 73" d="M1.079,3.321H1.056C.882,3.321.694,3.3.51,3.3s-.317,0-.491.016H0V3.149H.048a.4.4,0,0,0,.379-.285L1.148.779A5.9,5.9,0,0,0,1.33.2,2.039,2.039,0,0,0,1.743,0h.046l.048.028L1.876.14l.841,2.386v.021a3.95,3.95,0,0,0,.161.439.264.264,0,0,0,.282.172h.055v.175H3.19c-.216,0-.411-.016-.625-.016s-.473,0-.689.016H1.865V3.149h.069L2.2,3.034a1.378,1.378,0,0,0-.09-.319L1.931,2.2H.919l-.14.459q-.024.083-.048.152h0a.625.625,0,0,0-.041.193c0,.064.055.142.317.142h.073v.175ZM1.426.689h0l-.4,1.22h.8Z" transform="translate(37.584 27.247)" fill="#fff"/>
                                    <path id="Caminho_74" data-name="Caminho 74" d="M3244.41,1835.6v.016l-.14.32a.638.638,0,0,1-.426.23l-.338.018h-.254c-.142-.021-.252-.066-.256-.229v-2.343c0-.229.114-.229.288-.229h.133v-.175h-.018c-.231,0-.459.016-.689.016s-.473-.016-.717-.016h-.019v.175h.072c.166,0,.32.019.32.229v2.332c0,.268-.154.285-.32.287h-.083v.174h.019c.4,0,.8-.015,1.2-.015s.8.015,1.2.015h.017v-.014c.054-.259.116-.514.169-.772v-.025Z" transform="translate(-3201.059 -1805.841)" fill="#fff"/>
                                    <path id="Caminho_75" data-name="Caminho 75" d="M.478.958A.459.459,0,0,1,0,.48.48.48,0,0,1,.136.14.473.473,0,0,1,.478,0,.473.473,0,0,1,.953.48.478.478,0,0,1,.816.82.475.475,0,0,1,.478.958Zm0-.866A.374.374,0,0,0,.2.209.4.4,0,0,0,.094.48.4.4,0,0,0,.2.751.374.374,0,0,0,.478.868.39.39,0,0,0,.857.48.4.4,0,0,0,.747.209.37.37,0,0,0,.478.092Z" transform="translate(42.967 27.25)" fill="#fff"/>
                                    <path id="Caminho_76" data-name="Caminho 76" d="M.23.508H0V.485L.069.439V.087L0,.023V0H.25L.409.126.294.271l.08.11.1.11V.508H.386L.216.285H.161V.446L.23.485ZM.161.03V.26H.218L.308.133.216.03Z" transform="translate(43.205 27.474)" fill="#fff"/>
                                    <path id="Caminho_77" data-name="Caminho 77" d="M45.7,34.64H1.89A1.89,1.89,0,0,1,.149,33.492,1.858,1.858,0,0,1,0,32.764V1.879A1.867,1.867,0,0,1,.553.549,1.89,1.89,0,0,1,1.89,0H45.7a1.892,1.892,0,0,1,1.743,1.148,1.856,1.856,0,0,1,.149.73V32.764a1.865,1.865,0,0,1-.553,1.327,1.892,1.892,0,0,1-1.337.549ZM1.89.459a1.415,1.415,0,0,0-1,.413A1.4,1.4,0,0,0,.459,1.879V32.764a1.4,1.4,0,0,0,.416,1,1.415,1.415,0,0,0,1,.413H45.7a1.417,1.417,0,0,0,1.419-1.41V1.879A1.417,1.417,0,0,0,45.7.459Z" transform="translate(0 0)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_950" data-name="Grupo 950" transform="translate(690.857 3993.053)">
                                    <g id="Grupo_66" data-name="Grupo 66" transform="translate(4.537)" clip-path="url(#clip-path-2)">
                                      <rect id="Retângulo_98" data-name="Retângulo 98" width="34.73" height="34.628" transform="translate(-0.076 -0.15)" fill="none" stroke="#fff" stroke-width="1"/>
                                    </g>
                                    <path id="União_2" data-name="União 2" d="M20.93,12.593h-2.6V11.072a3.222,3.222,0,0,1-1.258.2h-.4v1.325H13.528l-.772-.877-.821.877H6.826V6.953h5.206l.737.868.806-.868h3.485a4.028,4.028,0,0,1,.72.059,1.243,1.243,0,0,1,.641.273V6.953h3.107a3.371,3.371,0,0,1,.624.064,1.776,1.776,0,0,1,.681.266V6.953h4.723v.332A1.874,1.874,0,0,1,28.7,6.953h2.649v.332a2.037,2.037,0,0,1,1.212-.332H34.35v.806H32.426c-.668,0-1.381.314-1.381,1.2,0,1.194.983,1.228,1.862,1.244h.167a.486.486,0,0,1,.334.091.331.331,0,0,1,.123.268.347.347,0,0,1-.115.26.549.549,0,0,1-.393.1H31.155V11.8h1.863a2.234,2.234,0,0,0,.8-.13,1.088,1.088,0,0,0,.513-.392v1.049a3.235,3.235,0,0,1-1.418.264h-2.5v-.362a1.566,1.566,0,0,1-.575.271,2.9,2.9,0,0,1-.737.093H21.227v-1.3c0-.157,0-.167-.177-.167H20.93V12.6Zm6.454-1.661v.87h1.883a1.743,1.743,0,0,0,1.123-.315,1.179,1.179,0,0,0,.392-.966,1.115,1.115,0,0,0-.29-.865.971.971,0,0,0-.437-.246,2.762,2.762,0,0,0-.666-.067l-.518-.014A1.071,1.071,0,0,1,28.5,9.28a.3.3,0,0,1-.212-.3.314.314,0,0,1,.142-.292.676.676,0,0,1,.389-.071h1.772V7.759h-1.94c-1.017,0-1.379.622-1.379,1.2a1.041,1.041,0,0,0,.6,1.062,3.442,3.442,0,0,0,1.256.182H29.3a.486.486,0,0,1,.341.091.328.328,0,0,1,.121.268.342.342,0,0,1-.113.26.552.552,0,0,1-.4.1Zm-14.625-.469,1.19,1.339h1.875V10.44H17.03a2.155,2.155,0,0,0,1.157-.246,1.038,1.038,0,0,0,.378-.413,1.5,1.5,0,0,0,.143-.693,1.476,1.476,0,0,0-.145-.679,1.045,1.045,0,0,0-.382-.4,2.063,2.063,0,0,0-1.1-.246H14L12.771,9.078,11.584,7.759H7.7V11.8h3.819l1.229-1.339ZM23.586,11.8h3.222v-.841H24.548v-.811h2.211V9.327H24.548V8.59h2.261V7.759H23.586Zm-4.421,0h.968V10.325l0,0h1.034a.936.936,0,0,1,.708.179,1.088,1.088,0,0,1,.158.72V11.8H23V11a1.151,1.151,0,0,0-.16-.737.989.989,0,0,0-.469-.339,1.065,1.065,0,0,0,.432-.337,1.164,1.164,0,0,0,.246-.738,1.052,1.052,0,0,0-.132-.555.982.982,0,0,0-.359-.344,2.32,2.32,0,0,0-1.162-.189H19.166ZM13.388,9.781l1.474-1.6V11.43ZM8.662,10.958v-.811h2.12V9.327H8.662V8.59H11.08l1.059,1.174-1.1,1.187,0,.007Zm25.66-1.226a.452.452,0,0,0-.057-.067.953.953,0,0,0-.436-.246,2.767,2.767,0,0,0-.666-.084l-.533-.007a1.05,1.05,0,0,1-.374-.049.3.3,0,0,1-.211-.3.323.323,0,0,1,.142-.292.684.684,0,0,1,.389-.071H34.35V9.771Zm-18.5-.113V8.594h1.261a.693.693,0,0,1,.427.116.448.448,0,0,1,.165.381c0,.337-.221.528-.6.528ZM21.306,9.5v0H20.131v-.9h1.194a.938.938,0,0,1,.455.079.377.377,0,0,1,.2.361.431.431,0,0,1-.2.376.932.932,0,0,1-.4.091ZM8.438,5.644H6.761l-.293-.691V5.64H3.222l-.371-.9H2.02l-.373.895H0V4.843H1.059l.005,0,.373-.9h2l.365.9H5.789V1.7L7.181,4.844h.848l.014,0L9.426,1.708l0,3.136h.983l.011,0V.809h-.011V.8H8.818l0,.005H8.81L7.654,3.542,6.39.8H4.812V.809H4.807V4.615L3.173.8,1.733.8l-.59,1.386L0,4.841,0,2.688,1.167.005H3.686l.327.666V.005H6.962l.644,1.452L8.235.005h9.373c.043,0,.086-.005.129-.005A1.574,1.574,0,0,1,18.7.332V.005h2.559V.332A3.29,3.29,0,0,1,22.694,0c.059,0,.12,0,.178.005h3.719l.344.666V.005h2.752l.372.666V.005h2.678V5.638h-2.7l-.511-.852v.852H26.144l-.372-.9H24.94l-.365.9h-1.85A3.323,3.323,0,0,1,21.261,5.3v.341H17.083V4.358c0-.181-.036-.19-.143-.19h-.147V5.642H8.732v-.7l-.292.7h0ZM22.052.919a1.461,1.461,0,0,0-.6.359,1.73,1.73,0,0,0-.415.737,3,3,0,0,0-.106.851,2.048,2.048,0,0,0,.521,1.546,2.094,2.094,0,0,0,1.289.447l.107,0h1.133l.351-.919H26.34l.373.9H28.68V1.816l1.835,3.028h1.369V.8H30.9V3.618L29.2.8H27.724v3.82L26.095.8H24.647L23.288,3.979h-.433c-.026,0-.053,0-.08,0a.944.944,0,0,1-.59-.208,1.387,1.387,0,0,1-.266-.949,1.346,1.346,0,0,1,.27-.916.933.933,0,0,1,.638-.251.912.912,0,0,1,.1.005h.912V.8h-.975A2.911,2.911,0,0,0,22.052.919Zm-7.02,3.932H16V4.844h.019V3.38H16l.015,0,1.02,0,.02,0a2.407,2.407,0,0,1,.357.022.967.967,0,0,1,.326.153l.005.008a1.2,1.2,0,0,1,.159.632.572.572,0,0,1-.007.068v.034a.339.339,0,0,1-.005.042v.5H17.9l.982,0V4.048a1.142,1.142,0,0,0-.165-.738,1.115,1.115,0,0,0-.474-.344,1.136,1.136,0,0,0,.683-1.074,1.043,1.043,0,0,0-.011-.183.929.929,0,0,0-.062-.23.93.93,0,0,0-.065-.135.96.96,0,0,0-.354-.356,2.275,2.275,0,0,0-.954-.207c-.071,0-.142,0-.213.01H15.053V.814h-.021Zm4.44-.007h.983V.8h-.983Zm-8.333,0,3.227,0V4.006H12.111v-.78h2.21V2.391h-.013V2.377h-2.2V1.654h2.254V.8H11.14V.809h0ZM1.778,3.1l.658-1.61L3.1,3.1Zm24.233,0H24.682l.661-1.607L26.011,3.1v0Zm-8.835-.555H16v-.9h1.188a1.015,1.015,0,0,1,.462.074.366.366,0,0,1,.2.354.434.434,0,0,1-.2.391v0a.943.943,0,0,1-.4.087Q17.216,2.55,17.175,2.546Z" transform="translate(4.537 11.816)" fill="#fff"/>
                                    <path id="Caminho_80" data-name="Caminho 80" d="M1.63,3.255A1.626,1.626,0,0,1,.484.475,1.647,1.647,0,0,1,2.8.475a1.628,1.628,0,0,1-1.17,2.78Zm0-3.008A1.379,1.379,0,0,0,.647.654a1.391,1.391,0,0,0-.393.983,1.389,1.389,0,1,0,2.775,0A1.393,1.393,0,0,0,2.635.654,1.376,1.376,0,0,0,1.63.246Zm-.3,2.131H1.064V.849h.708a.646.646,0,0,1,.349.086.378.378,0,0,1,.165.339.393.393,0,0,1-.165.344c.061.037.123.1.135.28l.012.265c0,.076,0,.088.074.123v.091h-.3a2,2,0,0,1-.044-.41c0-.12-.017-.221-.221-.221H1.327V2.37Zm0-1.29v.425H1.75c.246,0,.265-.118.265-.219,0-.182-.123-.206-.231-.206Z" transform="translate(-0.005 31.385)" fill="#fff"/>
                                  </g>
                                  <g id="_3" data-name="3" transform="translate(690.857 3952.502)">
                                    <path id="Caminho_86" data-name="Caminho 86" d="M1499.2,1805.049a5.079,5.079,0,0,1-6.291.671l-1.9,3.028a8.665,8.665,0,0,0,10.685-1.139Z" transform="translate(-1486.95 -1788.805)" fill="#fff"/>
                                    <path id="Caminho_87" data-name="Caminho 87" d="M1.408,13.422A8.677,8.677,0,0,1,8.677,0h.135a8.684,8.684,0,0,1,8.321,6.7ZM8.68,3.573A5.114,5.114,0,0,0,3.57,8.607a4.444,4.444,0,0,0,.03.617l8.983-3.836a5.184,5.184,0,0,0-.769-.74,5.122,5.122,0,0,0-.91-.567,5.052,5.052,0,0,0-2.141-.506Z" transform="translate(0.004 3.91)" fill="#fff"/>
                                    <path id="Caminho_88" data-name="Caminho 88" d="M1693.7,1584.514v16.763l2.908,1.207-1.375,3.308-2.877-1.2a3.259,3.259,0,0,1-1.419-1.191,3.75,3.75,0,0,1-.557-2.08v-16.809Z" transform="translate(-1671.635 -1584.514)" fill="#fff"/>
                                    <path id="Caminho_89" data-name="Caminho 89" d="M1863.555,1641.438a5.114,5.114,0,0,1,6.626,3.828l3.5-.715a8.695,8.695,0,0,0-11.261-6.5Z" transform="translate(-1831 -1633.693)" fill="#fff"/>
                                    <path id="Caminho_90" data-name="Caminho 90" d="M1784.817,1680.21l2.369-2.675a5.108,5.108,0,0,1,0-7.651l-2.369-2.679a8.682,8.682,0,0,0,0,13" transform="translate(-1756.395 -1661.115)" fill="#fff"/>
                                    <path id="Caminho_91" data-name="Caminho 91" d="M1870.122,1769.407a5.112,5.112,0,0,1-6.627,3.818l-1.135,3.39a8.691,8.691,0,0,0,11.267-6.5Z" transform="translate(-1830.94 -1755.787)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_952" data-name="Grupo 952" transform="translate(632.565 3976.698)">
                                    <path id="Caminho_107" data-name="Caminho 107" d="M7.8-22.7a1.341,1.341,0,0,0-.446-.3,1.565,1.565,0,0,0-.573-.107,2.23,2.23,0,0,0-.343.029,1.6,1.6,0,0,0-.35.1,1.321,1.321,0,0,0-.325.2,1.275,1.275,0,0,0-.268.321A1.321,1.321,0,0,0,5-22.934a1.47,1.47,0,0,0-.72-.174A1.994,1.994,0,0,0,4-23.081a1.486,1.486,0,0,0-.29.085,1.228,1.228,0,0,0-.274.165,1.194,1.194,0,0,0-.234.263v-.446H2.433v3.634H3.2v-2.006a1.132,1.132,0,0,1,.071-.412.924.924,0,0,1,.2-.3.872.872,0,0,1,.288-.185,1,1,0,0,1,.352-.062.771.771,0,0,1,.6.245,1.046,1.046,0,0,1,.223.7v2.022h.769v-2.006a1.089,1.089,0,0,1,.074-.412.924.924,0,0,1,.2-.3.872.872,0,0,1,.288-.185.994.994,0,0,1,.352-.062.766.766,0,0,1,.6.245,1.046,1.046,0,0,1,.223.7v2.022h.771v-2.283a1.592,1.592,0,0,0-.1-.584,1.369,1.369,0,0,0-.3-.457" transform="translate(-2.433 23.108)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_953" data-name="Grupo 953" transform="translate(639.033 3976.702)">
                                    <path id="Caminho_108" data-name="Caminho 108" d="M7.152-19.282a1.814,1.814,0,0,1-.7-.143,1.8,1.8,0,0,1-.577-.395,1.84,1.84,0,0,1-.4-.611,2.093,2.093,0,0,1-.14-.765,2.043,2.043,0,0,1,.14-.767,1.844,1.844,0,0,1,.388-.606,1.773,1.773,0,0,1,.586-.4,1.772,1.772,0,0,1,.7-.14,1.415,1.415,0,0,1,.669.145,1.4,1.4,0,0,1,.473.39v-.446h.791v3.634H8.293v-.446a1.433,1.433,0,0,1-.47.386A1.459,1.459,0,0,1,7.152-19.282Zm.094-3.077a1.032,1.032,0,0,0-.461.094.99.99,0,0,0-.334.25,1.082,1.082,0,0,0-.223.37,1.311,1.311,0,0,0-.076.446,1.329,1.329,0,0,0,.076.446,1.125,1.125,0,0,0,.223.37,1.086,1.086,0,0,0,.341.252,1.137,1.137,0,0,0,.461.091,1.17,1.17,0,0,0,.446-.089,1.061,1.061,0,0,0,.568-.613,1.341,1.341,0,0,0,0-.923,1.081,1.081,0,0,0-.223-.37,1,1,0,0,0-.346-.245A1.078,1.078,0,0,0,7.246-22.359Z" transform="translate(-5.335 23.106)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_954" data-name="Grupo 954" transform="translate(643.535 3976.704)">
                                    <path id="Caminho_109" data-name="Caminho 109" d="M10.25-21.2a1.948,1.948,0,0,0-.93-.348l-.375-.058a2.184,2.184,0,0,1-.234-.045.828.828,0,0,1-.189-.065.426.426,0,0,1-.129-.107.288.288,0,0,1-.047-.161.361.361,0,0,1,.181-.312.9.9,0,0,1,.506-.12,1.689,1.689,0,0,1,.337.031,2.45,2.45,0,0,1,.312.076,1.86,1.86,0,0,1,.27.1,1.583,1.583,0,0,1,.2.1l.341-.62a2.3,2.3,0,0,0-.669-.283,3.18,3.18,0,0,0-.809-.1,2.192,2.192,0,0,0-.624.08,1.438,1.438,0,0,0-.473.223,1,1,0,0,0-.3.366,1.14,1.14,0,0,0-.1.486.9.9,0,0,0,.312.711,1.777,1.777,0,0,0,.921.354l.379.049a1.168,1.168,0,0,1,.477.147.292.292,0,0,1,.152.256.361.361,0,0,1-.21.325,1.3,1.3,0,0,1-.618.118,2.434,2.434,0,0,1-.4-.031,2.738,2.738,0,0,1-.323-.08,1.7,1.7,0,0,1-.261-.118c-.076-.045-.152-.091-.223-.143l-.368.6a2.249,2.249,0,0,0,.415.239,3.153,3.153,0,0,0,.424.143,2.916,2.916,0,0,0,.395.067c.123,0,.223.018.328.018a2.54,2.54,0,0,0,.7-.089,1.584,1.584,0,0,0,.519-.243,1.066,1.066,0,0,0,.323-.375,1.032,1.032,0,0,0,.111-.482.868.868,0,0,0-.334-.727" transform="translate(-7.354 23.105)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_955" data-name="Grupo 955" transform="translate(650.804 3976.703)">
                                    <path id="Caminho_110" data-name="Caminho 110" d="M12.474-19.282a2.077,2.077,0,0,1-.745-.136,1.762,1.762,0,0,1-.6-.388,1.823,1.823,0,0,1-.383-.6,2.159,2.159,0,0,1-.136-.787,2.247,2.247,0,0,1,.132-.778,1.822,1.822,0,0,1,.375-.6,1.619,1.619,0,0,1,.571-.39,1.849,1.849,0,0,1,.733-.138,1.73,1.73,0,0,1,.7.138,1.493,1.493,0,0,1,.542.39,1.8,1.8,0,0,1,.352.6,2.284,2.284,0,0,1,.127.776v.109h0v.187h-2.7a1.242,1.242,0,0,0,.143.421,1.036,1.036,0,0,0,.245.285,1.021,1.021,0,0,0,.321.165,1.323,1.323,0,0,0,.372.047,1.614,1.614,0,0,0,.544-.094,1.8,1.8,0,0,0,.5-.281l.392.564a2.011,2.011,0,0,1-.709.4A2.788,2.788,0,0,1,12.474-19.282ZM12.41-22.4a1.051,1.051,0,0,0-.379.065.841.841,0,0,0-.283.185,1.039,1.039,0,0,0-.2.283,1.425,1.425,0,0,0-.107.363h1.886a1.11,1.11,0,0,0-.3-.669A.842.842,0,0,0,12.41-22.4Z" transform="translate(-10.615 23.106)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_956" data-name="Grupo 956" transform="translate(661.428 3976.702)">
                                    <path id="Caminho_111" data-name="Caminho 111" d="M17.2-19.282a1.814,1.814,0,0,1-.7-.143,1.8,1.8,0,0,1-.577-.395,1.84,1.84,0,0,1-.4-.611,2.093,2.093,0,0,1-.14-.765,2.043,2.043,0,0,1,.14-.767,1.844,1.844,0,0,1,.388-.606,1.773,1.773,0,0,1,.586-.4,1.772,1.772,0,0,1,.7-.14,1.415,1.415,0,0,1,.669.145,1.4,1.4,0,0,1,.473.39v-.446h.791v3.634h-.791v-.446a1.433,1.433,0,0,1-.47.386A1.459,1.459,0,0,1,17.2-19.282Zm.094-3.077a1.032,1.032,0,0,0-.461.094.99.99,0,0,0-.334.25,1.082,1.082,0,0,0-.223.37,1.311,1.311,0,0,0-.076.446,1.329,1.329,0,0,0,.076.446,1.125,1.125,0,0,0,.223.37,1.086,1.086,0,0,0,.341.252,1.137,1.137,0,0,0,.461.091,1.17,1.17,0,0,0,.446-.089,1.085,1.085,0,0,0,.346-.245,1.093,1.093,0,0,0,.223-.368,1.367,1.367,0,0,0,0-.923,1.081,1.081,0,0,0-.223-.37,1,1,0,0,0-.346-.245A1.078,1.078,0,0,0,17.291-22.359Z" transform="translate(-15.38 23.106)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_957" data-name="Grupo 957" transform="translate(647.356 3975.691)">
                                    <path id="Caminho_112" data-name="Caminho 112" d="M11.543-19.545a1.141,1.141,0,0,1-.377.071.753.753,0,0,1-.223-.036.527.527,0,0,1-.183-.118.549.549,0,0,1-.123-.223.918.918,0,0,1-.047-.31v-1.578h1.273v-.72H10.591v-1.1h-.8v1.1H9.068v.72h.725v1.594a1.462,1.462,0,0,0,.343,1.068,1.3,1.3,0,0,0,.961.346,1.74,1.74,0,0,0,.622-.107A2.248,2.248,0,0,0,12.058-19l-.27-.671a1.859,1.859,0,0,1-.243.114" transform="translate(-9.068 23.56)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_958" data-name="Grupo 958" transform="translate(655.219 3976.694)">
                                    <path id="Caminho_113" data-name="Caminho 113" d="M14.363-23.1a1.4,1.4,0,0,0-.6.123,1.256,1.256,0,0,0-.446.446v-.477H12.6v3.634h.727v-2.006a1.287,1.287,0,0,1,.065-.412.943.943,0,0,1,.178-.308.757.757,0,0,1,.276-.189.892.892,0,0,1,.348-.065,1.434,1.434,0,0,1,.31.033,1.211,1.211,0,0,1,.161.045l.225-.758a1.545,1.545,0,0,0-.194-.049,1.827,1.827,0,0,0-.33-.025" transform="translate(-12.595 23.11)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_959" data-name="Grupo 959" transform="translate(666.239 3976.694)">
                                    <path id="Caminho_114" data-name="Caminho 114" d="M19.308-23.1a1.417,1.417,0,0,0-.6.123,1.257,1.257,0,0,0-.446.446v-.477h-.72v3.634h.727v-2.006a1.229,1.229,0,0,1,.065-.412.943.943,0,0,1,.178-.308.723.723,0,0,1,.274-.189.892.892,0,0,1,.348-.065,1.434,1.434,0,0,1,.31.033,1.211,1.211,0,0,1,.161.045l.223-.758a1.372,1.372,0,0,0-.194-.049,1.764,1.764,0,0,0-.325-.025" transform="translate(-17.538 23.11)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_960" data-name="Grupo 960" transform="translate(668.753 3975.319)">
                                    <path id="Caminho_115" data-name="Caminho 115" d="M20.483-18.521a1.814,1.814,0,0,1-.7-.143,1.806,1.806,0,0,1-.577-.4,1.882,1.882,0,0,1-.388-.6,2.114,2.114,0,0,1-.149-.767,2.054,2.054,0,0,1,.14-.769,1.809,1.809,0,0,1,.388-.606,1.712,1.712,0,0,1,.586-.395,1.736,1.736,0,0,1,.7-.143,1.417,1.417,0,0,1,.669.147,1.373,1.373,0,0,1,.473.388v-1.917h.791v5.112h-.791v-.43a1.44,1.44,0,0,1-.47.388A1.509,1.509,0,0,1,20.483-18.521Zm.094-3.077a1.07,1.07,0,0,0-.461.1.977.977,0,0,0-.334.245,1.081,1.081,0,0,0-.223.37,1.31,1.31,0,0,0-.076.446,1.329,1.329,0,0,0,.076.446,1.125,1.125,0,0,0,.223.37,1.079,1.079,0,0,0,.341.25,1.147,1.147,0,0,0,.455.1,1.168,1.168,0,0,0,.446-.087,1.085,1.085,0,0,0,.346-.245,1.093,1.093,0,0,0,.223-.368,1.347,1.347,0,0,0,0-.925,1.051,1.051,0,0,0-.223-.368,1,1,0,0,0-.346-.245A1.058,1.058,0,0,0,20.577-21.6Z" transform="translate(-18.666 23.727)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_961" data-name="Grupo 961" transform="translate(657.734 3976.695)">
                                    <path id="Caminho_116" data-name="Caminho 116" d="M14.873-22.032a1.043,1.043,0,0,1,.359-.239,1.14,1.14,0,0,1,.446-.085,1.384,1.384,0,0,1,.495.085,1.162,1.162,0,0,1,.383.223l.383-.638a1.937,1.937,0,0,0-.484-.279,2.166,2.166,0,0,0-1.561,0,1.83,1.83,0,0,0-.618.4,1.866,1.866,0,0,0-.408.6,2.032,2.032,0,0,0,0,1.518,1.844,1.844,0,0,0,.408.6,1.9,1.9,0,0,0,.618.4,2.165,2.165,0,0,0,1.561,0,1.868,1.868,0,0,0,.484-.281l-.383-.633a1.245,1.245,0,0,1-.383.223,1.433,1.433,0,0,1-.495.082,1.18,1.18,0,0,1-.446-.082,1.083,1.083,0,0,1-.359-.241,1.159,1.159,0,0,1-.239-.37,1.322,1.322,0,0,1,0-.943,1.159,1.159,0,0,1,.239-.37" transform="translate(-13.723 23.109)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_962" data-name="Grupo 962" transform="translate(673.792 3979.896)">
                                    <path id="Caminho_117" data-name="Caminho 117" d="M21.309-20.93a.444.444,0,0,1-.161-.029.372.372,0,0,1-.111-.082.381.381,0,0,1-.082-.116.366.366,0,0,1-.029-.145.361.361,0,0,1,.029-.147.355.355,0,0,1,.082-.114.355.355,0,0,1,.111-.08.337.337,0,0,1,.161-.029.334.334,0,0,1,.147.029.344.344,0,0,1,.123.08.405.405,0,0,1,.08.114.328.328,0,0,1,.029.147.366.366,0,0,1-.029.145.451.451,0,0,1-.08.116A.389.389,0,0,1,21.309-20.93Zm0-.64a.256.256,0,0,0-.107.022.214.214,0,0,0-.085.058.23.23,0,0,0-.058.085.263.263,0,0,0-.02.1.3.3,0,0,0,.02.107.264.264,0,0,0,.058.082.268.268,0,0,0,.294.058.3.3,0,0,0,.087-.058.239.239,0,0,0,.054-.082.263.263,0,0,0,.022-.107.23.23,0,0,0-.022-.1.2.2,0,0,0-.054-.085A.263.263,0,0,0,21.309-21.57Zm-.051.432h-.091v-.33h.163a.137.137,0,0,1,.1.031.1.1,0,0,1,.033.08.094.094,0,0,1-.027.067.126.126,0,0,1-.069.033l.1.118h-.1l-.1-.114h0v.114Zm0-.247v.06h.071a.085.085,0,0,0,.042-.009v-.045a.043.043,0,0,0-.033,0Z" transform="translate(-20.926 21.673)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_963" data-name="Grupo 963" transform="translate(630.312 3946.105)">
                                    <path id="Caminho_118" data-name="Caminho 118" d="M18.416-23.134a13.669,13.669,0,0,1,5.2-10.739A13.694,13.694,0,0,0,4.379-31.635,13.7,13.7,0,0,0,6.62-12.4a13.694,13.694,0,0,0,17,0,13.676,13.676,0,0,1-5.2-10.739" transform="translate(-1.423 36.831)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_967" data-name="Grupo 967" transform="translate(673.606 3966.706)">
                                    <path id="Caminho_119" data-name="Caminho 119" d="M21.512-27.079h-.125v-.511h.169l.127.328.127-.328h.174v.511h-.123v-.354l-.114.305h-.127l-.109-.305Zm-.381,0h-.125v-.4h-.163v-.109h.446v.109h-.165v.4Z" transform="translate(-20.843 27.59)" fill="#fff"/>
                                  </g>
                                  <g id="Grupo_964" data-name="Grupo 964" transform="translate(652.506 3946.112)">
                                    <path id="Caminho_120" data-name="Caminho 120" d="M19.872-36.826a13.623,13.623,0,0,0-8.494,2.956,13.688,13.688,0,0,1,2.247,19.231,13.649,13.649,0,0,1-2.247,2.247,13.7,13.7,0,0,0,19.237-2.247A13.692,13.692,0,0,0,28.37-33.874a13.674,13.674,0,0,0-8.5-2.954" transform="translate(-11.378 36.828)"/>
                                  </g>
                                  <g id="Grupo_965" data-name="Grupo 965" transform="translate(647.129 3946)">
                                    <path id="Caminho_1531" data-name="Caminho 1531" d="M13.711,0A13.694,13.694,0,1,1,0,13.694,13.7,13.7,0,0,1,13.711,0Z" transform="translate(0.112 0.112)" fill="#fff"/>
                                    <path id="Caminho_121" data-name="Caminho 121" d="M22.788-9.267a13.829,13.829,0,0,1-13.822-13.8A13.829,13.829,0,0,1,22.788-36.878,13.829,13.829,0,0,1,36.61-23.071,13.829,13.829,0,0,1,22.788-9.267Zm0-27.388a13.607,13.607,0,0,0-13.6,13.584A13.607,13.607,0,0,0,22.788-9.49a13.607,13.607,0,0,0,13.6-13.581A13.608,13.608,0,0,0,22.788-36.655Z" transform="translate(-8.966 36.878)" fill="#2a2a2a"/>
                                  </g>
                                  <g id="Grupo_966" data-name="Grupo 966" transform="translate(630.202 3946)">
                                    <path id="Caminho_122" data-name="Caminho 122" d="M15.2-9.267a13.829,13.829,0,0,1-13.822-13.8A13.829,13.829,0,0,1,15.2-36.878,13.831,13.831,0,0,1,29.017-23.071,13.83,13.83,0,0,1,15.2-9.267Zm0-27.388A13.607,13.607,0,0,0,1.6-23.071,13.607,13.607,0,0,0,15.2-9.49a13.607,13.607,0,0,0,13.6-13.581A13.607,13.607,0,0,0,15.2-36.655Z" transform="translate(-1.373 36.878)" fill="#2a2a2a"/>
                                  </g>
                                  <g id="Grupo_969" data-name="Grupo 969" transform="translate(629.645 4000.545)">
                                    <rect id="Retângulo_1216" data-name="Retângulo 1216" width="2.14" height="8.856" transform="translate(3.092 0)" fill="#fff"/>
                                    <rect id="Retângulo_1217" data-name="Retângulo 1217" width="0.661" height="8.856" transform="translate(5.909 0)" fill="#fff"/>
                                    <rect id="Retângulo_1218" data-name="Retângulo 1218" width="1.188" height="8.856" transform="translate(7.148 0)" fill="#fff"/>
                                    <rect id="Retângulo_1219" data-name="Retângulo 1219" width="0.665" height="8.856" transform="translate(9.481 0)" fill="#fff"/>
                                    <rect id="Retângulo_1220" data-name="Retângulo 1220" width="0.511" height="8.856" transform="translate(10.433 0)" fill="#fff"/>
                                    <rect id="Retângulo_1221" data-name="Retângulo 1221" width="0.664" height="20.048" transform="translate(1.463 0)" fill="#fff"/>
                                    <rect id="Retângulo_1222" data-name="Retângulo 1222" width="1.188" height="20.048" transform="translate(0 0)" fill="#fff"/>
                                    <rect id="Retângulo_1223" data-name="Retângulo 1223" width="2.144" height="8.856" transform="translate(14.489 0)" fill="#fff"/>
                                    <rect id="Retângulo_1224" data-name="Retângulo 1224" width="0.665" height="8.856" transform="translate(17.306 0)" fill="#fff"/>
                                    <rect id="Retângulo_1225" data-name="Retângulo 1225" width="1.188" height="8.856" transform="translate(18.549 0)" fill="#fff"/>
                                    <rect id="Retângulo_1226" data-name="Retângulo 1226" width="0.661" height="8.856" transform="translate(20.882 0)" fill="#fff"/>
                                    <rect id="Retângulo_1227" data-name="Retângulo 1227" width="0.511" height="8.856" transform="translate(21.834 0)" fill="#fff"/>
                                    <rect id="Retângulo_1228" data-name="Retângulo 1228" width="0.661" height="8.856" transform="translate(12.865 0)" fill="#fff"/>
                                    <rect id="Retângulo_1229" data-name="Retângulo 1229" width="1.188" height="8.856" transform="translate(11.401 0)" fill="#fff"/>
                                    <rect id="Retângulo_1230" data-name="Retângulo 1230" width="1.184" height="8.856" transform="translate(23.188 0)" fill="#fff"/>
                                    <rect id="Retângulo_1231" data-name="Retângulo 1231" width="0.665" height="8.856" transform="translate(25.517 0)" fill="#fff"/>
                                    <rect id="Retângulo_1232" data-name="Retângulo 1232" width="0.508" height="8.856" transform="translate(26.473 0)" fill="#fff"/>
                                    <rect id="Retângulo_1233" data-name="Retângulo 1233" width="0.665" height="8.856" transform="translate(28.9 0)" fill="#fff"/>
                                    <rect id="Retângulo_1234" data-name="Retângulo 1234" width="1.188" height="8.856" transform="translate(27.437 0)" fill="#fff"/>
                                    <rect id="Retângulo_1235" data-name="Retângulo 1235" width="0.665" height="8.856" transform="translate(30.446 0)" fill="#fff"/>
                                    <rect id="Retângulo_1236" data-name="Retângulo 1236" width="0.511" height="8.856" transform="translate(31.398 0)" fill="#fff"/>
                                    <rect id="Retângulo_1237" data-name="Retângulo 1237" width="0.665" height="8.856" transform="translate(33.826 0)" fill="#fff"/>
                                    <rect id="Retângulo_1238" data-name="Retângulo 1238" width="1.188" height="8.856" transform="translate(32.362 0)" fill="#fff"/>
                                    <rect id="Retângulo_1239" data-name="Retângulo 1239" width="2.14" height="8.856" transform="translate(35.069 0)" fill="#fff"/>
                                    <rect id="Retângulo_1240" data-name="Retângulo 1240" width="0.661" height="8.856" transform="translate(37.886 0)" fill="#fff"/>
                                    <rect id="Retângulo_1241" data-name="Retângulo 1241" width="1.188" height="8.856" transform="translate(39.125 0)" fill="#fff"/>
                                    <rect id="Retângulo_1242" data-name="Retângulo 1242" width="0.665" height="8.856" transform="translate(41.458 0)" fill="#fff"/>
                                    <rect id="Retângulo_1243" data-name="Retângulo 1243" width="0.511" height="8.856" transform="translate(42.41 0)" fill="#fff"/>
                                    <rect id="Retângulo_1244" data-name="Retângulo 1244" width="1.188" height="20.048" transform="translate(43.764 0)" fill="#fff"/>
                                    <path id="Caminho_1532" data-name="Caminho 1532" d="M276.312,69.1a2.538,2.538,0,0,0-.232-.261,2.623,2.623,0,0,0-.666-.459,2.813,2.813,0,0,0-.519-.2,2.789,2.789,0,0,0,.519-.329,2.3,2.3,0,0,0,.547-.6c.042-.071.082-.142.119-.218a2.287,2.287,0,0,0,.232-1.006,2.416,2.416,0,0,0-.232-1.035,3.2,3.2,0,0,0-.164-.306,2.413,2.413,0,0,0-.5-.578,2.284,2.284,0,0,0-.6-.374,3.231,3.231,0,0,0-.544-.179,5.75,5.75,0,0,0-1.188-.128h-3.954V73.594h3.954a7.348,7.348,0,0,0,1.188-.094,3.646,3.646,0,0,0,.382-.079,3.228,3.228,0,0,0,.763-.286,2.089,2.089,0,0,0,.346-.213,2.822,2.822,0,0,0,.32-.295,2.77,2.77,0,0,0,.286-.4,2.82,2.82,0,0,0,.142-.258,2.954,2.954,0,0,0,.3-1.329,2.433,2.433,0,0,0-.445-1.46A.937.937,0,0,0,276.312,69.1Zm-5.836-4.484h2.035c.207,0,.4,0,.57.011a4.113,4.113,0,0,1,.975.13,1.019,1.019,0,0,1,.213.088,1.2,1.2,0,0,1,.482.442,1.637,1.637,0,0,1,.244.89,1.475,1.475,0,0,1-.261.893,1.251,1.251,0,0,1-.465.385,1.8,1.8,0,0,1-.309.122,3.56,3.56,0,0,1-.879.111c-.125.006-.261.009-.405.009h-2.2Zm4.937,6.105a1.732,1.732,0,0,1-.2.779,1.445,1.445,0,0,1-.516.57,1.732,1.732,0,0,1-.434.19,2.712,2.712,0,0,1-.34.088,5.924,5.924,0,0,1-.848.051h-2.6V68.894h2.353c.088,0,.17,0,.252,0a4.622,4.622,0,0,1,1.188.15l.048.014a1.528,1.528,0,0,1,.808.6,1.634,1.634,0,0,1,.289.85Z" transform="translate(-265.933 -53.932)" fill="#fff"/>
                                    <path id="Caminho_1533" data-name="Caminho 1533" d="M278.206,65.356a.612.612,0,0,0-.062-.06,2.743,2.743,0,0,0-.666-.5,3.2,3.2,0,0,0-.672-.289,3.9,3.9,0,0,0-1.083-.145,3.791,3.791,0,0,0-1.063.145,3.12,3.12,0,0,0-.964.451,2.355,2.355,0,0,0-.292.224,2.788,2.788,0,0,0-.369.386,2.728,2.728,0,0,0-.275.411,5.233,5.233,0,0,0,0,4.436,2.228,2.228,0,0,0,.275.419,2.365,2.365,0,0,0,.19.221,2.878,2.878,0,0,0,.471.4,3.065,3.065,0,0,0,.964.451,3.955,3.955,0,0,0,1.063.133,3.785,3.785,0,0,0,1.083-.153,3.483,3.483,0,0,0,.672-.283l.023-.011a3.063,3.063,0,0,0,.643-.465,2.839,2.839,0,0,0,.578-.76l.023-.037a4.872,4.872,0,0,0,.425-2.231,4.185,4.185,0,0,0-.448-2.024A2.88,2.88,0,0,0,278.206,65.356Zm-.728,4.671a1.494,1.494,0,0,1-.2.286,2.08,2.08,0,0,1-.468.405,2.049,2.049,0,0,1-2.642-.4,2.27,2.27,0,0,1-.468-.893V66.988a2.251,2.251,0,0,1,.468-.893,1.949,1.949,0,0,1,.5-.417,2,2,0,0,1,1.063-.283,1.95,1.95,0,0,1,1.083.306,2.1,2.1,0,0,1,.465.4,1.946,1.946,0,0,1,.207.292,3.361,3.361,0,0,1,.414,1.774A3.55,3.55,0,0,1,277.477,70.027Z" transform="translate(-260.171 -52.224)" fill="#fff"/>
                                    <path id="Caminho_1534" data-name="Caminho 1534" d="M275.658,63.43h-.448V73.6h1.251V63.43h-.8Z" transform="translate(-254.776 -53.933)" fill="#fff"/>
                                    <path id="Caminho_1535" data-name="Caminho 1535" d="M282.024,65.364c-.048-.051-.1-.1-.142-.139a2.086,2.086,0,0,0-.275-.235,2.927,2.927,0,0,0-1.19-.544,3.269,3.269,0,0,0-.456-.071,3.349,3.349,0,0,0-.34-.014c-.057,0-.111,0-.167,0-.1.006-.2.011-.289.02a3.806,3.806,0,0,0-.666.142,3.049,3.049,0,0,0-1.145.649c-.074.068-.144.133-.213.21a4.059,4.059,0,0,0-.952,2.88,3.884,3.884,0,0,0,.944,2.786,2.451,2.451,0,0,0,.221.2,3.014,3.014,0,0,0,1.145.626,3.465,3.465,0,0,0,.666.128,2.328,2.328,0,0,0,.289.026c.077.006.153.006.232.006s.184,0,.275-.006a3.81,3.81,0,0,0,.456-.051,3.085,3.085,0,0,0,1.19-.436,1.938,1.938,0,0,0,.184-.128c.031-.023.06-.048.091-.074a2.753,2.753,0,0,0,.663-.779,3.5,3.5,0,0,0,.371-.893l-.371-.051-.663-.088-.258-.034-.017.051a2.377,2.377,0,0,1-.754,1.108,1.584,1.584,0,0,1-.436.235,1.82,1.82,0,0,1-.456.111,1.765,1.765,0,0,1-.275.017,2.1,2.1,0,0,1-.232-.011,1.869,1.869,0,0,1-.289-.048,1.9,1.9,0,0,1-.666-.292,1.876,1.876,0,0,1-.346-.295,2.816,2.816,0,0,1-.689-1.856h5.487c.006-.145.008-.255.008-.329a4.551,4.551,0,0,0-.414-2.046A2.891,2.891,0,0,0,282.024,65.364Zm-.417,2.137h-4.073a2.3,2.3,0,0,1,.649-1.545,2.43,2.43,0,0,1,.314-.255,1.913,1.913,0,0,1,.666-.272,1.875,1.875,0,0,1,.289-.037,1.669,1.669,0,0,1,.17-.009,1.825,1.825,0,0,1,.337.028,1.531,1.531,0,0,1,.456.125,1.9,1.9,0,0,1,.751.567,2.246,2.246,0,0,1,.439,1.125Z" transform="translate(-252.981 -52.224)" fill="#fff"/>
                                    <path id="Caminho_1536" data-name="Caminho 1536" d="M281.89,72.375a.947.947,0,0,1-.147.008l-.13,0a.739.739,0,0,1-.295-.088.539.539,0,0,1-.213-.244,2.145,2.145,0,0,1-.065-.689V67.046h1.25V66.08h-1.25V63.509l-.615.368-.451.272-.181.111v1.82h-.924v.966h.924v4.243a4.552,4.552,0,0,0,.147,1.48l.034.059a1.116,1.116,0,0,0,.451.476l.043.028a2.109,2.109,0,0,0,1.051.215c.031,0,.062,0,.094,0,.088,0,.181-.009.278-.017.176-.02.368-.051.57-.091l-.17-1.105A3.448,3.448,0,0,1,281.89,72.375Z" transform="translate(-248.063 -53.787)" fill="#fff"/>
                                    <path id="Caminho_1537" data-name="Caminho 1537" d="M286.283,65.356a3.071,3.071,0,0,0-.615-.5,3.118,3.118,0,0,0-1.188-.439,2.939,2.939,0,0,0-.578-.057c-.031,0-.065,0-.1,0a3.6,3.6,0,0,0-.558.04,3.369,3.369,0,0,0-.677.156,3.2,3.2,0,0,0-1.08.624,3.277,3.277,0,0,0-1.06,2.024,6.1,6.1,0,0,0-.079,1,5.971,5.971,0,0,0,.079.983,3.455,3.455,0,0,0,.873,1.868,3.031,3.031,0,0,0,1.267.794,2.953,2.953,0,0,0,.677.156,3.985,3.985,0,0,0,.558.037c.037,0,.068,0,.1,0a3.524,3.524,0,0,0,1.678-.445.451.451,0,0,0,.088-.054,2.962,2.962,0,0,0,1.145-1.2l.008-.011a4.87,4.87,0,0,0,.425-2.231,4.216,4.216,0,0,0-.434-2A2.847,2.847,0,0,0,286.283,65.356Zm-.615,4.453a1.93,1.93,0,0,1-.317.5,1.993,1.993,0,0,1-.87.6,2.028,2.028,0,0,1-.578.108c-.031,0-.065,0-.1,0a2.123,2.123,0,0,1-.558-.071,1.873,1.873,0,0,1-.677-.334,2.121,2.121,0,0,1-.323-.3,3.927,3.927,0,0,1,0-4.22,2.247,2.247,0,0,1,.323-.3,1.822,1.822,0,0,1,.677-.332,2.123,2.123,0,0,1,.558-.071c.037,0,.071,0,.1,0a2.038,2.038,0,0,1,1.766,1.2,3.588,3.588,0,0,1,.3,1.565A3.88,3.88,0,0,1,285.668,69.808Z" transform="translate(-245.356 -52.224)" fill="#fff"/>
                                  </g>
                                </g>
                              </svg>
                              
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="js/slider.js"></script>
    </body>
</html>