package com.example.smartGamesAPI.model;

import javax.persistence.*;

@Entity
@Table(name="tbl_classificacao")
public class Classificacao {

    @Id
    @Column(name = "cod_classificacao")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codClassificacao;

    private String classificacao;

    public Long getCodClassificacao() {
        return codClassificacao;
    }

    public void setCodClassificacao(Long codClassificacao) {
        this.codClassificacao = codClassificacao;
    }

    public String getClassificacao() {
        return classificacao;
    }

    public void setClassificacao(String classificacao) {
        this.classificacao = classificacao;
    }

    @Override
    public String toString() {
        return "Classificacao{" +
                "codClassificacao=" + codClassificacao +
                ", classificacao='" + classificacao + '\'' +
                '}';
    }
}
