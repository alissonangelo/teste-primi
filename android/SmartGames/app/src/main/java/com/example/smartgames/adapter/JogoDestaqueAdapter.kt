package com.example.smartgames.adapter

import android.app.Dialog
import android.content.Context
import android.support.v7.widget.LinearLayoutManager
import android.support.v7.widget.RecyclerView
import android.util.Log
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import com.example.smartgames.R
import com.example.smartgames.model.Jogo
import com.example.smartgames.model.Loja
import com.example.smartgames.services.ApiConfig
import com.squareup.picasso.Picasso
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response

class JogoDestaqueAdapter(val jogos:List<Jogo>, val context:Context): RecyclerView.Adapter<JogoDestaqueAdapter.ViewHolder>() {
    override fun onCreateViewHolder(viewGroup: ViewGroup, i: Int): ViewHolder {
        val view = LayoutInflater.from(context).inflate(R.layout.adapter_jogo_destaque, viewGroup, false)

        return ViewHolder(view)

    }

    override fun getItemCount(): Int {
        return jogos?.size
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {

        holder.txtNome.text = jogos[position].nome

        var url = jogos[position].imgJogo
        Picasso.with(holder.imgJogo.context).load(url).into(holder.imgJogo)

        holder.itemView.setOnClickListener {

            val jogo = Jogo(jogos[position].codJogo,jogos[position].nome,jogos[position].classificacao,jogos[position].desenvolvedora,jogos[position].dataLancamento,jogos[position].imgJogo)

            showDialog(jogo)

        }

    }


    class ViewHolder(itemView:View): RecyclerView.ViewHolder(itemView) {
        val txtNome:TextView = itemView.findViewById(R.id.txt_nome_jogo_destaque)
        val imgJogo:ImageView = itemView.findViewById(R.id.img_jogo_destaque)
        var imgPlaystation:ImageView = itemView.findViewById(R.id.img_playstation_destaque)
        var imgXbox:ImageView = itemView.findViewById(R.id.img_xbox_destaque)
        var imgSwitch:ImageView = itemView.findViewById(R.id.img_switch_destaque)

    }

    fun showDialog(jogo:Jogo){
        val dialog = Dialog(context)
        dialog.setContentView(R.layout.dialog_layout)

        val nome = dialog.findViewById<TextView>(R.id.txt_nome_dialog)
        val desenvolvedora = dialog.findViewById<TextView>(R.id.txt_desenvolvedora)
        val classificacao = dialog.findViewById<TextView>(R.id.txt_classificacao)
        val dataLancamento = dialog.findViewById<TextView>(R.id.txt_data_lancamento)
        val img = dialog.findViewById<ImageView>(R.id.img_jogo_dialog)

        nome.text = jogo.nome
        desenvolvedora.text = jogo.desenvolvedora.desenvolvedora
        classificacao.text = jogo.classificacao.classificacao
        dataLancamento.text = jogo.dataLancamento

        Picasso.with(img.context).load(jogo.imgJogo).into(img)

        val recyclerViewLojas = dialog.findViewById<RecyclerView>(R.id.recyclerViewLojasDialog)
        recyclerViewLojas.layoutManager = LinearLayoutManager(context, LinearLayoutManager.HORIZONTAL,false)




        val callLoja = ApiConfig.getLojaService().buscarLojaByJogoId(jogo.codJogo.toString())

        callLoja.enqueue(object : Callback<List<Loja>> {
            override fun onFailure(call: Call<List<Loja>>?, t: Throwable?) {
                Log.d("ERRO22222", t!!.message)
            }

            override fun onResponse(call: Call<List<Loja>>?, response: Response<List<Loja>>?) {
                val responseBody = response!!.body()
                Log.d("ERRO22222", responseBody.toString())
                val lojasAdapter = LojaDialogAdapter(responseBody!!,context)
                recyclerViewLojas.adapter = lojasAdapter
            }

        })



        dialog.show()
    }

}