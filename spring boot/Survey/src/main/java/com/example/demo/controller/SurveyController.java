package com.example.demo.controller;


import com.example.demo.dto.SurveyDTO;
import com.example.demo.service.SurveyService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping(value ="api/v/survey")
@CrossOrigin
public class SurveyController {

    @Autowired
    private SurveyService surveyService;

    @GetMapping("/getSurvey")
    public List<SurveyDTO> getSurvey(){
        return surveyService.getSurvey();
    }

    @PostMapping("/saveSurvey")
    public SurveyDTO saveUser(@RequestBody SurveyDTO surveyDTO){

        return surveyService.saveSurvey(surveyDTO);
    }

}
