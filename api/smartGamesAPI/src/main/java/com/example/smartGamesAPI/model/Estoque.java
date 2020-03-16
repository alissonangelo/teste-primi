package com.example.smartGamesAPI.model;

import javax.persistence.*;

@Entity
@Table(name="tbl_estoque")
public class Estoque {

    @Id
    @Column(name = "cod_estoque")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codEstoque;

    @ManyToOne
    @JoinColumn(name = "cod_loja")
    private Loja loja;

    @ManyToOne
    @JoinColumn(name = "cod_jogo")
    private Jogo jogo;

    private Integer quantidade;

    public Long getCodEstoque() {
        return codEstoque;
    }

    public void setCodEstoque(Long codEstoque) {
        this.codEstoque = codEstoque;
    }

    public Loja getLoja() {
        return loja;
    }

    public void setLoja(Loja loja) {
        this.loja = loja;
    }

    public Jogo getJogo() {
        return jogo;
    }

    public void setJogo(Jogo jogo) {
        this.jogo = jogo;
    }

    public Integer getQuantidade() {
        return quantidade;
    }

    public void setQuantidade(Integer quantidade) {
        this.quantidade = quantidade;
    }

    @Override
    public String toString() {
        return "Estoque{" +
                "codEstoque=" + codEstoque +
                ", loja=" + loja +
                ", jogo=" + jogo +
                ", quantidade=" + quantidade +
                '}';
    }
}
