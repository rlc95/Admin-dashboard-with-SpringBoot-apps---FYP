package com.example.demo.controller;


import com.example.demo.dto.AdminDTO;
import com.example.demo.dto.UserRoleDTO;
import com.example.demo.service.AdminService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping(value = "api/v/admin")
@CrossOrigin
public class adminController {
    @Autowired
    private AdminService adminService;

    @GetMapping("/getAdminByUsername/{uname}")
    public AdminDTO getAdminByUsername(@PathVariable String uname){
        System.out.println(uname);
        return adminService.getAdminByUsername(uname);
    }

    @GetMapping("/getUserRole/{uri}")
    public UserRoleDTO getAdminByUsername(@PathVariable int uri){
        System.out.println(uri);
        return adminService.getUserRoleByID(uri);
    }

    @PostMapping("/registerUserRole")
    public AdminDTO saveUserRole(@RequestBody AdminDTO adminDTO){
        System.out.println("ssfsf");
        return adminService.saveUserRole(adminDTO);
    }

    @GetMapping("/getUserRoleID/{uname}/{password}")
    public AdminDTO getUserRoleID(@PathVariable String uname,@PathVariable String password){
        System.out.println(uname);
        System.out.println(password);
        return adminService.getUserRoleID(uname,password);
    }


    @PutMapping("/updateUserRole")
    public AdminDTO updateUserole(@RequestBody AdminDTO adminDTO){
        return adminService.updateUserRole(adminDTO);
    }



}
