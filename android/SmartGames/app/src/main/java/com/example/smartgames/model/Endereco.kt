package com.example.smartgames.model

data class Endereco(var codEndereco:Int,
                    var cidade:Cidade,
                    var logradouro:String,
                    var bairro:String,
                    var numero:String,
                    var cep:String) {
}