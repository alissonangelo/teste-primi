package com.example.smartGamesAPI.model;

import javax.persistence.*;

@Entity
@Table(name="tbl_cidade")
public class Cidade {

    @Id
    @Column(name = "cod_cidade")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codCidade;

    private String cidade;

    public Long getCodCidade() {
        return codCidade;
    }

    public void setCodCidade(Long codCidade) {
        this.codCidade = codCidade;
    }

    public String getCidade() {
        return cidade;
    }

    public void setCidade(String cidade) {
        this.cidade = cidade;
    }

	@Override
	public String toString() {
		return "Cidade [codCidade=" + codCidade + ", cidade=" + cidade + "]";
	}
    
    
}
