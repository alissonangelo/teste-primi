package com.example.smartGamesAPI.model;

import javax.persistence.*;

@Entity
@Table(name="tbl_desenvolvedora")
public class Desenvolvedora {

    @Id
    @Column(name = "cod_desenvolvedora")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codDesenvolvedora;

    private String desenvolvedora;

    public Long getCodDesenvolvedora() {
        return codDesenvolvedora;
    }

    public void setCodDesenvolvedora(Long codDesenvolvedora) {
        this.codDesenvolvedora = codDesenvolvedora;
    }

    public String getDesenvolvedora() {
        return desenvolvedora;
    }

    public void setDesenvolvedora(String desenvolvedora) {
        this.desenvolvedora = desenvolvedora;
    }

    @Override
    public String toString() {
        return "Desenvolvedora{" +
                "codDesenvolvedora=" + codDesenvolvedora +
                ", desenvolvedora='" + desenvolvedora + '\'' +
                '}';
    }
}
