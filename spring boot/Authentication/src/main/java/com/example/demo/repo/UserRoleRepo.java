package com.example.demo.repo;

import com.example.demo.entity.Admins;
import com.example.demo.entity.User_roles;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

public interface UserRoleRepo extends JpaRepository<User_roles,Integer> {

    @Query(value = "SELECT * FROM User_roles e WHERE e.uri = ?1",nativeQuery = true)

    User_roles getUserRoleById(int uri);

}
