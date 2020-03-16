package com.example.smartGamesAPI.controller;

import com.example.smartGamesAPI.model.Plataforma;
import com.example.smartGamesAPI.repository.PlataformaRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/plataforma")
public class PlataformaController {

    @Autowired
    PlataformaRepository plataformaRepository;

    @GetMapping
    public List<Plataforma> getPlataforma(){
        return plataformaRepository.findAll();
    }
}
