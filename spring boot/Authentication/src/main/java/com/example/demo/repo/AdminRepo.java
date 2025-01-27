package com.example.demo.repo;

import com.example.demo.entity.Admins;
import com.example.demo.entity.User_roles;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

public interface AdminRepo extends JpaRepository<Admins,Integer> {


    @Query(value = "SELECT * FROM Admins e WHERE e.uname = ?1",nativeQuery = true)

    Admins getAdminByUsername(String uname);

    @Query(value = "SELECT * FROM Admins e WHERE e.uname = ?1 AND e.password = ?2",nativeQuery = true)

    Admins getUserRoleID(String uname,String password);

}
