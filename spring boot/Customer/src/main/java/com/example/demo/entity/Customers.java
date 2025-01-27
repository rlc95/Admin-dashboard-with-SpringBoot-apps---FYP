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
public class Customers {

    @Id
    private Long uid;
    private String name;
    private String fullname;
    private String email;
    private int phone;
    private String nic;
    private String gender;
    private String address;
    private String password;
    private String dob;
    private String occupation;
    private String licencenum;
    private String issued_date;
    private String expiry_date;
    private boolean a1;
    private boolean a;
    private boolean b1;
    private boolean b;
    private boolean c1;
    private boolean c;
    private boolean ce;
    private boolean d1;
    private boolean d;
    private boolean de;
    private boolean g1;
    private boolean g;
    private boolean j;
}
