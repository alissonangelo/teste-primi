package com.example.smartgames.model

data class Jogo(var codJogo:Int,
                var nome:String,
                var classificacao:Classificacao,
                var desenvolvedora:Desenvolvedora,
                var dataLancamento:String,
                var imgJogo:String) {
}