package com.example.smartgames.services

import com.example.smartgames.model.Jogo
import retrofit2.Call
import retrofit2.http.GET

interface JogoService {
    @GET("jogo")
    fun buscarJogo(): Call<List<Jogo>>

}