package com.example.demo.controller;

import com.example.demo.dto.UserDTO;
import com.example.demo.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping(value ="api/v/user")
@CrossOrigin
public class UserController {

    @Autowired
    private UserService userService;

    @GetMapping("/getAuthority")
    public List<UserDTO> getUser(){
       return userService.getUser();
    }

    @PostMapping("/saveAuthority")
    public UserDTO saveUser(@RequestBody UserDTO userDTO){
        System.out.println("ssfsf");
        return userService.saveUser(userDTO);
    }

    @PutMapping("/updatAuthority")
    public UserDTO updateUser(@RequestBody UserDTO userDTO){
        System.out.println("userDTO");
        return userService.updateUsers(userDTO);
    }

    @GetMapping("/getAuthority/{id}")
    public UserDTO getDeviceByDeviceName(@PathVariable int id){
        System.out.println(id);
        return userService.getUserById(id);
    }



}
