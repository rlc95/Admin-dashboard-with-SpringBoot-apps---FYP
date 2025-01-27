package com.example.demo.service;


import com.example.demo.dto.SurveyDTO;
import com.example.demo.entity.Surveys;
import com.example.demo.repo.SurveyRepo;
import jakarta.transaction.Transactional;
import org.modelmapper.ModelMapper;
import org.modelmapper.TypeToken;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@Transactional
public class SurveyService {

    @Autowired
    private SurveyRepo surveyRepo;

    @Autowired
    private ModelMapper modelMapper;

    public SurveyDTO saveSurvey(SurveyDTO surveyDTO){
        surveyRepo.save(modelMapper.map(surveyDTO, Surveys.class));
        return surveyDTO;
    }

    public List<SurveyDTO> getSurvey(){
        List<Surveys>surveysList=surveyRepo.findAll();
        return modelMapper.map(surveysList, new TypeToken<List<SurveyDTO>>(){}.getType());
    }

}
