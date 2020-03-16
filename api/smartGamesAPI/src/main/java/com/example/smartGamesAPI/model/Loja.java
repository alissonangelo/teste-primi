package com.example.smartGamesAPI.model;

import javax.persistence.*;
import javax.validation.constraints.NotNull;

@Entity
@Table(name="tbl_loja")
public class Loja {

    @Id
    @Column(name = "cod_loja")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codLoja;

    private String unidade;

    private String telefone;

    @ManyToOne
    @JoinColumn(name = "cod_endereco")
    private Endereco endereco;

    private String imgLoja;

    public Long getCodLoja() {
        return codLoja;
    }

    public void setCodLoja(Long codLoja) {
        this.codLoja = codLoja;
    }

    public String getUnidade() {
        return unidade;
    }

    public void setUnidade(String unidade) {
        this.unidade = unidade;
    }

    public String getTelefone() {
        return telefone;
    }

    public void setTelefone(String telefone) {
        this.telefone = telefone;
    }

    public Endereco getEndereco() {
        return endereco;
    }

    public void setEndereco(Endereco endereco) {
        this.endereco = endereco;
    }

    public String getImgLoja() {
        return imgLoja;
    }

    public void setImgLoja(String imgLoja) {
        this.imgLoja = imgLoja;
    }

	@Override
	public String toString() {
		return "Loja [codLoja=" + codLoja + ", unidade=" + unidade + ", telefone=" + telefone + ", codEndereco="
				+ endereco + ", imgLoja=" + imgLoja + "]";
	}

    
    
}
