package com.example.smartGamesAPI.repository;

import com.example.smartGamesAPI.model.Estoque;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface EstoqueRepository extends JpaRepository<Estoque, Long> {

    @Query("select e.loja from Estoque e where e.jogo.codJogo=?1")
    List<Estoque> findEstoqueById(Long codJogo);

}
