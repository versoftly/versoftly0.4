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

    public static function selfprotection () {
        echo htmlspecialchars($_SERVER['PHP_SELF']);
    }

    public static function getCurrentDateTime () {
        date_default_timezone_set('America/Denver');

        $info = getdate();
        $date = $info['mday'];
        $month = $info['mon'];
        $year = $info['year'];
        $hour = $info['hours'];
        $min = $info['minutes'];
        $sec = $info['seconds'];

        $current_date = "$date/$month/$year $hour:$min:$sec";

        return $current_date;
    }

    public static function valUser ($user) {
        return htmlspecialchars(strtolower($user));
    }
    
}