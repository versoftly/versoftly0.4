<?php

class DbConect {
    
    public function __construct (array $data) {
        
        try {
            
            $conectarme = new PDO("mysql:host=".$data['servername'].
            ";dbname=".$data['database'], 
            $data['username'], 
            $data['password']);
            
        } catch(PDOException $e) {
            
            echo "error ".$e->getMessage();
            
        }
        
        if (!$conectarme) {
            
            die("Error de conexion con la basededatos.");
            
        } else {
            
            return $conectarme;
            
        }
        
    }
    
}