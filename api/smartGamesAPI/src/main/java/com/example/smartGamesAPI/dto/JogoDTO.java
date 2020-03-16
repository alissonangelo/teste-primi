package com.example.smartGamesAPI.dto;

import javax.persistence.*;

@Entity
@Table(name = "tbl_jogo")
public class JogoDTO {

    @Id
    @Column(name = "cod_jogo")
    @GeneratedValue(strategy= GenerationType.IDENTITY)
    private Long codJogo;

    public Long getCodJogo() {
        return codJogo;
    }

    public void setCodJogo(Long codJogo) {
        this.codJogo = codJogo;
    }


    @Override
    public String toString() {
        return "JogoDTO{" +
                "codJogo=" + codJogo +
                '}';
    }
}
