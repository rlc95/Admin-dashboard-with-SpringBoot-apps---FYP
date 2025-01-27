package com.example.demo.service;


import com.example.demo.dto.AdminDTO;
import com.example.demo.dto.UserRoleDTO;
import com.example.demo.entity.Admins;
import com.example.demo.entity.User_roles;
import com.example.demo.repo.AdminRepo;
import com.example.demo.repo.UserRoleRepo;
import jakarta.transaction.Transactional;
import org.modelmapper.ModelMapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
@Transactional
public class AdminService {

    @Autowired
    private AdminRepo adminRepo;

    @Autowired
    private UserRoleRepo userRoleRepo;

    @Autowired
    private ModelMapper modelMapper;

    public AdminDTO getAdminByUsername(String uname){
        Admins admins = adminRepo.getAdminByUsername(uname);
        System.out.println(admins);
        if(admins != null){
            return modelMapper.map(admins,AdminDTO.class);
        }else {

            AdminDTO admin = new AdminDTO();

            //List<String> EmptyList = Collections.<String>emptyList();
            return admin;
        }

    }

    public UserRoleDTO getUserRoleByID(int uri){
        User_roles user_roles = userRoleRepo.getUserRoleById(uri);
        System.out.println(user_roles);
        if(user_roles != null){
            return modelMapper.map(user_roles,UserRoleDTO.class);
        }else {

            UserRoleDTO user_role = new UserRoleDTO();

            //List<String> EmptyList = Collections.<String>emptyList();
            return user_role;
        }

    }

    public AdminDTO saveUserRole(AdminDTO adminDTO){
        adminRepo.save(modelMapper.map(adminDTO, Admins.class));
        return adminDTO;
    }


    public AdminDTO getUserRoleID(String uname,String password){
        Admins admins = adminRepo.getUserRoleID(uname,password);
        System.out.println(admins);
        if(admins != null){
            return modelMapper.map(admins,AdminDTO.class);
        }else {

            AdminDTO admin = new AdminDTO();

            //List<String> EmptyList = Collections.<String>emptyList();
            return admin;
        }

    }

    public AdminDTO updateUserRole(AdminDTO adminDTO){
        adminRepo.save(modelMapper.map(adminDTO,Admins.class));
        return adminDTO;
    }





}
