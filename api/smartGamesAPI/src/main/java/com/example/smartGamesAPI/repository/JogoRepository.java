package com.example.smartGamesAPI.repository;

import com.example.smartGamesAPI.model.Jogo;
import com.example.smartGamesAPI.model.JogoPlataforma;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface JogoRepository extends JpaRepository<Jogo, Long> {

    @Query("select distinct j from Jogo j where j.codJogo=?1")
    List<Jogo> findJogoById(Long codJogo);


}
