package com.example.smartGamesAPI.repository;

import com.example.smartGamesAPI.model.JogoPlataforma;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;

public interface JogoPlataformaRepository extends JpaRepository<JogoPlataforma, Long> {

    @Query("select distinct jp.plataforma from JogoPlataforma jp where jp.jogo.codJogo=?1")
    List<JogoPlataforma> findJogoPlataformaById(Long codJogo);

    @Query("select distinct  jp.plataforma from JogoPlataforma jp where jp.jogo.codJogo=?1")
    List<JogoPlataforma> findPlataformaById(Long codJogo);

}
