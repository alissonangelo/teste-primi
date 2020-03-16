package com.example.smartGamesAPI.model;

import javax.persistence.*;

@Entity
@Table(name="tbl_endereco")
public class Endereco {

    @Id
    @Column(name = "cod_endereco")
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long codEndereco;

    @ManyToOne
    @JoinColumn(name = "cod_cidade")
    private Cidade cidade;

    private String logradouro;

    private String bairro;

    private String numero;

    private String cep;

    public Long getCodEndereco() {
        return codEndereco;
    }

    public void setCodEndereco(Long codEndereco) {
        this.codEndereco = codEndereco;
    }

    public Cidade getCidade() {
        return cidade;
    }

    public void setCidade(Cidade cidade) {
        this.cidade = cidade;
    }

    public String getLogradouro() {
        return logradouro;
    }

    public void setLogradouro(String logradouro) {
        this.logradouro = logradouro;
    }

    public String getBairro() {
        return bairro;
    }

    public void setBairro(String bairro) {
        this.bairro = bairro;
    }

    public String getNumero() {
        return numero;
    }

    public void setNumero(String numero) {
        this.numero = numero;
    }

    public String getCep() {
        return cep;
    }

    public void setCep(String cep) {
        this.cep = cep;
    }

	@Override
	public String toString() {
		return "Endereco [codEndereco=" + codEndereco + ", codCidade=" + cidade + ", logradouro=" + logradouro
				+ ", bairro=" + bairro + ", numero=" + numero + ", cep=" + cep + "]";
	}
    
    
}
