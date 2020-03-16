package com.example.smartgames.adapter

import android.content.Context
import android.support.v7.widget.RecyclerView
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import com.example.smartgames.R
import com.example.smartgames.model.Loja
import com.squareup.picasso.Picasso
import android.content.Intent
import android.net.Uri


class LojaDialogAdapter(val lojas:List<Loja>, val context:Context): RecyclerView.Adapter<LojaDialogAdapter.ViewHolder>() {

    override fun onCreateViewHolder(viewGroup: ViewGroup, i: Int): ViewHolder {
        val view = LayoutInflater.from(context).inflate(R.layout.adapter_loja_dialog, viewGroup, false)

        return ViewHolder(view)
    }

    override fun getItemCount(): Int {
        return lojas?.size
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {

        holder.txtUnidade.text = lojas[position].unidade
        Picasso.with(holder.imgLoja.context).load(lojas[position].imgLoja).into(holder.imgLoja)

        val numero = lojas[position].endereco.numero
        val cidade = lojas[position].endereco.cidade.cidade
        val logradouro = lojas[position].endereco.logradouro

        holder.itemView.setOnClickListener {
            val intent = Intent(Intent.ACTION_VIEW,
                    Uri.parse("geo:0,0?q=$numero+$logradouro+$cidade,+sao+paulo,+SP"))
            context.startActivity(intent)
        }
    }

    class ViewHolder(itemView:View) : RecyclerView.ViewHolder(itemView) {
        val txtUnidade = itemView.findViewById<TextView>(R.id.txt_unidade_dialog)
        val imgLoja = itemView.findViewById<ImageView>(R.id.img_loja_dialog)
    }

}