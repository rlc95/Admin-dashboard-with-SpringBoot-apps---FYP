package com.example.demo.dto;


import com.example.demo.entity.User_roles;
import jakarta.persistence.FetchType;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@NoArgsConstructor
@AllArgsConstructor
@Data
public class AdminDTO {

    private int uri;
    private String uname;
    private String password;
    private int rti;
}
