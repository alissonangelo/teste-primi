package com.example.smartgames.services

import retrofit2.create

class ApiConfig {

    companion object {

        var url = "http://192.168.10.9:8080/"

        fun getJogoService(): JogoService {
            return RetrofitClient.getApiData(url)!!.create(JogoService::class.java)
        }

        fun getPlataformaService(): PlataformaService {
            return RetrofitClient.getApiData(url)!!.create(PlataformaService::class.java)
        }

        fun getLojaService(): LojaService {
            return RetrofitClient.getApiData(url)!!.create(LojaService::class.java)
        }


    }

}