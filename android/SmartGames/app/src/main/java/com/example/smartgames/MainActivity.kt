package com.example.smartgames

import android.content.Intent
import android.support.v7.app.AppCompatActivity
import android.os.Bundle
import android.support.v7.app.ActionBar
import android.support.v7.app.ActionBarDrawerToggle
import android.support.v7.widget.LinearLayoutManager
import android.support.v7.widget.RecyclerView
import android.util.Log
import android.view.MenuItem
import android.widget.Toast
import com.example.smartgames.adapter.JogoAdapter
import com.example.smartgames.adapter.JogoDestaqueAdapter
import com.example.smartgames.model.Jogo
import com.example.smartgames.model.Plataforma
import com.example.smartgames.services.ApiConfig
import kotlinx.android.synthetic.main.activity_main.*
import kotlinx.android.synthetic.main.tool_bar.*
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class MainActivity : AppCompatActivity() {

    var jogos:List<Jogo> = ArrayList()
    var plataformas:List<Plataforma> = ArrayList()

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        setSupportActionBar(toolbar)
        supportActionBar!!.displayOptions = ActionBar.DISPLAY_SHOW_CUSTOM;
        supportActionBar!!.setDisplayShowTitleEnabled(false)

        val toggle = ActionBarDrawerToggle(
                this, drawer_layout, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close)
        drawer_layout.addDrawerListener(toggle)
        toggle.syncState()

        val recyclerViewJogo = findViewById<RecyclerView>(R.id.recyclerViewJogo)
        recyclerViewJogo.layoutManager = LinearLayoutManager(this, LinearLayoutManager.VERTICAL,false)

        val recyclerViewJogoDestaque = findViewById<RecyclerView>(R.id.recyclerViewJogoDestaque)
        recyclerViewJogoDestaque.layoutManager = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL,false)

        val callJogo = ApiConfig.getJogoService().buscarJogo()

        callJogo.enqueue(object : Callback<List<Jogo>>{
            override fun onFailure(call: Call<List<Jogo>>?, t: Throwable?) {
                Log.d("ERRO22222", t!!.message)
            }

            override fun onResponse(call: Call<List<Jogo>>?, response: Response<List<Jogo>>?) {
                val responseBody = response!!.body()

                Log.d("JOGO2222", responseBody.toString())

                carregarJogoDestaque(responseBody!!)
                carregarJogo(responseBody!!)
            }

        })

        val nav = navigation_view.menu.findItem(R.id.menu_loja)

        nav.setOnMenuItemClickListener {
            val intent = Intent(this, LojaActivity::class.java)
            startActivity(intent)
            true
        }

    }

    fun carregarJogo(jogos:List<Jogo>){

        this.jogos = jogos

        val jogosAdapter = JogoAdapter(jogos,this)
        recyclerViewJogo.adapter = jogosAdapter
    }

    fun carregarJogoDestaque(jogos:List<Jogo>){

        this.jogos = jogos

        val jogosAdapter = JogoDestaqueAdapter(jogos,this)
        recyclerViewJogoDestaque.adapter = jogosAdapter
    }

}
