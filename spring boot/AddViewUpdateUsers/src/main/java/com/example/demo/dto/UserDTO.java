package com.example.demo.dto;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@NoArgsConstructor
@AllArgsConstructor
@Data
public class UserDTO {
    private int id;
    private String name;
    private String username;
    private String company_name;
    private String email;
    private String contact_num;
    private String adrss;
    private String occuptn;

}
