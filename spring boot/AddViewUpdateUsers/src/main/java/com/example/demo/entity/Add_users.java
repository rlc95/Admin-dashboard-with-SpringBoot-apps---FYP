package com.example.demo.entity;


import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@NoArgsConstructor
@AllArgsConstructor
@Data
public class Add_users {
    @Id
    private int id;
    private String name;
    private String company_name;
    private String username;
    private String email;
    private String contact_num;
    private String adrss;
    private String occuptn;
}
