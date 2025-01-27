package com.example.demo.controller;


import com.example.demo.dto.CustomerDTO;
import com.example.demo.service.CustomerService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping(value ="api/v/customer")
@CrossOrigin
public class CustomerController {

    @Autowired
    private CustomerService customerService;

    @PostMapping("/saveCustomer")
    public CustomerDTO saveUser(@RequestBody CustomerDTO customerDTO){
        System.out.println("ssfsf");
        return customerService.saveCustomer(customerDTO);
    }

}
