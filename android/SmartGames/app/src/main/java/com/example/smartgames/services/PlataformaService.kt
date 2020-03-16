package com.example.smartgames.services


import com.example.smartgames.model.Plataforma
import retrofit2.Call
import retrofit2.http.GET
import retrofit2.http.Path

interface PlataformaService {

    @GET("jogoPlataforma/plataforma/{codJogo}")
    fun buscarPlataforma(@Path("codJogo") codJogo:String): Call<List<Plataforma>>

}