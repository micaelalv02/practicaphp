<?php

namespace Classes;

use PDOException;

class Contact{
    private $dbh;
    function __construct(){
        //$dbh=parent::__construct();
        $this->dbh=new Database();
    }

    public function createContact($item){      
        $query=$this->dbh->connect()->prepare("INSERT INTO contact (`name`, `surname`, `phone`, `message`) VALUES (:name,:surname,:phone,:message)");
        try{
            $query->execute([
                'name'=>$item['name'],
                'surname'=>$item['surname'],
                'phone'=>$item['phone'],
                'message'=>$item['message']
            ]);
            return true;
        }catch(\PDOException $e){
            return false;
        }
    }

    public function list(){
        $items=[];
        try{
            $query= $this->dbh->connect()->query("SELECT * FROM contact");

            while($row=$query->fetch()){
                array_push($items,$row);
            }
            return $items;
        }catch(\PDOException $e){
            return[];
        }
    }

    public function view($id){
        try{
            $query=$this->dbh->connect()->query("SELECT * FROM contact WHERE id='$id'");
            $row=$query->fetch();
            return $row;
        }catch (\PDOException $e){
            return[];
        }
    }

    public function getById($id){
        $item=new Contents();
        try{
            $query=$this->dbh->connect()->prepare("SELECT * FROM contact WHERE id=:id");
            $query->execute(['id'=>$id]);

            $row=$query->fetch();
            
            return $row;

        }catch(\PDOException $e){
            return null;
        }
    }

    public function update($item,$id){
        $query=$this->dbh->connect()->prepare("UPDATE contact SET name=:name, surname:surname,phone:phone,message:message WHERE id=:id");
        try{
            $query->execute([
                'id'=>$item['id'],
                'name'=>$item['name'],
                'surname'=>$item['surname'],
                'phone'=>$item['phone'],
                'message'=>$item['message'],
                'id'=>$id
            ]);
            return true;

        }catch(\PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query=$this->dbh->connect()->prepare("DELETE FROM contact WHERE id=:id");

        if($query->execute(['id'=>$id])){
            echo "Registro eliminado.";
        }else{
            echo "Error al eliminar registro.";
        }

    }

}
