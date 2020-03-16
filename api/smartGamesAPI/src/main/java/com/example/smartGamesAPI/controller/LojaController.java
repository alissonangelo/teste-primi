package com.example.smartGamesAPI.controller;

import com.example.smartGamesAPI.model.Loja;
import com.example.smartGamesAPI.repository.LojaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/loja")
public class LojaController {

    @Autowired
    LojaRepository lojaRepository;

    @GetMapping
    public List<Loja> getLoja(){
        return lojaRepository.findAll();
    }

    @GetMapping("/{codLoja}")
    public Loja getLojaById(@PathVariable Long codLoja){
        return lojaRepository.findLojaById(codLoja);
    }

}
