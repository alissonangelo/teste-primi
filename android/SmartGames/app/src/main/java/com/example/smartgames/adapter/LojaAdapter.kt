package com.example.smartgames.adapter

import android.content.Context
import android.content.Intent
import android.net.Uri
import android.support.v7.widget.RecyclerView
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import com.example.smartgames.R
import com.example.smartgames.model.Loja
import com.squareup.picasso.Picasso

class LojaAdapter(val loja:List<Loja>, val context:Context): RecyclerView.Adapter<LojaAdapter.ViewHolder>() {
    override fun onCreateViewHolder(viewGroup: ViewGroup, p1: Int): ViewHolder {
        val view = LayoutInflater.from(context).inflate(R.layout.adapter_lojas, viewGroup,false)
        return ViewHolder(view)
    }

    override fun getItemCount(): Int {
        return loja?.size
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {

        holder.unidade.text = loja[position].unidade
        holder.ruaNumero.text = "${loja[position].endereco.logradouro},${loja[position].endereco.numero}"
        holder.cidadeBairro.text = "${loja[position].endereco.cidade.cidade},${loja[position].endereco.bairro}"
        holder.telefone.text = "Tel.: ${loja[position].telefone}"

        Picasso.with(holder.imgLoja.context).load(loja[position].imgLoja).into(holder.imgLoja)

        val numero = loja[position].endereco.numero
        val cidade = loja[position].endereco.cidade.cidade
        val logradouro = loja[position].endereco.logradouro

        holder.itemView.setOnClickListener {
            val intent = Intent(Intent.ACTION_VIEW,
                    Uri.parse("geo:0,0?q=$numero+$logradouro+$cidade,+sao+paulo,+SP"))
            context.startActivity(intent)
        }

    }


    class ViewHolder(itemView:View): RecyclerView.ViewHolder(itemView) {
        val unidade = itemView.findViewById<TextView>(R.id.txt_unidade)
        val ruaNumero = itemView.findViewById<TextView>(R.id.txt_rua_numero)
        val cidadeBairro = itemView.findViewById<TextView>(R.id.txt_cidade_bairro)
        val telefone = itemView.findViewById<TextView>(R.id.txt_telefone)
        val imgLoja = itemView.findViewById<ImageView>(R.id.img_loja)
    }
}