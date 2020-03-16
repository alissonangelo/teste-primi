package com.example.smartGamesAPI.controller;

import com.example.smartGamesAPI.model.Jogo;
import com.example.smartGamesAPI.model.JogoPlataforma;
import com.example.smartGamesAPI.repository.JogoRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/jogo")
public class JogoController {

    @Autowired
    JogoRepository jogoRepository;

    @GetMapping
    public List<Jogo> getJogo(){
        return jogoRepository.findAll();
    }

    @GetMapping("/{codJogo}")
    public List<Jogo> getJogoPlataforma(@PathVariable Long codJogo){
        return jogoRepository.findJogoById(codJogo);
    }

}
