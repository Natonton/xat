<?php
    function login($username, $password){
        try{
            global $conn;
            $query = $conn->prepare("SELECT * FROM user WHERE user_email = ? AND user_password = ?");
            $query->bindParam(1, $username);
            $query->bindParam(2, $password);
            $query->execute();
            $queryc=$query->rowCount();
            return $queryc;
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
?>