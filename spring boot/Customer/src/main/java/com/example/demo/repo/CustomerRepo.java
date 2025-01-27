package com.example.demo.repo;

import com.example.demo.entity.Customers;
import org.springframework.data.jpa.repository.JpaRepository;

public interface CustomerRepo extends JpaRepository<Customers,Integer> {



}
