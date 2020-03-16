package com.example.smartgames

import android.os.Bundle
import android.support.v7.app.ActionBar
import android.support.v7.app.AppCompatActivity
import android.support.v7.widget.LinearLayoutManager
import android.support.v7.widget.RecyclerView
import android.util.Log
import com.example.smartgames.adapter.LojaAdapter
import com.example.smartgames.adapter.LojaDialogAdapter
import com.example.smartgames.model.Loja
import com.example.smartgames.services.ApiConfig

import kotlinx.android.synthetic.main.tool_bar.*
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class LojaActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_loja)


        setSupportActionBar(toolbar)
        supportActionBar!!.displayOptions = ActionBar.DISPLAY_SHOW_CUSTOM;
        supportActionBar!!.setDisplayShowTitleEnabled(false)
        supportActionBar!!.setDisplayHomeAsUpEnabled(true)

        val recyclerViewLoja = findViewById<RecyclerView>(R.id.recyclerViewLoja)
        recyclerViewLoja.layoutManager = LinearLayoutManager(this, LinearLayoutManager.VERTICAL,false)

        val callLoja = ApiConfig.getLojaService().buscarLoja()

        callLoja.enqueue(object : Callback<List<Loja>> {
            override fun onFailure(call: Call<List<Loja>>?, t: Throwable?) {
                Log.d("ERRO22222", t!!.message)
            }

            override fun onResponse(call: Call<List<Loja>>?, response: Response<List<Loja>>?) {
                val responseBody = response!!.body()
                Log.d("ERRO22222", responseBody.toString())
                val lojasAdapter = LojaAdapter(responseBody!!, this@LojaActivity)
                recyclerViewLoja.adapter = lojasAdapter
            }

        })

    }

}
