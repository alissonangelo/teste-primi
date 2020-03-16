package com.example.smartGamesAPI.controller;

import com.example.smartGamesAPI.model.JogoPlataforma;
import com.example.smartGamesAPI.repository.JogoPlataformaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/jogoPlataforma")
public class JogoPlataformaController {

    @Autowired
    JogoPlataformaRepository jogoPlataformaRepository;

    @GetMapping
    public List<JogoPlataforma> getJogoPlataforma(){
        return jogoPlataformaRepository.findAll();
    }

    @GetMapping("/{codJogo}")
    public List<JogoPlataforma> getJogoPlataforma(@PathVariable Long codJogo){
        return jogoPlataformaRepository.findJogoPlataformaById(codJogo);
    }

    @GetMapping("/plataforma/{codJogo}")
    public List<JogoPlataforma> getPlataforma(@PathVariable Long codJogo){
        return jogoPlataformaRepository.findPlataformaById(codJogo);
    }

}
