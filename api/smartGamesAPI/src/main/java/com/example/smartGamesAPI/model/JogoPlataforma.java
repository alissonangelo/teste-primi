package com.example.smartGamesAPI.model;

import com.example.smartGamesAPI.dto.JogoDTO;

import javax.persistence.*;

@Entity
@Table(name="tbl_jogo_plataforma")
public class JogoPlataforma {

    @Id
    @Column(name = "cod_jogo_plataforma")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codJogoPlataforma;

    @ManyToOne
    @JoinColumn(name = "cod_jogo")
    private JogoDTO jogo;

    @ManyToOne
    @JoinColumn(name = "cod_plataforma")
    private Plataforma plataforma;

    public Long getCodJogoPlataforma() {
        return codJogoPlataforma;
    }

    public void setCodJogoPlataforma(Long codJogoPlataforma) {
        this.codJogoPlataforma = codJogoPlataforma;
    }

    public JogoDTO getJogo() {
        return jogo;
    }

    public void setJogo(JogoDTO jogo) {
        this.jogo = jogo;
    }

    public Plataforma getPlataforma() {
        return plataforma;
    }

    public void setPlataforma(Plataforma plataforma) {
        this.plataforma = plataforma;
    }

    @Override
    public String toString() {
        return "JogoPlataforma{" +
                "codJogoPlataforma=" + codJogoPlataforma +
                ", jogo=" + jogo +
                ", plataforma=" + plataforma +
                '}';
    }
}
