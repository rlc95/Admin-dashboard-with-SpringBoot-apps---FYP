package com.example.demo.service;

import com.example.demo.dto.UserDTO;
import com.example.demo.entity.Add_users;
import com.example.demo.repo.UserRepo;
import jakarta.transaction.Transactional;
import org.modelmapper.ModelMapper;
import org.modelmapper.TypeToken;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
@Transactional
public class UserService {
    @Autowired
    private UserRepo userRepo;
    @Autowired
    private ModelMapper modelMapper;
    public UserDTO saveUser(UserDTO userDTO){
        userRepo.save(modelMapper.map(userDTO, Add_users.class));
        return userDTO;
    }

    public List<UserDTO> getUser(){
        List<Add_users>userList=userRepo.findAll();
        return modelMapper.map(userList, new TypeToken<List<UserDTO>>(){}.getType());
    }

    public UserDTO updateUsers(UserDTO userDTO){
        userRepo.save(modelMapper.map(userDTO,Add_users.class));
        return userDTO;
    }

    public UserDTO getUserById(int id){
        Add_users add_users = userRepo.getUserById(id);
        System.out.println(add_users);
        if(add_users != null){
            return modelMapper.map(add_users,UserDTO.class);
        }else {

            UserDTO user = new UserDTO();

            return user;
        }

    }






}