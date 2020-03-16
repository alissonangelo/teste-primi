package com.example.smartGamesAPI.model;

import javax.persistence.*;
import java.util.List;

@Entity
@Table(name="tbl_jogo")
public class Jogo {

    @Id
    @Column(name = "cod_jogo")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codJogo;

    private String nome;

    @ManyToOne
    @JoinColumn(name = "cod_classificacao")
    private Classificacao classificacao;

    @ManyToOne
    @JoinColumn(name = "cod_desenvolvedora")
    private Desenvolvedora desenvolvedora;

    private String dataLancamento;

    private String imgJogo;

    // testes
    @OneToMany(mappedBy = "jogo")
    private List<JogoPlataforma> jogoPlataformas;


    public List<JogoPlataforma> getJogoPlataformas() {
        return jogoPlataformas;
    }

    public void setJogoPlataformas(List<JogoPlataforma> jogoPlataformas) {
        this.jogoPlataformas = jogoPlataformas;
    }

    public Long getCodJogo() {
        return codJogo;
    }

    public void setCodJogo(Long codJogo) {
        this.codJogo = codJogo;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public Classificacao getClassificacao() {
        return classificacao;
    }

    public void setClassificacao(Classificacao classificacao) {
        this.classificacao = classificacao;
    }

    public Desenvolvedora getDesenvolvedora() {
        return desenvolvedora;
    }

    public void setDesenvolvedora(Desenvolvedora desenvolvedora) {
        this.desenvolvedora = desenvolvedora;
    }

    public String getDataLancamento() {
        return dataLancamento;
    }

    public void setDataLancamento(String dataLancamento) {
        this.dataLancamento = dataLancamento;
    }

    public String getImgJogo() {
        return imgJogo;
    }

    public void setImgJogo(String imgJogo) {
        this.imgJogo = imgJogo;
    }

    @Override
    public String toString() {
        return "Jogo{" +
                "codJogo=" + codJogo +
                ", nome='" + nome + '\'' +
                ", classificacao=" + classificacao +
                ", desenvolvedora=" + desenvolvedora +
                ", dataLancamento='" + dataLancamento + '\'' +
                ", imgJogo='" + imgJogo + '\'' +
                ", jogoPlataformas=" + jogoPlataformas +
                '}';
    }
}
