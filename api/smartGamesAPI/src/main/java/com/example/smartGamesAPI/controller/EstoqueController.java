package com.example.smartGamesAPI.controller;

import com.example.smartGamesAPI.model.Estoque;
import com.example.smartGamesAPI.repository.EstoqueRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/estoque")
public class EstoqueController {

    @Autowired
    EstoqueRepository estoqueRepository;

    @GetMapping
    public List<Estoque> getEstoque(){
        return estoqueRepository.findAll();
    }

    @GetMapping("/{codJogo}")
    public List<Estoque> getEstoqueById(@PathVariable Long codJogo){
        return estoqueRepository.findEstoqueById(codJogo);
    }

}
