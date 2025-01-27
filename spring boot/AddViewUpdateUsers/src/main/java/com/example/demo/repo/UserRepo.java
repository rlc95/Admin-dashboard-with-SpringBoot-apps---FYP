package com.example.demo.repo;

import com.example.demo.entity.Add_users;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

public interface UserRepo extends JpaRepository<Add_users,Integer> {

    @Query(value = "SELECT * FROM Add_users e WHERE e.id = ?1",nativeQuery = true)

    Add_users getUserById(int id);

}