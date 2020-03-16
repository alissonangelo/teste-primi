package com.example.smartgames.services

import com.example.smartgames.model.Loja
import com.example.smartgames.model.Plataforma
import retrofit2.Call
import retrofit2.http.GET
import retrofit2.http.Path

interface LojaService {

    @GET("estoque/{codJogo}")
    fun buscarLojaByJogoId(@Path("codJogo") codJogo:String): Call<List<Loja>>

    @GET("loja")
    fun buscarLoja(): Call<List<Loja>>

}