package com.example.demo.repo;

import com.example.demo.entity.Surveys;
import org.springframework.data.jpa.repository.JpaRepository;

public interface SurveyRepo extends JpaRepository<Surveys,Integer> {


}
