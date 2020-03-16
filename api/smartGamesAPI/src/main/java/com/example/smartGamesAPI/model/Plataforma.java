package com.example.smartGamesAPI.model;

import javax.persistence.*;

@Entity
@Table(name="tbl_plataforma")
public class Plataforma {

    @Id
    @Column(name = "cod_plataforma")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codPlataforma;

    private String plataforma;

    public Long getCodPlataforma() {
        return codPlataforma;
    }

    public void setCodPlataforma(Long codPlataforma) {
        this.codPlataforma = codPlataforma;
    }

    public String getPlataforma() {
        return plataforma;
    }

    public void setPlataforma(String plataforma) {
        this.plataforma = plataforma;
    }

    @Override
    public String toString() {
        return "Plataforma{" +
                "codPlataforma=" + codPlataforma +
                ", plataforma='" + plataforma + '\'' +
                '}';
    }
}
