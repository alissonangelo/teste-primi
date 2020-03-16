package com.example.smartGamesAPI.repository;


import com.example.smartGamesAPI.model.Loja;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public interface LojaRepository extends JpaRepository<Loja, Long> {

    @Query("select l from Loja l where l.codLoja=?1")
    Loja findLojaById(Long codLoja);

}
