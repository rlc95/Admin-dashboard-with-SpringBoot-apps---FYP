package com.example.demo.dto;


import com.example.demo.entity.Admins;
import jakarta.persistence.OneToOne;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import static jakarta.persistence.CascadeType.ALL;

@NoArgsConstructor
@AllArgsConstructor
@Data
public class UserRoleDTO {

    private int uri;
    private String urn;


}
