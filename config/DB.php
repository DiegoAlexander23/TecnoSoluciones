<?php
    class DB{
        public static function conectar(){
            /*$url = "pgsql:host=localhost;dbname=tecnosolucionesDB";
            $user="postgres";
            $password="123";*/
            $url="mysql: host=localhost; dbname=tecnosolucionesDB";
            $user="root";
            $password="";
            $cn=new PDO($url, $user, $password);
            return $cn;
        }
    }
?>