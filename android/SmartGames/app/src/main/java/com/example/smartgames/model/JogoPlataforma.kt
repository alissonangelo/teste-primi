package com.example.smartgames.model

data class JogoPlataforma(var codJogoPlataforma: Int,
                          var jogo: List<Jogo>,
                          var plataforma: List<Plataforma>){
}