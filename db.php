<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost:3307; dbname=library_management","root","");
    }catch(PDOException $e){
        echo "Error";

    }
}

}
